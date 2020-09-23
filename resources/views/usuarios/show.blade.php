@extends('layouts.app')

@section('content')

<div class="col-lg-12 margin-tb">
    <div class="pull-left">
        <h2> Visualizar Dados</h2>
    </div>
    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('usuarios.index') }}" title="Voltar"> <i class="fas fa-backward "></i> Voltar</a>
    </div>
</div>


<div class="col-lg-12 margin-tb">
    <div class="form-group">
        <strong>Nome:</strong>
        {{ $usuario->nome }}
    </div>
</div>
<div class="col-lg-12 margin-tb">
    <div class="form-group">
        <strong>CPF:</strong>
        {{ $usuario->cpf }}
    </div>
</div>
<div class="col-lg-12 margin-tb">
    <div class="form-group">
        <strong>Data Nascimento:</strong>
        {{ $usuario->data_nascimento }}
    </div>
</div>
<div class="col-lg-12 margin-tb">
    <div class="form-group">
        <strong>E-mail:</strong>
        {{ $usuario->email }}
    </div>
</div>
<div class="col-lg-12 margin-tb">
    <div class="form-group">
        <strong>Telefone:</strong>
        {{ $usuario->telefone }}
    </div>
</div>
<div class="col-lg-12 margin-tb">
    <div class="form-group">
        <strong>Endereço:</strong>
        {{ $usuario->endereco }}
    </div>
</div>
<div class="col-lg-12 margin-tb">
    <div class="form-group">
        <strong>Cidade:</strong>
        {{ $usuario->cidade }}
    </div>
</div>
<div class="col-lg-12 margin-tb">
    <div class="form-group">
        <strong>Estado:</strong>
        {{ $usuario->estado }}
    </div>
</div>
<div class="col-lg-12 margin-tb">
    <div class="form-group">
        <strong>CEP:</strong>
        {{ $usuario->cep }}
    </div>
</div>
<div class="col-lg-12 margin-tb">
    <div class="form-group">
        <strong>Date Criação:</strong>
        {{ date_format($usuario->created_at, 'd-m-Y') }}
    </div>
</div>
<div class="col-lg-12 margin-tb">
    <div class="form-group">
        <strong>Date Atualizão:</strong>
        {{ date_format($usuario->updated_at, 'd-m-Y') }}
    </div>
		<div class="col-lg-12 margin-tb">
			<div class="pull-right">
				<form action="{{ route('usuarios.destroy', $usuario->id) }}" method="POST">
					@csrf
					@method('DELETE')
						<button class="btn btn-primary" type="submit" title="Deletar">
							<i class="fas fa-trash fa-lg text-danger"></i> Deletar
						</button>
				</form>

			</div>
		</div>
</div>
@endsection