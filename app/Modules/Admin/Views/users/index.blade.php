@extends('backend.backend')

@section('content')
<div class="wrap-content container" id="container">

    <!-- start: PAGE TITLE -->
    <section id="page-title">
        <div class="row">
            <div class="col-sm-8">
                <h1 class="mainTitle">Users</h1>
            </div>

        </div>
    </section>
    <!-- end: PAGE TITLE -->

    <!-- start: BASIC TABLE -->
    <div class="container-fluid container-fullw bg-white">
        <div class="row">
            <div class="col-md-12">
                @include ('flash::message')
                <div class="table-responsive">
                    <table class="table table-striped table-hover" id="sample_2">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Full Name</th>
                                <th>E-Mail</th>
                                <th>Contact</th>
                                <th>View</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $k => $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->first_name .' '.$user->sur_name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->contact_number}}</td>
                                <td>
                                <a href="{{ url('admin/users/'.$user->id) }}" class="edit-row">
                                    View
                                </a></td>
                                <td>
                                <a onclick="ConfirmDelete('del_user')" href="#" class="delete-row">
                                    Delete
                                </a></td>
                                {!! Form::open(array('route' => array('admin.users.destroy', $user->id), 'method' => 'delete','id'=>'del_user')) !!}
                                {!! Form::close() !!}
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
    <!-- end: BASIC TABLE -->

</div>

@endsection

@section('footer')

@endsection

@stop