@extends ('layout')
    @section('content')
    <div class="container text-center">
        <h2 class="mb-4">Pesquisar Alien</h2>
        <form method="Post" action="" class="mb-5">
            <div class="mb-3">
                <label for="inputwinx" class="form-label">Digite o Alien:</label>
                <input type="text" class="form-control" id="inputwinx" name="nomeWinx" placeholder="Digite o nome do Alien">
            </div>
            <button type="submit" class="btn btn-primary">Pesquisar</button>
        </form>

        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Código</th>
                        <th scope="col">Alien</th>
                        <th scope="col">Raça</th>
                        <th scope="col">Primeira aparição</th>
                        <th scope="col">Planeta</th>
                        <th scope="col">Alterar</th>
                        <th scope="col">Excluir</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($registrosWinx as $registrosWinxs)
                    <tr>
                        <th scope="row">{{ $registrosWinxs->idWinx }}</th>
                        <td>{{ $registrosWinxs->nomeWinx }}</td>
                        <td>{{ $registrosWinxs->elementoWinx }}</td>
                        <td>{{ $registrosWinxs->namoradoWinx }}</td>
                        <td>{{ $registrosWinxs->planetaWinx }}</td>

                        <td>
                            <a href="{{route('show-altera-winx', $registrosWinxs->idWinx)}}">
                                <button type="button" class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 11.5a.5.5 0 0 0 .5.5h11.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 11H1.5a.5.5 0 0 0-.5.5m14-7a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H14.5a.5.5 0 0 1 .5.5" />
                                </svg></button>
                            </a>
                        </td>
                        <td>
                            <form method="post" action="{{route('apaga-winx', $registrosWinxs->idWinx)}}">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                        <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                    </svg></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endsection