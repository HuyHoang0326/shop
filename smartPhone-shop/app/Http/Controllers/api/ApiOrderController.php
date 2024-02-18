<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Order_origin;
use Illuminate\Http\Request;

class ApiOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function syncDataOder ($id){
        $IdOrderOrigin = $id;
        $model = new Order_origin();
        $response =  $model->syncOrder($IdOrderOrigin);
        if($response){
            return response()->json([
                'status' => 200,
                'message' => 'success',
                'event' => 'sync data order',
                'data' => $response
            ]);
        }
        else{
            return response()->json([
                'status' => 201,
                'message' => 'error',
                'event' => 'sync data order',
                'data' => $response
            ]);
        }
    }

    public function patchStatus($id,$status){
        $model = new Order();
        $response = $model->updateStatus($id,$status);
        if($response){
            return response()->json([
                'status' => 200,
                'message' => 'success',
                'event' => 'update order',
                'data' => $response
            ]);
        }
        else{
            return response()->json([
                'status' => 201,
                'message' => 'error',
                'event' => 'update order',
                'data' => $response
            ]);
        }
    }
}
