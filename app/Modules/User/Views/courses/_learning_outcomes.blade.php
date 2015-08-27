<div aria-multiselectable="true" role="tablist" id="accordion" class="panel-group">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4><a href="#learning-outcomes" data-parent="#accordion" data-toggle="collapse" class="" aria-expanded="true">Learning Outcomes</a></h4>
        </div>
        <div role="tabpanel" class="panel-collapse collapse in" id="learning-outcomes" style="" aria-expanded="true">
            <div class="panel-body">
                @foreach($category->courses as $course)
                    <div aria-multiselectable="true" role="tablist" id="accordion{{ $course->id }}" class="panel-group">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4><a href="#tab{{ $course->id }}" data-parent="#accordion{{ $course->id }}" data-toggle="collapse" class="collapsed" aria-expanded="false">{{ $course->title }}</a></h4>
                            </div>
                            <div role="tabpanel" class="panel-collapse collapse" id="tab{{ $course->id }}" style="height: 0px;" aria-expanded="false">
                                <div class="panel-body">
                                    {{ $course->description }}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>