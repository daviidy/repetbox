@extends('layouts.menu')
@section('title', 'Enregistrer ma partie')

@section('content')

<style media="screen">
    .multi{
        padding: 2px;
    }
</style>

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

      width: 100%!important;
    }
    .flt{flex-wrap: nowrap;}
}

.kv-upload-progress .progress{
    display: none;
}

</style>

<style media="screen">
    .video-js{
        width: 100%;
        height: 30vh;
    }

    .part{
        width: 100%;
        height: 30vh;
    }
</style>

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

@media screen and (max-width: 600px){
    .contentbox_row {
        width: 100%;
        margin: 1rem 0;
    }
    div.contentbox {
    background-color: #fff;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;
    }
.contentbox {
    padding: 25px 5px;
    }
    .xls {
    max-width: 50% !important;
    }
    .mic {
    max-width: 10% !important;
    padding-left: 5px;
    }
    .progres {
    max-width: 50% !important;
    margin-top: 10px;
    padding: 0px;
    }
    .progress {
    height: 6px !important;
    }
    .fa {
    font-size: small;
    }
    .link {
    font-size: small;
    padding: 5px;
    }
    .multi {
    padding: 5px;
    }
}
</style>


<style media="screen">
    .vjs-progress-control{
        display: none;
    }
</style>


