@extends('template.admin')

@section('title' , 'Clientes')

@section('content')

<div class="col-md-10 offset-md-1">
    <h1>Cadastrar Clientes</h1>

    <form action="{{ url('dashboard/clientes/create/post') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <h3>Selecione Plano Desejado </h3>
    <div class="row">
       
    @foreach($plan as $plans)
    <div class="col-md-3">
    <p> <b>{{ $plans->vehicle }}</b></p>
        <p> {{ $plans->name }}</p>
        <p> {{ $plans->description }}</p>
        <p> {{ number_format($plans->price,2,",",".")  }}</p>

        <div class="form-check">
  <input class="form-check-input" type="checkbox" name="id_plan" value="{{ $plans->id }}" id="flexCheckDefault">
  <input  type="hidden" name="plan" value="{{ $plans->name }}" id="flexCheckDefault">
  <input  type="hidden" name="plan_price" value="{{ $plans->price }}" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    <p class="btn btn-primary">Contratar</p>
  </label>
</div>
        
        </div>
    @endforeach
    </div>
    <div class="row">
    <div class="form-group col-md-12">
        <h2>Dados do Associado</h2>
    </div>
    <div class="col-md-6">
    <label>Nome</label>
    <input type="text" name="name" class="form-control" />
    </div>

    <div class="col-md-3">
    <label>CPF</label>
    <input type="text" name="cpf" class="form-control" />
    </div>

    
    <div class="col-md-3">
    <label>RG</label>
    <input type="text" name="rg" class="form-control" />
    </div>

        
    <div class="col-md-6">
    <label>E-mail</label>
    <input type="text" name="mail" class="form-control" />
    </div>
            
    <div class="col-md-6">
    <label>Whatsapp</label>
    <input type="text" name="phone" class="form-control" />
    </div>

    <div class="form-group col-md-12">
        <h2>Endereço Cobranças</h2>
    </div>

    <div class="form-group col-md-2">
            <label class="vinte">
                CEP 
            </label>
            <input name="cep" type="text" id="cep" value="" class="form-control"  maxlength="9"
                   onblur="pesquisacep(this.value);" />
        </div>

        <div class="form-group col-md-8">
            <label>
                END.RES: </label>
            <input name="adress" type="text" id="adress" class="form-control" />
        </div>
        <div class="form-group col-md-2">
            <label>Numeroº</label>
            <input name="number" id="number" type="text"  class="form-control"  />

        </div>

        <div class="form-group col-md-5">
            <label> 
                COMPLEMENTO:
            </label>
            <input name="complements" id="complements" type="text" class="form-control" />
        </div>

        <div class="form-group col-md-3">
            <label> BAIRRO : </label>
            <input name="counter" id="counter" type="text"   class="form-control" />
        </div>

        <div class="form-group col-md-3">
            <label>CIDADE: </label>        

            <input name="city" id="city" type="text"  class="form-control"  />
        </div>  

        <div class="form-group col-md-1">
            <label>UF:</label>
            <input name="state" id="state" type="text"  class="form-control" />
        </div>

        <div class="form-group col-md-12">
        <h2>Dados do Veículo</h2>
    </div>

        <div class="form-group col-md-2">
            <label>Selecione Veiculo</label>
            <select name="vehicle" class="form-control"> 
                <option> Selecione o veiculo</option>
                <option value="motos"> Motos</option>
                <option value="carros"> Carros</option>
                <option value="caminhoes"> Caminhão</option>

            </select>
        </div>

        <div class="form-group col-md-2">
            <label >MARCA: </label>

            <select name="brand" class="form-control"> </select>
        </div>

        <div class="form-group col-md-2">
            <label>MODELO </label>
            <select name="model" class="form-control"> </select>
            </label>
        </div>

        <div class="form-group col-md-2">
            <label>ANO:</label>
            <select name="year"   class="form-control"  > </select>

        </div>

        <div class="form-group col-md-2">
            <label>
                CODIGO FIPE:</label>
            <select  name="fipe" id="fipe" class="form-control" > </select>

        </div>

        <div class="form-group col-md-2">
            <label>
                VALOR:</label>
            <select  name="price"  class="form-control"> </select>

        </div>


        <div class="form-group col-md-3">
            <label>
                CHASSI:</label>
                <input type="text" name="chassi" id="chassi" class="form-control" />
            
        </div>

        <div class="form-group col-md-3">
            <label>
                RENAVAM:</label>
                <input type="text" name="renavam" id="renavam" class="form-control" />
            
        </div>

        <div class="form-group col-md-3">
            <label>COR:</label>
            
            <input type="text" name="color"  class="form-control" />
        </div>
        
        <div class="form-group col-md-3">

            <label>PLACA</label>
            <input type="text" name="board"  class="form-control" />
        </label>
        </div>

    </div>

           
            <input type="submit" class="btn btn-success" value="Cadastrar" />
    </form>

</div>

@endsection