@extends('...frontend.frontend')

@section('content')

<div class="user-form container">
    <h1>Sign Up</h1>
    <strong class="option">You have already account <a href="javascript:;"><span></span></a></strong>
    <form method="post" action="{{ url('/auth/login') }}" class="login">
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
            <input type="text" required="" name="email" placeholder="Email" value="{{ old('email') }}" class="form-control">
            <span class="help-block">Please fill this field</span>
        </div>
        <div class="form-group">
            <input type="password" required="" name="password" placeholder="password" class="form-control">
            <span class="help-block">Please fill this field</span>
        </div>
        <button type="submit" class="btn btn-success">LOGIN</button>
        <a href="{{ url('/password/email') }}" class="forgot">Forgot password?</a>
    </form>



    {!! Form::open([ 'url' => '/auth/register', 'class' => 'signup']) !!}
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
        <h2>Login Information</h2>
        <div class="form-group">
            {!! Form::email('email',null, ['class' => 'form-control', 'id'=>'email', 'placeholder'=>'yourname@domain.com','required']) !!}
            <span class="help-block">Please fill this field</span>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    {!! Form::password('password', ['class' => 'form-control','id'=>'password','placeholder'=>'Password','required']) !!}
                    <span class="help-block">Please fill this field</span>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    {!! Form::password('password_confirmation', ['class' => 'form-control','placeholder' => 'Repeat Password','id' => 'repeat-password','required']) !!}
                    <span class="help-block">Password do not Match</span>
                </div>
            </div>
        </div>
        <h2>Personal Information</h2>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    {!! Form::text('first_name',null, ['class' => 'form-control', 'id'=> 'first_name', 'placeholder' => 'First Name','required']) !!}
                    <span class="help-block">Please fill this field</span>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    {!! Form::text('sur_name',null, ['class' => 'form-control', 'id'=> 'sur_name', 'placeholder' => 'Sur Name','required']) !!}
                    <span class="help-block">Please fill this field</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <div class="label-holder">
                        <label>Date of Birth</label>
                    </div>
                    <div class="row dob">
                        <div class="col-xs-4">
                            <div class="custom-select" id="date">
                                <strong class="form-control">Date</strong>
                                <ul class="list-unstyled">
                                    <li><a href="javascript:;">01</a></li>
                                    <li><a href="javascript:;">02</a></li>
                                    <li><a href="javascript:;">03</a></li>
                                    <li><a href="javascript:;">04</a></li>
                                    <li><a href="javascript:;">05</a></li>
                                    <li><a href="javascript:;">06</a></li>
                                    <li><a href="javascript:;">07</a></li>
                                    <li><a href="javascript:;">08</a></li>
                                    <li><a href="javascript:;">09</a></li>
                                    <li><a href="javascript:;">10</a></li>
                                    <li><a href="javascript:;">11</a></li>
                                    <li><a href="javascript:;">12</a></li>
                                    <li><a href="javascript:;">13</a></li>
                                    <li><a href="javascript:;">14</a></li>
                                    <li><a href="javascript:;">15</a></li>
                                    <li><a href="javascript:;">16</a></li>
                                    <li><a href="javascript:;">17</a></li>
                                    <li><a href="javascript:;">18</a></li>
                                    <li><a href="javascript:;">19</a></li>
                                    <li><a href="javascript:;">20</a></li>
                                    <li><a href="javascript:;">21</a></li>
                                    <li><a href="javascript:;">22</a></li>
                                    <li><a href="javascript:;">23</a></li>
                                    <li><a href="javascript:;">24</a></li>
                                    <li><a href="javascript:;">25</a></li>
                                    <li><a href="javascript:;">26</a></li>
                                    <li><a href="javascript:;">27</a></li>
                                    <li><a href="javascript:;">28</a></li>
                                    <li><a href="javascript:;">29</a></li>
                                    <li><a href="javascript:;">30</a></li>
                                    <li><a href="javascript:;">31</a></li>
                                </ul>
                                <input type="hidden" name="date" class="hidden-field" value="">
                            </div>
                        </div>
                        <div class="col-xs-5">
                            <div class="custom-select" id="month">
                                <strong class="form-control">Month</strong>
                                <ul class="list-unstyled">
                                    <li><a href="javascript:;">01</a></li>
                                    <li><a href="javascript:;">02</a></li>
                                    <li><a href="javascript:;">03</a></li>
                                    <li><a href="javascript:;">04</a></li>
                                    <li><a href="javascript:;">05</a></li>
                                    <li><a href="javascript:;">06</a></li>
                                    <li><a href="javascript:;">07</a></li>
                                    <li><a href="javascript:;">08</a></li>
                                    <li><a href="javascript:;">09</a></li>
                                    <li><a href="javascript:;">10</a></li>
                                    <li><a href="javascript:;">11</a></li>
                                    <li><a href="javascript:;">12</a></li>
                                </ul>
                                <input type="hidden" name="month" class="hidden-field" value="">
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <input type="tel" required="" name="dob" placeholder="Year" maxlength="4" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <div class="label-holder"></div>
                    {!! Form::text('contact_number',null, ['class' => 'form-control', 'id'=>'contact-number', 'placeholder'=>'Contact number','required']) !!}
                    <span class="help-block">Please fill this field</span>
                </div>
            </div>
        </div>
        <h2>Address</h2>
        <div class="form-group">
            {!! Form::text('address',null, ['class' => 'form-control',  'id'=>'searchTextField', 'size'=>'50', 'placeholder'=>'Street address', 'autocomplete'=>'on','required']) !!}
            <span class="help-block">Please fill this field</span>
        </div>

        {!! Form::hidden('house',null, ['id'=>'route']) !!}
        {!! Form::hidden('street_number',null, ['id'=>'street_number']) !!}

        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    {!! Form::text('city',null, ['class' => 'form-control', 'id' => 'locality', 'placeholder' => 'City','required']) !!}
                    <span class="help-block">Please fill this field</span>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    {!! Form::select('county',App\Helpers\ApplicationHelper::ukCounties() ,null,['class' => 'form-control','id'=>'County', 'placeholder'=>'County','required']) !!}
                    <span class="help-block">Please fill this field</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    {!! Form::text('postal_code',null, ['class' => 'form-control', 'id' => 'postal_code', 'placeholder'=>'Postal Code', 'maxlength'=>'10','required']) !!}
                    <span class="help-block">Please fill this field</span>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    {!! Form::text('country',null, ['class' => 'form-control', 'id' => 'country', 'placeholder'=>'Country','required']) !!}
                    <span class="help-block">Please fill this field</span>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-success">Create Account</button>
    {!! Form::close() !!}
</div>

@endsection

@section('footer')
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?libraries=places"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/address.js') }}"></script>
@endsection