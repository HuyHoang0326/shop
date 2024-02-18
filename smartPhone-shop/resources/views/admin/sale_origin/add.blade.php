@extends('templates.layout')
@section('content')
<form class="form-horizontal " action="" method="post" enctype="multipart/form-data">
    @csrf
    <div class="box-body">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="ten_de_thi" class="col-md-3 col-sm-4 control-label">price<span class="text-danger">(*)</span></label>
                        <div class="col-md-9 col-sm-8">
                           <input type="text" class="form-control" name="price" id="price"  >
                        </div>
                </div>
                <div class="form-group">
                    <label for="ten_de_thi" class="col-md-3 col-sm-4 control-label">description<span class="text-danger">(*)</span></label>
                        <div class="col-md-9 col-sm-8">
                           <input type="email" class="form-control" name="description" id="description" >
                        </div>
                </div>
                <div class="form-group">
                    <label for="ten_de_thi" class="col-md-3 col-sm-4 control-label">cancel_at<span class="text-danger">(*)</span></label>
                        <div class="col-md-9 col-sm-8">
                           <input type="text" class="form-control" name="cancel_at" id="cancel_at" >
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