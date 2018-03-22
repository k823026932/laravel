<?php
namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;
use DB;
//use \framework\Page;
class IndexController extends Controller
{
	function index()
	{
		//$arc= new AModel();
		
		//以后你要插入数据库或者查询，，如果你要调用table()  把完整的表名写上
		/*$rid = 'rid=0';
		$count = Db::table('article')->where("$rid")->count('id');
		var_dump($count);die;
		//$count = count($arr);
		
		//var_dump($count);
		$page = new Page(5,$count);
		$p = $page->page;
		$this->assign('p',$p);
		$result = $page->allPage();
		$this->assign('result',$result);
		//var_dump($page->page);
		$limit = $page->limit();
		$arr = $this->article->rArticle($rid,$limit);*/
		$arr = DB::table('article')->where('rid','=',0)->paginate(2);
		//$arr = array_map('get_object_vars', $arr);
		//var_dump($arr);
		
		//什么都用写，代表显示app/view/index(控制器)/index(方法名字).html
		return view('home.index', ['arr'=>$arr]);
	}
	function about()
	{
		$this->display();
	}
	
}
