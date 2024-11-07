{{-- halaman daftar prodi --}}
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
            {{-- Melakukan looping data dari controller & db --}}
            @foreach ($dataProdi as $prodi)
                <tr>
                    <td>{{ $prodi->kode_prodi }}</td>
                    <td>{{ $prodi->nama_prodi }}</td>
                    <td>{{ $prodi->jurusan }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
