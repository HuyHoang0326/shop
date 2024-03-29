<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderOriginRequest;
use App\Models\Order;
use App\Models\Order_origin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderOriginController extends Controller
{
    private $v;
    protected $fillable = [
        'id',
        'id_user',
        'status',
        'total',
        'created_at',	
        'updated_at'
    ];

    private $method_route = 'route_BackEnd_Order_Origin_List';
    protected $page = 'Order_Origin';
    function __construct(){
        $this->v = [];
        $this->v['page'] = $this->page;
        $this->v['fillable'] = $this->fillable;
    }

    public function index (Request $request){
        $this->v['_title'] = $this->page;
        $param = $request->all();
        $obj = new Order_origin;
        $this->v['list']['fields'] = $this->fillable;
        $this->v['list']['item'] = $obj->loadList($param);
        return view('admin.order_origin.list',$this->v);
    }

    public function detail ($id){
        $this->v['_title'] = 'detail';
        $objItem = new Order_origin;
        $this->v['objItem'] = $objItem->loadOne($id);
        return view('test.detail',$this->v);
    }

    public function update($id, OrderOriginRequest $request){
        $this->v['_title'] = 'update';
        $param['cols'] = $request->post();
        $param['cols']['id']= $id;
        $param['cols']['updated_at'] = date("Y-m-d");
        unset($param['cols']['_token']);
        $objItem = new Order_origin;
        $this->v['objItem'] = $objItem->saveUpdate($param);
        return redirect()->route($this->method_route);
    }

    public function add(OrderOriginRequest $request){
        $this->v['_title'] = "create order";
        if($request->isMethod('post')){
           $param = [];
           $param['cols'] = $request->post();
           $modleTest = new Order_origin;
           $res = $modleTest->saveNew($param);
           if($res == null){
                return redirect()->route($this->method_route);
           }
           elseif ($res > 0){
                return redirect()->route($this->method_route);
           }
           else{
           }
        }
        return view('test.add',$this->v);
    }

    public function order_at_time($id){
        $objOrder = new OrderController;
        $modelOrder = new Order_origin;
        $this->v['page'] = $objOrder->page;
        $list = $modelOrder->Order_at_time($id);
        $this->v['list']['fields'] = $objOrder->fillable;
        $this->v['list']['item'] = $list;
        return view('admin.order.list',$this->v);
    }

    public function isset_order(){
        $modelOrderOrigin = new Order_origin;
        $modelOrderOrigin->isset_order();
    }
       
}
