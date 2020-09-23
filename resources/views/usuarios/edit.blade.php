@extends('layouts.app')

@section('content')
   
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editar Usuário</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('usuarios.index') }}" title="Voltar"> <i class="fas fa-backward "></i> Voltar</a>
                <!-- <button type="button" href="{{ route('usuarios.index') }}" title="Voltar" class="btn btn-primary"><i class="fas fa-backward"></i> Voltar</button> -->
            </div>
        </div>
        
    

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif 
    <div class="col-lg-12 margin-tb">
    <form action="{{ route('usuarios.update', $usuario->id) }}" method="POST" >
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-sm">
                <div class="form-group">
                    <label for="exampleInputNome">Nome:</label>
                    <input type="text" name="nome" class="form-control" value="{{ $usuario->nome }}" id="exampleInputNome"  placeholder="Nome completo" >
        
                </div>
            </div>
            <div class="col-sm">
                <div class="form-group">
                    <label for="exampleInputCPF">CPF:</label>
                    <input type="text" name="cpf" class="form-control" value="{{ $usuario->CPF}}" placeholder="000.000.000.00" onkeypress="$(this).mask('000.000.000-00')">
                    <!-- <textarea class="form-control" style="height:50px" name="CPF" onkeypress="$(this).mask('000.000.000-00')"></textarea> -->
                </div>
            </div>
            
            <div class="col-sm">
                <div class="form-group">
                   
                    <label for="exampleInputData">Data_nascimento:</label>
                    <input type="text" name="data_nascimento" class="form-control" value="{{ $usuario->data_nascimento }}" placeholder="00-00-0000" onkeypress="$(this).mask('00-00-0000')">
                    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <div class="form-group ">
                    
                    <label  for="exampleInputEmail1">E-mail</label>
                    
                    <input type="email" name="email" class="form-control" value="{{ $usuario->email }}" placeholder="nome@example.com">
                        
                </div> 
            </div>           
            <div class="col-sm">
                <div class="form-group">
                    <label for="exampleInputTelefone">Telefone</label>
                    <input type="text" name="telefone"   class="form-control" value="{{ $usuario->telefone }}" placeholder="(00) 0000-0000" onkeypress="$(this).mask('(00) 0000-0000')">    
                </div>
            </div>
        </div>
        <!-- logradouro -->
        <div class="row col-sm">
        <div class="pull-left">
                <div class="form-group">
                    <label for="exampleInputCep">Cep:</label>
                    <!-- <input type="text" name="cep" class="form-control" placeholder="00000-000" onkeypress="$(this).mask('00000-000')"> -->
                
                    <div class="input-group mb-2">
                        <input type="text" name="cep" class="form-control" value="{{ $usuario->cep }}" placeholder="00000-000" onkeypress="$(this).mask('00000-000')" aria-label="Recipient's username" aria-describedby="button-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button" id="button-addon2"><img src="/assets/img/search.svg" width="20" height="20" class="d-inline-block align-top" alt=""></a></button>
                        </div>
                    </div>
                
                </div>
            </div>  
        </div>
        <div class="row">
            

            
            <div class="col-sm">
                <div class="form-group">
                    <label for="exampleInputEndereco">Endereco:</label>
                    <input type="text" name="endereco" class="form-control" value="{{ $usuario->endereco }}" placeholder="rua x" >
                    
                </div>
            </div>
            <div class="col-sm">
                <div class="form-group">
                   
                    <label for="exampleInputCidade">Cidade:</label>
                    <input type="text" name="cidade" class="form-control" value="{{ $usuario->cidade }}" placeholder="Manaus" >
                    
                </div>
            </div>
            <div class="col-sm">
                <div class="form-group">
                   
                    <label for="exampleInputEstado">Estado:</label>
                    <input type="text" name="estado" class="form-control" value="{{ $usuario->estado }}" placeholder="Amazonas" >
                    
                </div>
            </div>
        </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Alterar</button>
            </div>
        </div>

    </form>
    </div>
@endsection
