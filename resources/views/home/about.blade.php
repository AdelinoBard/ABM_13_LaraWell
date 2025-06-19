@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-8 mx-auto">
      <p class="lead">{{ $viewData["description"] }}</p>
    </div>
  </div>
  <div class="row mt-4">
    <div class="col-lg-6 ms-auto">
      <h4>Sobre o Projeto LaraWell</h4>
      <p>O ABM_LaraWell é um aplicativo web onde os usuários podem fazer pedidos para comprar produtos. A loja online foi desenvolvida com as seguintes tecnologias:</p>
      <ul>
        <li>Laravel (PHP) como framework backend</li>
        <li>MySQL como banco de dados</li>
        <li>Bootstrap para o design e layout</li>
        <li>Blade como sistema de templates</li>
      </ul>
    </div>
    <div class="col-lg-6 me-auto">
      <h4>Funcionalidades Principais</h4>
      <ul>
        <li>Página inicial com boas-vindas</li>
        <li>Catálogo de produtos</li>
        <li>Carrinho de compras</li>
        <li>Sistema de login e registro</li>
        <li>Histórico de pedidos</li>
        <li>Painel administrativo para gerenciamento</li>
      </ul>
    </div>
  </div>
  <div class="row mt-4">
    <div class="col-lg-12 text-center">
      <p class="lead">{{ $viewData["author"] }}</p>
    </div>
  </div>
</div>
@endsection
