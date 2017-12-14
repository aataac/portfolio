@extends('layouts.main') @section('header-banner')
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

<section id="our-projects">
	<div class="title-block text-center">
		<h2 class="module-title">Our Projects</h2>
		<p class="module-description">Some of our works.</p>
	</div>

	<div id="portfolios">
		<div class="row no-padding">
			<div class="col-sm-6 col-md-3">
				<img src="https://demo.mageewp.com/cordillera/wp-content/uploads/sites/5/2014/08/portfolio-img-1-480x360.jpg" alt="">
			</div>
			<div class="col-sm-6 col-md-3">
				<img src="https://demo.mageewp.com/cordillera/wp-content/uploads/sites/5/2014/08/portfolio-img-3.jpg" alt="">
			</div>
			<div class="col-sm-6 col-md-3">
				<img src="https://demo.mageewp.com/cordillera/wp-content/uploads/sites/5/2014/08/portfolio-img-2.jpg" alt="">
			</div>
			<div class="col-sm-6 col-md-3">
				<img src="https://demo.mageewp.com/cordillera/wp-content/uploads/sites/5/2014/08/portfolio-img-4-480x360.jpg" alt="">
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

		</div>
	</div>

</section>

<section id="blog-section">
	<div class="container">
		<div class="row">
			<div class="title-block text-center">
				<h2 class="module-title">Blog Articles</h2>
				<p class="module-description">The latest news.</p>
			</div>


			<div class="bloglist-box">
				<div class="row">
					<div class="col-md-6 float-left">
						<img src="https://demo.mageewp.com/cordillera/wp-content/uploads/sites/5/2014/08/portfolio-img-2.jpg" alt="">
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
		</div>
	</div>

</section>

<section id="bottom-carousel">

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