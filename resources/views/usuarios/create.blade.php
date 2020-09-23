@extends('layouts.app')

@section('content')
    
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Cadastrar novo Usuário</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('usuarios.index') }}" title="Voltar"> <i class="fas fa-backward "></i> Voltar</a>
                <!-- <button type="button" href="{{ route('usuarios.index') }}" title="Voltar" class="btn btn-primary"><i class="fas fa-backward"></i> Voltar</button> -->
            </div>
        </div>
        
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>ops!</strong> Preencha os campos obrigatórios.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif 
    <div class="col-lg-12 margin-tb">
    <form action="{{ route('usuarios.store') }}" method="POST" >
        @csrf

        <div class="row">
            <div class="col-sm">
                <div class="form-group ">                 
                    <label for="exampleInputNome">Nome:</label>
                    <input id="inputNome" required="required" type="text" name="nome" class="form-control text-capitalize"  placeholder="Nome completo" pattern="[a-zA-Z\s]+$" >
        
                </div>
            </div>
            <div class="col-sm">
                <div class="form-group">
                    <label for="exampleInputCPF">CPF:</label>
                    <input type="text" name="cpf" required="required" class="form-control" placeholder="000.000.000-00" onkeypress="$(this).mask('000.000.000-00')" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}"/>
                    <!-- <textarea class="form-control" style="height:50px" name="CPF" onkeypress="$(this).mask('000.000.000-00')"></textarea> -->
                </div>
            </div>
            
            <div class="col-sm">
                <div class="form-group">
                   
                    <label for="exampleInputData">Data_nascimento:</label>
                    <input type="date" name="data_nascimento" required="required" class="form-control" maxlength="10"  pattern="[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" min="1890-01-01" max="2030-12-31" >
                    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <div class="form-group ">
                    
                    <label  for="exampleInputEmail1">E-mail</label>
                    
                    <input type="email" name="email" required="required" maxlength="191" class="form-control" placeholder="nome@example.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" />
                        
                </div> 
            </div>           
            <div class="col-sm">
                <div class="form-group">
                    <label for="exampleInputTelefone">Telefone</label>
                    <input type="tel" name="telefone" required="required"  maxlength="14" class="form-control" placeholder="(00) 0000-0000" onkeypress="$(this).mask('(00) 0000-0000')">    
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
                        <input type="text" name="cep" required="required" class="form-control" placeholder="00000-000" onkeypress="$(this).mask('00000-000')" aria-label="Recipient's username" aria-describedby="button-addon2" >
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
                    <input type="text" name="endereco" required="required" maxlength="100" class="form-control" placeholder="rua x" >
                    
                </div>
            </div>
            <div class="col-sm">
                <div class="form-group">
                   
                    <label for="exampleInputCidade">Cidade:</label>
                    <input type="text" name="cidade" required="" title="O campo nome não pode conter números" maxlength="100" class="form-control text-capitalize" placeholder="Manaus" pattern="[a-zA-Z\s]+$" >
                    
                </div>
            </div>
            <div class="col-sm">
                <div class="form-group">
                   
                    <label for="exampleInputEstado">Estado:</label>
                    <input type="text" name="estado" required="" title="O campo nome não pode conter números" maxlength="100" class="form-control text-capitalize" placeholder="Amazonas" pattern="[a-zA-Z\s]+$" >
                    
                </div>
            </div>
        </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </div>

    </form>
    </div>
@endsection
