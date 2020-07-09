@extends('layouts.app')

@section('page-title', 'studenti')

@section('content')
    <table>
        <thead>
            <th>Name</th>
            <th>Lastname</th>
            <th>Number</th>
            <th>Email</th>
            <th>Azioni</th>
        </thead>
        <tbody>
            @foreach ($studenti as $studente )
                <tr>
                    <td> {{ $studente->name }} </td>
                    <td> {{ $studente->lastname }} </td>
                    <td> {{ $studente->number }} </td>
                    <td> {{ $studente->email }} </td>
                    <td> <a href="{{ route('products.show', ['product' => $studente->id])}}">Dettagli</a> </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
