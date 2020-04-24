@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <p>{{ trans('sentence.welcome')}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
