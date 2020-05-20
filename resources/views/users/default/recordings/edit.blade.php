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
                              <a href="/{{Auth::user()->id}}/recordings">
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
                                                <input value="{{$recording->name == 'New' ? '' : $recording->name}}" placeholder="Saisir le titre du morceau" type="text" name="name">
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
                     <h4 class="mt-3">4- Réglage du tempo</h4>
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
                                    <i class="fa fa-minus bpm-minus"></i>
                                    <input name="tempo" type="text" value="60" class="bpm-input">
                                    <i class="fa fa-plus bpm-plus"></i>
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

                         <div class="col-md-12 mt-4">
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



<!-- 4. Initialize and prepare the video recorder logic -->
<script>
    // Store a reference of the preview video element and a global reference to the recorder instance
    var video = document.getElementById('my-preview');
    var recorder;

    // When the user clicks on start video recording
    document.getElementById('btn-start-recording').addEventListener("click", function(){
        // Disable start recording button
        this.disabled = true;

        // Request access to the media devices
        navigator.mediaDevices.getUserMedia({
            audio: true,
            video: true
        }).then(function(stream) {
            // Display a live preview on the video element of the page
            setSrcObject(stream, video);

            // Start to display the preview on the video element
            // and mute the video to disable the echo issue !
            video.play();
            video.muted = true;

            // Initialize the recorder
            recorder = new RecordRTCPromisesHandler(stream, {
                mimeType: 'video/webm',
                bitsPerSecond: 128000
            });

            // Start recording the video
            recorder.startRecording().then(function() {
                console.info('Recording video ...');
            }).catch(function(error) {
                console.error('Cannot start video recording: ', error);
            });

            // release stream on stopRecording
            recorder.stream = stream;

            // Enable stop recording button
            document.getElementById('btn-stop-recording').disabled = false;
        }).catch(function(error) {
            console.error("Cannot access media devices: ", error);
        });
    }, false);

    // When the user clicks on Stop video recording
    document.getElementById('btn-stop-recording').addEventListener("click", function(){
        this.disabled = true;

        recorder.stopRecording().then(function() {
            console.info('stopRecording success');

            // Retrieve recorded video as blob and display in the preview element
            var videoBlob = recorder.getBlob();
            video.src = URL.createObjectURL(videoBlob);
            video.play();

            // Unmute video on preview
            video.muted = false;

            // Stop the device streaming
            recorder.stream.stop();

            // Enable record button again !
            document.getElementById('btn-start-recording').disabled = false;
        }).catch(function(error) {
            console.error('stopRecording failure', error);
        });
    }, false);
</script>




<script>
var options = {
    controls: true,
    width: 320,
    height: 240,
    fluid: false,
    plugins: {
        record: {
            audio: true,
            video: true,
            maxLength: 30,
            debug: true,
            videoMimeType: "video/webm;codecs=vp8,opus"
        }
    }
};

// apply some workarounds for opera browser
applyVideoWorkaround();

var player = videojs('myVideo', options, function() {
    // print version information at startup
    var msg = 'Using video.js ' + videojs.VERSION +
        ' with videojs-record ' + videojs.getPluginVersion('record') +
        ' and recordrtc ' + RecordRTC.version;
    videojs.log(msg);
});

// error handling
player.on('deviceError', function() {
    console.log('device error:', player.deviceErrorCode);
});

player.on('error', function(element, error) {
    console.error(error);
});

// user clicked the record button and started recording
player.on('startRecord', function() {
    console.log('started recording!');
    $('#storeRecording').css('display', 'none');
    $('#infoVideoWarning').css('display', 'none');
    $('#infoVideoSuccess').css('display', 'none');

});

