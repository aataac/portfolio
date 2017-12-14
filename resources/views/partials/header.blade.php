<header>
	<div class="container">


		<div id="logo-left">
			<h1 id="site-name">
				<a href="/">MorinDev.com</a>
			</h1>
			<span>A developer organization</span>

			@if (Route::has('login')) @auth
			<a href="{{route('projets.create')}}">Insérer un nouveau projet</a>
			<a href="{{ route('user-sign-out') }}">Logout</a>
			@else
			<a href="{{ route('login') }}">Login</a>
			<a href="{{ route('register') }}">Register</a>
			@endauth @endif

		</div>
		<nav id="menus-right">
			<ul>
				<li class="menu-item">
					<a href="">Home</a>
				</li>
				<li class="menu-item">
					<a href="">Blog</a>
				</li>
				<li class="menu-item">
					<a href="">About</a>
				</li>
				<li class="menu-item">
					<a href="">Pages</a>
				</li>
				<li class="menu-item">
					<a href="">Tarifs</a>
				</li>
				<li class="menu-item">
					<a href="">Text</a>
				</li>
			</ul>
		</nav>

		</nav>
	</div>
</header>