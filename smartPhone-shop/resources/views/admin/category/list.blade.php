@extends('templates.layout')
@section('content')
    <!-- Content Header (Page header) -->
        <div class="box-body table-responsive no-padding">
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="clearfix"></div>
                <div class="double-scroll">
                    <table class="table table-bordered">
                        <tr>
                            <th style="width: 50px" class="text-center">#ID</th>
                            <th class="text-center">name</th>
                            <th class="text-center">quantity</th>
                        </tr>
                        @foreach ($list['item'] as $item )
                            <tr>
                                <td class="text-center">{{ $item->id }}</td>
                                <td class="text-center"><a style="color:#333333;font-weight: bold;" href="{{ route('route_Backend_'.$page.'_Detail',['id'=>$item->id]) }}" style="white-space:unset;text-align: justify;"> {{ $item->name }} <i class="fa fa-edit"></i></a></td>
                                <td class="text-center"><a style="color:#333333;font-weight: bold;" href="{{ route('route_Backend_Category_Product_Category_List',['id'=>$item->id]) }}" style="white-space:unset;text-align: justify;"> {{ $item->quantity }} <i class="fa fa-edit"></i></a></td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </form>
        </div> 
@endsection