// user completed recording and stream is available
player.on('finishRecord', function() {
    // the blob object contains the recorded data that
    // can be downloaded by the user, stored on server etc.
    console.log('finished recording: ', player.recordedData);

    $('#storeRecording').css('display', 'block');

    $('#storeRecording').click(function(){

        // Create an instance of FormData and append the video parameter that
        // will be interpreted in the server as a file
        var formData = new FormData();
        formData.append('video', player.recordedData);
        formData.append("recording_id", $('input[name=recording_id]').val());


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
           $('#infoVideoWarning strong').text("Votre vidéo est en cours de traitement");
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

<script type="text/javascript">

$('#openimgupload').click(function(){ $('#imgupload').trigger('click'); });

</script>

<script>
$(document).ready(function(){
 $(document).on('change', '#imgupload', function(){
  var name = document.getElementById("imgupload").files[0].name;
  var form_data = new FormData();
  var ext = name.split('.').pop().toLowerCase();
  if(jQuery.inArray(ext, ['gif','png','jpg','jpeg']) == -1)
  {
   alert("Invalid Image File");
  }
  var oFReader = new FileReader();
  oFReader.readAsDataURL(document.getElementById("imgupload").files[0]);
  var f = document.getElementById("imgupload").files[0];
  var fsize = f.size||f.fileSize;
  if(fsize > 2000000)
  {
   alert("Image File Size is very big");
  }
  else
  {
      form_data.append("image", document.getElementById('imgupload').files[0]);
      form_data.append("id_user", $('input[name=user_id]').val());

      $.ajaxSetup({
                 headers: {
                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                 }
             });

   $.ajax({
    url:"/uploadAvatar",
    method:"POST",
    data: form_data,
    contentType: false,
    cache: false,
    processData: false,
    beforeSend:function(){
     $('#uploaded_image').html("<label class='text-success'>Image Uploading...</label>");
    },
    success:function(data)
    {
        console.log('ok');
     $('#uploaded_image').html('<img class="picture-img image-loader is-loaded" src="/images/users/'+data.image+'" alt="'+data.name+'" crossorigin="anonymous" height="150" width="150">');
 },
 error: function (xhr, msg) {
     console.log($('input[name=user_id]').val());
   console.log(msg + '\n' + xhr.responseText);
}
   });
  }
 });
});
</script>


<script type="text/javascript">

window.AudioContext = window.AudioContext || window.webkitAudioContext;
var context = new AudioContext();
var timer, noteCount, counting, accentPitch = 380, offBeatPitch = 200;
var delta = 0;
var curTime = 0.0;

// Load up dots on pageload
$("document").ready(function() {
$(".ts-top").trigger("change");
$("header").fitText(1, { maxFontSize: "46px" });
});


/*
Scheduling Help by: https://www.html5rocks.com/en/tutorials/audio/scheduling/
*/
function schedule() {
while(curTime < context.currentTime + 0.1) {
  playNote(curTime);
  updateTime();
}
timer = window.setTimeout(schedule, 0.1);
}

function updateTime() {
curTime += 60.0 / parseInt($(".bpm-input").val(), 10);
noteCount++;
}

/* Play note on a delayed interval of t */
function playNote(t) {
    var note = context.createOscillator();

    if(noteCount == parseInt($(".ts-top").val(), 10) )
      noteCount = 0;

    if( $(".counter .dot").eq(noteCount).hasClass("active") )
      note.frequency.value = accentPitch;
    else
      note.frequency.value = offBeatPitch;

    note.connect(context.destination);

    note.start(t);
    note.stop(t + 0.05);

    $(".counter .dot").attr("style", "");

    $(".counter .dot").eq(noteCount).css({
      transform: "translateY(-10px)",
      background: "#F75454"
    });
}

function countDown() {
  var t = $(".timer");

  if( parseInt(t.val(), 10) > 0 && counting === true)
  {
      t.val( parseInt(t.val(), 10) - 1 );
      window.setTimeout(countDown, 1000);
  }
  else
  {
    $(".play-btn").click();
    t.val(60);
  }
}

/* Tap tempo */
$(".tap-btn").click(function() {
  var d = new Date();
  var temp = parseInt(d.getTime(), 10);

  $(".bpm-input").val( Math.ceil(60000 / (temp - delta)) );
  delta = temp;
});

/* Add or subtract bpm */
$(".bpm-minus, .bpm-plus").click(function() {
if($(this).hasClass("bpm-minus"))
  $(".bpm-input").val(parseInt($(".bpm-input").val(), 10) - 1 );
else
  $(".bpm-input").val(parseInt($(".bpm-input").val(), 10) + 1 );
});

/* Change pitches for tones in options */
$(".beat-range, .accent-range").change(function() {
  if($(this).hasClass("beat-range"))
    offBeatPitch = $(this).val();
  else
     accentPitch = $(this).val();
});

/* Activate dots for accents */
$(document).on("click", ".counter .dot", function() {
  $(this).toggleClass("active");
});

$(".options-btn").click(function() {
$(".options").toggleClass("options-active");
});

/* Add dots when time signature is changed */
$(".ts-top, .ts-bottom").on("change", function() {
  var _counter = $(".counter");
  _counter.html("");

  for(var i = 0; i < parseInt($(".ts-top").val(), 10); i++)
  {
    var temp = document.createElement("div");
    temp.className = "dot";

    if(i === 0)
      temp.className += " active";

    _counter.append( temp );
  }
});


/* Play and stop button */
$(".play-btn").click(function() {
if($(this).data("what") === "pause")
{
  // ====== Pause ====== //
  counting = false;
  window.clearInterval(timer);
  $(".counter .dot").attr("style", "");
  $(this).data("what", "play").attr("style","").text("Play");
}
else {
  // ====== Play ====== //

if( $("#timer-check").is(":checked") )
 {
   counting = true;
   countDown();
 }

  curTime = context.currentTime;
  noteCount = parseInt($(".ts-top").val(), 10);
  schedule();

  $(this).data("what", "pause").css({
    background: "#F75454",
    color: "#FFF"
  }).text("Stop");
}
});

</script>


@endsection
