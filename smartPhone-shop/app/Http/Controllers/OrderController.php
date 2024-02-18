<?php

namespace App\Http\Controllers;

use App\Events\OrderConfirm;
use App\Events\OrderMail;
use App\Http\Requests\OrderRequest;
use App\Jobs\SaveUpdateAndConfirm;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    private $v;
    public $fillable = [
        'id',
        'id_order_origin',
        'id_product',	
        'id_user',	
        'quatity',
        'sale',	
        'price',
        'status',
        'created_at',
        'updated_at'
    ];
    private $method_route = 'route_BackEnd_OrderList';
    public $page = 'Order';
    function __construct(){
        $this->v = [];
        $this->v['page'] = $this->page;
        $this->v['fillable'] = $this->fillable;
    }

    public function index (Request $request){
        $this->v['_title'] = $this->page;
        $param = $request->all();
        $obj = new Order;
        $this->v['list']['fields'] = $this->fillable;
        $this->v['list']['item'] = $obj->loadList($param);
        return view('admin.order.list',$this->v);
    }

    public function detail ($id){
        $this->v['_title'] = 'detail';
        $objItem = new Order;
        $this->v['objItem'] = $objItem->loadOne($id);
        return view('test.detail',$this->v);
    } 

    public function update($id, OrderRequest $request){
        $this->v['_title'] = 'update';
        $param['cols'] = $request->post();
        $param['cols']['id']= $id;
        unset($param['cols']['_token']);
        return redirect()->route($this->method_route);
    }

    public function add(OrderRequest $request){
        $method_route = 'route_BackEnd_OrderList';
        $this->v['_title'] = "create order";
        if($request->isMethod('post')){
           $param = [];
           $param['cols'] = $request->post();
           $modleTest = new Order;
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
}
