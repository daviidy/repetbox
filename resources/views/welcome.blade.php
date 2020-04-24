@extends('layouts.menu')

@section('content')

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
                            {{--
                            <a href="#" class="site-btn sb-c2">Start free trial</a>
                            --}}
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


<!-- Intro section -->
<section class="intro-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title">
                    <h2 id="registerSection">Inscrivez-vous maintenant</h2>
                </div>
            </div>
            <div class="col-lg-6">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                <a href="#" class="site-btn">Try it now</a>
            </div>
        </div>
    </div>
</section>
<!-- Intro section end -->

{{--
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

@endsection
