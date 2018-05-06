@extends('layouts.app')

@section('content')
<br></br><br>
<div class="row">
    <div class="col-1">

    </div>
    <div class="col-4">
        <div class="card" style="width: 100%;">
            <div class="card-body">
                <h5 class="card-title">Hi! {{Auth::user()->name}}</h5>
                <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
                <p class="card-text">Donate used cloth and more.</p>
               <a class="btn btn-primary btn-lg btn-block" href="#" role="button">Post Your Donation</a>
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="card" style="width: 100%;">
            <div class="card-body" >
                
            </div>
        </div>
    </div>
    <div class="col-2"></div>
</div>
@endsection
