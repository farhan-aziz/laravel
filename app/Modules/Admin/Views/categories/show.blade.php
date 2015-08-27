@extends('admin')

@section('content')

    <h1>{{$categorie->title}}</h1>

   <article>
        <a href="{{ url('admin/categories/'.$category->id.'/edit') }}">Edit</a>
        &nbsp;
         {!! Form::open(array('route' => array('admin.categories.destroy', $category->id), 'method' => 'delete')) !!}
            <button type="submit">Delete</button>
         {!! Form::close() !!}
   </article>



@endsection

@section('footer')

@endsection

@stop