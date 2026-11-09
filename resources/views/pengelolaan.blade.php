@extends('layouts.app')
@section('title', 'Pengelolaan Tim')
@section('content')
    <h3>Daftar Tim Peserta</h3>
    <p class="text-muted">Panitia: {{$username}}</p>

    <div class="table-responsive">
        <table class="table table-bordered table-striped bg-white">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama Tim</th>
                    <th>Ketua Tim</th>
                    <th>Jumlah Pemain</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tim as $t)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$t['namaTim']}}</td>
                        <td>{{$t['ketua']}}</td>
                        <td>{{$t['pemain']}}</td>
                        <td>
                            @if ($t['status'] == 'Lolos')
                            <span class="badge bg-success">Lolos</span>

                            @elseif ($t['status'] == 'Gugur')
                            <span class="badge bg-danger">Gugur</span>

                            @else
                            <span class="badge bg-warning">Menunggu</span>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection