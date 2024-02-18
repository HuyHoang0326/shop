<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Sale;
use App\Models\Sale_origin;
use Illuminate\Http\Request;

class ApiSaleController extends Controller
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

    public function syncDataSale($idSaleOrigin){
        $model = new Sale();
        $response = $model->syncSale($idSaleOrigin);
        if($response){
            return response()->json([
                'status' => 200,
                'message' => 'success',
                'event' => 'update sale',
                'data' => $response
            ]);
        }
        else{
            return response()->json([
                'status' => 201,
                'message' => 'error',
                'event' => 'update sale',
                'data' => $response
            ]);
        }
    }

    public function patchSaleOrigin($id,$status){
        $model = new Sale_origin();
        $response = $model->updateStatus($id,$status);
        if($response){
            return response()->json([
                'status' => 200,
                'message' => 'success',
                'event' => 'update sale',
                'data' => $response
            ]);
        }
        else{
            return response()->json([
                'status' => 201,
                'message' => 'error',
                'event' => 'update sale',
                'data' => $response
            ]);
        }
    }

    public function patchSale($id,$status){
        $model = new Sale();
        $response = $model->updateStatus($id,$status);
        if($response){
            return response()->json([
                'status' => 200,
                'message' => 'success',
                'event' => 'update sale',
                'data' => $response
            ]);
        }
        else{
            return response()->json([
                'status' => 201,
                'message' => 'error',
                'event' => 'update sale',
                'data' => $response
            ]);
        }
    }

    public function syncStatusSale($id){
        $sale_origin = new Sale_origin();
        $response = $sale_origin->syncChangesSale($id);
        if($response){
            return response()->json([
                'status' => 200,
                'message' => 'success',
                'event' => 'update sale',
                'data' => $response
            ]);
        }
        else{
            return response()->json([
                'status' => 201,
                'message' => 'error',
                'event' => 'update sale',
                'data' => $response
            ]);
        }
    }
}
