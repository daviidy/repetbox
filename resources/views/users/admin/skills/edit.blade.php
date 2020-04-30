@extends('layouts.admin.menu')
@section('page_title', 'Modification d\'une compétence')
@section('link_title', 'Modification d\'une compétence')

@section('content')



<div class="pcoded-inner-content">

    <div class="main-body">
        <div class="page-wrapper">

            <div class="page-body">

                <div class="row">
                    <div class="col-sm-12">

                        <div class="card">
                            <div class="card-header">
                                <h5>Modification d'une compétence</h5>
                                <span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
                            </div>
                            <div class="card-block">
                                <h4 class="sub-title">Modification d'une compétence</h4>
                                <form method="post" enctype="multipart/form-data" action="{{url('skills', $skill)}}">
                                    @csrf
                                    {{method_field('patch')}}
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Nom</label>
                                        <div class="col-sm-10">
                                            <input value="{{$skill->name}}" name="name" type="text" class="form-control" placeholder="Nom de l'compétence">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"></label>
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-primary btn-round waves-effect waves-light">
                                                Modifier la compétence
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
