@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
    <h2>Hellaw, {{$username}}</h2>
    <p class="text-muted">Berikut adalah ringkasan Turnament eMeL saat ini:</p>

    <div class="row">
        <div class="col-md-4 mb-3">
            <div class="card text-center">
                <div class="card-body">
                    <h6>Total Tim</h6>
                    <h2>{{$total}}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card text-center">
                <div class="card-body">
                    <h6>Tim Lolos</h6>
                    <h2>{{$lolos}}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card text-center">
                <div class="card-body">
                    <h6>Tim Gugur</h6>
                    <h2>{{$gugur}}</h2>
                </div>
            </div>
        </div>
    </div>

@endsection