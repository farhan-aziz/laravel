
      <div class="form-group">
          {!! Form::label('category_id','Category:') !!}
          {!! Form::select('category_id',App\Helpers\ApplicationHelper::listCategories() ,null,['class' => 'form-control']) !!}
      </div>
      <div class="form-group">
        {!! form::label('title','Title:') !!}
        {!! form::text('title',null, ['class' => 'form-control']) !!}
      </div>

      <div class="form-group">
        {!! form::label('description','Description:') !!}
        {!! form::textarea('description',null, ['class' => 'form-control']) !!}
      </div>

       <div class="form-group">
         {!! form::label('qualification_type','Qualification Type:') !!}
         {!! form::text('qualification_type',null, ['class' => 'form-control']) !!}
       </div>

       <div class="form-group">
         {!! form::label('hours','Hours:') !!}
         {!! form::text('hours',null, ['class' => 'form-control']) !!}
       </div>

       <div class="form-group">
         {!! form::label('credit_value','Credit Value:') !!}
         {!! form::text('credit_value',null, ['class' => 'form-control']) !!}
       </div>

       <div class="form-group">
         {!! form::label('validity','Validity:') !!}
         {!! form::text('validity',null, ['class' => 'form-control']) !!}
       </div>

       <div class="form-group">
         {!! form::label('unit_combinations','Unit Combinations:') !!}
         {!! form::textarea('unit_combinations',null, ['class' => 'form-control']) !!}
      </div>

       <div class="form-group">
        {!! form::label('suitable_for','Suitable For:') !!}
        {!! form::text('suitable_for',null, ['class' => 'form-control']) !!}
      </div>

      <div class="form-group">
        {!! form::label('assessments','Assessments:') !!}
        {!! form::textarea('assessments',null, ['class' => 'form-control']) !!}
      </div>

      <div class="form-group">
        {!! form::label('market_price','Market Price:') !!}
        {!! form::text('market_price',null, ['class' => 'form-control']) !!}
      </div>

      <div class="form-group">
        {!! form::label('eln_price','Eln Price:') !!}
        {!! form::text('eln_price',null, ['class' => 'form-control']) !!}
      </div>


      {!! form::submit($submitButtonText,['class' => 'btn btn-o btn-primary']) !!}
