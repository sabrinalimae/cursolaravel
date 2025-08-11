@extends('site.layout')
@section('title', 'Essa é a pág home')
@section('conteudo')
<div class="container my-4">
  <div class="row justify-content-center g-3 mb-3">
    <h3>Categoria: </h3>
@foreach ($produtos as $produto)
    <div class="col-sm-12 col-lg-3">
      <div class="card h-100">
        <img src="{{$produto->image}}" >
        <div class="card-body">
             <h5 class="card-title">{{$produto->nome}}</h5>
          <p class="card-text">
           {{$produto->nome}}
          </p>
              <a href="{{route('site.details', $produto->slug)}}" class="btn btn-primary"><i class="bi bi-plus"></i></a>
        </div>
      </div>
    </div>
@endforeach
  </div>
  <div class="row justify-content-center g-3">
  {{$produtos->links('custom.pagination')}}
</div>
</div>
@endsection

