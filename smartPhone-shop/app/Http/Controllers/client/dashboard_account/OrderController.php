<?php

namespace App\Http\Controllers\client\dashboard_account;

use App\Http\Controllers\Controller;
use App\Models\Order_origin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    private $v;
    protected $page = 'Order';
    protected $fillable;
    function __construct(){
        $this->v = [];
        $this->v['page'] = $this->page;
        $this->v['fillable'] = $this->fillable;
    }
    function index(){
        $objUser = Auth::user();
        $objOder_origin = new Order_origin();
        $this->v['order_origin'] = $objOder_origin->order_at_user($objUser->id);
        return view('client.dashboard_account.order',$this->v);
    }
}
