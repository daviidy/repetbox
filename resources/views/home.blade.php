@extends('layouts.menu')
@section('title', 'Mon profil')

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
             <h3>
                 Profil du musicien
             </h3>

             <div class="row">
                 <div class="col-sm-4">
                     <div class="profilepic sixtyprctwidth" style="background-image:url('https://img.icons8.com/bubbles/2x/user.png');">
                         <div class="checkedprofile">✓</div>
                     </div>
                 </div>
                 <div class="col-sm-8">
                     <div class="row">
                        <div style="margin: 2rem;" class="col-sm-12">
                            <div class="row details-title">
                                <div class="col-sm-4">
                                    Pseudo
                                </div>
                                <div class="col-sm-8 details">
                                    Test
                                </div>
                            </div>
                            <div class="row details-title">
                                <div class="col-sm-4">
                                    Nom et prénoms
                                </div>
                                <div class="col-sm-8 details">
                                    Test
                                </div>
                            </div>
                            <div class="row details-title">
                                <div class="col-sm-4">
                                    Langues
                                </div>
                                <div class="col-sm-8 details">
                                    Test
                                </div>
                            </div>
                            <div class="row details-title">
                                <div class="col-sm-4">
                                    Email
                                </div>
                                <div class="col-sm-8 details">
                                    Test
                                </div>
                            </div>
                            <div class="row details-title">
                                <div class="col-sm-4">
                                    Mobile
                                </div>
                                <div class="col-sm-8 details">
                                    Test
                                </div>
                            </div>
                            <div class="row details-title">
                                <div class="col-sm-4">
                                    Pays
                                </div>
                                <div class="col-sm-8 details">
                                    Test
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="showProfile__button">
                                   <a href="/fr/membres/davidarmelyao/edit" class="button button--primary">
                                   Modifier
                                   </a>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="showProfile__button left">
                                   <a href="/fr/membres/davidarmelyao/edit" class="button button--primary">
                                   Modifier
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
                                <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="height: 30%;">
                                  <span class="sr-only">30% Complete</span>
                                </div>
                              </div>
                              <ul class="progresslistv">
        						  <li>Débutant</li>
        						  <li>Amateur</li>
        						  <li>Professeur</li>
        						  <li>Intermitant</li>
        						  <li>Star</li>
        					  </ul>
                         </div>

                     </div>

                 </div>
                 <div class="col-sm-5">

                     <h6 class="mini_title_in_row">Type d'instrument</h6>
                     <div class="row">
                         <div class="col-sm-12">
                             <span class="badge badge-dark">Dark</span>
                             <span class="badge badge-dark">Dark</span>
                             <span class="badge badge-dark">Dark</span>
                         </div>

                     </div>

                 </div>

                 <div class="col-sm-4">
                     <h6 class="mini_title_in_row">Style musical</h6>
                     <div class="row">
                         <div class="col-sm-12">
                             <span class="badge badge-dark">Dark</span>
                             <span class="badge badge-dark">Dark</span>
                             <span class="badge badge-dark">Dark</span>
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
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec egestas leo ac sollicitudin faucibus. In nec vehicula risus, eu varius est. Nullam magna sapien, sagittis quis elit elementum, mattis placerat magna. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec consequat vel libero sit amet bibendum. Pellentesque eu augue pharetra, scelerisque orci vitae, venenatis nunc. Vestibulum tincidunt diam mi, et cursus eros feugiat et. Morbi et imperdiet orci. Mauris tincidunt vestibulum lobortis. Phasellus quis purus eget felis facilisis lobortis a ut neque. Donec sit amet vestibulum nunc, eget vulputate augue. Nunc gravida iaculis condimentum. Curabitur sed tempor ipsum.</p>
                 </div>
                 <div class="col-sm-12">
                     <div class="showProfile__button">
                        <a href="/fr/membres/davidarmelyao/edit" class="button button--primary">
                        Voir la suite
                        </a>
                     </div>
                 </div>
             </div>
         </div>

     </div>

     <!--competences-->
     <div class="row contentbox_row">
         <div class="col-sm-12 contentbox center">
             <h3 style="margin-bottom: 2rem;">
                 Mes compétences
             </h3>

             <div class="row">
                 <div class="col-sm-6">
                     <div class="text-left">
    					<table>
    						<tbody><tr><td style="width:30%;">
                                <div class="progress">
                                  <div class="progress-bar" style="width:70%"></div>
                                </div>
    						</td><td>Arrangeur / Orchestration</td></tr>

    						<tr><td>
                                <div class="progress">
                                  <div class="progress-bar" style="width:70%"></div>
                                </div>
    						</td><td>Interprète</td></tr>
    						<tr><td>
                                <div class="progress">
                                  <div class="progress-bar" style="width:70%"></div>
                                </div>
    						</td><td>Ecriture Partition</td></tr>
    					</tbody></table>
    				</div>

                 </div>
                 <div class="col-sm-6">

                     <div class="text-left">
    					<table>
    						<tbody><tr><td style="width:30%;">
                                <div class="progress">
                                  <div class="progress-bar" style="width:70%"></div>
                                </div>
    						</td><td>Arrangeur / Orchestration</td></tr>

    						<tr><td>
                                <div class="progress">
                                  <div class="progress-bar" style="width:70%"></div>
                                </div>
    						</td><td>Interprète</td></tr>
    						<tr><td>
                                <div class="progress">
                                  <div class="progress-bar" style="width:70%"></div>
                                </div>
    						</td><td>Ecriture Partition</td></tr>
    					</tbody></table>
    				</div>

                 </div>


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
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec egestas leo ac sollicitudin faucibus. In nec vehicula risus, eu varius est. Nullam magna sapien, sagittis quis elit elementum, mattis placerat magna. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec consequat vel libero sit amet bibendum. Pellentesque eu augue pharetra, scelerisque orci vitae, venenatis nunc. Vestibulum tincidunt diam mi, et cursus eros feugiat et. Morbi et imperdiet orci. Mauris tincidunt vestibulum lobortis. Phasellus quis purus eget felis facilisis lobortis a ut neque. Donec sit amet vestibulum nunc, eget vulputate augue. Nunc gravida iaculis condimentum. Curabitur sed tempor ipsum.</p>
                 </div>
                 <div class="col-sm-12">
                     <span class="badge badge-dark">Dark</span>
                     <span class="badge badge-dark">Dark</span>
                     <span class="badge badge-dark">Dark</span>
                     <span class="badge badge-dark">Dark</span>
                 </div>
             </div>
         </div>

     </div>

</div>

@endsection
