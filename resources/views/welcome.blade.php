@extends('layouts.main') @section('header-banner')
<link rel="stylesheet" href="{{ url('css/carousel.css')}}">
<section id="head-banner">
	<p id="ligne-text-1">- WEB DEVELOPMENT - PHOTOGRAPHY - ICON DESIGN -</p>
	<h1 id="title-big">
		< <span id="title-big-color">Développeur</span> web /></h1>
	<h2>Nice to Meet You</h2>
</section>
@endsection @section('content')
<section id="container-menu-bar">

	<div id="section-2" class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="feature-box">
					<i class="fa fa-leaf"></i>
					<a href="">
						<h3>Feature 1</h3>
					</a>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit veniam aut reprehenderit ab repellendus rem similique
						molestiae quo, sed sequi excepturi rerum tenetur? Quo aliquid expedita, iusto laudantium omnis labore?</p>
				</div>
			</div>

			<div class="col-md-3">
				<div class="feature-box">
					<i class="fa fa-star"></i>
					<a href="">
						<h3>Feature 2</h3>
					</a>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit veniam aut reprehenderit ab repellendus rem similique
						molestiae quo, sed sequi excepturi rerum tenetur? Quo aliquid expedita, iusto laudantium omnis labore?</p>
				</div>
			</div>

			<div class="col-md-3">
				<div class="feature-box">
					<i class="fa fa-twitter"></i>
					<a href="">
						<h3>Feature 3</h3>
					</a>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit veniam aut reprehenderit ab repellendus rem similique
						molestiae quo, sed sequi excepturi rerum tenetur? Quo aliquid expedita, iusto laudantium omnis labore?</p>
				</div>
			</div>

			<div class="col-md-3">
				<div class="feature-box">
					<i class="fa fa-facebook"></i>
					<a href="">
						<h3>Feature 4</h3>
					</a>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit veniam aut reprehenderit ab repellendus rem similique
						molestiae quo, sed sequi excepturi rerum tenetur? Quo aliquid expedita, iusto laudantium omnis labore?</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="slogan-banner">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>This is a slogan which can be used to ad your product or work.</h1>
				<p>And you can also describe the features and advantages here with serveral sentences.</p>
				<button class="btn-normal">Read More</button>
			</div>
		</div>
	</div>
</section>

{{--
<section id="our-projects">
	<div class="title-block text-center">
		<h2 class="module-title">Our Projects</h2>
		<p class="module-description">Some of our works.</p>
	</div>




	@foreach($projets as $projet)
	<div class="col-md-3">
		<h2>
			<a href="{{ route('projets', ['id'=> $projet->id])}}">{{ $projet->titre }}</a>
			<a href="{{ route('projets.edit', ['id'=> $projet->id])}}">
				<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
			</a>
		</h2>
		<p>{{ $projet->description }}</p>
	</div>
	@endforeach



</section> --}}

<section id="blog-section">
	<div class="container">
		<div class="row">
			<div class="title-block text-center">
				<h2 class="module-title">Our Projects</h2>
				<p class="module-description">Some of our works.</p>
			</div>

			@foreach ($projets as $k => $projet) @if ($k % 2 == 0)

			<div class="bloglist-box">
				<div class="row">
					<div class="col-md-6 float-left">
						<img src="{{ $projets[0]->getMedia()[0]->getUrl() }}" alt="{{ $projets[0]->titre }}">
					</div>
					<div class="col-md-6 float-right">
						<div class="bloglist-content">
							<div class="entry-header">
								Uncategorized
								<h1 class="entry-title">Markup: Title With Markup</h1>
								<div class="entry-meta">
									<div class="entry-date">
										Sep 11, 2014
									</div>
									<div class="entry-comments">
										No comments yet
									</div>
								</div>
							</div>
							<div class="entry-summary">
								Verify that: The post title renders the word “with” in italics and the word “markup” in bold. The post title markup should
								be removed from the browser window / tab.
							</div>
							<button class="btn-normal line">Read More</button>
						</div>
					</div>
				</div>
			</div>

			@else

			<div class="bloglist-box">
				<div class="row">
					<div class="col-md-6 float-right">
						<img src="https://demo.mageewp.com/cordillera/wp-content/uploads/sites/5/2014/08/portfolio-img-3.jpg">
						</a>
					</div>
					<div class="col-md-6 float-left">
						<div class="bloglist-content">
							<div class="entry-header">
								<div class="entry-catagory">
									Uncategorized
								</div>
								<h1 class="entry-title">Markup: HTML Tags</h1>
								<div class="entry-meta">
									<div class="entry-date">
										Sep 11, 2014
									</div>
									<div class="entry-comments">
										No comments yet
									</div>
								</div>
							</div>
							<div class="entry-summary">
								Multi line blockquote with a cite reference: People think focus means saying yes to the thing you've got to focus on. But
								that's not what it means at all.
							</div>
							<button class="btn-normal line">Read More</button>
						</div>
					</div>
				</div>
			</div>

			@endif @endforeach




		</div>
	</div>

