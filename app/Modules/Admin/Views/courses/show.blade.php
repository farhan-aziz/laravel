@extends('admin')

@section('content')

    <h1>{{$course->title}}</h1>

   <article>
        {!!$course->description!!}
        <br/><br/><br/>
        <a href="{{ url('admin/courses/'.$course->id.'/edit') }}">Edit</a>
        &nbsp;
         {!! Form::open(array('route' => array('admin.courses.destroy', $course->id), 'method' => 'delete')) !!}
            <button type="submit">Delete</button>
         {!! Form::close() !!}
   </article>



@endsection

@section('footer')

@endsection

@stop