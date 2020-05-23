@extends('layouts.menu')
@section('title', 'Créer un enregistrement')

@section('content')

<style>

.vjs-control-bar{
    -webkit-transform: translate3d(0, 0, 0);
}

.video-js{
    -webkit-transform: translate3d(0, 0, 0) !important;
}
/* change player background color */
#myVideo {
  background-color: #08192D;
  margin: auto;
}
@media screen and (max-width: 600px)
{
    #myVideo {

      width: 100%;
    }
}

.kv-upload-progress .progress{
    display: none;
}

</style>


<style media="screen">
/* The switch - the box around the slider */
.switch {
position: relative;
display: inline-block;
width: 60px;
height: 34px;
}

/* Hide default HTML checkbox */
.switch input {
opacity: 0;
width: 0;
height: 0;
}

/* The slider */
.slider {
position: absolute;
cursor: pointer;
top: 0;
left: 0;
right: 0;
bottom: 0;
background-color: #ccc;
-webkit-transition: .4s;
transition: .4s;
}

.slider:before {
position: absolute;
content: "";
height: 26px;
width: 26px;
left: 4px;
bottom: 4px;
background-color: white;
-webkit-transition: .4s;
transition: .4s;
}

input:checked + .slider {
background-color: #2196F3;
}

input:focus + .slider {
box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
-webkit-transform: translateX(26px);
-ms-transform: translateX(26px);
transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
border-radius: 34px;
}

.slider.round:before {
border-radius: 50%;
}
</style>



<style media="screen">
div.sixtyprctwidth {
width: 65%;
padding-top: 65%;
}

div.profilepic {
background-size: cover;
background-position: center center;
margin-left: auto;
margin-right: auto;
border-radius: 50%;
}

div.checkedprofile {
    position: absolute;
    width: 30px;
    height: 30px;
    line-height: 30px;
    border-radius: 50%;
    background-color: #333;
    color: white;
    top: 7rem;
    right: 30%;
    font-size: 1.5rem;
    padding-left: 6px;
}



div.contentbox {
    background-color: #fff;
    -webkit-box-shadow: 0px 0px 12px 0px rgba(0,0,0,0.15);
    -moz-box-shadow: 0px 0px 12px 0px rgba(0,0,0,0.15);
    box-shadow: 0px 0px 12px 0px rgba(0,0,0,0.15);
}

.showProfile__button {
    text-align: right;
}

.button--primary{
    border-radius: 4px;
    border-width: 1px;
    border-style: solid;
    outline: none;
    padding: 8px 16px;
    text-transform: uppercase;
    -webkit-transition: background-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms,-webkit-box-shadow 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
    transition: background-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms,-webkit-box-shadow 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
    transition: background-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms,box-shadow 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
    transition: background-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms,box-shadow 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms,-webkit-box-shadow 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
    position: relative;
    overflow: hidden;
    color: #fff;
    background-color: #FC0254;
    border-color: #FC0254;
    -webkit-box-shadow: 0 1px 3px 0 rgba(0,0,0,0.1), 0 1px 2px 0 rgba(0,0,0,0.2);
    box-shadow: 0 1px 3px 0 rgba(0,0,0,0.1), 0 1px 2px 0 rgba(0,0,0,0.2);

    font-family: "Montserrat";
    font-size: .875rem;
    font-weight: 700;
    text-align: center;
    line-height: 1.5rem;

}

.button--primary:hover{
    position: relative;
    bottom: 5px;
    text-decoration: none;
    color: #fff;
}

.details{
    text-align: center;
}

.details-title{
    margin: 1rem;
}

.contentbox{
    padding: 2rem;
}

.center{
    text-align:center;
}

.left{
    float: left;
}

.right{
    float: right;
}

.contentbox_row{
    width: 80%;
    margin: 1rem auto;
}

@media screen and (max-width: 600px)
{
    .contentbox_row{
        width: 100%;
        margin: 1rem 0;
    }
    div.contentbox{
        background-color: #fff;
        -webkit-box-shadow: none;
        -moz-box-shadow:none;
        box-shadow: none;
    }
    .progress{
        height: 6px !important;
    }
    .progres{
        max-width: 50% !important;
        margin-top: 10px;
        padding: 0px;
    }
    .fa{
        font-size: small;
    }

    .mic{
        max-width: 10% !important;
        padding-left: 5px;
    }
    .xls{
        max-width: 50% !important;

    }
    .contentbox {
    padding: 25px 5px ;
    }
    .link{
        font-size: small;
        padding: 5px;
    }
    .input-group-btn .btn{
        font-size: 0.700rem;
    }
}
.progress-bar-vertical {
  width: 20px;
  min-height: 115px;
  display: flex;
  align-items: flex-end;
  margin-right: 20px;
  float: left;
}

