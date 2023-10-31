@extends('template')

@section('biodata')
    <br>
    @php
        $data1 = (object)[
            'nama' => 'Muhamad Rizqi Fajri',
            'npm' => '2210631170081',
            'dream' => 'Jadi pilot gundam',
        ];
    @endphp

    <table>
        <tr>
            <th colspan="2">Biodata</th>
        </tr>
        <tr>
            <td>Nama</td>
            <td>{{ $data1->nama }}</td>
        </tr>
        <tr>
            <td>NPM</td>
            <td>{{ $data1->npm }}</td>
        </tr>
        <tr>
            <td>Dream</td>
            <td>{{ $data1->dream }}</td>
        </tr>
    </table>
    <br>
@endsection
