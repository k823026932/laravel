<?php

namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Requests;
use Storage;
use Gregwar\Captcha\CaptchaBuilder;
use Session;
use App\Http\Controllers\Home\Phoneyz;
class UserController extends Controller
{
	public function index ()
	{
		$users = DB::table('user')->paginate(4);
		//var_dump($users);
		return view('home.index', ['users'=>$users]);
	}
	public function register()
	{
		return view('home.register');
	}
	public function login()
	{
		return view('home.login');
	}
	public function captcha($tmp)  
    {  
        //生成验证码图片的Builder对象，配置相应属性  
        $builder = new CaptchaBuilder;  
        //可以设置图片宽高及字体  
        $builder->build($width = 100, $height = 40, $font = null);  
        //获取验证码的内容  
        $phrase = $builder->getPhrase();  
        //把内容存入session  
        Session::flash('yzm', $phrase);
        //$request->session()->put('yzm', $phrase);  
        //生成图片  
        header("Cache-Control: no-cache, must-revalidate");  
        header('Content-Type: image/jpeg');  
        $builder->output();  
    } 
	function doLogin(Request $request)
	{
		$name=$request->input('username');
		$pwd = Input::get('password', 'Sally');
		$yzm = Input::get('yzm', 'Sally');
		$value = $request->session()->get('yzm', 'default');
		if (empty($name)) {
			return redirect()->back()->with('message', '请输入用户名');
		}
		if (empty($pwd)) {
			return redirect()->back()->with('message', '请输入密码');
		}
		if (empty($yzm)) {
			return redirect()->back()->with('message', '请输入验证码');
		}
		if ($yzm != $value) {
			return redirect()->back()->with('message', '验证码输入错误');
		}
		$pp = DB::table('user')->where('username', '=', $name)->get();
		$pp = array_map('get_object_vars', $pp);
		if (!empty($pp[0]['password'])) {
			if ($pp[0]['password'] == $pwd) {
				$username = $pp[0]['username'];
				$uid = $pp[0]['uid'];
				$yonghuleixing = $pp[0]['yonghuleixing'];
				$touxiang = $pp[0]['touxiang'];
				$request->session()->put('username', $username);
				$request->session()->put('yonghuleixing', $yonghuleixing);
				$request->session()->put('touxiang', $touxiang);
				$request->session()->put('uid', $uid);
				return redirect('/')->with('message', '登录成功');
			} else {
				return redirect()->back()->with('message', '用户名或密码错误');
			}
			
		} else {
			return redirect()->back()->with('message', '没有此用户');
		}
		//$data = $request->session()->all();
		//var_dump($data);
		//var_dump(Session::get('milkcaptcha'));
		
	}
	function doRegister(Request $request)
	{
		
		$name=$request->input('username');
		
		$pwd = Input::get('pwd', 'Sally');
		$repwd = Input::get('repwd', 'Sally');
		$phone = Input::get('phone', 'Sally');
		$yzm = Input::get('yzm', 'Sally');
		if (empty($name)) {
			return redirect()->back()->with('message', '请输入用户名');
		}
		if (empty($pwd)) {
			return redirect()->back()->with('message', '请输入密码');
		}
		if (empty($repwd)) {
			return redirect()->back()->with('message', '请输入确认密码');
		}
		if ($pwd != $repwd) {
			return redirect()->back()->with('message', '两次密码不一致');
		}
		if (empty($phone)) {
			return redirect()->back()->with('message', '请输入手机号码');
		}
		if (empty($yzm)) {
			return redirect()->back()->with('message', '请输入验证码');
		}
		$code = Session::get('code');
		if ($code != $yzm) {
			return redirect()->back()->with('message', '验证码错误');
		}
		
		
		$data['phone'] = $phone;
		$data['username'] = $name;
		$data['password'] = $pwd;
		//$user = new UserModel();
		if(DB::table('user')->insert($data)) {
			return redirect('/')->with('message', '注册成功');
		} else {
			return redirect()->back()->with('message', '注册失败');
		}
	}
	 //短信验证码
    function code(Request $request)
    {
        //$phone = '17777787662';
        //include 'Phoneyz1.php';
        $phone=$request->input('number');
        //$phone = trim($_POST['number']);
        
            $phoneyz = new Phoneyz($phone);
            $phoneyz->getYzm();
            $pcode = $phoneyz->randNum;
            Session::put('code',$pcode);
            echo json_encode(['state'=> 1]);
            
    }
	public function send()
	{
		return view('home.send');
	}
	public function doSend(Request $request)
	{
		$title=$request->input('title');
		$content = Input::get('content', 'Sally');
		$authorid = $request->session()->get('uid', 'default');
		$yonghuleixing = $request->session()->get('yonghuleixing', 'default');
		$file = Input::file('icon');
		if (empty($title)) {
			return redirect()->back()->with('message', '请输入博文名');
		}
		if (empty($file)) {
			return redirect()->back()->with('message', '请选择图片');
		}
		if (empty($content)) {
			return redirect()->back()->with('message', '请输入博文内容');
		}
		if (empty($authorid)) {
			return redirect('/home/login')->with('message', '请登录');
		}
		if (empty($yonghuleixing)) {
			return redirect('/home/login')->with('message', '请登录');
		} elseif ($yonghuleixing != 1) {
			return redirect('/')->with('message', '您无权发帖');
		}
        //var_dump($file);exit;
        if($file -> isValid()){
            //检验一下上传的文件是否有效.
            $clientName = $file -> getClientOriginalName();//初始名
            $tmpName = $file ->getFileName();//获取tmp文件下的文件名
            $realPath = $file -> getRealPath();//缓存在tmp文件夹下的文件的绝对路径
            $entension = $file -> getClientOriginalExtension();//上传后的文件后缀
            $newName = md5(date('ymdhis').$clientName).".".$entension;//文件上传的名
            $path = $file -> move('uploads',$newName);
            //print_r($newName);exit;
			$tu = '/' . 'uploads' . '/' . $newName;
			
            $data['title'] = $title;
			$data['tu'] = $tu;
			$data['content'] = $content;
			$data['authorid'] = $authorid;
			//$user = new UserModel();
			if(DB::table('article')->insert($data)) {
				return redirect()->back()->with('message', '发表成功');
			} else {
				return redirect()->back()->with('message', '发表失败');
			}
        }

	}
	public function logout(Request $request)
	{
		$request->session()->flush();
		return redirect('/')->with('message', '退出成功');
	}
	public function xiugaitouxiang()
	{
		return view('home.xiugaitouxiang');
	}
	public function doXgzl(Request $request)
	{
		$username=$request->input('username');
		$password = Input::get('password', 'Sally');
		$uid = $request->session()->get('uid', 'default');
		$phone = Input::get('phone', 'Sally');
		$file = Input::file('icon');
		//var_dump($file);
		if (!empty($username)) {
			$data['username'] = $username;
			$request->session()->put('username', $username);
		}
		if (!empty($password)) {
			$data['password'] = $password;
		}
		if (!empty($phone)) {
			$data['phone'] = $phone;
		}
		if (empty($uid)) {
			return redirect('/home/login')->with('message', '请登录');
		}
		if (!empty($file)) {
	        //var_dump($file);exit;
	        if($file -> isValid()){
	            //检验一下上传的文件是否有效.
	            $clientName = $file -> getClientOriginalName();//初始名
	            $tmpName = $file ->getFileName();//获取tmp文件下的文件名
	            $realPath = $file -> getRealPath();//缓存在tmp文件夹下的文件的绝对路径
	            $entension = $file -> getClientOriginalExtension();//上传后的文件后缀
	            $newName = md5(date('ymdhis').$clientName).".".$entension;//文件上传的名
	            $path = $file -> move('uploads',$newName);
	            //print_r($newName);exit;
				$tu = '/' . 'uploads' . '/' . $newName;
				$request->session()->put('touxiang', $tu);
				$data['touxiang'] = $tu;
				//var_dump($tu);
	        }

    	}

		if (empty($username) && empty($password) && empty($phone) && empty($tu)) {
			return redirect()->back()->with('message', '请输入内容');
		}
		//$user = new UserModel();
		if(DB::table('user')->where('uid',$uid)->update($data)) {
			return redirect()->back()->with('message', '修改成功');
		} else {
			return redirect()->back()->with('message', '修改失败');
		}

	}
	public function huitie(Request $request)
	{
		$id = $request->route('id');
		//var_dump($id);
		$result = DB::table('article')->where('id','=',$id)->get();
		$uname = DB::table('user')->get();
		//var_dump($result);
		$arr = DB::table('article')->where('rid','=',$id)->paginate(3);
		return view('home.huitie', ['result'=>$result,'arr'=>$arr,'uname'=>$uname,'id'=>$id]);
	}
	public function doHuitie(Request $request)
	{
		
		$content = Input::get('content', 'Sally');
		$authorid = $request->session()->get('uid', 'default');
		if (empty($content)) {
			return redirect()->back()->with('message', '请输入回复内容');
		}
		if (empty($authorid)) {
			return redirect('/home/login')->with('message', '请登录');
		}
		$rid = $request->route('id');
		$data['rid'] = $rid;
		$data['content'] = $content;
		$data['authorid'] = $authorid;
		//$user = new UserModel();
		if(DB::table('article')->insert($data)) {
			return redirect()->back()->with('message', '回复成功');
		} else {
			return redirect()->back()->with('message', '回复失败');
		}
        

	}
	public function about()
	{
		return view('home.about');
	}
	public function shousuo(Request $request)
	{
		$neirong=$request->input('neirong');
		
		$nei = $request->session()->get('nei');
		if (empty($nei)) {
			$request->session()->put('nei', $neirong);
		}
		$nei = $request->session()->get('nei');
		//var_dump($neirong);
		if (empty($nei)) {
			return redirect()->back()->with('message', '请输入搜索内容');
		} else {
			$arr = DB::table('article')
				->where('rid','=',0)
                ->where('content', 'like', "%$nei%")->paginate(2);
		}
		
        //var_dump($arr);
		return view('home.shousuo', ['arr'=>$arr,'arr'=>$arr,'neirong'=>$neirong]);
	}
	
}