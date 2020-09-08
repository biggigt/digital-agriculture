<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Digital Agriculture</title>

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css"
		href="https://cdnjs.cloudflare.com/ajax/libs/fomantic-ui/2.8.5/semantic.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fomantic-ui/2.8.5/semantic.min.js"></script>

	<!-- Styles -->
	<style>
	html,
	body {
		background-color: #eff0f2;
		color: #636b6f;
		font-family: 'Nunito', sans-serif;
		font-weight: 200;
		height: 100vh;
		margin: 0;
	}

	.full-height {
		height: 100vh;
	}

	.flex-center {
		align-items: center;
		display: grid;
		justify-content: center;
	}

	.position-ref {
		position: relative;
	}

	.top-right {
		position: absolute;
		right: 10px;
		top: 18px;
	}

	.content {
		text-align: center;
	}

	.title {
		font-size: 84px;
	}

	.links>a {
		color: #636b6f;
		padding: 0 25px;
		font-size: 13px;
		font-weight: 600;
		letter-spacing: .1rem;
		text-decoration: none;
		text-transform: uppercase;
	}

	.m-b-md {
		margin-bottom: 30px;
	}

	.padding {
		padding: 1.5rem;
	}

	.transparentbg {
		background: transparent !important;
	}

	.ui.card,
	.ui.cards>.card {
		box-shadow: 0 0px 0px 0 #ffffff, 0 0 0 0px #ffffff !important;
		background: transparent !important;
	}

	.ui.card,
	.ui.cards>.card:hover {
		background: transparent !important;
	}


	.hidden.menu {
		display: none;
	}

	.masthead.segment {
		min-height: 700px;
		padding: 1em 0em;
	}

	.masthead .logo.item img {
		margin-right: 1em;
	}

	.masthead .ui.menu .ui.button {
		margin-left: 0.5em;
	}

	.masthead h1.ui.header {
		margin-top: 3em;
		margin-bottom: 0em;
		font-size: 4em;
		font-weight: normal;
	}

	.masthead h2 {
		font-size: 1.7em;
		font-weight: normal;
	}

	.ui.vertical.stripe {
		padding: 4em 0em;
	}

	.ui.vertical.stripe h3 {
		font-size: 2em;
	}

	.ui.vertical.stripe .button+h3,
	.ui.vertical.stripe p+h3 {
		margin-top: 3em;
	}

	.ui.vertical.stripe .floated.image {
		clear: both;
	}

	.ui.vertical.stripe p {
		font-size: 1.33em;
	}

	.ui.vertical.stripe .horizontal.divider {
		margin: 3em 0em;
	}

	.quote.stripe.segment {
		padding: 0em;
	}

	.quote.stripe.segment .grid .column {
		padding-top: 5em;
		padding-bottom: 5em;
	}

	.footer.segment {
		padding: 5em 0em;
	}

	.secondary.pointing.menu .toc.item {
		display: none;
	}

	@media only screen and (max-width: 700px) {
		.ui.fixed.menu {
			display: none !important;
		}

		.secondary.pointing.menu .item,
		.secondary.pointing.menu .menu {
			display: none;
		}

		.secondary.pointing.menu .toc.item {
			display: block;
		}

		.masthead.segment {
			min-height: 350px;
		}

		.masthead h1.ui.header {
			font-size: 2em;
			margin-top: 1.5em;
		}

		.masthead h2 {
			margin-top: 0.5em;
			font-size: 1.5em;
		}
	}
  .grid-link-size{
    font-size: 1.4em !important;
  }
  .grid-icon-size{
    font-size: 3em !important;
    padding-bottom: 1.2em;
  }
  a {
    color:orangered;
  }
  a:hover {
    color: orange;
  }
	</style>
</head>

