<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Http\Requests\TestRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $v;
    public $page = 'Product';
    public $fillable = [
        'id',
        'name',
        'category',
        'price',
        'quantity',
        'sale',
        'description',
        'image'
    ];
    function __construct(){
        $this->v = [];
        $this->v['page'] = $this->page;
        $this->v['fillable'] = $this->fillable;
    }

    function index (Request $request) {
        $test = new Product();
        $this->v['param'] = $request->all();
        $this->v['list']['item'] = $test->loadListProduct($this->v['param']);
        $this->v['list']['fields'] = $this->fillable;
        return view('admin.product.list',$this->v);
    }

    function detail ($id){
        $this->v['_title'] = 'detail';
        $objProduct = new Product;
        $this->v['objItem'] = $objProduct->loadOne($id);
        $objCategory = new Category;
        $this->v['category'] = $objCategory->loadList();
        return view('admin.product.detail',$this->v);
    }

    public function update($id,ProductRequest $request){
        $params = [];
        $params['cols'] = $request->post();
        $params['cols']['id']=$id;
        unset($params['cols']['_token']);
        if(!empty($request->file('image'))){
           $file_name = $request->file('image')->getClientOriginalName();
           $params['cols']['image'] = $file_name;
           $this->uploadFile($request->file('image'),$file_name);
        }
        $modelNguoiDung = new Product;
        $modelNguoiDung->saveUpdate($params);
        return redirect()->route('route_BackEnd_productList');
    }

    public function add(ProductRequest $request){
        $method_route = 'route_BackEnd_productList';
        $this->v['_title'] = "create product";
        $objCategory = new Category;
        $this->v['category'] = $objCategory->loadList();
        if($request->isMethod('post')){
           $param = [];
           $param['cols'] = $request->post();
           if(!empty($request->file('image'))){
                $file_name = $request->file('image')->getClientOriginalName();
                $param['cols']['image'] = $file_name;
                $this->uploadFile($request->file('image'),$file_name);
            }
           $modleTest = new Product;
           $res = $modleTest->saveNew($param);
           if($res == null){
                return redirect()->route($method_route);
           }
           elseif ($res > 0){
                return redirect()->route('route_BackEnd_productList');
           }
           else{
           }
        }
        return view('admin.product.add',$this->v);
    }

    public function uploadFile($file,$file_name){
        $path = $file->storeAs(
            'public/product',time()."-".$file_name);
        return $path;
    }
}
