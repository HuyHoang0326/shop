<?php

namespace App\Models;

use Illuminate\Contracts\Database\Query\Builder;
use Illuminate\Database\Eloquent\Builder as EloquentBuilder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\Type\ObjectType;

class Order_origin extends Model
{
    use HasFactory;

    protected $table = 'order_origin';

    protected $fillable = [
        'id',
        'id_user',
        'status',
        'total',
        'created_at',	
        'updated_at'
    ];

    public function loadList($param=[]){
        $query = DB::table($this->table)->select($this->fillable)->get();
        return $query;
    }

    public function saveNew ($param){
        unset($param['cols']['_token']);
        if(!isset($param['cols'])){
            $data = $param;
            $res = DB::table($this->table)->insertOrIgnore($data);
        }
        else{
            $data = array_merge($param["cols"]);
            $res = DB::table($this->table)->insertGetId($data);
        }
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

    public function Order_at_time($id){
        $res = DB::table('order')->where('id_order_origin',$id)->get();
        return $res;
    }
    
    public function order_at_user($id){
        $res = DB::table('order_origin')->where('id_user',$id)->get();
        return $res;
    }

    public function syncOrder($idOrderOrigin){
        $res = DB::table('order_origin')
        ->where('id', $idOrderOrigin)
        ->update([
            'status' => DB::raw("
                CASE 
                    WHEN EXISTS (
                        SELECT 1
                        FROM `order`
                        WHERE order.id_order_origin = order_origin.id
                        AND order.status = 'processing'
                    ) THEN 'processing'

                    WHEN EXISTS (
                        SELECT 1
                        FROM `order`
                        WHERE order.id_order_origin = order_origin.id
                        AND order.status = 'confirmed'
                        AND NOT EXISTS (
                            SELECT 1
                            FROM `order`
                            WHERE order.id_order_origin = order_origin.id
                            AND order.status = 'processing'
                        )
                    ) THEN 'confirmed'

                    WHEN EXISTS (
                        SELECT 1
                        FROM `order`
                        WHERE order.id_order_origin = order_origin.id
                        AND order.status = 'shipped'
                        AND NOT EXISTS (
                            SELECT 1
                            FROM `order`
                            WHERE order.id_order_origin = order_origin.id
                            AND (order.status = 'processing' OR order.status = 'confirmed')
                        )
                    ) THEN 'shipped'

                    WHEN EXISTS (
                        SELECT 1
                        FROM `order`
                        WHERE order.id_order_origin = order_origin.id
                        AND order.status = 'completed'
                        AND NOT EXISTS (
                            SELECT 1
                            FROM `order`
                            WHERE order.id_order_origin = order_origin.id
                            AND (order.status = 'processing' OR order.status = 'confirmed' OR order.status = 'shipped')
                        )
                    ) THEN 'completed'

                    WHEN EXISTS (
                        SELECT 1
                        FROM `order`
                        WHERE order.id_order_origin = order_origin.id
                        AND order.status = 'paided'
                        AND NOT EXISTS (
                            SELECT 1
                            FROM `order`
                            WHERE order.id_order_origin = order_origin.id
                            AND (order.status = 'processing' OR order.status = 'confirmed' OR order.status = 'shipped' OR order.status = 'completed')
                        )
                    ) THEN 'paided'

                    WHEN EXISTS (
                        SELECT 1
                        FROM `order`
                        WHERE order.id_order_origin = order_origin.id
                        AND order.status = 'cancelled'
                        AND NOT EXISTS (
                            SELECT 1
                            FROM `order`
                            WHERE order.id_order_origin = order_origin.id
                            AND (order.status = 'processing' OR order.status = 'confirmed' OR order.status = 'shipped' OR order.status = 'completed' OR order.status = 'paided' )
                        )
                    ) THEN 'cancelled'
                    ELSE 'error'
                END")
        ]);
        return $res;
    }
}

