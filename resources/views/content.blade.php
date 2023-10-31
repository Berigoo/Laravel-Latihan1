@extends('template')

@section('biodata')
    <br>
    @php
        $data1 = (object)[
            'nama' => 'Muhamad Rizqi Fajri',
            'npm' => '2210631170081',
            'dream' => 'Jadi pilot gundam',
            'idk' => ['2', '+', '2', '=', '4'],
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
        <tr>
            <td>Math</td>
            <td>
                @foreach($data1->idk as $char)
                    {{ $char }}
                @endforeach
            </td>
        </tr>
    </table>
    <br>
@endsection
