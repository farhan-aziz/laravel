<div aria-multiselectable="true" role="tablist" id="accordion" class="panel-group">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4><a href="#assessment" data-parent="#accordion" data-toggle="collapse" class="collapsed" aria-expanded="false">Assessments</a></h4>
        </div>
        <div role="tabpanel" class="panel-collapse collapse" id="assessment" style="height: 0px;" aria-expanded="false">
            <div class="panel-body">
                @foreach($category->courses as $course)
                <h4><strong>{{ $course->title }}</strong></h4>
                <p>{{ $course->assessments }}</p>
                @endforeach
            </div>
        </div>
    </div>
</div>