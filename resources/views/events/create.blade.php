@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')

    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Criar Evento</h1>
        <form action="/events" method="POST" enctype="multipart/form-data">
            @csrf
            <div id="event-create-form" class="form-group">
                <label for="image">Imagem do Evento</label>
                <input type="file" class="form-control-file" id="image" name="image" placeholder="Nome do evento" required>
            </div>
            <div id="event-create-form" class="form-group">
                <label for="title">Evento*</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento" required>
            </div>
            <div id="event-create-form" class="form-group">
                <label for="title">Cidade*</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Local do evento" required>
            </div>
            <div id="event-create-form" class="form-group">
                <label for="title">O evento é privado?*</label>
                <select name="private" id="private" class="form-control">
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div>
            <div id="event-create-form" class="form-group">
                <label for="date">Data do Evento*</label>
                <input type="date" class="form-control" id="date" name="date" required>
            </div>
            <div id="event-create-form" class="form-group">
                <label for="title">Descrição*</label>
                <textarea name="description" id="description" placeholder="O que vai acontecer no evento?"
                class="form-control" required></textarea>
            </div>
            <div id="event-create-form" class="form-group">
                <label for="title">Adicione itens de infraestrutura*</label>
                <div class="form-group">
                    <label for="title">Ambiente:</label>
                    <input type="radio" name="items[]" value="Ambiente Aberto" required>
                    <label class="form-check-label" for="flexRadioDefault1">Aberto</label>
                    <input type="radio" name="items[]" value="Ambiente Fechado">
                    <label class="form-check-label" for="flexRadioDefault1">Fechado</label>
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Cadeiras"> Cadeiras
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Palco"> Palco
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Open Bar"> Open Bar
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Open Food"> Open Food
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Brindes"> Brindes
                </div>
            </div>
            <input id="event-create-form" type="submit" class="btn btn-primary" value="Criar Evento">
        </form>
    </div>

@endsection
