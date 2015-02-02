@extends('templates.default')

@section('title')Home @stop

@section('content')
    		<header>
    			<section class="hero">
    				<div class="texture-overlay"></div>
    				<div class="container">
    					<div class="row nav-wrapper">
    						<div class="col-md-6 col-sm-6 col-xs-6 text-left">
    							<a href="#"><img src="img/logo.png" alt="Thomas Ongeirlogo"></a>
    						</div>
    						<div class="col-md-6 col-sm-6 col-xs-6 text-right navicon">
    							<p>MENU</p><a id="trigger-overlay" class="nav_slide_button nav-toggle" href="#"><span></span></a>
    						</div>
    					</div>
    					<div class="row hero-content">
    						<div class="col-md-12">
    							<h1 class="animated fadeInDown">Hi. I'm Thomas and I'm a Brooklyn-based web developer.</h1>
    							<a href="#" class="use-btn animated fadeInUp">Hire me</a> <a href="#about" class="learn-btn animated fadeInUp">Learn more <i class="fa fa-arrow-down"></i></a>
    						</div>
    					</div>
    				</div>
    			</section>
    		</header>
            <section class="video" id="about">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                           <h1>Under the hood <i class="fa fa-html5"></i><i class="fa fa-css3"></i></h1>
                        </div>
                    </div>
                </div>
            </section>
    		<section class="features-intro">
            			<div class="container-fluid">
            				<div class="row">
            					<div class="col-md-6 nopadding features-intro-img">
            						<div class="features-bg">
            							<div class="texture-overlay"></div>
            							<div class="features-img wp1">
            								<img src="img/html5-logo.png" alt="HTML5 Logo">
            							</div>
            						</div>
            					</div>
            					<div class="col-md-6 nopadding">
            						<div class="features-slider">
            								<ul class="slides" id="featuresSlider">
            								    @if($posts-> count())
                                                    @foreach($posts as $post)
                                                        <li>
                                                            <h2><a href="{{ URL::action('post-show',$post->slug) }}">{{ $post->title }}</a></h2>
                                                            <p>Published on {{$post->created_at->diffForHumans()}}</p>
                                                            {{ Markdown::parse(Str::limit($post->body,300))}}
                                                            <a href="{{ URL::action('post-show',$post->slug) }}"> Read more &rarr;</a>
                                                        </li>
                                                    @endforeach
                                                @endif
            								</ul>
            						</div>
            					</div>
            				</div>
            			</div>
            		</section>


@stop