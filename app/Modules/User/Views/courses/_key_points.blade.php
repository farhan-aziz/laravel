<div aria-multiselectable="true" role="tablist" id="accordion" class="panel-group">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4><a href="#key-points" data-parent="#accordion" data-toggle="collapse" class="collapsed" aria-expanded="false">Key Points</a></h4>
        </div>
        <div role="tabpanel" class="panel-collapse collapse" id="key-points" style="height: 0px;" aria-expanded="false">
            <div class="panel-body">
                @foreach($category->courses as $course)
                    <ul class="list-unstyled">
                        <li><strong>Name:</strong> {{ $course->title }}</li>
                        <li><strong>Qualification Type:</strong> {{ ucwords($course->qualification_type) }}</li>
                        <li><strong>Guided Learning Hours:</strong> {{ $course->hours }} </li>
                        <li><strong>Credit Value:</strong> {{ $course->credit_value  }}</li>
                        <li><strong>Validity:</strong> {{ $course->validity }}</li>
                        <li><strong>Unit combinations:</strong> {{ $course->unit_combinations }}</li>
                        <li><strong>Suitable for:</strong> {{ $course->suitable_for }}</li>
                    </ul>
                @endforeach

            </div>
        </div>
    </div>
</div>