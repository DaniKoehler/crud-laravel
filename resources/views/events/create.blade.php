@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')

    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Criar Evento</h1>
        <form action="/events" method="POST">
            @csrf
            <div id="event-create-form" class="form-group">
                <label for="title">Evento:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento">
            </div>
            <div id="event-create-form" class="form-group">
                <label for="title">Cidade:</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Local do evento">
            </div>
            <div id="event-create-form" class="form-group">
                <label for="title">O evento é privado?</label>
                <select name="private" id="private" class="form-control">
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div>
            <div id="event-create-form" class="form-group">
                <label for="title">Descrição:</label>
                <textarea name="description" id="description" placeholder="O que vai acontecer no evento?" class="form-control"></textarea>
            </div>
            <input id="event-create-form" type="submit" class="btn btn-primary" value="Criar Evento">
        </form>
    </div>

@endsection
