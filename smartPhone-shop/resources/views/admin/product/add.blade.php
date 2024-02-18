@extends('templates.layout')
@section('content')
<form class="form-horizontal " action="" method="post" enctype="multipart/form-data">
    @csrf
    <div class="box-body">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="ten_de_thi" class="col-md-3 col-sm-4 control-label">name<span class="text-danger">(*)</span></label>
                        <div class="col-md-9 col-sm-8">
                           <input type="text" class="form-control" name="name" id="name">
                        </div>
                </div>
                <div class="form-group">
                    <label for="ten_de_thi" class="col-md-3 col-sm-4 control-label">category<span class="text-danger">(*)</span></label>
                        <div class="col-md-9 col-sm-8">
                            <select name="category" id="category" style="width: 100%">
                                @foreach ($category as $categoryItem){<option value={{ $categoryItem->id }} style="width: 100%">{{ $categoryItem->name }}</option>}@endforeach
                            </select>
                        </div>
                </div>
                <div class="form-group">
                    <label for="ten_de_thi" class="col-md-3 col-sm-4 control-label">price<span class="text-danger">(*)</span></label>
                        <div class="col-md-9 col-sm-8">
                           <input type="text" class="form-control" name="price" id="price" value="">
                        </div>
                </div>
                <div class="form-group">
                    <label for="ten_de_thi" class="col-md-3 col-sm-4 control-label">quantity<span class="text-danger">(*)</span></label>
                        <div class="col-md-9 col-sm-8">
                           <input type="text" class="form-control" name="quantity" id="quantity" value="">
                        </div>
                </div>
                <div class="form-group">
                    <label for="ten_de_thi" class="col-md-3 col-sm-4 control-label">sale<span class="text-danger">(*)</span></label>
                        <div class="col-md-9 col-sm-8">
                           <input type="text" class="form-control" name="sale" id="sale" value="">
                        </div>
                </div>
                <div class="form-group">
                    <label for="ten_de_thi" class="col-md-3 col-sm-4 control-label">description<span class="text-danger">(*)</span></label>
                        <div class="col-md-9 col-sm-8">
                           <input type="text" class="form-control" name="description" id="description" value="">
                        </div>
                </div>
                <div class="form-group">
                    <label for="ten_de_thi" class="col-md-3 col-sm-4 control-label">image<span class="text-danger">(*)</span></label>
                        <div class="col-md-9 col-sm-8">
                            <input type="file" name="image" id="image">
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