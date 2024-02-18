@extends('client.my-account')
@section('dashboard_content')

<div class="tab-pane fade active" id="account-details">
    <h3>Account details </h3>
    <div class="login">
        <div class="login_form_container">
            <div class="account_login_form">
                <form action="#">
                    <p>Already have an account? <a href="#">Log in instead!</a></p>
                    <label>Email</label>
                    <input type="text" name="email" value="{{ $list['email'] }}">
                    <label>Address</label>
                    <input type="text" name="address"  value="{{ $list['address'] }}">
                    <label>Number</label>
                    <input type="text" name="number"  value="{{ $list['number'] }}">
                    <label>Password</label>
                    <input type="password" name="user-password">
                    <br>
                    <div class="save_button primary_btn default_button">
                        <button type="submit">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection