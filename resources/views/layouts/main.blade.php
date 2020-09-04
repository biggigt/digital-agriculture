<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('title')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ asset('assets/semantic/semantic.min.css') }}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="{{ asset('assets/semantic/semantic.min.js') }}"></script>
  <link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Open+Sans&display=swap" rel="stylesheet">
  <style type="text/css">
  .pusher{
    background: rgba(255,255,255,.9) !important;
  }
  .back-cover{
    background: url('/assets/images/cover.png');
    background-size:contain;
    background-repeat: no-repeat;
  }
    .is-link{
      font-family: 'Exo 2', sans-serif !important;
      position: absolute;
      top: 35%;
      left: 25%;
      font-size: 1.6rem !important;
      color: white !important;
      font-weight: 400 !important;
    }
    .hidden.menu {
      display: none;
    }
	 .square {
		position: relative;
		width: 100%;
		}

		.square:after {
		content: "";
		display: block;
		padding-bottom: 100%;
		}

		.square-content {
		position: absolute;
		width: 100%;
		height: 100%;
		}

    .masthead.segment {
      background: linear-gradient(180deg, rgba(2,0,36,0.5) 0%, rgba(0,0,0,0.3) 15%, rgba(255,255,255,0) 100%), url(/assets/images/4295.png) !important;
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
      padding: 8em 0em;
    }
    .ui.vertical.stripe h3 {
      font-size: 2em;
    }
    .ui.vertical.stripe .button + h3,
    .ui.vertical.stripe p + h3 {
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
  </style>
  <script>
  $(document)
    .ready(function() {

      // fix menu when passed
      $('.masthead')
        .visibility({
          once: false,
          onBottomPassed: function() {
            $('.fixed.menu').transition('fade in');
          },
          onBottomPassedReverse: function() {
            $('.fixed.menu').transition('fade out');
          }
        })
      ;

      // create sidebar and attach to menu open
      $('.ui.sidebar')
        .sidebar('attach events', '.toc.item')
      ;

    })
  ;
  </script>
</head>
<body>

<!-- Following Menu -->
<div class="ui large top fixed hidden menu">
  <div class="ui container">
    <a class="active item" href="/">
      <i class="home icon"></i> Главная
    </a>
    <a class="item">
      <i class="table icon"></i> Реестры
    </a>
    <a class="item">
      <i class="table icon"></i> Новости
    </a>
    <a class="item">
      <i class="table icon"></i> Контакты
    </a>
    <!-- <div class="ui simple dropdown item">
      <i class="building icon"></i> Предприятия
      <i class="dropdown icon"></i>
      <div class="menu">
        <a class="item" href="/companies"><i class="bars icon"></i> Просмотр</a>
        <a class="item" href="/create"><i class="plus square outline icon"></i> Добавить</a>
      </div>
    </div>
    <div class="ui simple dropdown item">
      <i class="clipboard outline icon"></i> Справочники
      <i class="dropdown icon"></i>
      <div class="menu">
        <a class="item" href="/businesstypes"><i class="edit icon"></i> ОПФ</a>
        <a class="item" href="/registrytypes"><i class="globe icon"></i> Реестры</a>
        <a class="item" href="/facility"><i class="settings icon"></i> Виды предприятий</a>
      </div>
    </div> -->
    
  </div>
</div>

<!-- Sidebar Menu -->
<div class="ui vertical inverted sidebar menu">
  <a class="active item" href="/">
    <i class="home icon"></i> Главная
  </a>
  <a class="item">
    <i class="table icon"></i> Реестры
  </a>
  <div class="ui simple dropdown item">
    <i class="building icon"></i> Предприятия
    <i class="dropdown icon"></i>
    <div class="menu">
      <a class="item" href="/companies"><i class="bars icon"></i> Просмотр</a>
      <a class="item" href="/create"><i class="plus square outline icon"></i> Добавить</a>
    </div>
  </div>
  <div class="ui simple dropdown item">
    <i class="clipboard outline icon"></i> Справочники
    <i class="dropdown icon"></i>
    <div class="menu">
      <a class="item" href="/businesstypes"><i class="edit icon"></i> ОПФ</a>
      <a class="item" href="/registrytypes"><i class="globe icon"></i> Реестры</a>
      <a class="item" href="/facility"><i class="settings icon"></i> Виды предприятий</a>
    </div>
  </div>
  <a class="item">Login</a>
  <a class="item">Signup</a>
</div>
@yield('content')
</body>
@yield('scripts')