.progress-bar-vertical .progress-bar {
  width: 100%;
  height: 0;
  -webkit-transition: height 0.6s ease;
  -o-transition: height 0.6s ease;
  transition: height 0.6s ease;
}

ul.progresslistv {
    list-style: none;
    padding-left: 18px;
    text-align: left;
}

.mini_title_in_row{
    margin: 2rem;
}

.text-left{
    text-align: left;
}


div.trafficlight {
    display: inline-block;
    width: 33px;
    height: 17px;
    background: #333;
    border-radius: 2px;
    border: 1px solid #111;
    top: 3px;
    margin-right: 4px;
}

div.trafficbulb {
    position: absolute;
    border: 1px solid black;
    height: 11px;
    width: 11px;
    margin: 2px;
    border-radius: 50%;
}

.redon {
    background-color: #f62c11;
    z-index: 1;
}

.greenon {
    background-color: #11f65d;
    z-index: 1;
}

.redoff {
    background-color: #400f0f;
}

.greenoff {
    background-color: #0c2a0a;
}

table {
    width: 95%;
    text-align: left;
    margin-left: auto;
    margin-right: auto;
}

div.pplminiatures {
    display: inline-block;
    margin: 1%;
    width: 21%;
    text-align: center;
    font-size: 8px;
}

div.creatorspics {
    display: inline-block;
    width: 95%;
    padding-top: 95%;
}

div.profilepic {
    background-size: cover;
    background-position: center center;
    margin-left: auto;
    margin-right: auto;
    border-radius: 50%;
}

div.videobloc {
    margin-bottom: 10px;
    padding-bottom: 8px;
    border-bottom: 1px solid #ccc;
}

.row_title{
    margin-bottom: 2rem;
}

div.pplsearchmin {
    display: inline-block;
    margin: 1%;
    width: 100%;
    text-align: center;
}


@media screen and (max-width: 600px){
    .showProfile__button{
        float: left;
        margin-bottom: 2rem;
    }
    div.checkedprofile {
        top: 6rem;
    }
}
</style>

<style media="screen">

