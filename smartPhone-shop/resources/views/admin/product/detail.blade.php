@extends('templates.layout')
@section('content')
<form class="form-horizontal " action="{{ route('route_Backend_'.$page.'_Update',['id'=>request()->route('id')]) }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="box-body">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="ten_de_thi" class="col-md-3 col-sm-4 control-label">name<span class="text-danger">(*)</span></label>
                        <div class="col-md-9 col-sm-8">
                           <input type="text" class="form-control" name="name" id="name" value=" {{ $objItem->name }} ">
                        </div>
                </div>
                <div class="form-group">
                    <label for="ten_de_thi" class="col-md-3 col-sm-4 control-label">category<span class="text-danger">(*)</span></label>
                        <div class="col-md-9 col-sm-8">
                            <select name="category" id="category">
                                @foreach ($category as $categoryItem){
                                    <option 
                                    value="{{ $categoryItem->id }}" 
                                    @if($categoryItem->id == $objItem->category)
                                        {{ 'selected' }}
                                    @endif
                                    >
                                        {{ $categoryItem->name }}
                                    </option>
                                }
                                @endforeach
                            </select>
                        </div>
                </div>
                <div class="form-group">
                    <label for="ten_de_thi" class="col-md-3 col-sm-4 control-label">price<span class="text-danger">(*)</span></label>
                        <div class="col-md-9 col-sm-8">
                           <input type="text" class="form-control" name="price" id="price" value="{{ $objItem->price }}">
                        </div>
                </div>
                <div class="form-group">
                    <label for="ten_de_thi" class="col-md-3 col-sm-4 control-label">quantity<span class="text-danger">(*)</span></label>
                        <div class="col-md-9 col-sm-8">
                           <input type="text" class="form-control" name="quantity" id="quantity" value=" {{ $objItem->quantity }} ">
                        </div>
                </div>
                <div class="form-group">
                    <label for="ten_de_thi" class="col-md-3 col-sm-4 control-label">sale<span class="text-danger">(*)</span></label>
                        <div class="col-md-9 col-sm-8">
                           <input type="text" class="form-control" name="sale" id="sale" value="{{ $objItem->sale }}">
                        </div>
                </div>
                <div class="form-group">
                    <label for="ten_de_thi" class="col-md-3 col-sm-4 control-label">description<span class="text-danger">(*)</span></label>
                        <div class="col-md-9 col-sm-8">
                           <input type="text" class="form-control" name="description" id="description" value="{{ $objItem->description }}">
                        </div>
                </div>
                <div class="form-group">
                    <label for="ten_de_thi" class="col-md-3 col-sm-4 control-label">image<span class="text-danger">(*)</span></label>
                        <div class="col-md-9 col-sm-8">
                            <input type="file" name="image" id="image" value='C:\\fakepath\\{{ $objItem->image }}'>
                            <br>
                            <img src="{{ asset('storage/product/'.$objItem->image) }}" alt="" width="120px">
                        </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.box-body -->
    <div class="text-center">
        <button type="submit" class="btn btn-primary"> Save</button>
        <a href="{{ route('route_BackEnd_productList') }}" class="btn btn-default">Cancel</a>
    </div>
    <!-- /.box-footer -->
</form>
@endsection