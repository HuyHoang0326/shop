@extends('client.my-account')
@section('dashboard_content')

<div class="tab-pane active" id="address">
    <p>The following addresses will be used on the checkout page by default.</p>
    <h4 class="billing-address">Billing address</h4>
    <p><strong>{{ $list['name'] }}</strong></p>
    <address>
        <span><strong>City:</strong> {{ $list['address'] }}</span>,
        <br>
        <span><strong>number</strong>{{ $list['number'] }}</span>,
    </address>
</div>

@endsection