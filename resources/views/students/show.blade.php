@extends('layouts.app')

@section('page-title', 'Daettaglio studente')

@section('content')
    <table>
        <thead>
            <th>Name</th>
            <th>Lastname</th>
            <th>Number</th>
            <th>Email</th>
        </thead>
        <tbody>
            <td> {{ $studente->name }} </td>
            <td> {{ $studente->lastname }} </td>
            <td> {{ $studente->number }} </td>
            <td> {{ $studente->email }} </td>
        </tbody>
    </table>
@endsection
