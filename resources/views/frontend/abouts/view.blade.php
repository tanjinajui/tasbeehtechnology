<!-- Default template -->
@extends('layouts.includes.master')
@section('title', 'About')
@section('content')
<!--start-main-->
	<div class="header-bottom">
		<div class="container">
			<div class="logo">
				<h1><a href="index.html">STYLE BLOG</a></h1>
				<p><label class="of"></label>LET'S MAKE A PERFECT STYLE<label class="on"></label></p>
			</div>
		</div>
	</div>
<!-- banner -->

<div class="banner-1">

</div>

	<!-- technology-left -->
	<div class="technology">
	<div class="container">
		<div class="col-md-9 technology-left">
		<div class="w3agile-1">
			<div class="welcome">
				<div class="welcome-top heading">
					<h2 class="w3">WELCOME</h2>
					@foreach($abouts as $about)
					<div class="welcome-bottom">
						<img src="{{asset('images/about_picture/'.$about->about_picture)}}" class="img-responsive" alt="">
						<p>{!! $about->about_description !!}</p>
					</div>
					@endforeach
				</div>
			</div>
			<div class="team">	
				<h3 class="team-heading">Meet our team</h3>
				<div class="team-grids">
					<div class="col-md-6 team-grid">
						<div class="team-grid1">
							<img src="{{asset('images/sales_manager_picture/'.$about->sales_manager_picture)}}" alt=" " class="img-responsive">
							<div class="p-mask">
								<p>{{$about->team_title}}</p>
								
							</div>
						</div>
						<h5>{{$about->sales_manager_name}}<span>Sales Manager</span></h5>
						<ul class="social">
							<li><a class="social-facebook" href="https://www.facebook.com/">
								<i></i>
								<div class="tooltip"><span>Facebook</span></div>
								</a></li>
							<li><a class="social-twitter" href="https://www.twitter.com/">
								<i></i>
								<div class="tooltip"><span>Twitter</span></div>
								</a></li>
							<li><a class="social-google" href="https://www.google.com/">
								<i></i>
								<div class="tooltip"><span>Google+</span></div>
								</a></li>
						</ul>
					</div>
					<div class="col-md-6 team-grid">
						<div class="team-grid1">
							<img src="{{asset('images/manager_picture/'.$about->manager_picture)}}" alt=" " class="img-responsive">
							<div class="p-mask">
								<p>{{$about->team_title}}</p>
								
							</div>
						</div>
						<h5>{{$about->manager_name}}<span>Manager</span></h5>
						<ul class="social">
							<li><a class="social-facebook" href="https://www.facebook.com/">
								<i></i>
								<div class="tooltip"><span>Facebook</span></div>
								</a></li>
							<li><a class="social-twitter" href="https://www.twitter.com/">
								<i></i>
								<div class="tooltip"><span>Twitter</span></div>
								</a></li>
							<li><a class="social-google" href="https://www.google.com/">
								<i></i>
								<div class="tooltip"><span>Google+</span></div>
								</a></li>
						</ul>
					</div>
					
				
					<div class="clearfix"> </div>
				</div>				
			</div>
			</div>
		</div>
		<!-- technology-right -->
		<div class="col-md-3 technology-right">
				
				
				<div class="blo-top1">
							
					<div class="tech-btm">
					<div class="search-1">
							<form action="#" method="post">
								<input type="search" name="Search" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}" required="">
								<input type="submit" value=" ">
							</form>
						</div>
					<h4>Popular Posts </h4>
						@foreach(App\Posts::orderBy('view','desc')->get()->take(2) as $popular_post)
						<div class="blog-grids">
							<div class="blog-grid-left">
								<a href="/blogDetails/{{$popular_post->id}}"><img src="{{asset('images/post_picture/'.$popular_post->post_picture)}}" class="img-responsive" alt=""></a>
							</div>
							<div class="blog-grid-right">
								
								<h5><a href="/blogDetails/{{$popular_post->id}}">{{$popular_post->post_title}}</a> </h5>
							</div>
							 @endforeach 
							<div class="clearfix"> </div>
						</div>
							 <div class="blog-grids categoey">
							<h4>Categories</h4>
							<ul class="list-unstyled">
								@foreach(App\Categories::all() as $cat)
	              				<li><a href="#">{{$cat->category}}</a> <span class="count">2</span></li>
	               				@endforeach
							</ul>
							<div class="clearfix"></div>
						</div>
						<div class="blog-grids categoey recent_post ">
							<h4>Recent Post</h4>
							<ul class="list-unstyled">@foreach(App\Posts::orderBy('id','desc')->get()->take(3) as $recent_post)
              				<li><a href="/blogDetails/{{$recent_post->id}}">{{$recent_post->post_title}}</a></li>
              				@endforeach    
							</ul>
							<div class="clearfix"></div>
						</div>
						<div class="blog-grids categoey recent_comment">
							<h4>Recent Comment</h4>
							<ul class="list-unstyled">
								@foreach(App\Comments::orderBy('id','desc')->get()->take(5) as $cmt)
	              				<li><a href="#">{{$cmt->name}}</a> <a href="#">{{$cmt->comment}}</a> <span class="count">2</span></li>
	               				@endforeach
							</ul>
							<div class="clearfix"></div>
						</div>
						<div class="insta">
					<h4>Instagram</h4>
						<ul>
							
							<li><a href="singlepage.html"><img src="images/t1.jpg" class="img-responsive" alt=""></a></li>
							<li><a href="singlepage.html"><img src="images/m1.jpg" class="img-responsive" alt=""></a></li>
							<li><a href="singlepage.html"><img src="images/f1.jpg" class="img-responsive" alt=""></a></li>
							<li><a href="singlepage.html"><img src="images/m2.jpg" class="img-responsive" alt=""></a></li>
							<li><a href="singlepage.html"><img src="images/f2.jpg" class="img-responsive" alt=""></a></li>
							<li><a href="singlepage.html"><img src="images/t2.jpg" class="img-responsive" alt=""></a></li>
							<li><a href="singlepage.html"><img src="images/f3.jpg" class="img-responsive" alt=""></a></li>
							<li><a href="singlepage.html"><img src="images/t3.jpg" class="img-responsive" alt=""></a></li>
							<li><a href="singlepage.html"><img src="images/m3.jpg" class="img-responsive" alt=""></a></li>
						</ul>
					</div>
					
					<p>Lorem ipsum ex vix illud nonummy, novum tation et his. At vix scripta patrioque scribentur, at pro</p>
					<div class="twt">
					
						<iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" class="twitter-hashtag-button twitter-hashtag-button-rendered twitter-tweet-button" title="Twitter Tweet Button" src="https://platform.twitter.com/widgets/tweet_button.b7de008f493a5185d8df1aedd62d77c6.en.html#button_hashtag=TwitterStories&amp;dnt=false&amp;id=twitter-widget-0&amp;lang=en&amp;original_referer=https%3A%2F%2Fp.w3layouts.com%2Fdemos%2Fduplex%2Fweb%2F&amp;size=l&amp;time=1467721486626&amp;type=hashtag" style="position: static; visibility: visible; width: 166px; height: 28px;" data-hashtag="TwitterStories"></iframe>
						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
					</div>
					</div>
					
					
					
				</div>
				
			
		</div>
		<div class="clearfix"></div>
		<!-- technology-right -->
	</div>
</div>
@endsection('content')