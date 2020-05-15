<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>@yield('title') | RepetBox</title>
	<meta charset="UTF-8">
	<meta name="description" content="RepetBox">
	<meta name="keywords" content="music, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{!! csrf_token() !!}">

    <link href="/videojs/video-js.min.css" rel="stylesheet">
      <link href="/videojs/videojs.record.css" rel="stylesheet">

      <script src="/videojs/video.min.js"></script>
      <script src="/videojs/RecordRTC.js"></script>
      <script src="/videojs/adapter.js"></script>

      <script src="/videojs/videojs.record.js"></script>

       <script src="/videojs/browser-workarounds.js"></script>

       <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <script src="/main_theme/js/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>

    <!--file input-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.3.1/js/fileinput.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.3.1/css/fileinput.css">

	<!-- Favicon -->
	<link href="https://media-private.canva.com/ZmLZ0/MAD6XgZmLZ0/1/tl.png?response-expires=Fri%2C%2024%20Apr%202020%2017%3A13%3A34%20GMT&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Date=20200424T144647Z&X-Amz-SignedHeaders=host&X-Amz-Expires=8806&X-Amz-Credential=AKIAJWF6QO3UH4PAAJ6Q%2F20200424%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Signature=506c2f9aeacdbdf3328682c3caf8c4fb249faec54f1ff7624e420a9efaa7d398" rel="shortcut icon"/>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">

    {{--
	<!-- Stylesheets -->
	<link rel="stylesheet" href="/main_theme/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="/main_theme/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="/main_theme/css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="/main_theme/css/slicknav.min.css"/>
    --}}

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="/main_theme/css/style.css"/>


    <!--highlight js-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.9/highlight.min.js"></script>

    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.9/styles/atom-one-dark.min.css">
    <!--fin highlight js-->


	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->


    <style media="screen">

