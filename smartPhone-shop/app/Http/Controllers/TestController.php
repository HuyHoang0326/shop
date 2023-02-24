<?php

namespace App\Http\Controllers;

use App\Http\Requests\TestRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as FacadesRequest;
use PHPUnit\Util\Test;
use Symfony\Component\HttpFoundation\Session\Session;

class TestController extends Controller
{
    private $v;
    public function __construct()
    {
        $this->v = [];
    }
    
    public function index(Request $request){
        $test = new Product();
        $this->v['praram'] = $request->all();
        $this->v['list'] = $test->loadList($this->v['praram']);
        return view('test.test', $this->v);
    }
    public function userList(Request $request){
        $test = new User;
        $this->v['praram'] = $request->all();
        $this->v['list'] = $test->loadList($this->v['praram']);
        return view('test.user', $this->v);
    }

    public function categoryList(Request $request){
        $category = new Category;
        $this->v['praram'] = $request->all();
        $this->v['list'] = $category->loadList($this->v['praram']);
    }

    // creat request validate
    // php artisan make:request name
    public function add(TestRequest $request){
        $method_route = 'route_BackEnd_test_add';
        $this->v['_title'] = "create user";
        if($request->isMethod('post')){
           $param = [];
           $param['cols'] = $request->post();
           unset($param['cols']['_token']);
           $modleTest = new Product;
           $res = $modleTest->saveNew($param);
           if($res == null){
                return redirect()->route($method_route);
           }
           elseif ($res > 0){
            Session::flash('success','oke');
           }
           else{
            Session::flash('error','loi');
           }
        }
        return view('test.add',$this->v);
    }

    public function detail($id, Request $request){
        $this->v['_title'] = 'detail';
        $modelNguoiDung = new Product;
        $objItem = $modelNguoiDung->loadOne($id);
        $this->v['objItem'] =$objItem;
        return view ('test.detail',$this->v);
    }

    public function update($id,TestRequest $request){
        $detail_route = 'route_Backend_Test_Detail';
        
        $params = [];
        $params['cols'] = $request ->post();
        if(!is_null($params['cols']['password'])){
            $params['cols']['password'];
        }
        unset($params['cols']['_token']); 
        $params['cols']['id']=$id;
        $modelNguoiDung = new Product;
        $modelNguoiDung->saveUpdate($params);
    }

}
