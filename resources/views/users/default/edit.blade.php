@extends('layouts.menu')
@section('title', 'Modifier mon profil')

@section('content')

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
                    <div class="col-6">
                        <h3 class="mb-5">
                            Modification de votre profil
                        </h3>
                    </div>

                     <div class="col-6">
                         <div class="float-md-right showProfile__button left">
                            <a style="background: #08192D; border-color: #08192D;" href="/home" class="button button--primary">
                            Voir le profil
                            </a>
                         </div>
                     </div>


             <div class="row">

                 <div class="col-sm-12">
                     @if(session('status'))
                     <div class="alert alert-success">
                      <strong>{{session('status')}}</strong>
                    </div>
                    @endif
                     <div class="account-thumbnail mb-3">
                        <figure class="thumbnail">
                            <div id="uploaded_image" class="picture no-background">
                                <img class="picture-img image-loader is-loaded" src="/images/users/{{Auth::user()->image}}" alt="{{Auth::user()->name}}" crossorigin="anonymous"
                                  height="150" width="150">
                              </div>
                            <div>
                                <input id="imgupload" hidden type="file" accept="image/jpeg,image/png">
                                <input hidden type="text" name="user_id" value="{{Auth::user()->id}}">
                                <div>
                                    <span id="openimgupload" style="background: white;" class="action-item-btn action-upload">
                                        <svg class="svg-icon svg-icon-camera" focusable="false" height="20" width="20" viewBox="0 0 12 12" aria-hidden="true">
                                                <path
                                                  d="M4 1H2l-.25 1H0v8h12V2H4.25L4 1zm6 2.5a.499.499 0 1 1 1 0 .499.499 0 1 1-1 0zm-9 0a.5.5 0 0 1 .505-.5h.99a.501.501 0 1 1 0 1h-.99A.501.501 0 0 1 1 3.5zM7 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0-1a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm1.25-2a1.25 1.25 0 1 0-2.5 0 1.25 1.25 0 0 0 2.5 0z"
                                                  fill-rule="evenodd">

                                                  </path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </figure>
                    </div>
                     <form enctype="multipart/form-data" action="{{url('users', Auth::user())}}" method="post" class="contact-from">
                         <div class="row">
                             @csrf
                             {{method_field('patch')}}
                             <div class="col-md-12">
                                 <input value="{{Auth::user()->name}}" readonly required type="text" name="name">
                                 <input value="{{Auth::user()->email}}" readonly required type="text" name="email">
                                 <input value="{{Auth::user()->mobile_tel}}" type="text" name="mobile_tel" placeholder="Numéro de téléphone">
                                 <input value="{{Auth::user()->city}}" type="text" name="city" placeholder="Ville">
                                 <input value="{{Auth::user()->country}}" type="text" name="country" placeholder="Pays">
                                 <input value="{{Auth::user()->zip}}" type="text" name="zip" placeholder="Code Postal">
                                 <button type="submit" class="site-btn">Enregistrer</button>
                             </div>
                         </div>
                     </form>


                 </div>
             </div>
         </div>

     </div>

     <!--details musicien-->
     <div class="row contentbox_row">
         <div class="col-sm-12 contentbox center">
             <h3 class="mb-5">
                 Détails du musicien
             </h3>

             <div class="row">
                 <div class="col-sm-12">
                     <form action="{{url('users', Auth::user())}}" method="post" class="contact-from">
                         <div class="row">
                             @csrf
                             {{method_field('patch')}}
                             <div class="col-md-4 col-sm-12 mb-3">
                                 <label for="">Niveau musical</label>
                                 <select class="selectpicker" name="level">
                                     <option {{Auth::user()->level == '20' ? 'selected' : ''}} value="20">Débutant</option>
                                     <option {{Auth::user()->level == '40' ? 'selected' : ''}} value="40">Amateur</option>
                                     <option {{Auth::user()->level == '60' ? 'selected' : ''}} value="60">Professeur</option>
                                     <option {{Auth::user()->level == '80' ? 'selected' : ''}} value="80">Intermitant</option>
                                     <option {{Auth::user()->level == '100' ? 'selected' : ''}} value="100">Star</option>
                                 </select>
                            </div>
                            <div class="col-md-4 col-sm-12 mb-3">
                                <label for="">Type d'instrument</label>
                                <select name="instruments_id[]" class="selectpicker" multiple data-live-search="true" name="">
                                    @foreach($instruments as $instrument)
                                    <option {{Auth::user()->instruments->contains($instrument->id) ? 'selected' : ''}} value="{{$instrument->id}}">{{$instrument->name}}</option>
                                    @endforeach
                                </select>
                           </div>
                           <div class="col-md-4 col-sm-12 mb-3">
                               <label for="">Style musical</label>
                               <select name="styles_id[]" class="selectpicker" multiple data-live-search="true" name="">
                                   @foreach($styles as $style)
                                   <option {{Auth::user()->styles->contains($style->id) ? 'selected' : ''}} value="{{$style->id}}">{{$style->name}}</option>
                                   @endforeach
                               </select>
                          </div>

                             <div class="col-12">
                                 <button type="submit" class="site-btn">Enregistrer</button>
                             </div>
                         </div>
                     </form>

                 </div>


             </div>
         </div>

     </div>

     <!--biograpphie-->
     <div class="row contentbox_row">
         <div class="col-sm-12 contentbox center">
             <h3 class="mb-5">
                 Ma biographie
             </h3>

             <div class="row" style="text-align: justify;">
                 <div class="col-sm-12">
                     <form id="bioform" action="{{url('users', Auth::user())}}" method="post" class="contact-from">
                         <div class="row">
                             @csrf
                             {{method_field('patch')}}
                             <div class="col-md-12 mb-5">
                                 <input name="bio" type="hidden">

                                     <div id="richeditor">
                                         {!!Auth::user()->bio!!}
                                      </div>
                             </div>
                             <div class="col-12">
                                 <button type="submit" class="site-btn">Enregistrer</button>
                             </div>
                         </div>
                     </form>
                 </div>

             </div>
         </div>

     </div>

     <!--competences-->
     <div class="row contentbox_row">
         <div class="col-sm-12 contentbox center">
             <h3 class="row_title">
                 Mes compétences
             </h3>
             <div class="row">

                 <form action="{{url('users', Auth::user())}}" method="post" class="contact-from">
                     <div class="row">
                         @csrf
                         {{method_field('patch')}}
                         @if(count(Auth::user()->skills) > 0)
                         @foreach(Auth::user()->skills as $skill)
                         <div class="col-md-4">
                             <div id="result{{$skill->id}}">{{$skill->name}}<br> Note / 100: <b>{{$skill->pivot->value}}</b></div>
                             <input value="{{$skill->pivot->value}}" name="{{$skill->id}}" min="0" max="100" step="20" type="range" class="custom-range" id="customRange{{$skill->id}}">
                         </div>
                         @endforeach
                         @else
                         @foreach($skills as $skill)
                         <div class="col-md-4">
                             <div id="result{{$skill->id}}">{{$skill->name}}<br> Note / 100: <b></b></div>
                             <input name="{{$skill->id}}" min="0" max="100" step="20" type="range" class="custom-range" id="customRange{{$skill->id}}">
                         </div>
                         @endforeach
                         @endif

                         <div class="col-12">
                             <button type="submit" class="site-btn">Enregistrer</button>
                         </div>

                     </div>
                 </form>

             </div>

         </div>

     </div>

     <!--references-->
     <div class="row contentbox_row">
         <div class="col-sm-12 contentbox center">
             <h3 class="mb-3">
                 Mes références
             </h3>

             <div class="row" style="text-align: justify;">
                 <form id="referenceform" action="{{url('users', Auth::user())}}" method="post" class="contact-from">
                     <div class="row">
                         @csrf
                         {{method_field('patch')}}
                         <div class="col-md-12 mb-5">
                             <textarea name="references" rows="8" cols="80">
                                 {{Auth::user()->references}}
                             </textarea>
                             <button type="submit" class="site-btn">Enregistrer</button>
                         </div>

                     </div>
                 </form>
             </div>
         </div>

     </div>

     <!--enregistrements-->
     <div class="row contentbox_row">
         <div class="col-sm-12 contentbox center">
             <h3>
                 Mes enregistrements
             </h3>
             <h6 class="text-left">
                   <div class="trafficlight">
                       <div class="trafficbulb redon"></div>
                       <div class="trafficbulb greenoff"></div>
                   </div>
                   All of me
             </h6>
             <div class="row videobloc">

                 <div class="col-sm-7">
                     <video width="100%" controls="">
					  <source src="./video/guitare.mp4" type="video/mp4">
					  Attention, votre navigateur ne supporte pas les vidéos
					</video>
                 </div>
                 <div class="col-sm-5 text-justify">
                    <table>
                        <tbody>
                            <tr>
                                <td>12/03/2020</td>
                                <td class="right">00:00:25</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="pplminiatures">
                        <div class="profilepic creatorspics" style="background-image:url('https://img.icons8.com/bubbles/2x/user.png');"></div>
                        thx1138
                    </div>
                    <div class="pplminiatures">
                        <div class="profilepic creatorspics" style="background-image:url('https://img.icons8.com/bubbles/2x/user.png');"></div>
                        thx1138
                    </div>
                    <div class="pplminiatures">
                        <div class="profilepic creatorspics" style="background-image:url('https://img.icons8.com/bubbles/2x/user.png');"></div>
                        thx1138
                    </div>
                    <div class="pplminiatures">
                        <div class="profilepic creatorspics" style="background-image:url('https://img.icons8.com/bubbles/2x/user.png');"></div>
                        thx1138
                    </div>
                    <div class="pplminiatures">
                        <div class="profilepic creatorspics" style="background-image:url('https://img.icons8.com/bubbles/2x/user.png');"></div>
                        thx1138
                    </div>
                 </div>
             </div>

         </div>

     </div>

     <!--reseau-->
     <div class="row contentbox_row">
         <div class="col-sm-12 contentbox center">
             <h3 class="row_title">
                 Mon réseau de musiciens
             </h3>

             <div class="row row_title">
                 <div class="col-sm-3">
                     <label for="">Style</label>
                     <select class="form-control" id="sel1" name="sellist1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                      </select>
                 </div>
                 <div class="col-sm-3">
                     <label for="">Instrument</label>
                     <select class="form-control" id="sel1" name="sellist1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                      </select>
                 </div>
                 <div class="col-sm-3">
                     <label for="">Niveau</label>
                     <select class="form-control" id="sel1" name="sellist1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                      </select>
                 </div>
                 <div class="col-sm-3">
                     <label for="">Nb Enrg.</label>
                     <select class="form-control" id="sel1" name="sellist1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                      </select>
                 </div>
             </div>
             <div class="row">
                 <p class="left row_title">Résultat de recherche : 26</p>
             </div>

             <div class="row">

                 <div class="col-sm-3">
                     <div class="pplsearchmin">
                         <div class="profilepic creatorspics" style="background-image:url('https://img.icons8.com/bubbles/2x/user.png');"></div>
                         thx1138
                         <div>
                        <button class="btn btn-primary"><i class="fa fa-thumbs-up"></i> (120)</button>
                        </div>
                    </div>
                 </div>

                 <div class="col-sm-3">
                     <div class="pplsearchmin">
                         <div class="profilepic creatorspics" style="background-image:url('https://img.icons8.com/bubbles/2x/user.png');"></div>
                         thx1138
                         <div>
                        <button class="btn btn-primary"><i class="fa fa-thumbs-up"></i> (120)</button>
                        </div>
                    </div>
                 </div>

                 <div class="col-sm-3">
                     <div class="pplsearchmin">
                         <div class="profilepic creatorspics" style="background-image:url('https://img.icons8.com/bubbles/2x/user.png');"></div>
                         thx1138
                         <div>
                        <button class="btn btn-primary"><i class="fa fa-thumbs-up"></i> (120)</button>
                        </div>
                    </div>
                 </div>

                 <div class="col-sm-3">
                     <div class="pplsearchmin">
                         <div class="profilepic creatorspics" style="background-image:url('https://img.icons8.com/bubbles/2x/user.png');"></div>
                         thx1138
                         <div>
                        <button class="btn btn-primary"><i class="fa fa-thumbs-up"></i> (120)</button>
                        </div>
                    </div>
                 </div>


             </div>

         </div>

     </div>

</div>


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
