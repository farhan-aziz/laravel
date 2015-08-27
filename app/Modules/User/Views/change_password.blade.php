@extends('frontend.frontend')

@section('content')
<div class="user-form container">
    <h1>Change Password</h1>
    {!! Form::open([ 'url' => '/user/update/password/']) !!}
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
             {!! Form::password('password', ['class' => 'form-control','id'=>'password','placeholder'=>'New Password','required']) !!}
            <span class="help-block">Please fill this field</span>
        </div>
        <div class="form-group">
           {!! Form::password('password_confirmation', ['class' => 'form-control','placeholder' => 'Repeat New Password','id' => 'repeat-password','required']) !!}
            <span class="help-block">Please fill this field</span>
        </div>
        <button type="submit" class="btn btn-success">Change Password</button>
    {!! Form::close() !!}
</div>
@endsection