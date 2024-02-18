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
                    <label for="ten_de_thi" class="col-md-3 col-sm-4 control-label">email<span class="text-danger">(*)</span></label>
                        <div class="col-md-9 col-sm-8">
                           <input type="email" class="form-control" name="email" id="email" value="{{ $objItem->email }}">
                        </div>
                </div>
                <div class="form-group">
                    <label for="ten_de_thi" class="col-md-3 col-sm-4 control-label">number<span class="text-danger">(*)</span></label>
                        <div class="col-md-9 col-sm-8">
                           <input type="text" class="form-control" name="number" id="number" value="{{ $objItem->number }}">
                        </div>
                </div>
                <div class="form-group">
                    <label for="ten_de_thi" class="col-md-3 col-sm-4 control-label">address<span class="text-danger">(*)</span></label>
                        <div class="col-md-9 col-sm-8">
                           <input type="text" class="form-control" name="address" id="address" value="{{ $objItem->address }}">
                        </div>
                </div>
                <div class="form-group">
                    <label for="ten_de_thi" class="col-md-3 col-sm-4 control-label">permissions<span class="text-danger">(*)</span></label>
                        <div class="col-md-9 col-sm-8">
                           <input type="text" class="form-control" name="permissions" id="permissions" value=" {{ $objItem->permissions }} ">
                        </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.box-body -->
    <div class="text-center">
        <button type="submit" class="btn btn-primary"> Save</button>
        <a href="{{ route('route_Backend_userList') }}" class="btn btn-default">Cancel</a>
    </div>
    <!-- /.box-footer -->
</form>
@endsection