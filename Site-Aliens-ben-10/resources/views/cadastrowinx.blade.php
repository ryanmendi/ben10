@extends('layout')
@section('content')

<div class="container mt-5">
    <h2>Cadastro do Alien</h2>
    <form method="post" action="{{route('cadastra-winx')}}">
        @csrf
        <div class="form-group">
            <label for="nomeWinx">Nome do Alien:</label>
            <input type="text" class="form-control" id="nomeWinx" name="nomeWinx" placeholder="Digite o nome do Alein" required>
        </div>
        <div class="form-group">
            <label for="elementoWinx">Raça do Alien:</label>
            <input type="text" class="form-control" id="elementoWinx" name="elementoWinx" placeholder="Digite a raça do Alien" required>
        </div>
        <div class="form-group">
            <label for="namoradoWinx">Primeira aparição do Alien:</label>
            <input type="text" class="form-control" id="namoradoWinx" name="namoradoWinx" placeholder="Digite quando foi a primeira aparição do Alein" required>
        </div>
        <div class="form-group">
            <label for="planetaWinx">Planeta do Alien:</label>
            <input type="text" class="form-control" id="planetaWinx" name="planetaWinx" placeholder="Digite o planeta do Alien" required>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar Alien</button>
    </form>
</div>

@endsection