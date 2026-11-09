@extends('layouts.app')
@section('title', 'login')
@section('content')

    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
                    <h3 class="text-center">TURNAMENT EMEL</h3>
                    <p class="text-center text-muted">Masuk sebagai panitia turnamen</p>

                    <form action="/dashboard" method="GET">
                        <div class="mb-3">
                            <label class="form-label">Username</label>
                            <input type="text" name="username" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-dark w-100">Masuk</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
