@extends('frontend.frontend')

@section('content')

<div class="profile container active">

    <h1>Profile</h1>
    {!! Form::model($user, [ 'method' => 'POST', 'url' => 'user/update']) !!}
        <a href="javascript:;" class="btn btn-primary edit"><span class="glyphicon glyphicon-pencil"></span> Edit</a>
        @include ('flash::message')
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
        <div class="row">
            <div class="col-sm-3">
                <label for="email">Email</label>
            </div>
            <div class="col-sm-9">
                <div class="form-group">
                   <span class="form-control">{{ $user->email }}</span>
                </div>
            </div>
        </div>
        <a href="{{ url('/user/change/password/') }}" class="change-password">Change Password</a>
        <h2>Personal Information</h2>
        <div class="row">
            <div class="col-sm-3">
                <label for="fname">First Name</label>
            </div>
            <div class="col-sm-9">
                <div class="form-group">
                    {!! Form::text('first_name',null, ['class' => 'form-control', 'id'=> 'first_name', 'placeholder' => 'First Name','required']) !!}
                    <span class="help-block">Please fill this field</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <label for="lname">Sur Name</label>
            </div>
            <div class="col-sm-9">
                <div class="form-group">
                    {!! Form::text('sur_name',null, ['class' => 'form-control', 'id'=> 'sur_name', 'placeholder' => 'Sur Name','required']) !!}
                    <span class="help-block">Please fill this field</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <label>Date of Birth</label>
            </div>
            <div class="col-sm-6">
                <div class="row dob">
                    <div class="col-xs-4">
                        <div class="custom-select selected" id="date">
                            <strong class="form-control">
                                {{ date("d", strtotime($user->dob)) }}
                            </strong>
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
                            <input name="date" type="hidden" class="hidden-field" value="10">
                        </div>
                    </div>
                    <div class="col-xs-5">
                        <div class="custom-select selected" id="month">
                            <strong class="form-control">{{ date("m", strtotime($user->dob)) }}</strong>
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
                            <input name="month" type="hidden" class="hidden-field" value="">
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <input name="dob" required="" type="tel" value="{{ date("Y", strtotime($user->dob)) }}" maxlength="4" class="form-control">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <label for="contact-number">Contact number</label>
            </div>
            <div class="col-sm-9">
                <div class="form-group">
                    {!! Form::text('contact_number',null, ['class' => 'form-control', 'id'=>'contact-number', 'placeholder'=>'Contact number']) !!}
                    <span class="help-block">Please fill this field</span>
                </div>
            </div>
        </div>
        <h2>Address</h2>
        <div class="row">
            <div class="col-sm-3">
                <label for="address">Street address</label>
            </div>
            <div class="col-sm-9">
                <div class="form-group">
                    {!! Form::text('address',null, ['class' => 'form-control',  'id'=>'searchTextField', 'size'=>'50', 'placeholder'=>'Street address', 'autocomplete'=>'on','required']) !!}
                    <span class="help-block">Please fill this field</span>
                </div>
            </div>
        </div>
        {!! Form::hidden('house',null, ['id'=>'route']) !!}
        {!! Form::hidden('street_number',null, ['id'=>'street_number']) !!}
        <div class="row">
            <div class="col-sm-3">
                <label for="city">City</label>
            </div>
            <div class="col-sm-9">
                <div class="form-group">
                    {!! Form::text('city',null, ['class' => 'form-control', 'id' => 'locality', 'placeholder' => 'City','required']) !!}
                    <span class="help-block">Please fill this field</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <label for="county">County</label>
            </div>
            <div class="col-sm-9">
                <div class="form-group county">
                    {!! Form::select('county',App\Helpers\ApplicationHelper::ukCounties() ,null,['class' => 'form-control','id'=>'County', 'placeholder'=>'County','required']) !!}
                    <span class="help-block">Please fill this field</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <label for="zip-code">Postal Code</label>
            </div>
            <div class="col-sm-9">
                <div class="form-group">
                    {!! Form::text('postal_code',null, ['class' => 'form-control', 'id' => 'postal_code', 'placeholder'=>'Postal Code', 'maxlength'=>'10','required']) !!}
                    <span class="help-block">Please fill this field</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <label for="Country">Country</label>
            </div>
            <div class="col-sm-9">
                <div class="form-group">
                    {!! Form::text('country',null, ['class' => 'form-control', 'id' => 'country', 'placeholder'=>'Country','required']) !!}
                    <span class="help-block">Please fill this field</span>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-success save">Update Profile</button>
    {!! Form::close() !!}
</div>


@endsection

@section('footer')
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?libraries=places"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/address.js') }}"></script>
@endsection