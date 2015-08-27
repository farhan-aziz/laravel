@extends('...frontend.frontend')

@section('content')

<div class="user-form container">
    <h1>Login</h1>
    {{--<strong class="option">You have already account <a href="javascript:;"><span></span></a></strong>--}}
    <form method="post" action="{{ url('/auth/login') }}" class="login" style="display: block;">
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <input type="text" name="email" placeholder="Email" value="{{ old('email') }}" class="form-control">
            <span class="help-block">Please fill this field</span>
        </div>
        <div class="form-group">
            <input type="password" name="password" placeholder="password" class="form-control">
            <span class="help-block">Please fill this field</span>
        </div>
        <button type="submit" class="btn btn-success">LOGIN</button>
        <a href="{{ url('/password/email') }}" class="forgot">Forgot password?</a>
    </form>




</div>

@endsection

@section('footer')
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?libraries=places"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/address.js') }}"></script>
@endsection