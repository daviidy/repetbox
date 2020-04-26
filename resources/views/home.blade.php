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
             <h3>
                 Profil du musicien
             </h3>

             <div class="row">
                 <div class="col-sm-4">
                     <div class="profilepic sixtyprctwidth" style="background-image:url('https://img.icons8.com/bubbles/2x/user.png');">
                         <div class="checkedprofile">✓</div>
                     </div>
                     <button class="btn btn-primary"><i class="fa fa-thumbs-up"></i> (120)</button>
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
             <h3 class="row_title">
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

@endsection
