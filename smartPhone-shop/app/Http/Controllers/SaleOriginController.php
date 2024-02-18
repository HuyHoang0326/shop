<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaleOriginRequest;
use App\Models\Sale;
use App\Models\Sale_origin;
use Illuminate\Http\Request;

class SaleOriginController extends Controller
{
    private $v;
    protected $fillable = [
        'id',
        'price',	
        'description',
        'status',
        'created_at',
        'updated_at',
        'cancel_at'
    ];

    private $method_route = 'route_BackEnd_Sale_Origin_List';
    protected $page = 'Sale_Origin';
    function __construct(){
        $this->v = [];
        $this->v['page'] = $this->page;
        $this->v['fillable'] = $this->fillable;
    }

    public function index (Request $request){
        $this->v['_title'] = $this->page;
        $param = $request->all();
        $obj = new Sale_origin;
        $this->v['list']['fields'] = $this->fillable;
        $this->v['list']['item'] = $obj->loadList($param);
        return view('admin.sale_origin.list',$this->v);
    }

    public function detail ($id){
        $this->v['_title'] = 'detail';
        $objItem = new Sale_origin;
        $this->v['objItem'] = $objItem->loadOne($id);
        return view('admin.sale_origin.detail',$this->v);
    }

    public function update($id, SaleOriginRequest $request){
        $this->v['_title'] = 'update';
        $param['cols'] = $request->post();
        $param['cols']['id']= $id;
        unset($param['cols']['_token']);
        $objItem = new Sale_origin;
        $this->v['objItem'] = $objItem->saveUpdate($param);
        return redirect()->route($this->method_route);
    }

    public function add(SaleOriginRequest $request){
        $this->v['_title'] = "create Sale";
        if($request->isMethod('post')){
           $param = [];
           $param['cols'] = $request->post();
           $modleTest = new Sale_origin;
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
        return view('admin.sale_origin.add',$this->v);
    }

    public function getSaleWithSaleOrigin ($id){
        $objSale = new SaleController;
        $modelSale = new Sale();
        $this->v['page'] = $objSale->page;
        $list = $modelSale->loadListSaleOririnID($id);
        $this->v['list']['fields'] = $objSale->fillable;
        $this->v['list']['item'] = $list;
        return view('admin.sale.list',$this->v);
    }
}
