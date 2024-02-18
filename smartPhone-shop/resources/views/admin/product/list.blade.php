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
                            <th class="text-center">category</th>
                            <th class="text-center">price</th>
                            <th class="text-center">quantity</th>
                            <th class="text-center">sale</th>
                            <th class="text-center">description</th>
                            <th class="text-center">image</th>
                        </tr>
                        @foreach ($list['item'] as $item )
                            <tr>
                                <td class="text-center">{{ $item->id }}</td>
                                <td class="text-center"><a style="color:#333333;font-weight: bold;" href="{{ route('route_Backend_'.$page.'_Detail',['id'=>$item->id]) }}" style="white-space:unset;text-align: justify;"> {{ $item->name }} <i class="fa fa-edit"></i></a></td>
                                <td class="text-center">{{ $item->category }}</td>
                                <td class="text-center">{{ $item->price }}</td>
                                <td class="text-center">{{ $item->quantity }}</td>
                                <td class="text-center">{{ $item->sale }}</td>
                                <td class="text-center">{{ $item->description }}</td>
                                <td class="text-center"><img src="{{ asset('storage/product/'.$item->image) }}" width="50px" alt=""></td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </form>
        </div>
@endsection
