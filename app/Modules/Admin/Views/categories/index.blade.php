@extends('backend.backend')

@section('content')
<div class="wrap-content container" id="container">

    <!-- start: PAGE TITLE -->
    <section id="page-title">
        <div class="row">
            <div class="col-sm-8">
                <h1 class="mainTitle">Categories</h1>
                {{--<span class="mainDescription"></span>--}}
            </div>
            {{--<ol class="breadcrumb">--}}
                {{--<li>--}}
                    {{--<span>Tables</span>--}}
                {{--</li>--}}
                {{--<li class="active">--}}
                    {{--<span>Basic Tables</span>--}}
                {{--</li>--}}
            {{--</ol>--}}
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
                    @foreach($categories as $k => $category)
                        <tr>
                            <td class="center">{{$k + 1}}</td>
                            <td class="hidden-xs">{{$category->title}}</td>

                            <td class="center">
                            <div class="">
                                <a href="{{ url('admin/categories/'.$category->id.'/edit') }}" class="btn btn-transparent btn-xs" tooltip-placement="top" tooltip="Edit"><i class="fa fa-pencil"></i></a>
                                <a href="#" onclick="ConfirmDelete('del_cat')" class="btn btn-transparent btn-xs tooltips" tooltip-placement="top" tooltip="Remove"><i class="fa fa-times fa fa-white"></i></a>
                                {!! Form::open(array('route' => array('admin.categories.destroy', $category->id), 'method' => 'delete','id'=>'del_cat')) !!}
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