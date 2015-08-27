@extends('backend.backend')

@section('content')
<div class="wrap-content container" id="container">

    <!-- start: PAGE TITLE -->
    <section id="page-title">
        <div class="row">
            <div class="col-sm-8">
                <h1 class="mainTitle">Create Category</h1>
            </div>
        </div>
    </section>
    <!-- end: PAGE TITLE -->

    <!-- start: BASIC TABLE -->
    <div class="container-fluid container-fullw bg-white">
        <div class="row">
            <div class="col-md-12">

            @include('errors.list')
                {!! Form::open([ 'url' => 'admin/categories']) !!}
                    @include('Admin::categories.form', ['submitButtonText' => 'Add Category'])
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