@extends('layouts.menu')
@section('title', 'Créer un enregistrement')

@section('content')

<style>
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
                 <div class="col-md-6 col-12">
                     <div class="row">
                         <div class="col-2">
                             <i class="fa fa-microphone"></i>
                         </div>
                         <div class="col-8">
                             <div class="progress">
                                  <div class="progress-bar" style="width:70%"></div>
                              </div>
                         </div>
                         <div class="col-2">
                             <i class="fa fa-microphone-slash"></i>
                         </div>

                     </div>
                 </div>

                  <div class="col-md-6 col-12">
                      <div class="row">
                          <div class="col-md-6 col-12">
                              <a href="/{{Auth::user()->id}}/recordings">
                                      <i class="fa fa-video-camera"></i> Mes enregistrements
                              </a>

                          </div>
                          <div class="col-md-6 col-12">
                              <div class="float-md-right showProfile__button left">
                                 <button style="background: #08192D; border-color: #08192D;" href="/studioPlan" class="button button--primary">
                                            Studio'Plan
                                 </button>
                              </div>
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

                     <form enctype="multipart/form-data" method="post" class="contact-from">
                             @csrf
                             {{method_field('patch')}}
                                 <div class="row">
                                     <div class="col-md-6">
                                         <label for="">Titre du morceau</label>
                                         <input placeholder="Saisir le titre du morceau" type="text" name="name">
                                     </div>
                                     <div class="col-md-6">
                                         <label for="">Style musical</label><br>
                                         <select class="selectpicker" name="style">
                                             @foreach($styles as $style)
                                             <option value="{{$style->id}}">{{$style->name}}</option>
                                             @endforeach
                                         </select>
                                     </div>
                                     <div class="col-md-6">
                                         <label for="">Inviter des musiciens (8 Max)</label>
                                         <select name="users_id[]" class="selectpicker" multiple data-live-search="true" name="">
                                             @foreach($users as $user)
                                             <option value="{{$user->id}}">{{$user->name}}</option>
                                             @endforeach
                                         </select>
                                     </div>

                                     <div class="col-md-6">
                                         <label for="">Joindre des fichiers</label><br>
                                         <input id="downloadable_files" type="file" name="downloadable_files[]" multiple>
                                     </div>

                                     <div class="col-md-6">
                                         <label for="">Réglage du tempo</label><br>
                                         <input name="tempo" min="0" max="500" step="20" type="range" class="custom-range" id="customRange">
                                     </div>

                                     <div class="col-12">
                                         <button type="submit" class="site-btn">Envoyer la demande d'enregistrement</button>
                                     </div>

                                 </div>


                     </form>


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
                             <video id="myVideo" playsinline class="video-js vjs-default-skin"></video>
                         </div>

                             <div style="display: none;" id="storeRecording" class="col-12 mt-4">
                                 <button type="submit" class="site-btn">Valider l'enregistrement</button>
                             </div>





                     </div>




                 </div>
             </div>
         </div>

     </div>


</div>

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
            debug: true
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
});

// user completed recording and stream is available
player.on('finishRecord', function() {
    // the blob object contains the recorded data that
    // can be downloaded by the user, stored on server etc.
    console.log('finished recording: ', player.recordedData);
    $('#storeRecording').css('display', 'block');
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


@endsection
