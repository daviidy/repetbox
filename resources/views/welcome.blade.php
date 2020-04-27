@extends('layouts.menu')
@section('title', 'Plateforme communautaire pour musiciens')

@section('content')

<style media="screen">

/*! CSS Used from: https://spliceblob.splice.com/web-cli/styles.d56bdd3ef3301985551c.css */
section{display:block;}
a{background:0 0;}
a:active,a:hover{outline:0;}
h1{margin:.67em 0;}
svg:not(:root){overflow:hidden;}
@media print{
*{text-shadow:none!important;color:#000!important;background:0 0!important;box-shadow:none!important;}
a,a:visited{text-decoration:underline;}
a[href]:after{content:" (" attr(href) ")";}
a[href^="#"]:after{content:"";}
p{orphans:3;widows:3;}
}
*,:after,:before{box-sizing:border-box;}
a:focus,a:hover{color:#282828;text-decoration:underline;}
a:focus{outline:dotted thin;outline:-webkit-focus-ring-color auto 5px;outline-offset:-2px;}
h1{font-weight:500;line-height:1.1;color:inherit;}
h1{margin-top:20px;margin-bottom:10px;}
h1{font-size:36px;}
p{margin:0 0 10px;}
body h1{font-weight:500;}
a{color:#FC0254;text-decoration:none;cursor:pointer;}
a:hover{text-decoration:underline;color:#FC0254;}
::-webkit-input-placeholder{color:#545454;}
:-moz-input-placeholder{color:#545454;}
::-moz-input-placeholder{color:#545454;}
:-ms-placeholder{color:#545454;}
.s-button{font-size:1rem;display:inline-flex;align-items:center;justify-content:center;vertical-align:middle;font-weight:500;line-height:1.15;margin:0;padding:.5rem 1.25rem;cursor:pointer;color:#131313;border-radius:100px;white-space:nowrap;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;}
.s-button:focus,.s-button:hover{color:#131313;text-decoration:none;background:#fff;}
.s-button--large{padding:.875rem 2rem;}
.s-button--blue{background:#FC0254;color:#fff;border-color:transparent;}
.s-button--blue:focus,.s-button--blue:hover{background:#FC0254;color:#fff;}
.s-hero{min-height:90vh;display:flex;flex-direction:column;justify-content:center;position:relative;overflow:hidden;color:#fff;background-color:#545454;background-size:cover;background-position:center center;background-repeat:no-repeat;}
.s-hero__content-wrap{display:flex;flex:1;flex-direction:column;justify-content:center;width:100%;}
.s-hero--left-aligned .s-hero__content-wrap{align-items:flex-start;}
.s-hero__content{max-width:420px;position:relative;padding:calc(3rem - 8px) 0;}
.s-hero__title{font-size:4.375rem;font-weight:500;line-height:1.25;}
@media screen and (max-width:768px){
.s-hero__title{font-size:2rem;}
}
.s-hero__copy{font-size:calc(1.25rem - 1px);margin-bottom:calc(2rem - 2px);max-width:360px;}
.s-hero__footer{width:100%;margin-top:auto;padding-bottom:calc(2rem - 2px);text-align:center;display:none;}
@media screen and (min-width:768px){
.s-hero__footer{display:block;}
}
.s-hero__skip-link{color:#fff;text-decoration:none;font-size:.875rem;font-weight:500;bottom:calc(2rem - 2px);}
.s-hero__skip-link:focus,.s-hero__skip-link:hover{color:#fff;text-decoration:none;}
@media screen and (max-width:767px){
.s-hero__skip-link{display:none;}
}
.s-hero__caret{display:block;margin:6px auto 0;width:12px;height:13px;stroke:#fff;}
.s-hero__artistname{position:absolute;bottom:calc(2rem - 2px);}
.s-hero__artistname.s-hero__artistname--right-aligned{text-align:right;right:calc(2rem - 2px);}
.s-hero__credit{margin-bottom:0;font-size:.875rem;color:rgba(255,255,255,.65);}
.s-hero__credit.s-hero__credit--name{font-weight:500;}
.s-wrapper{max-width:calc(1200px + (3.75rem * 2));margin:0 auto;padding-left:1.5em;padding-right:1.5em;}
@media screen and (min-width:480px){
.s-wrapper{padding-left:3.75rem;padding-right:3.75rem;}
}
/*! CSS Used from: Embedded */
.s-hero[_ngcontent-serverApp-c12]{background-image:url(https://media-private.canva.com/aMMbE/MAD6lpaMMbE/1/tl.png?response-expires=Mon%2C%2027%20Apr%202020%2000%3A55%3A32%20GMT&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Date=20200426T224415Z&X-Amz-SignedHeaders=host&X-Amz-Expires=7876&X-Amz-Credential=AKIAJWF6QO3UH4PAAJ6Q%2F20200426%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Signature=25967b1e0deadbbd46b6bd06ab8aa73112959710345eb024b281d23c71d66f31);}
@media (-webkit-min-device-pixel-ratio:1.5),(min-resolution:144dpi){
.s-hero[_ngcontent-serverApp-c12]{background-image:url(https://media-private.canva.com/aMMbE/MAD6lpaMMbE/1/tl.png?response-expires=Mon%2C%2027%20Apr%202020%2000%3A55%3A32%20GMT&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Date=20200426T224415Z&X-Amz-SignedHeaders=host&X-Amz-Expires=7876&X-Amz-Credential=AKIAJWF6QO3UH4PAAJ6Q%2F20200426%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Signature=25967b1e0deadbbd46b6bd06ab8aa73112959710345eb024b281d23c71d66f31);}
}
@media (min-width:768px){
.above-fold[_ngcontent-serverApp-c12]{display:flex;}
#home-hero-section[_ngcontent-serverApp-c12]{flex:1 1 50%;}
}

</style>

{{--
<!-- Hero section -->
<section class="hero-section">
    <div class="hero-slider owl-carousel">
        <div class="hs-item">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="hs-text">
                            <h2><span>1ère plateforme communautaire pour musiciens</span></h2>
                            <p>- Réserve ton studio d'enregistrement virtuel <br>
                            - Répète ton répertoire avec tes musiciens</p>
                            <a href="#registerSection" class="site-btn">S'inscrire</a>
                            <a href="#" class="site-btn sb-c2">Start free trial</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="hr-img">
                            <img src="/main_theme/img/hero-bg.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

</section>
<!-- Hero section end -->





<!-- How section -->
<section class="how-section spad set-bg" data-setbg="/main_theme/img/how-to-bg.jpg">
    <div class="container text-white">
        <div class="section-title">
            <h2>How it works</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="how-item">
                    <div class="hi-icon">
                        <img src="/main_theme/img/icons/brain.png" alt="">
                    </div>
                    <h4>Create an account</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipi-scing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="how-item">
                    <div class="hi-icon">
                        <img src="/main_theme/img/icons/pointer.png" alt="">
                    </div>
                    <h4>Choose a plan</h4>
                    <p>Donec in sodales dui, a blandit nunc. Pellen-tesque id eros venenatis, sollicitudin neque sodales, vehicula nibh. Nam massa odio, portti-tor vitae efficitur non. </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="how-item">
                    <div class="hi-icon">
                        <img src="/main_theme/img/icons/smartphone.png" alt="">
                    </div>
                    <h4>Download Music</h4>
                    <p>Ablandit nunc. Pellentesque id eros venenatis, sollicitudin neque sodales, vehicula nibh. Nam massa odio, porttitor vitae efficitur non, ultric-ies volutpat tellus. </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- How section end -->

<!-- Concept section -->
<section class="concept-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title">
                    <h2>Our Concept & artists</h2>
                </div>
            </div>
            <div class="col-lg-6">
                <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="concept-item">
                    <img src="/main_theme/img/concept/1.jpg" alt="">
                    <h5>Soul Music</h5>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="concept-item">
                    <img src="/main_theme/img/concept/2.jpg" alt="">
                    <h5>Live Concerts</h5>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="concept-item">
                    <img src="/main_theme/img/concept/3.jpg" alt="">
                    <h5>Dj Sets</h5>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="concept-item">
                    <img src="/main_theme/img/concept/4.jpg" alt="">
                    <h5>Live Streems</h5>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Concept section end -->

<!-- Subscription section -->
<section class="subscription-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="sub-text">
                    <h2>Subscription from $15/month</h2>
                    <h3>Start a free trial now</h3>
                    <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <a href="#" class="site-btn">Try it now</a>
                </div>
            </div>
            <div class="col-lg-6">
                <ul class="sub-list">
                    <li><img src="/main_theme/img/icons/check-icon.png" alt="">Play any track</li>
                    <li><img src="/main_theme/img/icons/check-icon.png" alt="">Listen offline</li>
                    <li><img src="/main_theme/img/icons/check-icon.png" alt="">No ad interruptions</li>
                    <li><img src="/main_theme/img/icons/check-icon.png" alt="">Unlimited skips</li>
                    <li><img src="/main_theme/img/icons/check-icon.png" alt="">High quality audio</li>
                    <li><img src="/main_theme/img/icons/check-icon.png" alt="">Shuffle play</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Subscription section end -->

<!-- Premium section end -->
<section class="premium-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title">
                    <h2>Why go Premium</h2>
                </div>
            </div>
            <div class="col-lg-6">
                <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="premium-item">
                    <img src="/main_theme/img/premium/1.jpg" alt="">
                    <h4>No ad interruptions </h4>
                    <p>Consectetur adipiscing elit</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="premium-item">
                    <img src="/main_theme/img/premium/2.jpg" alt="">
                    <h4>High Quality</h4>
                    <p>Ectetur adipiscing elit</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="premium-item">
                    <img src="/main_theme/img/premium/3.jpg" alt="">
                    <h4>Listen Offline</h4>
                    <p>Sed do eiusmod tempor </p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="premium-item">
                    <img src="/main_theme/img/premium/4.jpg" alt="">
                    <h4>Download Music</h4>
                    <p>Adipiscing elit</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Premium section end -->

--}}



<div _ngcontent-serverapp-c12="" class="above-fold">
    <section _ngcontent-serverapp-c12="" class="s-hero s-hero--left-aligned" data-qa="home-hero-section" id="home-hero-section">
        <div _ngcontent-serverapp-c12="" class="s-hero__content-wrap s-wrapper">
            <div _ngcontent-serverapp-c12="" class="s-hero__content">
                <h1 _ngcontent-serverapp-c12="" class="s-hero__title">1ère plateforme<br _ngcontent-serverapp-c12="">communautaire<br _ngcontent-serverapp-c12="">pour musiciens</h1>
                <p _ngcontent-serverapp-c12="" class="s-hero__copy">
                    - Réserve ton studio d'enregistrement virtuel <br>
                    - Répète ton répertoire avec tes musiciens
                 </p><a _ngcontent-serverapp-c12=""
                  class="s-button s-button--blue s-button--large s-hero__cta" data-qa="home-hero-signup" href="/register">Inscrivez-vous</a>
            </div>
        </div>
        <div _ngcontent-serverapp-c12="" class="s-hero__footer">
            {{--
            <a _ngcontent-serverapp-c12="" class="s-hero__skip-link js-skip-link" href="#home-section-sounds">
            Learn more
                <svg _ngcontent-serverApp-c12="" aria-hidden="true" class="s-hero__caret"
                      role="presentation" viewBox="0 0 8 5" xmlns="http://www.w3.org/2000/svg">
                        <g _ngcontent-serverApp-c12="" fill-rule="evenodd" stroke-linecap="round" stroke-width="2">
                            <path _ngcontent-serverApp-c12="" d="M4 4L1 1"></path>
                            <path _ngcontent-serverApp-c12="" d="M4 4l3-3"></path>
                        </g>
                </svg>
            </a>
            --}}
            <div _ngcontent-serverapp-c12="" class="s-hero__artistname s-hero__artistname--right-aligned">
                <p _ngcontent-serverapp-c12="" class="s-hero__credit s-hero__credit--name">Denitia</p>
                <p _ngcontent-serverapp-c12="" class="s-hero__credit">Singer / Producer</p>
            </div>
        </div>
    </section>

    <!---->
</div>

<!-- Intro section -->
<section class="intro-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title">
                    <h4 id="registerSection">Vous souhaitez être informé de trucs et astuces sur Répét'Box ? <br>
                        Abonnez-vous gratuitement à la newsletter
                    </h4>
                </div>
            </div>
            <div class="col-lg-6">
                <form action="/subscribeNewsletter" method="post" class="contact-from">
                    <div class="row">
                        @csrf
                        <div class="col-md-12">
                            <input required type="email" name="user_email" placeholder="Votre adresse email">
                            <button type="submit" class="site-btn">Je m'inscris</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Intro section end -->







@endsection
