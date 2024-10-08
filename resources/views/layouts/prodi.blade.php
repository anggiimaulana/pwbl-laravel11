@extends('layouts.main')

@section('title', $title)

@section('data')
    <h1>Data Program Studi</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nama Program Studi</th>
                <th>Jenjang</th>
                <th>Jurusan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($prodi as $p)
                <tr>
                    <td>{{ $p['nama_prodi'] }}</td>
                    <td>{{ $p['jenjang'] }}</td>
                    <td>{{ $p['jurusan'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
