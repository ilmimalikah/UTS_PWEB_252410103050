@extends('layouts.app')

@section('title', 'Profil')
@section('content')
    <h3>Profil Anda</h3>

    <div class="card" style="max-width: 400px">
        <div class="card-body">
            <p><strong>Username: </strong>{{ $username }}</p>
            <p><strong>Peran: </strong>Panitia Turnamen</p>
            <p><strong>Event: </strong>Turnamen Mobile Legends 2026</p>
        </div>
    </div>
@endsection
