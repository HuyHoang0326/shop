<?php

namespace App\Http\Controllers;

use App\Http\Requests\CartegoryRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\Sale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    private $v;
    protected $fillable = [
        'id',
        'name',
        'quantity'
    ];

    private $method_route = 'route_BackEnd_categoryList';
    protected $page = 'Category';
    function __construct(){
        $this->v = [];
        $this->v['page'] = $this->page;
        $this->v['fillable'] = $this->fillable;
    }

    public function index (Request $request){
        $this->v['_title'] = $this->page;
        $param = $request->all();
        $obj = new Category;
        $this->v['list']['fields'] = $this->fillable;
        $this->v['list']['item'] = $obj->loadList($param);
        $this->count_product($this->v['list']['item']);
        return view('admin.category.list',$this->v);
    }

    public function detail ($id){
        $this->v['_title'] = 'detail';
        $objItem = new Category;
        $this->v['objItem'] = $objItem->loadOne($id);
        return view('test.detail',$this->v);
    }

    public function update($id, CartegoryRequest $request){
        $this->v['_title'] = 'update';
        $param['cols'] = $request->post();
        $param['cols']['id']= $id;
        unset($param['cols']['_token']);
        $objItem = new Category;
        $this->v['objItem'] = $objItem->saveUpdate($param);
        return redirect()->route($this->method_route);
    }

    public function add(CartegoryRequest $request){
        $method_route = 'route_BackEnd_categoryList';
        $this->v['_title'] = "create category";
        if($request->isMethod('post')){
           $param = [];
           $param['cols'] = $request->post();
           $modleTest = new Category;
           $res = $modleTest->saveNew($param);
           if($res == null){
                return redirect()->route($method_route);
           }
           elseif ($res > 0){
                return redirect()->route( $method_route);
           }
           else{
           }
        }
        return view('test.add',$this->v);
    }

    public function count_product($categoryOld){
        $model = new Category;
        $categoryQuantity = $model->count_product();
        foreach($categoryQuantity as $categoryQuantityItem){
            foreach($categoryOld as $categoryOldItem){
                if($categoryQuantityItem->id == $categoryOldItem->id && $categoryQuantityItem->quantity != $categoryOldItem->quantity){
                    DB::table('category')->where('id',$categoryQuantityItem->id)->update((array)$categoryQuantityItem);
                }
            }
        }

    }

  public function category_at_time($id){
    	$productController = new ProductController;
        $objCategory =  new Category();
        $this->v['category'] = $objCategory->loadList();
        $this->v['page'] = 'Product';
        $list = $objCategory->category_at_time($id);
        $this->v['list']['fields'] = $productController->fillable;
        $this->v['list']['item'] = $list;
        return view('admin.product.list',$this->v);
    }
  public function category_at_time_client($id){
    	$productController = new ProductController;
        $objCategory =  new Category();
        $objsale = new Sale();
        $this->v['saleObj'] = $objsale;
        $this->v['sale'] = $objsale->loadList();
        $this->v['category'] = $objCategory->loadList();
        $this->v['page'] = 'Product';
        $list = $objCategory->category_at_time($id);
        $this->v['list']['fields'] = $productController->fillable;
        $this->v['list']['item'] = $list;
        return view('client/shop-fullwidth',$this->v);
    }
}
?>