<style media="screen">
/*! CSS Used from: https://www.imujam.com/css/deps.min.css */
progress{vertical-align:baseline;}
button{overflow:visible;}
.fa,button{text-transform:none;}
.fa{-moz-osx-font-smoothing:grayscale;}
progress{display:inline-block;}
*,:after,:before{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;}
button{margin:0;font:inherit;color:inherit;}
button{-webkit-appearance:button;cursor:pointer;}
button::-moz-focus-inner{padding:0;border:0;}
@media print{
*,:after,:before{color:#000!important;text-shadow:none!important;background:0 0!important;-webkit-box-shadow:none!important;box-shadow:none!important;}
}
*,:after,:before{box-sizing:border-box;}
button{font-family:inherit;font-size:inherit;line-height:inherit;}
.btn{line-height:1.42857143;}
.btn{text-align:center;}
.btn{display:inline-block;padding:6px 12px;margin-bottom:0;font-size:14px;font-weight:400;white-space:nowrap;vertical-align:middle;-ms-touch-action:manipulation;touch-action:manipulation;cursor:pointer;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;background-image:none;}
.btn:active:focus,.btn:focus{outline:-webkit-focus-ring-color auto 5px;outline-offset:-2px;}
.btn:focus,.btn:hover{color:#333;text-decoration:none;}
.btn:active{background-image:none;outline:0;-webkit-box-shadow:inset 0 3px 5px rgba(0,0,0,.125);box-shadow:inset 0 3px 5px rgba(0,0,0,.125);}
.btn-sm{padding:5px 10px;font-size:12px;line-height:1.5;border-radius:3px;}
.fa{display:inline-block;}
.fa{font:normal normal normal 14px/1 FontAwesome;font-size:inherit;text-decoration:inherit;text-rendering:optimizeLegibility;-webkit-font-smoothing:antialiased;font-smoothing:antialiased;}
.fa-play:before{content:"\f2be";}
.fa-step-backward:before{content:"\f31e";}
.btn{border-radius:3px;}
.btn{-webkit-box-shadow:none;box-shadow:none;border:1px solid transparent;}
.btn:active{-webkit-box-shadow:inset 0 3px 5px rgba(0,0,0,.125);-moz-box-shadow:inset 0 3px 5px rgba(0,0,0,.125);box-shadow:inset 0 3px 5px rgba(0,0,0,.125);}
.btn:focus{outline:0;}
/*! CSS Used from: https://www.imujam.com/css/all.min.css */
:focus{outline:0;}
.btn>.fa{font-size:1.3em;vertical-align:bottom;line-height:20px;}
progress{-webkit-appearance:none;-moz-appearance:none;appearance:none;width:100%;height:16px;border:none;border:2px solid #F51083;border-radius:8px;background:#DDD;overflow:hidden;margin-top:10px;}
.btn{border-radius:30px;border:2px solid transparent;background:0 0;color:#F51083;padding:.3em 1.5em;outline:0!important;-webkit-transition:background .25s ease 0s;transition:background .25s ease 0s;}
.btn:hover{background:#DEDEDE;}
.video-control{width:100%;padding:20px 0;position:relative;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;}
.video-control-btn{height:22px;width:22px;line-height:22px;padding:0;border:0;margin-right:10px;}
.video-control-btn:hover{background:0 0;}
.video-control-btn:hover i{color:#000;}
progress.video-control-progress{margin:0;border:0;height:10px;background:#000;}
.video-control-progress-time{white-space:nowrap;color:#E74782;padding:0 5px;}

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






                    <input value="{{$recording->id}}" hidden type="text" name="recording_id">
                    <div class="row">
                        <div class="col-md-12 text-left mb-4">
                            <h4 class="mb-3">Titre du morceau: {{$recording->name}}</h4>
                        </div>
                    </div>
                    <div class="row flt">
                        <div class="col-md-9 col-sm-6 text-left mb-4">
                            <p class="mb-3">Date de dernière version: {{$recording->updated_at}}</p>
                        </div>
                        <div class="col-md-3 col-sm-6 text-right mb-4">
                            <p class="mb-3">Durée: <span id="recordingTime"></span> </p>
                        </div>
                    </div>
                    <div class="row flt">
                        @foreach($recording->videos as $video)
                        <div class="multi col-md-4 col-sm-12 text-left">
                            <video
                               id="my-player{{$recording->id}}"
                               class="part video-js"
                               >
                             <source src="{{asset('storage/'.$video->video_file)}}" type="video/mp4"></source>

                           </video>
                        </div>
                        @endforeach
                    </div>

                    <div class="row">

                        <div class="video-control">
                            <button id="playVideos" data-action="play-pause" type="button" name="button" class="btn btn-sm video-control-btn" style="">
                                <i id="play" class="fa fa-play-circle"></i>
                                <i id="pause" class="fa fa-pause" style="display:none;"></i>
                            </button>
                            <button data-action="rewind" type="button" name="button" class="btn btn-sm video-control-btn" style="display: none;">
                                <i class="fa fa-step-backward"></i>
                            </button>
                            <progress id="progressBar" value="0" max="100" class="video-control-progress"></progress>
                            <div class="video-control-progress-time" style="">
                                <span id="currentTime" class="video-control-current">00:00</span> /
                                <span id="recordingTime2" class="video-control-duration"></span>
                            </div>
                        </div>
                    </div>
                    <!--
                    <div class="row">

                        <div class="col-sm-12">
                            <a href="/joinVideos/{{$recording->id}}">Joindre les {{count($recording->videos)}} vidéos</a>
                        </div>

                    </div>
                -->



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
                             <p id="maxTime" style="display: none;">{{$recording->time}}</p>
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
                             <video style="width: 35%;" id="myVideo" playsinline class="video-js vjs-default-skin">
                                 <p class="vjs-no-js">
                                    To view this video please enable JavaScript, or consider upgrading to a
                                    web browser that
                                    <a href="https://videojs.com/html5-video-support/" target="_blank">
                                      supports HTML5 video.
                                    </a>
                                  </p>
                             </video>
                         </div>



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
document.getElementById('recordingTime').innerHTML = hours + ":" + minutes;
document.getElementById('recordingTime2').innerHTML = hours + ":" + minutes;

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






<script>


var progressBar=document.getElementById('progressBar');
var updateBar;
//jouer tooutes les vidéos
$("#playVideos").click(function(){

    var vids = document.getElementsByClassName("part");
    console.log(vids);
    for (var i = 0; i < vids.length; i++) {


            if (!vids[i].paused && !vids[i].ended){
    		vids[i].pause();
    		$('#play').css('display', 'block');
            $('#pause').css('display', 'none');
    		window.clearInterval(updateBar);
    	} else {
    		vids[i].play();
            $('#play').css('display', 'none');
            $('#pause').css('display', 'block');
    		updateBar=setInterval(update, 500);
    	}


    }

    function update() {
            if (!vids[0].ended) {
                var size=parseInt(vids[0].currentTime*100/document.getElementById('maxTime').textContent);
                progressBar.setAttribute("value", size);
                var hours = Math.floor(vids[0].currentTime / 60);
                var minutes = Math.floor(vids[0].currentTime) % 60;
                document.getElementById('currentTime').innerHTML = hours + ":" + minutes;

            } else {
                progressBar.setAttribute("value", "0");
                $('#play').css('display', 'block');
                $('#pause').css('display', 'none');
                document.getElementById('currentTime').innerHTML = "00:00";
                window.clearInterval(updateBar);
            }

        }

        progressBar.addEventListener('click', clickedBar, false);

        function clickedBar(e){
            for (var i = 0; i < vids.length; i++) {
                if(!vids[i].paused && !vids[i].ended){
                    var mouseX=e.pageX-progressBar.offsetLeft;
                    var newtime=mouseX*vids[0].duration/100;
                    vids[i].currentTime=newtime;
                    var size=parseInt(vids[0].currentTime*100/vids[0].duration);
                    progressBar.setAttribute("value", size);
                }
            }

    }

});
</script>




<script>
/*
    $(document).ready(function(){
        // Read value on page load
        $("#resultA b").html($("#customRangeA").val());
        // Read value on change
        $("#customRangeA").change(function(){
            $("#resultA b").html($(this).val());
        });

    });
    */
</script>







@endsection
