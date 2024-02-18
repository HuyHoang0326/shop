<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Order extends Model
{
    use HasFactory;
    protected $table = 'order';

    protected $fillable = [
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

    public function loadList($param=[]){
        $query = DB::table($this->table)->select($this->fillable)->get();
        return $query;
    }

    public function saveNew ($param){
        unset($param['cols']['_token']); 
        $data = array_merge($param["cols"]);
        $res = DB::table($this->table)->insertGetId($data);
        return $res;
    }

    public function loadOne ($id){
        $query = DB::table($this->table)->where('id',$id);
        $obj = $query->first();
        return $obj;
    }
    
    public function saveUpdate($params){
        $dataUpdate = [];
        foreach($params['cols'] as $colName =>$val){
            if($colName == 'id') continue;
            $dataUpdate[$colName] = (strlen($val) == 0)? null:$val;
        }
        $res = DB::table($this->table)->where('id',$params['cols']['id'])->update($dataUpdate);
        return $res;
    }

    public function updateStatus($id,$status){
        $order = Order::findOrFail($id);
        $order->status = $status;
        $res =$order->save();
        return $res; 
    }
}
