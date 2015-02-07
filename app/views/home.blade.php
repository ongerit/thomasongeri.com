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
    						<div class="col-md-12 text-center">
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
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <h1 class="footer-logo">
                            <img width="150px" height="138px" src="img/logo-blue.png" alt="Footer Logo Blue">
                            </h1>
                            <p>Thomas Ongeri - <a href="#">Licence</a> - Designed &amp; Developed by <a href="#">Thomas Ongeri</a></p>
                        </div>
                        <div class="col-md-7">
                            <ul class="footer-nav">
                                <li><a href="#about">About</a></li>
                                <li><a href="#features">Features</a></li>
                                <li><a href="#screenshots">Screenshots</a></li>
                                <li><a href="#download">Download</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
            <div class="overlay overlay-boxify">
                <nav>
                    <ul>
                        <li><a href="#about"><i class="fa fa-heart"></i>About</a></li>
                        <li><a href="#features"><i class="fa fa-flash"></i>Features</a></li>
                    </ul>
                    <ul>
                        <li><a href="#screenshots"><i class="fa fa-desktop"></i>Screenshots</a></li>
                        <li><a href="#download"><i class="fa fa-download"></i>Download</a></li>
                    </ul>
                </nav>
            </div>


@stop