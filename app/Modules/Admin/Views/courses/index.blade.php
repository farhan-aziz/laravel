@extends('backend.backend')

@section('content')
<div class="wrap-content container" id="container">

    <!-- start: PAGE TITLE -->
    <section id="page-title">
        <div class="row">
            <div class="col-sm-8">
                <h1 class="mainTitle">Courses</h1>
            </div>

        </div>
    </section>
    <!-- end: PAGE TITLE -->

    <!-- start: BASIC TABLE -->
    <div class="container-fluid container-fullw bg-white">
        <div class="row">
            <div class="col-md-12">
                @include ('flash::message')
                <table class="table table-hover" id="sample-table-1">
                    <thead>
                        <tr>
                            <th class="center">#</th>
                            <th>Title</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($courses as $k => $course)
                        <tr>
                            <td class="center">{{$k + 1}}</td>
                            <td class="hidden-xs">{{$course->title}}</td>

                            <td class="center">
                            <div class="">
                                <a href="{{ url('admin/courses/'.$course->id.'/edit') }}" class="btn btn-transparent btn-xs" tooltip-placement="top" tooltip="Edit"><i class="fa fa-pencil"></i></a>
                                <a href="#" onclick="ConfirmDelete('del_course')" class="btn btn-transparent btn-xs tooltips" tooltip-placement="top" tooltip="Remove"><i class="fa fa-times fa fa-white"></i></a>
                                {!! Form::open(array('route' => array('admin.courses.destroy', $course->id), 'method' => 'delete','id'=>'del_course')) !!}
                                {!! Form::close() !!}
                            </div>
                            </td>
                        </tr>
                    @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- end: BASIC TABLE -->

</div>

@endsection

@section('footer')

@endsection

@stop