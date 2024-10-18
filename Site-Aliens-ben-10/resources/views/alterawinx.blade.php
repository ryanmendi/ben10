@extends('layout')
@section('content')

<div class="container mt-5">
    <h2>Alterar Registros do Alien</h2>
    <form method="post" action="{{ route('altera-winx', $registrosWinx->idWinx) }}">
        @csrf
        @method('put')

        <div class="form-group">
            <label for="nomeWinx">Nome do Alien:</label>
            <input type="text" class="form-control" id="nomeWinx" name="nomeWinx" placeholder="Digite o nome do Alien" required value="{{ $registrosWinx->nomeWinx }}">
        </div>
        <div class="form-group">
            <label for="elementoWinx">Raça do Alien:</label>
            <input type="text" class="form-control" id="elementoWinx" name="elementoWinx" placeholder="Digite a raça do Alien" required value="{{ $registrosWinx->elementoWinx }}">
        </div>
        <div class="form-group">
            <label for="namoradoWinx">Primeira aparição do Alien:</label>
            <input type="text" class="form-control" id="namoradoWinx" name="namoradoWinx" placeholder="Digite quando foi a primeira aparição do Alien" required value="{{ $registrosWinx->namoradoWinx }}">
        </div>
        <div class="form-group">
            <label for="planetaWinx">Planeta do Alien:</label>
            <input type="text" class="form-control" id="planetaWinx" name="planetaWinx" placeholder="URL da imagem da winx" required value="{{ $registrosWinx->planetaWinx }}">
        </div>
        <button type="submit" class="btn btn-primary">Alterar Evento</button>
    </form>
</div>

@endsection