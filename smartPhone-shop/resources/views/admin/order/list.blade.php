@extends('templates.layout')
@section('content')
    <!-- Content Header (Page header) -->
        <div class="box-body table-responsive no-padding">
            <a href="{{ route('route_BackEnd_Order_Origin_List') }}" class="btn btn-info btn-sm">
                Order List</a>
            <form action="" method="POST" enctype="multipart/form-data" >
                @csrf
                <div class="clearfix"></div>
                <div class="double-scroll">
                    <table class="table table-bordered">
                        <tr>
                            <th style="width: 50px" class="text-center">#ID</th>
                            <th class="text-center">id_order_origin</th>
                            <th class="text-center">id_product</th>
                            <th class="text-center">id_user</th>
                            <th class="text-center">quatity</th>
                            <th class="text-center">sale</th>
                            <th class="text-center">price</th>
                            <th class="text-center">status</th>
                            <th class="text-center">created_at</th>
                            <th class="text-center">updated_at</th> 

                        </tr>
                        @foreach ($list['item'] as $item )
                            <tr>
                                <td class="text-center idOrder" >{{ $item->id }}</td>
                                <td class="text-center idOrderOrigin">{{ $item->id_order_origin }}</td>
                                <td class="text-center">{{ $item->id_product }}</td>
                                <td class="text-center">{{ $item->id_user }}</td>
                                <td class="text-center">{{ $item->quatity }}</td>
                                <td class="text-center">{{ $item->sale }}</td>
                                <td class="text-center">{{ $item->price }}</td>
                                <td class="text-center">
                                    <select name="status" class = 'statusOrder' >
                                        <option value="processing" @if ($item->status == 'processing'){{ 'selected' }}@endif >Processing</option>
                                        <option value="confirmed" @if ($item->status == 'confirmed'){{ 'selected' }} @endif >Confirmed</option>
                                        <option value="shipped" @if ($item->status == 'shipped'){{ 'selected' }} @endif >Shipped</option>
                                        <option value="completed" @if ($item->status == 'completed'){{ 'selected' }} @endif >Completed</option>
                                        <option value="cancelled" @if ($item->status == 'cancelled'){{ 'selected' }} @endif>Cancelled</option>
                                        <option value="paided" @if ($item->status == 'paided'){{ 'selected' }} @endif>Paided</option>
                                    </select>
                                </td>
                                <td class="text-center">{{ $item->created_at }}</td>
                                <td class="text-center">{{ $item->updated_at }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </form>
        </div>
        <script src="{{ asset('js/admin/order.js') }}"></script>
@endsection
