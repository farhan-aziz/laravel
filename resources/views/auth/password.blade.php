@extends('frontend')

@section('content')
    <div class="user-form container">
        <h1>Forgot Your Password</h1>
        <form class="emailform" role="form" method="POST" action="{{ url('/password/email') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

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
            <div class="form-group">
                <input type="email" required="" class="form-control" name="email" placeholder="Enter Your Email" value="{{ old('email') }}">
                <span class="help-block">Please fill this field</span>
            </div>
            <button type="submit" class="btn btn-success">Send Password Reset Link</button>
        </form>
    </div>
@endsection
