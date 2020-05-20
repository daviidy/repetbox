@extends('layouts.menu')
@section('title', 'Mon profil')

@section('content')

<style media="screen">
    .video-js{
        width: 100%;
        height: 55vh;
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

<div class="container">

    <div class="row contentbox_row">
		<div class="col-sm-12 arianne">
		<a class="ariannelink" href="#">Accueil</a> | <a class="ariannelink" href="#">Mon Compte</a> |
		</div>
	 </div>
     <!--profil-->
     <div class="row contentbox_row">
         <div class="col-sm-12 contentbox center">
             <div class="row">
                 <div class="col-6">
                     <h3>
                         Profil du musicien
                     </h3>
                 </div>
                 <div class="col-6">
                     <div class="float-md-right showProfile__button left">
                        <a style="background: #08192D; border-color: #08192D;" href="/members/{{Auth::user()->id}}/edit" class="button button--primary">
                        Modifier
                        </a>
                     </div>
                 </div>

             </div>


             <div class="row">
                 <div class="col-md-4 col-sm-12">
                     <div class="profilepic sixtyprctwidth" style="background-image:url('/images/users/{{Auth::user()->image}}');">
                         <!--
                         <div class="checkedprofile">✓</div>
                     -->
                     </div>
                     <button class="btn btn-primary"><i class="fa fa-thumbs-up"></i> (120)</button>
                 </div>
                 <div class="col-md-8 col-sm-12">

                            <div class="row details-title">
                                <div class="col-sm-4">
                                    Nom et prénoms
                                </div>
                                <div class="col-sm-8 details">
                                    {{Auth::user()->name}}
                                </div>
                            </div>

                            <div class="row details-title">
                                <div class="col-sm-4">
                                    Email
                                </div>
                                <div class="col-sm-8 details">
                                    {{Auth::user()->email}}
                                </div>
                            </div>
                            <div class="row details-title">
                                <div class="col-sm-4">
                                    Mobile
                                </div>
                                <div class="col-sm-8 details">
                                    @if(Auth::user()->mobile_tel)
                                    {{Auth::user()->mobile_tel}}
                                    @else
                                    Aucun numéro renseigné
                                    @endif
                                </div>
                            </div>
                            <div class="row details-title">
                                <div class="col-sm-4">
                                    Pays
                                </div>
                                <div class="col-sm-8 details">
                                    @if(Auth::user()->country)
                                    {{Auth::user()->country}}
                                    @else
                                    Aucun pays renseigné
                                    @endif
                                </div>
                            </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="showProfile__button">
                                       <a href="#" class="button button--primary">
                                       Invite-moi
                                       </a>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="showProfile__button left">
                                       <a href="#" class="button button--primary">
                                       Contacte-moi
                                       </a>
                                    </div>
                                </div>
                            </div>
                        </div>



                 </div>
             </div>
         </div>

     </div>

     <!--details musicien-->
     <div class="row contentbox_row">
         <div class="col-sm-12 contentbox center">
             <h3>
                 Détails du musicien
             </h3>

             <div class="row">
                 <div class="col-sm-3">
                     <h6 class="mini_title_in_row">Niveau musical</h6>
                     <div class="row">
                         <div class="col-sm-12">
                             <div class="progress progress-bar-vertical">
                                <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="height: {{Auth::user()->level}}%;">
                                </div>
                              </div>
                              <ul class="progresslistv">
        						  <li>Star</li>
        						  <li>Intermitant</li>
        						  <li>Professeur</li>
        						  <li>Amateur</li>
        						  <li>Débutant</li>
        					  </ul>
                         </div>

                     </div>

                 </div>
                 <div class="col-sm-5">

                     <h6 class="mini_title_in_row">Type d'instrument</h6>
                     <div class="row">
                         <div class="col-sm-12">
                             @if(count(Auth::user()->instruments) > 0)
                             @foreach(Auth::user()->instruments as $instrument)
                             <span class="badge badge-dark">{{$instrument->name}}</span>
                             @endforeach
                             @else
                             <p>Aucun instrument renseigné</p>
                             @endif

                         </div>

                     </div>

                 </div>

                 <div class="col-sm-4">
                     <h6 class="mini_title_in_row">Style musical</h6>
                     <div class="row">
                         <div class="col-sm-12">
                             @if(count(Auth::user()->styles) > 0)
                             @foreach(Auth::user()->styles as $style)
                             <span class="badge badge-dark">{{$style->name}}</span>
                             @endforeach
                             @else
                             <p>Aucun style musical renseigné</p>
                             @endif
                         </div>

                     </div>
                 </div>

             </div>
         </div>

     </div>

     <!--biograpphie-->
     <div class="row contentbox_row">
         <div class="col-sm-12 contentbox center">
             <h3>
                 Ma biographie
             </h3>

             <div class="row" style="text-align: justify;">
                 <div class="col-sm-12">
                     @if(Auth::user()->bio)
                     {!!Auth::user()->bio!!}
                     @else
                     <p>Aucune bio pour le moment</p>
                     @endif
                 </div>
                 <!--
                 <div class="col-sm-12">
                     <div class="showProfile__button">
                        <a href="/fr/membres/davidarmelyao/edit" class="button button--primary">
                        Voir la suite
                        </a>
                     </div>
                 </div>
             -->
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
                 @if(count(Auth::user()->skills) > 0)
                 @foreach(Auth::user()->skills as $skill)
                 <div class="col-sm-6">
                     <div class="text-left">
    					<table>
    						<tbody>
                                <tr>
                                    <td style="width:30%;">
                                        <div class="progress">
                                          <div class="progress-bar" style="width:{{$skill->pivot->value}}%"></div>
                                        </div>
            						</td>
                                    <td>{{$skill->name}}</td>
                                </tr>
    					</tbody></table>
    				</div>

                 </div>
                 @endforeach
                 @endif


             </div>
         </div>

     </div>

     <!--references-->
     <div class="row contentbox_row">
         <div class="col-sm-12 contentbox center">
             <h3>
                 Mes références
             </h3>

             <div class="row" style="text-align: justify;">
                 <div class="col-sm-12">
                     <p>
                         {!!Auth::user()->references!!}
                     </p>
                 </div>

             </div>
         </div>

     </div>

     <!--enregistrements-->
     <div class="row contentbox_row">
         <div class="col-sm-12 contentbox center">
             <h3>
                 Mes enregistrements
             </h3>
             @foreach(Auth::user()->recordingsOne as $recording)
             <h6 class="text-left">
                   <div class="trafficlight">
                       <div class="trafficbulb redon"></div>
                       <div class="trafficbulb greenoff"></div>
                   </div>
                   <a href="/recordings/multi/edit/{{$recording->id}}">
                       {{$recording->name}}
                   </a>
             </h6>
             <div class="row videobloc">

                 <div class="col-sm-7">
                     @if(count($recording->videos->where('user_id', Auth::user()->id)) > 0)
                     <video
                        id="my-player"
                        class="video-js"
                        controls
                        preload="auto"
                        data-setup='{}'>
                        @if($recording->final_video !== null)
                        <source src="{{asset('storage/'.$recording->final_video)}}" type="video/mp4"></source>
                        @else
                      <source src="{{asset('storage/'.$recording->videos->where('user_id', Auth::user()->id)->first()->video_file)}}" type="video/mp4"></source>
                        @endif

                      <p class="vjs-no-js">
                        To view this video please enable JavaScript, and consider upgrading to a
                        web browser that
                        <a href="https://videojs.com/html5-video-support/" target="_blank">
                          supports HTML5 video
                        </a>
                      </p>
                    </video>
                    @endif

                 </div>
                 <div class="col-sm-5 text-justify">
                    <table>
                        <tbody>
                            <tr>
                                <td>{{\Carbon\Carbon::parse($recording->created_at)->format('d/m/Y')}}</td>
                                <td class="right">00:00:25</td>
                            </tr>
                        </tbody>
                    </table>
                    @foreach($recording->users as $user)
                    <div class="pplminiatures">
                        <div class="profilepic creatorspics" style="background-image:url('/images/users/{{$user->image}}');"></div>
                        {{$user->name}}
                    </div>
                    @endforeach
                 </div>
             </div>
             @endforeach

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



<!-- unpkg : use the latest version of Video.js -->
<link href="https://unpkg.com/video.js/dist/video-js.min.css" rel="stylesheet">
<script src="https://unpkg.com/video.js/dist/video.min.js"></script>

@endsection
