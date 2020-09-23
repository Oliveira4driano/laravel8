@extends('layouts.app')

@section('content')

        <div class="col-lg-12 margin-tb">
            <div class="pull-left ">
                <h2>Laravel 8 CRUD </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('usuarios.create') }}" title="Cadastrar usuário"><i class="fas fa-plus-circle"></i> Cadastrar</a> 
                    <!-- <button type="button" href="{{ route('usuarios.create') }}" title="Cadastrar usuário" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Cadastrar</button> -->
            </div>
        </div>
    

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="col-lg-12 margin-tb">
    <table class="table table-bordered table-responsive-lg table-striped">
        <tr>
            <th>ID</th>
            <th>nome</th>
            <th>CPF</th>
            <th>data_nascimento</th>
            <th>email</th>
            <th>telefone</th>
            <!-- <th>endereco</th>
            <th>cidade</th>
            <th>estado</th>
            <th>cep</th> -->
            <th width="280px">Acões</th>
        </tr>
        @foreach ($usuarios as $usuario)
            <tr>
                <td>{{ ++$i ?? '' }}</td>
                <td>{{ $usuario->nome }}</td>
                <td>{{ $usuario->cpf }}</td>
                <td>{{ $usuario->data_nascimento}}</td>   
                <td>{{ $usuario->email }}</td>
                <td>{{ $usuario->telefone }}</td>
                <!-- <td>{{ $usuario->endereco }}</td>
                <td>{{ $usuario->cidade }}</td>
                <td>{{ $usuario->estado }}</td>
                <td>{{ $usuario->cep }}</td> -->
                <td>
                    <form action="{{ route('usuarios.destroy', $usuario->id ) }}" method="POST">

                        <a href="{{ route('usuarios.show', $usuario->id ) }}" title="show">
                            <i class=" fas fa-eye text-success  fa-lg"></i>&nbsp&nbsp&nbsp
                        </a>

                        <a href="{{ route('usuarios.edit', $usuario->id ) }}">
                            <i class=" fas fa-edit  fa-lg"></i>&nbsp

                        </a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                            <i class=" fas fa-trash fa-lg text-danger"></i>

                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    </div>
    {!! $usuarios->links() !!}

@endsection