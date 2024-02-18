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
                            <th class="text-center">email</th>
                            <th class="text-center">number</th>
                            <th class="text-center">address</th>
                            <th class="text-center">permissions</th>
                        </tr>
                        @foreach ($list['item'] as $item )
                            <tr>
                                <td class="text-center">{{ $item->id }}</td>
                                <td class="text-center"><a style="color:#333333;font-weight: bold;" href="{{ route('route_Backend_'.$page.'_Detail',['id'=>$item->id]) }}" style="white-space:unset;text-align: justify;"> {{ $item->name }} <i class="fa fa-edit"></i></a></td>
                                <td class="text-center">{{ $item->email }}</td>
                                <td class="text-center">{{ $item->number }}</td>
                                <td class="text-center">{{ $item->address }}</td>
                                <td class="text-center">{{ $item->permissions }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </form>
        </div>
@endsection
