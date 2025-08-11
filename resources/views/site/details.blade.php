@extends('site.layout')
@section('title', 'Detalhes')
@section('conteudo')




<div class="container my-4">

<div class="row">

      <div class="col-12">
        
        <h1> {{$produto->nome}}</h1>

         <p> {{$produto->descricao}}</p>
         <p> Postado por: {{$produto->user->firstName}} <br>
        Categoria: {{$produto->categoria->nome}}
        </p>
    <button class="btn bg-primary btn-large">Comprar</button>
    </div>
</div>




  </div>

@endsection