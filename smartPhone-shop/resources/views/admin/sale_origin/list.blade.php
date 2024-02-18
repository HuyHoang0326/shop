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
                            <th class="text-center">price</th>
                            <th class="text-center">description</th>
                            <th class="text-center">status</th>
                            <th class="text-center">created_at</th>
                            <th class="text-center">updated_at</th>
                            <th class="text-center">cancel_at</th>
                            <th class="text-center">detail sale</th>
                        </tr>
                        @foreach ($list['item'] as $item )
                            <tr>
                                <td class="text-center idSaleOrigin"><a style="color:#333333;font-weight: bold;" href="{{ route('route_Backend_'.$page.'_Detail',['id'=>$item->id]) }}" style="white-space:unset;text-align: justify;"> {{ $item->id }} <i class="fa fa-edit"></i></a></td>
                                <td class="text-center">{{ $item->price }}</td>
                                <td class="text-center">{{ $item->description }}</td>
                                <td class="text-center">
                                    <select name="status" class="statusSaleOrigin">
                                        <option value="on" @if ($item->status == 'on'){{ 'selected' }} @endif>on</option>
                                        <option value="off" @if ($item->status == 'off'){{ 'selected' }} @endif>off</option>
                                    </select>
                                </td>
                                <td class="text-center">{{ $item->created_at }}</td>
                                <td class="text-center">{{ $item->updated_at }}</td>
                                <td class="text-center">{{ $item->cancel_at }}</td>
                                <td class="text-center"><a style="color:#333333;font-weight: bold;" href={{ route('route_Backend_Sale_Origin_Whith_Sale',['id'=>$item->id]) }} style="white-space:unset;text-align: justify;"> Detail <i class="fa fa-edit"></i></a></td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </form>
        </div> 
        <script src="{{ asset("js/admin/sale.js") }}"></script>
@endsection
