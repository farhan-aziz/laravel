@extends('backend.backend')

@section('content')

<div class="wrap-content container" id="container">

    <!-- start: PAGE TITLE -->
    <section id="page-title">
        <div class="row">
            <div class="col-sm-8">
                <h1 class="mainTitle">View: {!! $user->first_name.' '.$user->sur_name !!}</h1>
            </div>
        </div>
    </section>
    <!-- end: PAGE TITLE -->

    <!-- start: BASIC TABLE -->
    <div class="container-fluid container-fullw bg-white">
        <div class="row">
            <div class="col-md-12">

            @include('errors.list')
                {!! Form::model($user, [ 'method' => 'PATCH']) !!}
                    @include('Admin::users.form', ['submitButtonText' => 'Update Category'])
                {!! Form::close() !!}

            </div>
        </div>
    </div>
    <!-- end: BASIC TABLE -->

</div>

@endsection

@section('footer')

@endsection

@stop