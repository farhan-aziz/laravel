@extends('backend.backend')

@section('content')

<div class="wrap-content container" id="container">

    <!-- start: PAGE TITLE -->
    <section id="page-title">
        <div class="row">
            <div class="col-sm-8">
                <h1 class="mainTitle">Create Course</h1>
            </div>
        </div>
    </section>
    <!-- end: PAGE TITLE -->

    <!-- start: BASIC TABLE -->
    <div class="container-fluid container-fullw bg-white">
        <div class="row">
            <div class="col-md-12">

            @include('errors.list')
                {!! Form::open([ 'url' => 'admin/courses']) !!}
                    @include('Admin::courses.form', ['submitButtonText' => 'Add Course'])
                {!! Form::close() !!}

            </div>
        </div>
    </div>
    <!-- end: BASIC TABLE -->

</div>


@endsection

@section('footer')
    <script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
    {{--<script>tinymce.init({selector:'textarea'});</script>--}}

    <script>
    tinymce.init({
        selector: "textarea",
        theme: "modern",
        width: '100%',
        height: 300,
        plugins: [
             "advlist autolink link image lists charmap hr anchor pagebreak spellchecker",
             "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
             "save table contextmenu directionality template paste textcolor"
       ],
       content_css: "css/content.css",
       toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | fullpage | forecolor backcolor emoticons",
       style_formats: [
            {title: 'Bold text', inline: 'b'},
            {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
            {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
            {title: 'Example 1', inline: 'span', classes: 'example1'},
            {title: 'Example 2', inline: 'span', classes: 'example2'},
            {title: 'Table styles'},
            {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
        ]
     });
    </script>

@endsection

@stop