<?php

namespace App\Http\Controllers\client\dashboard_account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AddressController extends Controller
{
    protected $user;
    private $v;
    protected $fillable =  [
        'id',
        'name',
        'email',
        'number',
        'address',
        'permissions'
    ];
    function __construct()
    {
        $this->v = [];
        $this->v['fillable'] = $this->fillable;
    }
    function index(){
        $user = Auth::user();
        $this->v['list']['email'] = $user->email;
        $this->v['list']['address'] = $user->address;
        $this->v['list']['number'] = $user->number; 
        $this->v['list']['name'] = $user->name; 
        return view('client.dashboard_account.address',$this->v);
    }
}
