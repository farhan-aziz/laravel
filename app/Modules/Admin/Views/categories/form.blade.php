      <div class="form-group">
        {!! form::label('title','Title:') !!}
        {!! form::text('title',null, ['class' => 'form-control', 'placeholder' => "Enter Title"]) !!}
      </div>

      <div class="form-group">
          {!! form::label('description','Description:') !!}
          {!! form::textarea('description',null, ['class' => 'form-control']) !!}
      </div>

      <div class="form-group">
          {!! form::label('pre_course','Pre Course:') !!}
          {!! form::textarea('pre_course',null, ['class' => 'form-control']) !!}
      </div>
        {!! form::submit($submitButtonText,['class' => 'btn btn-o btn-primary']) !!}
