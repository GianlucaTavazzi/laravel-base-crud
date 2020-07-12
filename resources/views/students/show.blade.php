@extends('layouts.app')

@section('page-title', 'Dettaglio studente')

@section('content')
    <div class="tab-container">
        <div class="tab-header">
            <h1>Informazione prodotto</h1>
            <a class="details" href="{{ route('products.create')}}">Inserisci nuovo studente</a>
        </div>
        <table>
            <thead>
                <th>Name</th>
                <th>Lastname</th>
                <th>Number</th>
                <th>Email</th>
                <th>Azioni</th>
            </thead>
            <tbody>
                <td> {{ $studente->name }} </td>
                <td> {{ $studente->lastname }} </td>
                <td> {{ $studente->number }} </td>
                <td> {{ $studente->email }} </td>
                <td>
                    <a class="modify" href="{{ route('products.edit', ['product' => $studente->id])}}">Modifica</a>
                    <form action="{{ route('products.destroy', ['product' => $studente->id])}}" method="post">
                        @method('DELETE')
                        @csrf
                        <input type="submit" value="Elimina">
                    </form>
                </td>
            </tbody>
        </table>
    </div>
@endsection
