@extends('frontend/frontendcols')

@section('content')

<section>

    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-4">
                <div class="side-nav">
                    <strong class="opener"><a data-toggle="collapse" class="collapsed" href="#side-key-points">Key Points</a></strong>
                    <p id="side-key-points" data-toggle"collapse"="" class="collapse"><strong>The ELN Level 3 Assessor previous A1 and A2 qualifications.</strong>.The Level 3 Assessor qualifications are relevant to assessors, their managers, internal quality assurers (IQA or IV’s) and external quality assurers (EQA or EV’s) who are assessing and quality assuring qualifications.</p>
                    <strong class="opener"><a data-toggle="collapse" class="collapsed" href="#download">Download</a></strong>
                    <div id="download" data-toggle="collapse" class="holder collapse">
                        <p>Click here to Download</p>
                        <a href="#">Download Here</a>
                    </div>
                </div>
            </div>
            <div class="col-md-9 col-sm-8">
                <div class="brief">
                    <h2>{{ $category->title  }} <span>({{ ucfirst($category->title) }})</span></h2>
                    {{ $category->description }}
                </div>
                <div class="tab-list">
                    <div aria-multiselectable="true" role="tablist" id="accordion" class="panel-group">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4><a href="#pre-course" data-parent="#accordion" data-toggle="collapse" class="collapsed" aria-expanded="false">Pre-Course Requirements</a></h4>
                            </div>
                            <div role="tabpanel" class="panel-collapse collapse" id="pre-course" aria-expanded="false" style="height: 0px;">
                                <div class="panel-body">
                                    {{ $category->pre_course }}
                                </div>
                            </div>
                        </div>
                    </div>

                    @include('User::courses._key_points')

                    @include('User::courses._learning_outcomes')

                    @include('User::courses._assessments')


                </div><!--tablist-->
            </div><!--col-->
        </div><!--row-->
    </div><!--container-->
</section>

<section class="pricing text-center">
    <div class="container">
        <div class="row">
            @foreach($category->courses as $course)
                <div class="col-md-3">
                    <div class="holder">
                        <div class="pricing-box">
                            <h3>${{ $course->eln_price }}</h3>
                        </div>
                        <h3>{{ str_limit($course->title, 75) }}</h3>
                        <a href="{{ url('checkout', ['id'=>$course->id, 'slug'=>str_slug($course->title)]) }}"> Buy Now</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

@endsection