</section>


<section id="bottom-carousel" class="home-section home-page-section-five" style="background-image:url('https://demo.mageewp.com/cordillera/wp-content/uploads/sites/5/2015/07/bg-1.jpg');background-repeat:no-repeat;background-position:top center;background-attachment:fixed;padding-top:50px;padding-bottom:50px;">
	<div class="full-width  container">
		<div class="row">
			<div class="col-md-12">
				<div id="cordillera_testimonial-3" class="widget cordillera_testimonial">
					<div class="testimonial-wrapper">
						<div id="testimonial-5a58873b7ba19" class="carousel slide" data-ride="carousel">
							<!-- Wrapper for slides -->
							<div class="carousel-inner" role="listbox">
								<div class="item">
									<div class="testimonial-box" style="">
										<div class="testimonial-content">
											<i class="fa fa-quote-left"></i>
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum malesuada odio id ligula sagittis, vitae venenatis erat
											tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
										</div>
										<div class="testimonial-author-wrapper text-center">
											<div class="testimonial-author ">
												<p>Catherine Grace - CEO of Digital W</p>
											</div>
										</div>
									</div>
								</div>
								<div class="item active">
									<div class="testimonial-box" style="">
										<div class="testimonial-content">
											<i class="fa fa-quote-left"></i>
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum malesuada odio id ligula sagittis, vitae venenatis erat
											tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
										</div>
										<div class="testimonial-author-wrapper text-center">
											<div class="testimonial-author ">
												<p>Katy Geoana - PR of Castiel Trans</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- Controls -->
							<a class="left carousel-control" href="#testimonial-5a58873b7ba19" role="button" data-slide="prev">
								<span class="fa fa-caret-left"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#testimonial-5a58873b7ba19" role="button" data-slide="next">
								<span class="fa fa-caret-right"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div>
					<span class="seperator extralight-border"></span>
				</div>
			</div>
		</div>
		<div class="clear"></div>
	</div>
</section>

<section id="partners">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="partner-item">
					<img src="https://demo.mageewp.com/cordillera/wp-content/uploads/sites/5/2015/07/partners1.png" alt="">
				</div>
				<div class="partner-item">
					<img src="https://demo.mageewp.com/cordillera/wp-content/uploads/sites/5/2015/07/partners2.png" alt="">
				</div>
				<div class="partner-item">
					<img src="https://demo.mageewp.com/cordillera/wp-content/uploads/sites/5/2015/07/partners3.png" alt="">
				</div>
				<div class="partner-item">
					<img src="https://demo.mageewp.com/cordillera/wp-content/uploads/sites/5/2015/07/partners4.png" alt="">
				</div>
				<div class="partner-item">
					<img src="https://demo.mageewp.com/cordillera/wp-content/uploads/sites/5/2015/07/partners5.png" alt="">
				</div>
				<div class="partner-item">
					<img src="https://demo.mageewp.com/cordillera/wp-content/uploads/sites/5/2015/07/partners6.png" alt="">
				</div>
			</div>
		</div>
	</div>
</section>
@endsection