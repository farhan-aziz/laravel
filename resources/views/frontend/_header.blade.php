<header id="header">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-sm-6 col-xs-8">
                <div class="logo">
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('/frontend/images/logo.png') }}" alt="Logo">
                    </a>
                </div>
            </div>
            <div class="col-md-5 col-sm-6 col-xs-4">
                <form action="#">
                    <button type="submit"><img src="{{ asset('/frontend/images/search-icon.png') }}" alt=""></button>
                    <div class="text">
                        <input type="text" class="form-control hidden-xs" placeholder="Search">
                    </div>
                </form>
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <nav role="navigation" id="nav" data-spy="affix" data-offset-top="82" >
        <!-- Collection of nav links and other content for toggling -->
        <div class="navbar-collapse container">
            <div class="container">
                <ul class="nav navbar-nav">
                    <li><a href="#">About us</a></li>
                    <li class="dropdown large">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">courses</a>
                    <div class="dropdown-menu" role="menu">
                        <div class="container">
                            <div class="row">
                            <?php
                                $counter = 0;
                                $categories = \App\Helpers\ApplicationHelper::getCategories();
                            ?>
                                @foreach($categories as $category)
                                    <div class="col-sm-6">
                                        <div class="inner-nav">
                                            <h2>{{ $category->title }}</h2>
                                            @foreach($category->courses()->get() as $course)
                                                <a href="{{ url('course', ['id'=>$category->id, 'slug'=> str_slug($category->title)]) }}">{{ str_limit($course->title, 70) }}</a>
                                            @endforeach
                                        </div>
                                    </div>
                                    <?php $counter++; ?>
                                    @if($counter%2==0)
                                        <div class="clearfix"></div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">corporate workshopes</a>
                    <ul class="dropdown-menu single" role="menu">
                        <li><a href="#">1- EAT</a></li>
                        <li><a href="#">2- AQ</a></li>
                        <li><a href="#">3- EXQA</a></li>
                        <li><a href="#">4- IQA</a></li>
                        <li><a href="#">5- ST</a></li>
                    </ul>
                </li>
                <li><a href="#">contact us</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>