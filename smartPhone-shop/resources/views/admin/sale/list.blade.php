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
                            <th class="text-center">id_product</th>
                            <th class="text-center">id_sale</th>
                            <th class="text-center">status</th>
                            <th class="text-center">price</th>
                        </tr>
                        @foreach ($list['item'] as $item )
                            <tr>
                                <td class="text-center ">{{ $item->id }}</td>
                                <td class="text-center">{{ $item->id_product }}</td>
                                <td class="text-center idSaleOrigin">{{ $item->id_sale }}</td>
                                <td class="text-center">
                                    <select name="status" id="" class="statusSale">
                                        <option value="on" @if ($item->status == 'on'){{ 'selected' }} @endif >on</option>
                                        <option value="off" @if ($item->status == 'off'){{ 'selected' }} @endif>off</option>
                                    </select>
                                </td>
                                <td class="text-center">{{ $item->price }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </form>
        </div> 
        <script src="{{ asset("js/admin/sale.js") }}"></script>
@endsection
