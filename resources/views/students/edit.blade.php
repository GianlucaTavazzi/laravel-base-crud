@extends('layouts.app')

@section('page-title', 'Modifica dettagli studente')

@section('content')
    <div class="form-container">
        <form action="{{ route('products.update', ['product' => $studente->id])}}" method="post">
            @method('PUT')
            @csrf
            <div class="form-section">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" placeholder="Name" value="{{old('name', $studente->name)}}">
                @error ('name')
                    <p> {{ $message }} </p>
                @enderror
            </div>
            <div class="form-section">
                <label for="lastname">Lastname:</label>
                <input type="text" id="lastname" name="lastname" placeholder="Lastname" value="{{old('lastname', $studente->lastname)}}">
                @error ('lastname')
                    <p> {{ $message }} </p>
                @enderror
            </div>
            <div class="form-section">
                <label for="number">Number:</label>
                <input type="number" id="number" name="number" placeholder="Number" value="{{old('number', $studente->number)}}">
                @error ('number')
                    <p> {{ $message }} </p>
                @enderror
            </div>
            <div class="form-section">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Email" value="{{old('email', $studente->email)}}">
                @error ('email')
                    <p> {{ $message }} </p>
                @enderror
            </div>
            <div class="form-submit">
                <input type="submit" value="Salva modifiche">
            </div>
        </form>
    </div>
@endsection
