<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Requests;
use Storage;
use Gregwar\Captcha\CaptchaBuilder;
use Session; 
class UserController extends Controller
{
	public function admin (Request $request)
	{
		$yonghuleixing = $request->session()->get('yonghuleixing');
		if (empty($yonghuleixing)) {
			return redirect()->back()->with('message', '请输登录');
		} else if ($yonghuleixing != 1) {
			return redirect()->back()->with('message', '您不管理员');
		}
		return view('admin.admin');
	}
	public function alogin()
	{
		return view('admin.alogin');
	}
	
	function doLogin(Request $request)
	{
		$name=$request->input('username');
		$pwd = Input::get('password', 'Sally');
		
		if (empty($name)) {
			return redirect()->back()->with('message', '请输入用户名');
		}
		if (empty($pwd)) {
			return redirect()->back()->with('message', '请输入密码');
		}
		$pp = DB::table('user')->where('username', '=', $name)->get();
		$pp = array_map('get_object_vars', $pp);
		if (!empty($pp[0]['password'])) {
			if ($pp[0]['password'] == $pwd) {
				$username = $pp[0]['username'];
				$uid = $pp[0]['uid'];
				$yonghuleixing = $pp[0]['yonghuleixing'];
				$touxiang = $pp[0]['touxiang'];
				if ($yonghuleixing != 1) {
					return redirect()->back()->with('message', '您不是管理员');
				}
				$request->session()->put('username', $username);
				$request->session()->put('yonghuleixing', $yonghuleixing);
				$request->session()->put('touxiang', $touxiang);
				$request->session()->put('uid', $uid);
				return redirect('/admin/admin')->with('message', '登录成功');
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
	
	
	public function logout(Request $request)
	{
		$request->session()->flush();
		return redirect('/')->with('message', '退出成功');
	}
	
	
	
	public function aindex()
	{
		$arr = DB::table('article')->where('rid','=',0)->paginate(2);
		return view('admin.aindex', ['arr'=>$arr]);
	}
	public function doShanchu(Request $request)
	{
		$id=$request->input('duoxuan');
		//var_dump($id);
		if (empty($id)) {
			return redirect()->back()->with('message');
		} else {
			foreach ($id as $key => $value) {
				DB::table('article')->where('id', '=', $value)->delete();
			}
			return redirect()->back()->with('message');
		}
		
	}
	public function uShanchu(Request $request)
	{
		$id=$request->input('duoxuan');
		//var_dump($id);
		if (empty($id)) {
			return redirect()->back()->with('message');
		} else {
			foreach ($id as $key => $value) {
				DB::table('user')->where('uid', '=', $value)->delete();
			}
			return redirect()->back()->with('message');
		}
		
	}
	public function hindex()
	{
		$arr = DB::table('article')->where('rid','<>',0)->paginate(2);
		return view('admin.hindex', ['arr'=>$arr]);
	}
	public function uindex()
	{
		$arr = DB::table('user')->paginate(2);
		return view('admin.uindex', ['arr'=>$arr]);
	}

	
	
}