<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Sale;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    private $v;
    protected $page = 'home';
    protected $fillable = [
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
    public function index (Request $request){
        return view('client/about',$this->v);
    }
}