.svg-icon{fill:currentColor;stroke:currentColor;stroke-width:0;vertical-align:top;}
.thumbnail{border-radius:4px;-webkit-box-shadow:0 1px 6px rgba(25,25,34,.16);box-shadow:0 1px 6px rgba(25,25,34,.16);display:inline-block;margin:0;max-height:100%;max-width:100%;overflow:hidden;position:relative;-webkit-transform:translateZ(0);transform:translateZ(0);vertical-align:top;}
.thumbnail .picture{background-color:#f4f4f4;background-color:var(--background-intermediate);display:block;position:relative;}
.thumbnail .picture:after{background-color:#fff;background-color:var(--background-primary);bottom:0;content:"";left:0;opacity:0;position:absolute;right:0;top:0;-webkit-transition-duration:.15s;transition-duration:.15s;-webkit-transition-property:opacity,background-color;transition-property:opacity,background-color;}
.thumbnail .picture.no-background{background-color:rgba(0,0,0,0);}
.thumbnail .picture-img{display:inline-block;vertical-align:top;}
.thumbnail .action-item-btn{background-color:#fff;background-color:var(--color-white);border-radius:50%;-webkit-box-shadow:0 3px 6px 0 rgba(0,0,0,.25);box-shadow:0 3px 6px 0 rgba(0,0,0,.25);color:#121216;color:var(--color-dark-grey-900);cursor:pointer;font-size:12px;height:36px;line-height:36px;opacity:0;position:relative;text-align:center;width:36px;-webkit-transition-duration:.15s;transition-duration:.15s;-webkit-transition-property:opacity,-webkit-transform;transition-property:opacity,-webkit-transform;transition-property:opacity,transform;transition-property:opacity,transform,-webkit-transform;}
.thumbnail .action-item-btn{-webkit-align-items:center;-ms-flex-align:center;align-items:center;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;}
.thumbnail .action-item-btn:hover{-webkit-transform:scale3d(1.2,1.2,1.2);transform:scale3d(1.2,1.2,1.2);}
.thumbnail .action-item-btn:focus{opacity:1;-webkit-transform:scale3d(1.2,1.2,1.2);transform:scale3d(1.2,1.2,1.2);}
.thumbnail .action-item-btn:active{-webkit-transform:scaleX(1);transform:scaleX(1);}
.thumbnail .action-upload{cursor:pointer;height:52px;left:50%;margin:-26px 0 0 -26px;opacity:0;position:absolute;top:50%;width:52px;-webkit-transition-duration:.15s;transition-duration:.15s;-webkit-transition-property:opacity,-webkit-transform;transition-property:opacity,-webkit-transform;transition-property:opacity,transform;transition-property:opacity,transform,-webkit-transform;}
.thumbnail:hover{-webkit-box-shadow:0 1px 6px rgba(25,25,34,.24);box-shadow:0 1px 6px rgba(25,25,34,.24);}
.thumbnail:hover .picture:after{opacity:.24;}
.thumbnail:hover .action-item-btn{opacity:1;}
/*! CSS Used from: https://cdns-files.dzcdn.net/cache/css/sass_c/route-naboo.dde547c9bc6e7e67e82d.css */
.image-loader{opacity:0;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:opacity;transition-property:opacity;-webkit-transition-timing-function:ease-out;transition-timing-function:ease-out;}
.image-loader.is-loaded{opacity:1;}
#page_account .account-thumbnail{float:left;width:150px;}
</style>

<!--pour le metronome-->
<style media="screen">
/*! CSS Used from: Embedded */
button,input{overflow:visible;}
section{display:block;}
button,input{font-family:sans-serif;font-size:100%;line-height:1.15;margin:0;}
button{text-transform:none;}
button{-webkit-appearance:button;}
button::-moz-focus-inner{border-style:none;padding:0;}
button:-moz-focusring{outline:ButtonText dotted 1px;}
[type=checkbox]{box-sizing:border-box;padding:0;}
/*! CSS Used from: Embedded */
/*! @import //cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css */
.fa{display:inline-block;font-family:FontAwesome;font-style:normal;font-weight:normal;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;}
.fa-cog:before{content:"\f013";}
.fa-plus:before{content:"\f067";}
.fa-minus:before{content:"\f068";}
.fa-caret-down:before{content:"\f0d7";}
/*! end @import */
input[type="checkbox"]{display:none;}
input[type="checkbox"] + label{display:inline-block!important;height:15px;width:15px;margin:0px 4px 0px 0px!important;padding:0px;position:relative;top:4px;background:#FFF;cursor:pointer;}
input[type="checkbox"] + label:before{content:"";display:inline-block;width:4px;height:8px;background:#F38630;opacity:0;position:relative;top:-5px;right:-1px;transform:skewX(0deg);transition:all 0.24s;}
input[type="checkbox"] + label:after{content:"";display:inline-block;width:4px;height:15px;background:#F38630;opacity:0;position:relative;top:-5px;right:-3px;transform:skewX(0deg);transition:all 0.24s;}
input[type="checkbox"]:checked + label:before{transform:skewX(30deg);opacity:1;}
input[type="checkbox"]:checked + label:after{transform:skewX(-30deg);opacity:1;}
.metronome-container{width:75%;height:auto;position:relative;margin:40px auto;background:#2f2f2f;}
.metronome-container .options-btn{color:#FFF;font-size:22px;position:absolute;top:20px;right:15px;transform:rotateZ(0deg);cursor:pointer;transition:transform 0.3s;}
.metronome-container .options-btn:hover{transform:rotateZ(60deg);}
.metronome-container .options{max-height:0px;background:#FFF;color:#333;overflow:hidden;transition:all 0.25s;position:absolute;top:50px;right:15px;}
.metronome-container .options .up{color:#FFF;font-size:22px;position:absolute;top:-14px;right:3px;z-index:500;transform:rotateZ(180deg);}
.metronome-container .options label{display:block;margin-top:10px;}
.metronome-container .counter{width:100%;padding-bottom:10px;background:#404040;text-align:center;}
.metronome-container .counter .dot{width:15px;height:15px;display:inline-block;margin:25px 10px 10px 10px;background:#FFF;border-radius:50%;cursor:pointer;transition:all 0.3s;}
.metronome-container .counter .active{background:#5ec2ff;}
.metronome-container .controls{color:#FFF;padding:20px;text-align:center;}
.metronome-container .controls label{display:block;margin-bottom:18px;}
.metronome-container .controls label span{background:#FFF;color:#222;padding:5px;}
.metronome-container .controls label span i{cursor:pointer;transition:color 0.2s;}
.metronome-container .controls label span i:hover{color:#FA6900;}
.metronome-container .controls input{width:30px;border:0px solid;color:#222;text-align:center;padding:4px;}
.metronome-container .controls .play-btn{width:45%;background:#D6E26D;border:0px;border-radius:5px;padding:12px;color:#3d430d;transition:background 0.3s;}
.metronome-container .controls .play-btn:hover{background:#e8efad;}
.metronome-container .controls .tap-btn{width:45%;background:#888;border:0px;border-radius:5px;padding:12px;color:#fbfbfb;transition:background 0.3s;}
.metronome-container .controls .tap-btn:hover{background:#959595;}
.metronome-container{
    border-radius: 8px;
    box-shadow: 0 10px 20px 0 rgba(0,0,0,.1);
}
.counter{
    border-top-left-radius: 8px;
    border-top-right-radius: 8px;
}
</style>


<!--pour autoriser le micro-->
<style media="screen">
.cKlrlm {
display: flex;
flex: 1 1 0%;
-webkit-box-pack: center;
justify-content: center;
-webkit-box-align: center;
align-items: center;
flex-direction: column;
height: 180px;
margin: 10px;
border-radius: 4px;
box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 7px;
transition: all 0.4s ease 0s;
cursor: pointer;
}

.dIrmfa {
    width: 90px;
    height: 90px;
    overflow: visible;
}

.jss7 {
    font-size: 16px !important;
}
.jss7 {
    font-size: 1.6rem;
    font-weight: 700;
    line-height: 1.5;
    letter-spacing: 0.5px;
}

.MuiTypography-alignCenter {
    text-align: center;
}
.MuiTypography-h6 {
    font-size: 1.25rem;
    font-family: "Nunito Sans", Verdana, Helvetica, sans-serif;
    font-weight: 500;
    line-height: 1.6;
}
.MuiTypography-root {
    margin: 0;
}
h6, .MuiButton-root {
    font-family: 'Montserrat', sans-serif !important;
}
</style>



<div class="container">

    <div class="row contentbox_row">
		<div class="col-sm-12 arianne">
		<a class="ariannelink" href="#">Accueil</a> | <a class="ariannelink" href="#">Mon Compte</a> |
		</div>
	 </div>
     <!--profil-->
     <div class="row contentbox_row">
         <div class="col-sm-12 contentbox center">
             <div class="row mb-5">
                 <div class="col-md-6 col-12 xls">
                     <div class="row">
                         <div class="col-2 mic">
                             <i class="fa fa-microphone"></i>
                         </div>
                         <div class="col-8 progres">
                             <div class="progress">
                                  <div class="progress-bar" style="width:70%"></div>
                              </div>
                         </div>
                         <div class="col-2 mic">
                             <i class="fa fa-microphone-slash"></i>
                         </div>

                     </div>
                 </div>

                  <div class="col-md-6 col-12 xls">
                      <div class="row">
                          <div class="col-12 text-right link">
                              <a href="/recordings">
                                      <i class="fa fa-video-camera"></i> >Mes enregistrements
                              </a>

                          </div>
                          <div class="col-12 text-right link">
                              <a href="/studioPlan">
                                      <i class="fa fa-desktop"></i> >Studio'Plan
                              </a>
                          </div>

                      </div>
                  </div>
             </div>



             <div class="row">

                 <div class="col-sm-12">
                     @if(session('status'))
                     <div class="alert alert-success">
                      <strong>{{session('status')}}</strong>
                    </div>
                    @endif

                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <form action="{{url('recordings', $recording)}}" enctype="multipart/form-data" method="post" class="contact-from">
                                    @csrf
                                    {{method_field('patch')}}
                                        <div class="row">
                                            <div class="col-md-12 text-left mb-4">
                                                <h4 class="mb-3">Titre du morceau</h4>
                                                <input value="{{$recording->name}}" placeholder="Saisir le titre du morceau" type="text" name="name">
                                                <input value="{{$recording->id}}" hidden type="text" name="recording_id">
                                            </div>
                                            <div class="col-md-12 text-left mb-4">
                                                <h4 class="mb-3">1- Style musical</h4>
                                                <select class="selectpicker" name="style_id">
                                                    @foreach($styles as $style)
                                                    <option {{$recording->style_id == $style->id ? 'selected' : ''}} value="{{$style->id}}">{{$style->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-12 text-left mb-4">
                                                <h4 class="mb-3">2- Inviter des musiciens (8 Max)</h4>
                                                <select name="users_id[]" class="selectpicker" multiple data-live-search="true" name="">
                                                    @foreach($users as $user)
                                                    @if($user->id !== Auth::user()->id)
                                                    <option {{$recording->users->contains($user->id) ? 'selected' : ''}} value="{{$user->id}}">{{$user->name}}</option>
                                                    @endif
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="col-md-12 text-left mb-4">
                                                <h4 class="mb-3">3- Joindre des fichiers</h4>
                                                <div class="form-group">

                                                          <span style="width: 100%;" class="btn btn-default btn-file">
                                                            <input id="input-2" name="input2[]" type="file" class="file" multiple data-show-upload="true" data-show-caption="true">
                                                          </span>
                                                </div>
                                            </div>

                                            <div class="col-md-12 text-left mb-4">
                                                <h4 class="mb-3">4- Réglage du tempo</h4>
                                                <input name="tempo" min="0" max="500" step="20" type="range" class="custom-range" id="customRange">
                                            </div>


                                            <div class="col-12">
                                                <button type="submit" class="site-btn">Valider</button>
                                            </div>

                                        </div>


                            </form>
                        </div>

                    </div>




                 </div>
             </div>

             <div class="row">
                 <div class="col-sm-12">
                     <section class="metronome-container">
                        <div class="counter">
                            <div class="dot active"></div>
                            <div class="dot"></div>
                            <div class="dot"></div>
                            <div class="dot"></div>
                        </div>
                    <!--    <i class="fa fa-cog options-btn"></i>-->
                        <div class="controls">
                            <label>BPM: <span>
                                    <!--<i class="fa fa-minus bpm-minus"></i>-->
                                    <input readonly name="tempo" type="text" value="{{$recording->tempo}}" class="bpm-input">
                                    <!--<i class="fa fa-plus bpm-plus"></i>-->
                                </span>
                            </label>
                            <label>
                                Beat: <input type="text" value="4" class="ts-top"></label>
                            <div style="margin-bottom: 15px;">
                                <input type="checkbox" id="timer-check">
                                <label for="timer-check"></label>
                                Timer: <input type="text" value="60" class="timer">
                            </div>
                            <button class="tap-btn">Tap</button>
                            <button class="play-btn">Play</button>
                        </div>
                        <div class="options">
                            <i class="fa fa-caret-down up"></i>
                            <label>Off Beat Pitch: <input type="range" min="0" max="500" value="200" class="beat-range"></label>
                            <label>Accent Pitch: <input type="range" min="0" max="500" value="380" class="accent-range"></label>
                        </div>
                    </section>

                 </div>

             </div>

             <div class="row mt-5">

                 <div class="col-sm-12">


                     <div class="row">


                         <div class="col-md-6">
                             <div class="row">
                                 <div class="col-12">
                                     <label class="left" for="">Activation des effets</label>
                                 </div>

                             </div>

                             <div class="row">
                                 <div class="col-6">
                                     <p>Reverb</p>
                                 </div>
                                 <div class="col-6">

                                     <label class="switch">
                                      <input type="checkbox">
                                      <span class="slider round"></span>
                                    </label>
                                 </div>

                             </div>

                             <div class="row">
                                 <div class="col-6">
                                     <p>Over</p>
                                 </div>
                                 <div class="col-6">
                                     <label class="switch">
                                      <input type="checkbox">
                                      <span class="slider round"></span>
                                    </label>
                                 </div>

                             </div>

                         </div>

                         <div class="col-md-12">
                             <a id="getAccess" class="styles__CategoryButton-vgii8s-2 cKlrlm">
                                <div class="styles__CategoryButton_Icon-vgii8s-3 dIrmfa">
                                    <img src="/images/micro.png" alt="">
                                </div>
                                <h6 class="MuiTypography-root jss16 jss593 jss7  MuiTypography-h6 MuiTypography-alignCenter">Autorisez le micro et la caméra</h6>
                            </a>
                         </div>



                         <div class="col-md-12 mt-4">
                             <p>
                                 <span id="minutes"></span>
                                 <span id="seconds"></span>
                                 <span id="recordingTime3" ></span>
                             </p>
                             <p id="maxTime" style="display: none;">600</p>
                             <div style="display: none;" id="infoVideoCountDown" class="alert alert-success col-12 mt-3">
                              <strong>L'enregistrement démarre dans <span id="secondsTimer"></span>...</strong>
                            </div>
                             <video muted style="margin: auto;margin-bottom: 2rem;width: 50%; display: none;" id="vid1"></video>
                             <video style="margin: auto;margin-bottom: 2rem;width: 50%; display: none;" id="vid2" controls></video>
                             <div class="row mb-4">
                                 <div style="text-align: center;display: none;" id="divStart" class="col-12">
                                     <div class="">
                                        <a id="btnStart" style="background: #1AB394; border-color: #08192D;" class="button button--primary">
                                        Démarrer l'enregistrement
                                        </a>
                                     </div>
                                 </div>
                                 <div style="text-align: center;display: none;" id="divStop" class="col-12">
                                     <div class="">
                                        <a id="btnStop" style="background: #FC0254; border-color: #08192D;" class="button button--primary">
                                        Arrêter l'enregistrement
                                        </a>
                                     </div>
                                 </div>


                             </div>




                             <p>Réglage de la webcam</p>
                             <video id="myVideo" playsinline class="video-js vjs-default-skin">
                                 <p class="vjs-no-js">
                                    To view this video please enable JavaScript, or consider upgrading to a
                                    web browser that
                                    <a href="https://videojs.com/html5-video-support/" target="_blank">
                                      supports HTML5 video.
                                    </a>
                                  </p>
                             </video>
                         </div>

                         {{--
                         <div class="col-md-12 mt-4">
                             <p>Réglage de la webcam</p>
                             <video id="my-preview" controls autoplay></video>

                             <button id="btn-start-recording">Start Recording</button>
<button id="btn-stop-recording" disabled="disabled">Stop Recording</button>
                         </div>
                         --}}

                             <div style="display: none;" id="storeRecording" class="col-12 mt-4">
                                 <button type="submit" class="site-btn">Valider l'enregistrement</button>
                             </div>

                             <div style="display: none;" id="infoVideoWarning" class="alert alert-warning col-12 mt-3">
                              <strong></strong>
                            </div>

                            <div style="display: none;" id="infoVideoSuccess" class="alert alert-success col-12 mt-3">
                             <strong></strong>
                           </div>






                     </div>




                 </div>
             </div>
         </div>

     </div>


</div>


<script type="text/javascript">

var maxTime = document.getElementById('maxTime').textContent;
var hours = Math.floor(maxTime / 60);
var minutes = maxTime % 60;


//logique pour l'enreisteement de la musique

let constraintObj = {
    audio: true,
    video: {
        facingMode: "user",
    }
};
// width: 1280, height: 720  -- preference only
// facingMode: {exact: "user"}
// facingMode: "environment"

//handle older browsers that might implement getUserMedia in some way
if (navigator.mediaDevices === undefined) {
    navigator.mediaDevices = {};
    navigator.mediaDevices.getUserMedia = function(constraintObj) {
        let getUserMedia = navigator.webkitGetUserMedia || navigator.mozGetUserMedia;
        if (!getUserMedia) {
            return Promise.reject(new Error('getUserMedia is not implemented in this browser'));
        }
        return new Promise(function(resolve, reject) {
            getUserMedia.call(navigator, constraintObj, resolve, reject);
        });
    }
}else{
    navigator.mediaDevices.enumerateDevices()
    .then(devices => {
        devices.forEach(device=>{
            console.log(device.kind.toUpperCase(), device.label);
            //, device.deviceId
        })
    })
    .catch(err=>{
        console.log(err.name, err.message);
    })
}


$('#getAccess').click(function(){
    console.log('ca marche');
    navigator.mediaDevices.getUserMedia(constraintObj)
    .then(function(mediaStreamObj) {
        //connect the media stream to the first video element
        let video = document.getElementById('vid1');
        $('#vid1').css('display', 'block');
        $('#divStart').css('display', 'block');
        $('#getAccess').css('display', 'none');
        if ("srcObject" in video) {
            video.srcObject = mediaStreamObj;
        } else {
            //old version
            video.src = window.URL.createObjectURL(mediaStreamObj);
        }

        video.onloadedmetadata = function(ev) {
            //show in the video element what is being captured by the webcam
            video.play();
        };

        //add listeners for saving video/audio
        let start = document.getElementById('btnStart');
        let stop = document.getElementById('btnStop');
        let vidSave = document.getElementById('vid2');
        let mediaRecorder = new MediaRecorder(mediaStreamObj);
        let chunks = [];
        var minutesLabel = document.getElementById("minutes");
        var secondsLabel = document.getElementById("seconds");
        var totalSeconds = 0;
        var time;
        var seconds;

        //logique poour compter le temps de recording
        function setTime()
        {
            ++totalSeconds;
            if(pad(parseInt(totalSeconds/60)) == hours && pad(totalSeconds%60) == minutes)
            {
            mediaRecorder.stop();

            }

            secondsLabel.innerHTML = pad(totalSeconds%60);
            minutesLabel.innerHTML = pad(parseInt(totalSeconds/60));
            document.getElementById('recordingTime3').innerHTML = "/ " + hours + ":" + minutes;
        }

        function pad(val)
        {
            var valString = val + "";
            if(valString.length < 2)
            {
                return "0" + valString;
            }
            else
            {
                return valString;
            }
        }

        var secondsTimer = document.getElementById("secondsTimer");
        var initSeconds = 4;


        function countDown()
        {
            --initSeconds;
            if (initSeconds == 0) {
                mediaRecorder.start();
                clearInterval(seconds);
                $('#infoVideoCountDown').css('display', 'none');
                $('#divStart').css('display', 'none');
                $('#divStop').css('display', 'block');

                time = setInterval(setTime, 1000);

                console.log(mediaRecorder.state);
            }

            secondsTimer.innerHTML = initSeconds;
        }



        start.addEventListener('click', (ev)=>{
            $('#infoVideoCountDown').css('display', 'block');
            seconds = setInterval(countDown, 1000);

        })
        stop.addEventListener('click', (ev)=>{
            mediaRecorder.stop();
            console.log(mediaRecorder.state);
        });
        mediaRecorder.ondataavailable = function(ev) {
            chunks.push(ev.data);
        }
        mediaRecorder.onstop = (ev)=>{
            let blob = new Blob(chunks, { 'type' : 'video/mp4;' });
            chunks = [];
            clearInterval(time);
            $('#vid1').css('display', 'none');
            $('#vid2').css('display', 'block');
            $('#divStop').css('display', 'none');
            let videoURL = window.URL.createObjectURL(blob);
            vidSave.src = videoURL;
            vidSave.play();

            console.log(totalSeconds);

            $('#storeRecording').css('display', 'block');

            $('#storeRecording').click(function(){

                // Create an instance of FormData and append the video parameter that
                // will be interpreted in the server as a file
                var formData = new FormData();
                formData.append('video', blob);
                formData.append("recording_id", $('input[name=recording_id]').val());
                formData.append("duration", totalSeconds);


                $.ajaxSetup({
                           headers: {
                               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                           }
                       });

                 $.ajax({
                  url:"/uploadVideo",
                  method:"POST",
                  data: formData,
                  contentType: false,
                  cache: false,
                  processData: false,
                  beforeSend:function(){
                   $('#storeRecording').css('display', 'none');
                   $('#infoVideoWarning').css('display', 'block');
                   $('#infoVideoWarning strong').text("Votre vidéo est en cours de traitement...");
                  },
                  success:function(data)
                  {
                      console.log('ok');
                      $('#infoVideoWarning').css('display', 'none');
                      $('#infoVideoSuccess').css('display', 'block');
                      $('#infoVideoSuccess strong').text("Votre vidéo a bien été mise en ligne");
                      //window.location = '/home';
                },
                error: function (xhr, msg) {
                 console.log(msg + '\n' + xhr.responseText);
                }
                 });

            });


        }
    })
    .catch(function(err) {
        console.log(err.name, err.message);
    });

});


/*********************************
getUserMedia returns a Promise
resolve - returns a MediaStream Object
reject returns one of the following errors
AbortError - generic unknown cause
NotAllowedError (SecurityError) - user rejected permissions
NotFoundError - missing media track
NotReadableError - user permissions given but hardware/OS error
OverconstrainedError - constraint video settings preventing
TypeError - audio: false, video: false
*********************************/

</script>



@endsection
