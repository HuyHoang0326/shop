<?php

namespace App\Http\Controllers\client;

use App\Events\OrderMail;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Order;
use App\Models\Order_origin;
use App\Models\Product;
use App\Models\Sale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use mysqli;

class CreateOrderController extends Controller
{
    private $v;
    
    function __construct(){
       $this->v = []; 
    }
    function index (Request $request ){
        $id_user = Auth::user()->id;
        $email_user = Auth::user()->email;
        $total = 0;
        $orderOrigin = Order_origin::create([
            'id_user' => $id_user,
            'status' => 'processing',
            'total' => $total
        ]);
        
        foreach ($request->input('id_product') as $index => $id_product) {
            $price = $request->input('price')[$index];
            $quantity = $request->input('quantity')[$index];
            $sale = $request->input('sale')[$index];
            
            $product = Product::find($id_product);

            $sum_quantity = $product->quantity - $quantity;
        
            if (!$product) {
                continue;
            }
        
            if ($sum_quantity >= 0) {
                $total += $price * $quantity;
                Order::create([
                    'id_order_origin' => $orderOrigin->id,
                    'id_product' => $id_product,
                    'id_user' => $id_user,
                    'quatity' => $quantity,
                    'sale' => $sale,
                    'price' => $price,
                    'status' => 'processing',
                ]);
        
                // Update số lượng sản phẩm
                $product->quantity = $sum_quantity;
                $product->save();
                //creat order 
                $orderOrigin->total = $total;
                $orderOrigin->save();
                event(new OrderMail($request->all(),$email_user));
                return redirect()->route('my-account-order');
            }
            else{
                Order_origin::find($orderOrigin->id)->delete();
                Session::flash('error','số lượng sản phẩm '.$product->name.' trong kho không đủ');
                return redirect()->route('route_Frontend_Cart');
            }
        }
    }
}
