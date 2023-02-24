<?php

namespace App\Models;

use App\Http\Requests\TestRequest;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class Product extends Model
{
    use HasFactory;

    protected $table = 'product';
    protected $fillable = [
        'id',
        'name',
        'category',
        'price',
        'quantity',
        'status',
        'description'
    ];

    public function loadList($param = []){
        $query = DB::table('product')->select($this->fillable)->get();
        return $query;
    }
    public function saveNew($param){
        $data = array_merge($param["cols"],[
            'password' => Hash::make($param['cols']['password'])
            
        ]);
        $res = DB::table($this->table)->insertGetId($data);
        return $res;
    }

    public function loadOne($id,$param = []){
        $query = DB::table($this->table)->where('id',$id);
        $obj = $query->first();
        return $obj;
    }

    public function saveUpdate($params){
        if (empty($params['cols']['id'])){
            Session::push('errer','không xác định bản gi');
        }
        $dataUpdate = [];
        foreach($params['cols'] as $colName =>$val){
            if($colName == 'id') continue;
            $dataUpdate[$colName] = (strlen($val) == 0)? null:$val;
        }
        $res = DB::table($this->table)->where('id',$params['cols']['id'])->update($dataUpdate);
        return $res;
    }
}
