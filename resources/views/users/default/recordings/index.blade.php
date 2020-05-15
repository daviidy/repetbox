@extends('layouts.menu')
@section('title', 'Mes enregistrements')

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
                        poster="https://images.unsplash.com/photo-1529518969858-8baa65152fc8?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80"
                        data-setup='{}'>
                      <source src="{{asset('storage/'.$recording->videos->where('user_id', Auth::user()->id)->first()->video_file)}}" type="video/mp4"></source>

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


     <div class="row contentbox_row">
         <div class="col-sm-12 contentbox center">
             <h3>
                 Mes demandes d'enregistrement
             </h3>
             @foreach(Auth::user()->recordings as $recording)
             <h6 class="text-left">
                   <div class="trafficlight">
                       <div class="trafficbulb redon"></div>
                       <div class="trafficbulb greenoff"></div>
                   </div>
                   <a href="/recordings/multi/edit/{{$recording->id}}">
                       {{$recording->name}}
                   </a>
             </h6>
             <p class="text-left">Pour avoir accès à l'enregistrement des titres ci-dessous,
             il faut accepter le titre</p>
             <div class="row videobloc">

                 <div class="col-sm-7">
                     <video
                        id="my-player"
                        class="video-js"
                        controls
                        preload="auto"
                        poster="https://images.unsplash.com/photo-1529518969858-8baa65152fc8?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80"
                        data-setup='{}'>
                      <source src="{{asset('storage/'.$recording->videos->where('user_id', Auth::user()->id)->first()->video_file)}}" type="video/mp4"></source>

                      <p class="vjs-no-js">
                        To view this video please enable JavaScript, and consider upgrading to a
                        web browser that
                        <a href="https://videojs.com/html5-video-support/" target="_blank">
                          supports HTML5 video
                        </a>
                      </p>
                    </video>

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
                    <div class="row">
                        <div class="col-6">
                            <div class="showProfile__button left">
                               <a style="background: #08192D; border-color: #08192D;" href="/members/{{Auth::user()->id}}/edit" class="button button--primary">
                               Accepter
                               </a>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="showProfile__button left">
                               <a href="#" class="button button--primary">
                               Refuser
                               </a>
                            </div>
                        </div>

                    </div>
                 </div>
             </div>
             @endforeach

         </div>

     </div>


</div>



<!-- unpkg : use the latest version of Video.js -->
<link href="https://unpkg.com/video.js/dist/video-js.min.css" rel="stylesheet">
<script src="https://unpkg.com/video.js/dist/video.min.js"></script>

@endsection
