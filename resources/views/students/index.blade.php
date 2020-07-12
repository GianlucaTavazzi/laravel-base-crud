@extends('layouts.app')

@section('page-title', 'studenti')

@section('content')
    <div class="tab-container">
        <div class="tab-header">
            <h1>Lista studenti</h1>
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
                @foreach ($studenti as $studente )
                    <tr>
                        <td> {{ $studente->name }} </td>
                        <td> {{ $studente->lastname }} </td>
                        <td> {{ $studente->number }} </td>
                        <td> {{ $studente->email }} </td>
                        <td>
                            <a class="details" href="{{ route('products.show', ['product' => $studente->id])}}">Dettagli</a>
                            <a class="modify" href="{{ route('products.edit', ['product' => $studente->id])}}">Modifica</a>
                            <form action="{{ route('products.destroy', ['product' => $studente->id])}}" method="post">
                                @method('DELETE')
                                @csrf
                                <input type="submit" value="Elimina">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
