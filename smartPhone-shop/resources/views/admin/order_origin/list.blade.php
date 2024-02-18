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
                            <th class="text-center">id_user</th>
                            <th class="text-center">status</th>
                            <th class="text-center">total</th>  
                            <th class="text-center">created_at</th>
                            <th class="text-center">detail order</th>

                        </tr>
                        @foreach ($list['item'] as $item )
                            <tr>
                                <td class="text-center">{{ $item->id }}</td>
                                <td class="text-center">{{ $item->id_user }}</td>
                                <td class="text-center">
                                    <select name="status" id="" >
                                        <option value="processing" @if ($item->status == 'processing'){{ 'selected' }}@endif >Processing</option>
                                        <option value="confirmed" @if ($item->status == 'confirmed'){{ 'selected' }} @endif >Confirmed</option>
                                        <option value="shipped" @if ($item->status == 'shipped'){{ 'selected' }} @endif >Shipped</option>
                                        <option value="completed" @if ($item->status == 'completed'){{ 'selected' }} @endif >Completed</option>
                                        <option value="cancelled" @if ($item->status == 'cancelled'){{ 'selected' }} @endif>Cancelled</option>
                                        <option value="paided" @if ($item->status == 'paided'){{ 'selected' }} @endif>Paided</option>
                                    </select>
                                </td>
                                <td class="text-center">{{ $item->total }}</td>
                                <td class="text-center">{{ $item->created_at }}</td>
                                <td class="text-center"><a style="color:#333333;font-weight: bold;" href="{{ route('route_Backend_Order_Origin_Order_At_Time',['id'=>$item->id]) }}" style="white-space:unset;text-align: justify;"> Detail <i class="fa fa-edit"></i></a></td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </form>
        </div> 
@endsection