/*! CSS Used from: https://spliceblob.splice.com/web-cli/styles.d56bdd3ef3301985551c.css */
header,nav,section{display:block;}
a{background:0 0;}
a:active,a:hover{outline:0;}
img{border:0;}
svg:not(:root){overflow:hidden;}
button{color:inherit;font:inherit;margin:0;}
button{overflow:visible;}
button{text-transform:none;}
button{-webkit-appearance:button;cursor:pointer;}
button::-moz-focus-inner{border:0;padding:0;}
@media print{
*{text-shadow:none!important;color:#000!important;background:0 0!important;box-shadow:none!important;}
a,a:visited{text-decoration:underline;}
a[href]:after{content:" (" attr(href) ")";}
img{page-break-inside:avoid;}
img{max-width:100%!important;}
p{orphans:3;widows:3;}
}
*,:after,:before{box-sizing:border-box;}
button{font-size:inherit;line-height:inherit;}
a:focus,a:hover{color:#282828;text-decoration:underline;}
a:focus{outline:dotted thin;outline:-webkit-focus-ring-color auto 5px;outline-offset:-2px;}
p{margin:0 0 10px;}
ul{margin-top:0;margin-bottom:10px;}
body ul{list-style:none;}
a{color:#FC0254;text-decoration:none;cursor:pointer;}
a:hover{text-decoration:underline;color:#FC0254;}
::-webkit-input-placeholder{color:#545454;}
:-moz-input-placeholder{color:#545454;}
::-moz-input-placeholder{color:#545454;}
:-ms-placeholder{color:#545454;}
.s-button{font-size:1rem;display:inline-flex;align-items:center;justify-content:center;vertical-align:middle;font-weight:500;line-height:1.15;margin:0;padding:.5rem 1.25rem;cursor:pointer;color:#131313;background-color:#fff;border:1px solid #d8d8d8;border-radius:100px;white-space:nowrap;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;}
.s-button:focus,.s-button:hover{color:#131313;text-decoration:none;background:#fff;}
.s-button:hover>svg,.s-button>svg{fill:currentColor;}
.s-button--transparent,.s-button--transparent:focus,.s-button--transparent:hover{background:0 0;border-color:transparent;}
.global-nav{font-size:1rem;display:flex;align-items:center;width:100%;height:56px;padding:.625rem 1.25rem;background-color:#08192D;}
.global-nav__main,.global-nav__user{font-size:1rem;line-height:1.25;font-weight:500;}
.global-nav__main{flex:1 1 auto;}
@media screen and (max-width:767px){
.global-nav__main{display:none;}
}
.global-nav__items{list-style:none;margin:0;padding:0;align-items:center;display:flex;justify-content:flex-start;text-align:center;white-space:nowrap;width:100%;}
.global-nav__items>li{flex-grow:0;flex-shrink:1;flex-basis:auto;margin:0 0 0 1.25rem;}
.global-nav__link{display:block;position:relative;color:#acacac;text-decoration:none;padding-top:1.25rem;padding-bottom:1.25rem;}
.global-nav__link:focus,.global-nav__link:hover{color:#fff;text-decoration:none;}
.global-nav__brand a{display:inline-block;}
.global-nav__brand a:hover{text-decoration:none;}
.global-nav__logo{display:inline-block;vertical-align:middle;}
.global-nav__logo.global-nav__logo--symbol{width:21px;}
.global-nav__logo.global-nav__logo--word{width:99px;height:30px;}
.global-nav__menu-button{flex:none;margin-left:-.625rem;}
@media screen and (min-width:768px){
.global-nav__main,.global-nav__user{font-size:1rem;}
.global-nav__menu-button{display:none;}
}
.global-nav__menu-button button{vertical-align:middle;padding:0 .625rem;height:24px;color:#fff;}
.global-nav__menu-button button:hover{color:#fff;}
.global-nav__menu-icon{width:24px;height:24px;fill:#fff;}
.global-nav__user{margin-left:auto;}
img{max-width:100%;height:auto;vertical-align:middle;}
.s-base-type-reset{font-size:16px;}
.s-hide-visually{position:absolute;overflow:hidden;clip:rect(0 0 0 0);height:1px;width:1px;margin:-1px;padding:0;border:0;}
@media screen and (max-width:991px){
.s-hide-md{display:none;}
}
@media screen and (min-width:992px){
.s-hide-lg--up{display:none;}
}
/*! CSS Used from: Embedded */
.sidetray-wrapper[_ngcontent-serverApp-c9]{position:relative;z-index:800;}
.sidetray[_ngcontent-serverApp-c9]{font-size:1rem;line-height:1.5;font-weight:400;display:flex;flex-direction:column;position:fixed;top:0;left:-250px;bottom:0;z-index:1;overflow-y:auto;width:200px;padding:1.25rem 0;transition:.2s all ease-in-out;background:#131313;}
.sidetray__items[_ngcontent-serverApp-c9]{list-style:none;margin:0;padding:0;}
.sidetray__item[_ngcontent-serverApp-c9]{margin:0 0 1.25rem;}
.sidetray__link[_ngcontent-serverApp-c9]{display:block;position:relative;padding:0 1.25rem;color:#acacac;text-decoration:none;line-height:1rem;}
.sidetray__link[_ngcontent-serverApp-c9]:focus,.sidetray__link[_ngcontent-serverApp-c9]:hover{color:#fff;text-decoration:none;}
.sidetray__main[_ngcontent-serverApp-c9]{margin-bottom:calc(1.25rem * 2);}
.sidetray__meta[_ngcontent-serverApp-c9]{margin-top:auto;padding:0 1.25rem;}
.sidetray__meta-items[_ngcontent-serverApp-c9],.sidetray__social-items[_ngcontent-serverApp-c9]{list-style:none;margin:0 0 1rem;padding:0;}
.sidetray__social-item[_ngcontent-serverApp-c9]{color:#acacac;}
.sidetray__social-item[_ngcontent-serverApp-c9] + .sidetray__social-item[_ngcontent-serverApp-c9]{margin-left:calc(.625rem);}
.sidetray__social-item[_ngcontent-serverApp-c9]   i[_ngcontent-serverApp-c9]{color:#acacac;font-size:1.25rem;line-height:1.25;font-weight:500;}
@media screen and (min-width:768px){
.sidetray__social-item[_ngcontent-serverApp-c9]   i[_ngcontent-serverApp-c9]{font-size:1.75rem;}
}
.sidetray__meta-item[_ngcontent-serverApp-c9],.sidetray__social-item[_ngcontent-serverApp-c9]{display:inline-block;}
.sidetray__meta-item[_ngcontent-serverApp-c9] + .sidetray__meta-item[_ngcontent-serverApp-c9]:before{content:"•";display:inline-block;vertical-align:middle;color:#fff;margin-right:.25rem;}
.sidetray__meta-link[_ngcontent-serverApp-c9]{font-size:.875rem;line-height:1.5;font-weight:400;color:#fff;margin-right:.25rem;}
.sidetray__copyright[_ngcontent-serverApp-c9]{font-size:.875rem;line-height:1.5;font-weight:400;color:#acacac;}
.sidetray-overlay[_ngcontent-serverApp-c9]{position:fixed;width:100%;height:100%;left:0;bottom:0;right:0;z-index:-1;background-color:rgba(255,255,255,.85);display:none;}
/*! CSS Used from: Embedded */
.global-nav__link[_ngcontent-serverApp-c10],.global-nav__signup[_ngcontent-serverApp-c10]{flex-grow:0;flex-shrink:1;flex-basis:auto;margin-top:-.1em;}
.global-nav__link[_ngcontent-serverApp-c10]:focus,.global-nav__link[_ngcontent-serverApp-c10]:hover,.global-nav__signup[_ngcontent-serverApp-c10]:focus,.global-nav__signup[_ngcontent-serverApp-c10]:hover{text-decoration:none;}
.global-nav__signup[_ngcontent-serverApp-c10]{background:#fff;color:#131313;}
/*! CSS Used from: https://use.fontawesome.com/41eaff09fe.css ; media=all */
@media all{
/*! @import //use.fontawesome.com/releases/v4.7.0/css/font-awesome-css.min.css */
.fa{display:inline-block;font:normal normal normal 14px/1 FontAwesome;font-size:inherit;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;}
.fa-facebook-square:before{content:"\f082";}
.fa-twitter:before{content:"\f099";}
.fa-youtube-play:before{content:"\f16a";}
.fa-instagram:before{content:"\f16d";}
/*! end @import */
}


.sidetray.is-open[_ngcontent-serverApp-c9] {
left: 0;
}

.sidetray-overlay.is-active[_ngcontent-serverApp-c9] {
display: block;
}

/*
@media screen and (max-width:600px){
#headerWide{display:none;}
#headerPhone{display:block;}
}

@media screen and (min-width:601px){
#headerWide{display:block;}
#headerPhone{display:none;}
}
*/
@media screen and (min-width:601px){
    #dropdownLanguagePhone{
        display: none;
    }
}
</style>

<!--dropdown-->

<style media="screen">


/*! CSS Used from: https://spliceblob.splice.com/web-cli/styles.d56bdd3ef3301985551c.css */
a{background:0 0;}
a:active,a:hover{outline:0;}
strong{font-weight:700;}
img{border:0;}
svg:not(:root){overflow:hidden;}
button{color:inherit;font:inherit;margin:0;}
button{overflow:visible;}
button{text-transform:none;}
button{-webkit-appearance:button;cursor:pointer;}
button::-moz-focus-inner{border:0;padding:0;}
@media print{
*{text-shadow:none!important;color:#000!important;background:0 0!important;box-shadow:none!important;}
a,a:visited{text-decoration:underline;}
a[href]:after{content:" (" attr(href) ")";}
img{page-break-inside:avoid;}
img{max-width:100%!important;}
}
*,:after,:before{box-sizing:border-box;}
button{font-size:inherit;line-height:inherit;}
a:focus,a:hover{color:#282828;text-decoration:underline;}
a:focus{outline:dotted thin;outline:-webkit-focus-ring-color auto 5px;outline-offset:-2px;}
ul{margin-top:0;margin-bottom:10px;}
ul ul{margin-bottom:0;}
.dropdown{position:relative;}
.dropdown-menu{position:absolute;top:100%;z-index:1000;display:none;float:left;min-width:160px;padding:5px 0;margin:2px 0 0;list-style:none;font-size:14px;text-align:left;background-color:#fff;box-shadow:0 6px 12px rgba(0,0,0,.175);background-clip:padding-box;}
.dropdown-menu>li>a{display:block;clear:both;font-weight:400;line-height:1.428571429;color:#333;white-space:nowrap;}
.dropdown-menu>li>a:focus,.dropdown-menu>li>a:hover{text-decoration:none;color:#fff;background-color:#0159d0;}
.open>.dropdown-menu{display:block;}
body ul{list-style:none;}
a{color:#FC0254;text-decoration:none;cursor:pointer;}
a:hover{text-decoration:underline;color:#FC0254;}
.dropdown-menu{border-radius:2px;}
.dropdown-menu>li>a{margin-top:0;padding:.5em 20px;font-size:13px;}
.dropdown-menu{box-shadow:0 2px 3px rgba(0,0,0,.175);left:auto;right:0;border:0;min-width:160px;}
.dropdown-menu li a{color:#2d3339;font-weight:500;}
.dropdown-menu li a:focus,.dropdown-menu li a:hover{background-color:#FC0254;}
::-webkit-input-placeholder{color:#545454;}
:-moz-input-placeholder{color:#545454;}
::-moz-input-placeholder{color:#545454;}
:-ms-placeholder{color:#545454;}
.s-button{font-size:1rem;display:inline-flex;align-items:center;justify-content:center;vertical-align:middle;font-weight:500;line-height:1.15;margin:0;padding:.5rem 1.25rem;cursor:pointer;color:#131313;background-color:#fff;border:1px solid #d8d8d8;border-radius:100px;white-space:nowrap;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;}
.s-button:focus,.s-button:hover{color:#131313;text-decoration:none;background:#fff;}
.s-button:hover>svg,.s-button>svg{fill:currentColor;}
.s-button--transparent,.s-button--transparent:focus,.s-button--transparent:hover{background:0 0;border-color:transparent;}
.s-button--text-link{padding:0;color:inherit;background:0 0;border-color:transparent;border-radius:0;-webkit-appearance:none;}
.s-button--text-link:focus,.s-button--text-link:hover{color:inherit;background:0 0;border-color:transparent;}
.global-nav__items>li{flex-grow:0;flex-shrink:1;flex-basis:auto;margin:0 0 0 1.25rem;}
.global-nav__link{display:block;position:relative;color:#acacac;text-decoration:none;padding-top:1.25rem;padding-bottom:1.25rem;}
.global-nav__link:focus,.global-nav__link:hover{color:#fff;text-decoration:none;}
.global-nav__icon{stroke:#acacac;vertical-align:middle;}
.global-nav__link:hover .global-nav__icon{stroke:#fff;}
.global-nav__dropdown-toggle{background:0 0;border:none;color: #acacac !important;padding-bottom:0;padding-top:0;}
.global-nav__dropdown-toggle:hover{color: #fff !important;}
.global-nav__dropdown-content{left:auto;right:0;top:80%;border-radius:4px;padding:.5rem 0 0;}
.global-nav__dropdown-content>li>a{font-size:.875rem;line-height:1.5;font-weight:400;padding:.5rem 1rem;}
.global-nav__dropdown-content>li>a:focus,.global-nav__dropdown-content>li>a:hover{background:#FC0254;color:#fff;}
.global-nav__dropdown-content>li:last-child a:focus,.global-nav__dropdown-content>li:last-child a:hover{border-radius:0 0 4px 4px;}
img{max-width:100%;height:auto;vertical-align:middle;}
@media screen and (max-width:767px){
.s-hide-sm{display:none;}
}
/*! CSS Used from: Embedded */
.global-nav__icon--caret[_ngcontent-serverApp-c11]{width:8px;height:5px;margin:0 0 0 .25rem;}
.global-nav__avatar[_ngcontent-serverApp-c11]{width:24px;height:24px;border-radius:50%;border:2px solid #acacac;background:#e9e9e9;}
.global-nav__link[_ngcontent-serverApp-c11]:hover   .global-nav__avatar[_ngcontent-serverApp-c11]{border-color:#fff;}
.nav-dropdown__item--profile[_ngcontent-serverApp-c11]{border-bottom:1px solid #e9e9e9;}
.nav-dropdown__item--profile[_ngcontent-serverApp-c11] > a[_ngcontent-serverApp-c11]:hover{background:0 0;color:#000;}
.nav-dropdown__item[_ngcontent-serverApp-c11] > a[_ngcontent-serverApp-c11]{padding:.5rem 1rem;}
.nav-dropdown__item--profile[_ngcontent-serverApp-c11] > a[_ngcontent-serverApp-c11]{padding:.5rem 1rem 1rem;}
.nav-dropdown__item--border[_ngcontent-serverApp-c11]{border-bottom:1px solid #e9e9e9;}
.nav-dropdown__username[_ngcontent-serverApp-c11]{display:block;font-size:1rem;line-height:1.25;font-weight:500;}
@media screen and (min-width:768px){
.nav-dropdown__username[_ngcontent-serverApp-c11]{font-size:1rem;}
}
a[_ngcontent-serverApp-c11]:hover   .nav-dropdown__profile[_ngcontent-serverApp-c11]{color:#FC0254;}

@media screen and (max-width:600px)
{
	#dropdown_user{
	    top: 40px;transform: translate3d(12rem, 44px, 0px) !important;
	}
}

@media screen and (min-width:605px)
{
	#dropdown_user{
		top: 40px;transform: translate3d(73rem, 44px, 0px) !important;
	}
}


</style>

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

    {{--
	<!-- Header section -->
	<header id="headerWide" class="header-section clearfix">
		<a href="/" class="site-logo">
			<img width="300" src="{{ asset('assets/logos/repetbox2.png') }}" alt="">
		</a>
		<div class="header-right">
			<a href="#" class="hr-btn">Help</a>
			<span>|</span>
            @guest
			<div class="user-panel">
				<a href="/login" class="login">Connexion</a>
				<a href="/register" class="register">Inscription</a>
			</div>
            @endguest
		</div>
		<ul class="main-menu">
            @auth
            <li>
                <a href="#">Studio</a>
                <ul class="sub-menu">
                    <li><a href="#">Créer un enregistrement</a></li>
        			<li><a href="#">Rechercher des musiciens</a></li>
                    <li><a href="#">Utiliser Studio'Box</a></li>
                </ul>
            </li>
            <li><a href="#">Contactez-nous</a></li>
            @endauth
            @php $locale = session()->get('locale'); @endphp
            <li>
                @switch($locale)
                    @case('en')
                <a href="#">Langue (English)</a>
                    @break
                    @default
                <a href="#">Langue (Français)</a>
                @endswitch
				<ul class="sub-menu">
					<li><a href="lang/en"><img src="https://upload.wikimedia.org/wikipedia/en/thumb/a/ae/Flag_of_the_United_Kingdom.svg/1200px-Flag_of_the_United_Kingdom.svg.png" width="30px" height="20x">English</a></li>
					<li><a href="lang/fr"><img src="https://cdn.webshopapp.com/shops/94414/files/52383156/flag-of-france.jpg" width="30px" height="20x">Français</a></li>
				</ul>
			</li>
            @auth
            <li>
                <a href="#"><i class="fa fa-user-circle"></i> &nbsp; {{Auth::user()->name}}</a>
                <ul class="sub-menu">
					<li><a href="/home">Mon profil</a></li>
                    <li><a href="/recordings">Enregistrements</a></li>
                    <li><a href="#">Répétitions</a></li>
                    <li><a href="#">Messagerie</a></li>
                    <li><a href="#">Studio'Plan</a></li>
                    <li><a href="#">Importer</a></li>
					<li><a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> &nbsp;Déconnexion</a>
                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                             @csrf
                         </form>
                    </li>
				</ul>
            </li>
            @endauth

		</ul>
	</header>
	<!-- Header section end -->
    --}}

    <header id="headerPhone" _ngcontent-serverapp-c2="" class="global-nav s-base-type-reset ng-star-inserted">
      <section _ngcontent-serverapp-c2="" class="global-nav__menu-button">
        <button id="openMenuPhone" _ngcontent-serverapp-c2="" aria-label="Open main navigation" class="s-button s-button--transparent s-button--no-padding" data-qa="navbar-mobile-menu">
          <i class="fa fa-bars"></i>
        </button>
      </section>
      <app-sidetray _ngcontent-serverapp-c2="" _nghost-serverapp-c9="">
        <div _ngcontent-serverapp-c9="" class="sidetray-wrapper s-hide-lg--up">
          <div _ngcontent-serverapp-c9="" class="sidetray" id="sidetray">
            <nav _ngcontent-serverapp-c9="" class="sidetray__main" role="navigation">
              <ul _ngcontent-serverapp-c9="" class="sidetray__items">
                <!---->
                <li _ngcontent-serverapp-c9="" class="sidetray__item">
                  <!---->
                  <!----><a _ngcontent-serverapp-c9="" class="sidetray__link ng-star-inserted" data-qa="sidetray-home" routerlink="/" href="/">Accueil</a></li>
                 @auth
                <li _ngcontent-serverapp-c9="" class="sidetray__item"><a _ngcontent-serverapp-c9="" class="sidetray__link" data-qa="sidetray-studio" routerlink="/studio" routerlinkactive="is-active" href="/recordings/create">Créer un enregistrement</a></li>
                <li _ngcontent-serverapp-c9="" class="sidetray__item"><a _ngcontent-serverapp-c9="" class="sidetray__link" data-qa="sidetray-community" routerlink="/explore/contests" routerlinkactive="is-active" href="#">Rechercher des musiciens</a>
                </li>
                @endauth
								<li _ngcontent-serverapp-c9="" class="sidetray__item"><a _ngcontent-serverapp-c9="" class="sidetray__link" data-qa="sidetray-community" routerlink="/explore/contests" routerlinkactive="is-active" href="/studioPlan">Mon Studio'Plan</a>
                </li>
                <li _ngcontent-serverapp-c9="" class="sidetray__item"><a _ngcontent-serverapp-c9="" class="sidetray__link" data-qa="sidetray-sounds" routerlink="/sounds" routerlinkactive="is-active" href="#">Utiliser Studio'Box</a></li>
                <li _ngcontent-serverapp-c9="" class="sidetray__item"><a _ngcontent-serverapp-c9="" class="sidetray__link" data-qa="sidetray-plugins" routerlink="/plugins" routerlinkactive="is-active" href="#">Contactez-nous</a></li>
                <!---->
              </ul>
            </nav>
            <!--
            <section _ngcontent-serverapp-c9="" class="sidetray__secondary">
              <ul _ngcontent-serverapp-c9="" class="sidetray__items">
                <li _ngcontent-serverapp-c9="" class="sidetray__item"><a _ngcontent-serverapp-c9="" class="sidetray__link" data-qa="sidetray-blog" href="https://splice.com/blog" rel="noopener" target="_blank">Blog</a></li>
                <li _ngcontent-serverapp-c9="" class="sidetray__item"><a _ngcontent-serverapp-c9="" class="sidetray__link" data-qa="sidetray-help" href="https://support.splice.com/hc/en-us" rel="noopener" target="_blank">Help</a></li>
              </ul>
            </section>
        -->
            <section _ngcontent-serverapp-c9="" class="sidetray__meta">
              <ul _ngcontent-serverapp-c9="" class="sidetray__social-items">
                <li _ngcontent-serverapp-c9="" class="sidetray__social-item"><a _ngcontent-serverapp-c9="" href="#"><span _ngcontent-serverapp-c9="" class="s-hide-visually">Facebook</span><i
                      _ngcontent-serverapp-c9="" aria-hidden="true" class="fa fa-facebook-square"></i></a></li>
                <li _ngcontent-serverapp-c9="" class="sidetray__social-item"><a _ngcontent-serverapp-c9="" href="#"><span _ngcontent-serverapp-c9="" class="s-hide-visually">Twitter</span><i _ngcontent-serverapp-c9=""
                      aria-hidden="true" class="fa fa-twitter"></i></a></li>
                <li _ngcontent-serverapp-c9="" class="sidetray__social-item"><a _ngcontent-serverapp-c9="" href="#"><span _ngcontent-serverapp-c9="" class="s-hide-visually">YouTube</span><i
                      _ngcontent-serverapp-c9="" aria-hidden="true" class="fa fa-youtube-play"></i></a></li>
                <li _ngcontent-serverapp-c9="" class="sidetray__social-item"><a _ngcontent-serverapp-c9="" href="#"><span _ngcontent-serverapp-c9="" class="s-hide-visually">Instagram</span><i
                      _ngcontent-serverapp-c9="" aria-hidden="true" class="fa fa-instagram"></i></a></li>
              </ul>
              <!--
              <ul _ngcontent-serverapp-c9="" class="sidetray__meta-items">
                <li _ngcontent-serverapp-c9="" class="sidetray__meta-item"><a _ngcontent-serverapp-c9="" class="sidetray__meta-link" data-qa="sidetray-jobs" href="#" rel="noopener" target="_blank">Carrières</a></li>
                <li _ngcontent-serverapp-c9="" class="sidetray__meta-item"><a _ngcontent-serverapp-c9="" class="sidetray__meta-link" data-qa="sidetray-terms" href="#" rel="noopener" target="_blank">Terms</a></li>
                <li _ngcontent-serverapp-c9="" class="sidetray__meta-item"><a _ngcontent-serverapp-c9="" class="sidetray__meta-link" data-qa="sidetray-privacy" href="#" rel="noopener" target="_blank">Privacy Policy</a></li>
              </ul>
          -->
              <p _ngcontent-serverapp-c9="" class="sidetray__copyright">© <script>document.write(new Date().getFullYear());</script> RépétBox.com</p>
            </section>
          </div>
          <div _ngcontent-serverapp-c9="" class="sidetray-overlay" data-target="#sidetray"></div>
        </div>
      </app-sidetray>
      <section _ngcontent-serverapp-c2="" class="global-nav__brand">
          <a _ngcontent-serverapp-c2="" class="global-nav__link" data-qa="navbar-logo" routerlink="/" href="/">
              <span _ngcontent-serverapp-c2="" class="s-hide-visually">Accueil</span>
              <img width="300" src="{{ asset('assets/logos/repetbox2.png') }}" alt="">
        </a>
      </section>
      <nav _ngcontent-serverapp-c2="" class="global-nav__main">
        <ul _ngcontent-serverapp-c2="" class="global-nav__items">
          <!---->
          <!---->
          <!---->
          <!---->
          <!---->
          <!---->
          @auth
          <li id="dropdownStudio" _ngcontent-serverapp-c11="" class="dropdown global-nav__dropdown global-nav__dropdown--user s-hide-sm">
                <a onclick="dropdownStudio()" _ngcontent-serverapp-c2="" class="global-nav__link global-nav__dropdown-toggle" data-qa="navbar-blog" rel="noopener">
                    Studio
                    <i class="fa fa-angle-down"></i>
                </a>
                <ul style="top: 40px;" _ngcontent-serverapp-c11="" class="dropdown-menu global-nav__dropdown-content">

                    <li _ngcontent-serverapp-c11="" class="nav-dropdown__item"><a _ngcontent-serverapp-c11="" data-qa="navbar-billing" routerlink="/profile/billing" href="/recordings/create"> Créer un enregistrement </a></li>
                    <li _ngcontent-serverapp-c11="" class="nav-dropdown__item"><a _ngcontent-serverapp-c11="" data-qa="navbar-settings" routerlink="/profile/settings" href="/profile/settings"> Rechercher des musiciens </a></li>
                    <li _ngcontent-serverapp-c11="" class="nav-dropdown__item nav-dropdown__item--border"><a _ngcontent-serverapp-c11="" data-qa="navbar-download" routerlink="/download" href="/download"> Utiliser Studio'Box </a></li>
                    <li _ngcontent-serverapp-c11="" class="nav-dropdown__item"><a _ngcontent-serverapp-c11="" data-qa="navbar-terms" routerlink="/terms" href="/terms">Contactez-nous</a></li>
                </ul>
            </li>
            @endauth
            @php $locale = session()->get('locale'); @endphp
            <li id="dropdownLanguage" _ngcontent-serverapp-c11="" class="dropdown global-nav__dropdown global-nav__dropdown--user s-hide-sm">
                  <a onclick="dropdownLanguage()" _ngcontent-serverapp-c2="" class="global-nav__link global-nav__dropdown-toggle" data-qa="navbar-blog" rel="noopener">
                      @switch($locale)
                          @case('en')
                      Langue (English)
                      @break
                      @default
                      Langue (Français)
                      @endswitch
                      <i class="fa fa-angle-down"></i>
                  </a>
                  <ul style="top: 40px;" _ngcontent-serverapp-c11="" class="dropdown-menu global-nav__dropdown-content">

                      <li _ngcontent-serverapp-c11="" class="nav-dropdown__item">
                          <a _ngcontent-serverapp-c11="" data-qa="navbar-billing" href="/lang/en">
                              <img src="https://upload.wikimedia.org/wikipedia/en/thumb/a/ae/Flag_of_the_United_Kingdom.svg/1200px-Flag_of_the_United_Kingdom.svg.png" width="30px" height="20x">
                               English
                           </a>
                       </li>
                       <li _ngcontent-serverapp-c11="" class="nav-dropdown__item">
                           <a _ngcontent-serverapp-c11="" data-qa="navbar-billing" href="/lang/fr">
                               <img src="https://cdn.webshopapp.com/shops/94414/files/52383156/flag-of-france.jpg" width="30px" height="20x">
                                Français
                            </a>
                        </li>
                  </ul>
              </li>
							<li _ngcontent-serverapp-c2="" class="ng-star-inserted">
								<a _ngcontent-serverapp-c2="" class="global-nav__link" data-qa="navbar-sounds" data-tab="sounds" routerlink="/features/sounds" routerlinkactive="is-active" href="/studioPlan">
									Mon Studio'Plan
								</a>
							</li>

          <!---->
        </ul>
      </nav>
      <section _ngcontent-serverapp-c2="" class="global-nav__user">
        <!---->
        <app-navbar-user-logged-out _ngcontent-serverapp-c2="" _nghost-serverapp-c10="" class="ng-star-inserted">
          <ul _ngcontent-serverapp-c10="" class="global-nav__items">
             @guest
            <li _ngcontent-serverapp-c10=""><a _ngcontent-serverapp-c10="" class="global-nav__link" href="/login">Connexion</a></li>
            <li _ngcontent-serverapp-c10=""><a _ngcontent-serverapp-c10="" class="global-nav__signup s-button" href="/register">Inscription</a></li>
            @endguest
            @php $locale = session()->get('locale'); @endphp
            <li id="dropdownLanguagePhone" _ngcontent-serverapp-c11="" class="">
                  <a onclick="dropdownLanguagePhone()" _ngcontent-serverapp-c2="" class="global-nav__link global-nav__dropdown-toggle" data-qa="navbar-blog" rel="noopener">
                      @switch($locale)
                          @case('en')
                      <img src="https://upload.wikimedia.org/wikipedia/en/thumb/a/ae/Flag_of_the_United_Kingdom.svg/1200px-Flag_of_the_United_Kingdom.svg.png" width="30px" height="20x">
                      @break
                      @default
                      <img src="https://cdn.webshopapp.com/shops/94414/files/52383156/flag-of-france.jpg" width="30px" height="20x">
                      @endswitch
                      <i class="fa fa-angle-down"></i>
                  </a>
                  <ul style="top: 40px;" _ngcontent-serverapp-c11="" class="dropdown-menu global-nav__dropdown-content">

                      <li _ngcontent-serverapp-c11="" class="nav-dropdown__item">
                          <a _ngcontent-serverapp-c11="" data-qa="navbar-billing" href="/lang/en">
                              <img src="https://upload.wikimedia.org/wikipedia/en/thumb/a/ae/Flag_of_the_United_Kingdom.svg/1200px-Flag_of_the_United_Kingdom.svg.png" width="30px" height="20x">
                               English
                           </a>
                       </li>
                       <li _ngcontent-serverapp-c11="" class="nav-dropdown__item">
                           <a _ngcontent-serverapp-c11="" data-qa="navbar-billing" href="/lang/fr">
                               <img src="https://cdn.webshopapp.com/shops/94414/files/52383156/flag-of-france.jpg" width="30px" height="20x">
                                Français
                            </a>
                        </li>
                  </ul>
              </li>
            @auth
            <li id="dropdownUser" _ngcontent-serverapp-c11="" class="">
                <button  onclick="dropdownUser()" _ngcontent-serverapp-c11=""
                    class="global-nav__dropdown-toggle" data-qa="navbar-user-dropdown" data-toggle="dropdown">
                    <img _ngcontent-serverapp-c11="" class="global-nav__avatar"
                        src="/images/users/{{Auth::user()->image}}">
                        <i class="fa fa-angle-down"></i>
                  </button>
                  <ul id="dropdown_user" class="dropdown-menu global-nav__dropdown-content">
                      <li _ngcontent-serverapp-c11="" class="nav-dropdown__item nav-dropdown__item--profile  nav-dropdown__item--border"><a _ngcontent-serverapp-c11="" data-qa="navbar-profile" href="/home"><strong _ngcontent-serverapp-c11=""
                                class="nav-dropdown__username" data-qa="navbar-username">{{Auth::user()->name}}</strong><span _ngcontent-serverapp-c11="" class="nav-dropdown__profile" data-qa="navbar-view-profile">Mon compte</span></a></li>
                      <li _ngcontent-serverapp-c11="" class="nav-dropdown__item"><a _ngcontent-serverapp-c11="" data-qa="navbar-billing" routerlink="/profile/billing" href="/recordings"> Enregistrements </a></li>
                      <li _ngcontent-serverapp-c11="" class="nav-dropdown__item"><a _ngcontent-serverapp-c11="" data-qa="navbar-settings" routerlink="/profile/settings" href="#"> Répétitions </a></li>
                      <li _ngcontent-serverapp-c11="" class="nav-dropdown__item nav-dropdown__item--border"><a _ngcontent-serverapp-c11="" data-qa="navbar-download" routerlink="/download" href="#"> Messagerie </a></li>
                      <li _ngcontent-serverapp-c11="" class="nav-dropdown__item"><a _ngcontent-serverapp-c11="" data-qa="navbar-terms" routerlink="/terms" href="#">Studio'Plan</a></li>
                      <li _ngcontent-serverapp-c11="" class="nav-dropdown__item nav-dropdown__item--border"><a _ngcontent-serverapp-c11="" data-qa="navbar-privacy-policy" routerlink="/privacy_policy" href="#">Importer</a></li>
                      <li _ngcontent-serverapp-c11="" class="nav-dropdown__item">
                          <a _ngcontent-serverapp-c11="" href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                              <i class="fa fa-sign-out"></i> &nbsp;
                              Se déconnecter
                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  @csrf
                              </form>
                          </a>
                      </li>
                  </ul>
              </li>
              @endauth

          </ul>

        </app-navbar-user-logged-out>
        <!---->
      </section>
    </header>

    @yield('content')

	<!-- Footer section -->
	<footer class="footer-section">
		<div class="container">
			<div class="row">
				<div class="col-xl-6 col-lg-7 order-lg-2">
					<div class="row">
						<div class="col-sm-4">
							<div class="footer-widget">
								<h2>About us</h2>
								<ul>
									<li><a href="">Our Story</a></li>
									<li><a href="">Sol Music Blog</a></li>
									<li><a href="">History</a></li>
								</ul>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="footer-widget">
								<h2>Products</h2>
								<ul>
									<li><a href="">Music</a></li>
									<li><a href="">Subscription</a></li>
									<li><a href="">Custom Music</a></li>
									<li><a href="">Footage</a></li>
								</ul>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="footer-widget">
								<h2>Playlists</h2>
								<ul>
									<li><a href="">Newsletter</a></li>
									<li><a href="">Careers</a></li>
									<li><a href="">Press</a></li>
									<li><a href="">Contact</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-lg-5 order-lg-1">
					<img width="300" src="{{ asset('assets/logos/repetbox2.png') }}" alt="">
					<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
					<div class="social-links">
						<a href=""><i class="fa fa-instagram"></i></a>
						<a href=""><i class="fa fa-pinterest"></i></a>
						<a href=""><i class="fa fa-facebook"></i></a>
						<a href=""><i class="fa fa-twitter"></i></a>
						<a href=""><i class="fa fa-youtube"></i></a>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer section end -->




@if(session('status'))
  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal body -->
        <div class="modal-body">
          {{session('status')}}
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button style="background: #FC0254"; type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
        </div>

      </div>
    </div>
  </div>

  <script type="text/javascript">
    $(window).on('load',function(){
        $('#myModal').modal({
          show: true
      });
    });
</script>
@endif

    <script type="text/javascript">

    $('select').selectpicker();

    </script>

    <script type="text/javascript">
      /* Push the body and the nav over by 285px over */
      $('#openMenuPhone').click(function() {
        $('.sidetray').addClass('is-open');
        $('.sidetray-overlay').addClass('is-active');
      });

    $('.sidetray-overlay').click(function() {
      $('.sidetray').removeClass('is-open');
      $('.sidetray-overlay').removeClass('is-active');
    });

    </script>

    {{--
    <script type="text/javascript">

        /* When the user clicks on the button,
    toggle between hiding and showing the dropdown content */
    function dropdownUser() {
      document.getElementById("dropdownUser").classList.toggle("open");
    }

    // Close the dropdown menu if the user clicks outside of it
    window.onclick = function(event) {
      if (!event.target.matches('.global-nav__dropdown-toggle')) {
        var dropdowns = document.getElementsByClassName("global-nav__dropdown");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('open')) {
            openDropdown.classList.remove('open');
          }
        }
      }
    }

    </script>
    --}}

    <script type="text/javascript">

        /* When the user clicks on the button,
    toggle between hiding and showing the dropdown content */
    function dropdownStudio() {
      document.getElementById("dropdownStudio").classList.toggle("open");
    }

    // Close the dropdown menu if the user clicks outside of it
    window.onclick = function(event) {
      if (!event.target.matches('.global-nav__dropdown-toggle')) {
        var dropdowns = document.getElementsByClassName("global-nav__dropdown");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('open')) {
            openDropdown.classList.remove('open');
          }
        }
      }
    }

    </script>


    <script type="text/javascript">

        /* When the user clicks on the button,
    toggle between hiding and showing the dropdown content */
    function dropdownLanguage() {
      document.getElementById("dropdownLanguage").classList.toggle("open");
    }

    // Close the dropdown menu if the user clicks outside of it
    window.onclick = function(event) {
      if (!event.target.matches('.global-nav__dropdown-toggle')) {
        var dropdowns = document.getElementsByClassName("global-nav__dropdown");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('open')) {
            openDropdown.classList.remove('open');
          }
        }
      }
    }

    </script>


    <script type="text/javascript">

        /* When the user clicks on the button,
    toggle between hiding and showing the dropdown content */
    function dropdownLanguagePhone() {
      document.getElementById("dropdownLanguagePhone").classList.toggle("open");
    }

    // Close the dropdown menu if the user clicks outside of it
    window.onclick = function(event) {
      if (!event.target.matches('.global-nav__dropdown-toggle')) {
        var dropdowns = document.getElementsByClassName("global-nav__dropdown");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('open')) {
            openDropdown.classList.remove('open');
          }
        }
      }
    }

    </script>

	<!--====== Javascripts & Jquery ======-->

	<script src="/main_theme/js/main.js"></script>

    <!-- Include the Quill library -->
  <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
  <script src="/js/quill/image-resize.min.js"></script>
  <script src="/js/quill/video-resize.min.js"></script>




<script type="text/javascript">


//initialisation de l'editeur
var options = {
modules: {
  toolbar: [
    [{ header: [1, 2, false] }],
    ['size', 'bold', 'italic', 'underline'],
    ['image', 'code-block', 'video', 'blockquote', 'code', 'align', 'link'],
    ['color'],
    [{ list: 'ordered' }, { list: 'bullet' }]
],
imageResize: {
     modules: [ 'Resize', 'DisplaySize', 'Toolbar' ]
 },
 videoResize: {
        modules: [ 'Resize', 'DisplaySize', 'Toolbar' ]
    },
 syntax: true,
},
placeholder: 'Ecrivez ici...',
theme: 'snow'  // or 'bubble'
};
var quill = new Quill('#richeditor', options);


var form = document.getElementById('bioform');

form.onsubmit = function() {
// Populate hidden form on submit
var bio = document.querySelector('input[name=bio]');
bio.value = quill.root.innerHTML;
console.log("Submitted",quill.root.innerHTML ,$(form).serialize(), $(form).serializeArray());

// No back end to actually submit to!
// alert('Open the console to see the submit data!')
return true;
};

</script>






	</body>
</html>
