 @extends('template')
  @section('conteudo')

<div class="jumbotron bg-texto escuro-branco">
  <h1 class="display-4">Cadastro de funcionario</h1>
</div>

  <form method="GET" action="{{ route('') }}">
    @csrf

    <form class="form-inline">
    <div class="form-group mx-sm-3 mb-2">
        <label class="sr-only">Nome</label>
        <input type="text" class="form-control" placeholder="Nome" name="nome">
      </div>

      <div class="form-group mx-sm-3 mb-2">
        <label class="sr-only">Usuario</label>
        <input type="text" class="form-control" placeholder="Usuarios" name="usuario">
      </div>
    
     <div class="form-group mx-sm-3 mb-2">
        <label class="sr-only">Senha</label>
        <input type="password" class="form-control" placeholder="Senha" name="senha">
      </div>
      
       <div class="form-group mx-sm-3 mb-2">
        <label class="sr-only">Email</label>
        <input type="text" class="form-control" placeholder="email" name="email">
      </div>

       <select class="estado_civil" name="estado_civil">

      <option>Solteiro<option>
      <option>Casado</option>
      <option>Viuvo</option>
      <option>Separado</option>
      <option>Divorciado</option>
      <option>União estavel</option>
      <option>Viuvo</option>
      <option>Outro</option>
      </select>

       <div class="form-group mx-sm-3 mb-2">
        <label class="sr-only">RG</label>
        <input type="number" class="form-control" placeholder="rg" name="rg">
      </div>

      <div class="form-group mx-sm-3 mb-2">
        <label class="sr-only">Celular</label>
        <input type="numer" class="form-control" placeholder="celular" name="numero_celular">
      </div>

       <div class="form-group mx-sm-3 mb-2">
        <label class="sr-only">CEP</label>
        <input type="number" class="form-control" placeholder="CEP" name="cep">
      </div>

    <div class="form-group mx-sm-3 mb-2">
        <label class="sr-only">Cidade</label>
        <input type="text" class="form-control" placeholder="Cidade" name="cidade">
      </div>
    
     <div class="form-group mx-sm-3 mb-2">
        <label class="sr-only">Bairro</label>
        <input type="text" class="form-control" placeholder="Bairro" name="bairro">
      </div>

      <div class="form-group mx-sm-3 mb-2">
        <label class="sr-only">Rua</label>
        <input type="text" class="form-control" placeholder="Rua" name="rua">
      </div>

      <div class="form-group mx-sm-3 mb-2">
        <label class="sr-only">Numero</label>
        <input type="number" class="form-control" placeholder="Numero" name="numero_casa">
      </div>

      
    <select class="estado" name="estado">

    <option>UF</option>
      <option>AC</option>
      <option>AL</option>
      <option>AP</option>
      <option>AM</option>
      <option>BA</option>
      <option>CE</option>
      <option>DF</option>
      <option>ES</option>
      <option>GO</option>
      <option>MA</option>
      <option>MT</option>
      <option>MS</option>
      <option>MG</option>
      <option>PA</option>
      <option>PB</option>
      <option>PR</option>
      <option>PE</option>
      <option>PI</option>
      <option>RJ</option>
      <option>RN</option>
      <option>RS</option>
      <option>RO</option>
      <option>RR</option>
      <option>SC</option>
      <option>SP</option>
      <option>SE</option>
      <option>TO</option>
      </select>
    
    <button type="submit" name="Enviar"  class="btn btn-primary">Enviar</button>

  </form>

  @endsection