<body>
	<div class="pusher">
		<div class="flex-center position-ref full-height">
			@if (Route::has('login'))
			<div class="top-right links">
				@auth
				<a href="{{ url('/home') }}">Home</a>
				@else
				<a href="{{ route('login') }}">Login</a>

				@if (Route::has('register'))
				<a href="{{ route('register') }}">Register</a>
				@endif
				@endauth
			</div>
			@endif

			<div class="content">
				<div class="ui stackable menu">
					<div class="header item">
						Цифровое Сельское Хозяйство
					</div>
					<a class="item">
						О нас
					</a>
					<a class="item">
						Информационные системы
					</a>
					<a class="item">
						Контакты
					</a>
					<div class="right menu">
						<a class="item">Помощь</a>
					</div>
				</div>

				<div class="ui vertical stripe segment">
					<div class="ui middle aligned stackable grid container">
						<div class="row">
							<div class="eight wide column">
								<h3 class="ui header">Польза цифровизации</h3>
								<p>We can give your company superpowers to do things that they never thought possible. Let us
									delight your customers and empower your needs...through pure data analytics.</p>
								<h3 class="ui header">Роль информационных технологий в сельском хозяйстве</h3>
								<p>Yes that's right, you thought it was the stuff of dreams, but even bananas can be
									bioengineered.</p>
							</div>
							<div class="six wide right floated column">
								<!-- <img src="assets/images/wireframe/white-image.png" class="ui large bordered rounded image"> -->
                <div class="ui placeholder">
                  <div class="image square"></div>
                </div>
							</div>
						</div>
						<div class="row">
							<div class="center aligned column">
								<a class="ui huge button">Узнать больше</a>
							</div>
						</div>
					</div>
				</div>

				<div class="ui horizontal basic segments collapsible">
					<div class="ui segment transparentbg">
						<a class="ui card" href="#">
							<p class="padding"><i class="ui middle aligned pagelines outline big icon grid-icon-size" ></i>
                </br>
								<span class="grid-link-size">ЭЛЕК</span>
							</p>
						</a>
					</div>
					<div class="ui segment transparentbg">   
						<a class="ui card" href="#">
							<p class="padding"><i class="ui middle aligned flask big icon grid-icon-size" ></i>
								</br>
                <span class="grid-link-size">Химизация</span>
							</p>
						</a>
					</div>
					<div class="ui segment transparentbg">
						<a class="ui card" href="#">
							<p class="padding"><i class="ui middle aligned fish big icon grid-icon-size" ></i>
                </br>
								<span class="grid-link-size">Рыбный реестр</span>
							</p>
						</a>
					</div>
				</div>
				<div class="ui horizontal basic segments collapsible">
					<div class="ui segment transparentbg">
						<a class="ui card" href="#">
							<p class="padding"><i class="ui middle aligned seedling big icon grid-icon-size"></i>
                </br>
								<span class="grid-link-size">Middle Aligned</span>
							</p>
						</a>
					</div>
					<div class="ui segment transparentbg">
						<a class="ui card" href="#">
							<p class="padding"><i class="ui middle aligned file alternate outline big icon grid-icon-size"></i>
                </br>
								<span class="grid-link-size">Middle Aligned</span>
							</p>
						</a>
					</div>
					<div class="ui segment transparentbg">
						<a class="ui card" href="#">
							<p class="padding"><i class="ui middle aligned city big icon grid-icon-size"></i>
                </br>
								<span class="grid-link-size">Middle Aligned</span>
							</p>
						</a>
					</div>
				</div>
				<h3 class="ui header left aligned">Новости</h3>
				<table class="ui very basic stackable celled table">
					<tbody>
						<tr>
							<td>
								<div class="ui fluid placeholder">
									<div class="image header">
										<div class="line"></div>
										<div class="line"></div>
									</div>
									<div class="paragraph">
										<div class="line"></div>
										<div class="line"></div>
										<div class="line"></div>
										<div class="line"></div>
										<div class="line"></div>
									</div>
								</div>
							</td>
							<td>
								<div class="ui fluid placeholder">
									<div class="image header">
										<div class="line"></div>
										<div class="line"></div>
									</div>
									<div class="paragraph">
										<div class="line"></div>
										<div class="line"></div>
										<div class="line"></div>
										<div class="line"></div>
										<div class="line"></div>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="ui fluid placeholder">
									<div class="image header">
										<div class="line"></div>
										<div class="line"></div>
									</div>
									<div class="paragraph">
										<div class="line"></div>
										<div class="line"></div>
										<div class="line"></div>
										<div class="line"></div>
										<div class="line"></div>
									</div>
								</div>
							</td>
							<td>
								<div class="ui fluid placeholder">
									<div class="image header">
										<div class="line"></div>
										<div class="line"></div>
									</div>
									<div class="paragraph">
										<div class="line"></div>
										<div class="line"></div>
										<div class="line"></div>
										<div class="line"></div>
										<div class="line"></div>
									</div>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="ui vertical stripe segment">
				<div class="ui text container">
					<h3 class="ui header">Информационный заголовок 1</h3>
					<p>Instead of focusing on content creation and hard work, we have learned how to master the art of doing
						nothing by providing massive amounts of whitespace and generic content that can seem massive,
						monolithic and worth your attention.</p>
					<a class="ui large button">Read More</a>
					<h4 class="ui horizontal header divider">
						<a href="#">Case Studies</a>
					</h4>
					<h3 class="ui header">Информационный заголовок 2</h3>
					<p>Yes I know you probably disregarded the earlier boasts as non-sequitur filler content, but its really
						true. It took years of gene splicing and combinatory DNA research, but our bananas can really dance.
					</p>
					<a class="ui large button">I'm Still Quite Interested</a>
				</div>
			</div>
			<div class="ui inverted vertical footer segment">
				<div class="ui container">
					<div class="ui stackable inverted divided equal height stackable grid">
						<div class="three wide column">
							<h4 class="ui inverted header">About</h4>
							<div class="ui inverted link list">
								<a href="#" class="item">Sitemap</a>
								<a href="#" class="item">Contact Us</a>
								<a href="#" class="item">Religious Ceremonies</a>
								<a href="#" class="item">Gazebo Plans</a>
							</div>
						</div>
						<div class="three wide column">
							<h4 class="ui inverted header">Services</h4>
							<div class="ui inverted link list">
								<a href="#" class="item">Banana Pre-Order</a>
								<a href="#" class="item">DNA FAQ</a>
								<a href="#" class="item">How To Access</a>
								<a href="#" class="item">Favorite X-Men</a>
							</div>
						</div>
						<div class="seven wide column">
							<h4 class="ui inverted header">Footer Header</h4>
							<p>Extra space for a call to action inside the footer that could help re-engage users.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>