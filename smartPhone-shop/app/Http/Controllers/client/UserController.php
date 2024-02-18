<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    private $v;
    private $method_route ='my-account';
    protected $fillable =[ 
        'id',
        'name',
        'email',
        'number',
        'address',
        'permissions'
    ];
    function __construct(){
        $this->v = [];
        $this->v['fillable'] = $this->fillable;
    }

    public function add(UserRequest $request)
    {
        $this->v['_title'] = "create user";
            $param = [];
            $param['cols'] = $request->post();
            $param['cols']['remember_token'] = $param['cols']['_token'];
            $param['cols']['permissions'] = 'client';
            unset($param['cols']['_token']);
            $modleTest = new User();
            $res = $modleTest->saveNew($param);
            if($res == null){
                return redirect()->route('route_Fronend_User_Add');
           }
           elseif ($res > 0){
                Auth::attempt(['email' =>  $param['cols']['email'],'password' => $param['cols']['password']]);
                Session::flash('success', 'success sign up');
                return redirect()->route($this->method_route);
           }
           else{
           }
    }

}
