@extends('main')
@section('title', $title)
@section('data')
    <h1>Data Program Studi</h1>
    {{-- Table data prodi di Polindra --}}
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Kode Prodi</th>
                <th>Nama Program Studi</th>
                <th>Jurusan</th>
            </tr>
        </thead>
        <tbody>
            {{-- Melakukan looping data dari route --}}
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
