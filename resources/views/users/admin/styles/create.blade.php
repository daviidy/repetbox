@extends('layouts.admin.menu')
@section('page_title', 'Création d\'un style')
@section('link_title', 'Création d\'un style')

@section('content')



<div class="pcoded-inner-content">

    <div class="main-body">
        <div class="page-wrapper">

            <div class="page-body">

                <div class="row">
                    <div class="col-sm-12">

                        <div class="card">
                            <div class="card-header">
                                <h5>Création d'un style</h5>
                                <span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
                            </div>
                            <div class="card-block">
                                <h4 class="sub-title">Création d'un style</h4>
                                <form method="post" enctype="multipart/form-data" action="{{route('styles.store')}}">
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Nom</label>
                                        <div class="col-sm-10">
                                            <input name="name" type="text" class="form-control" placeholder="Nom du style">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"></label>
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-primary btn-round waves-effect waves-light">
                                                Ajouter le style
                                            </button>
                                        </div>
                                    </div>

                                </form>

                            </div>
                        </div>










                    </div>
                </div>



            </div>

        </div>
    </div>

    <div id="styleSelector">
    </div>
</div>


@endsection
