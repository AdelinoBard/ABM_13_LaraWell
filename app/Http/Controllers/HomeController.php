<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Bem-vindo - LaraWell";
        $viewData["subtitle"] = "Sua loja online de produtos diversos";
        return view('home.index')->with("viewData", $viewData);
    }

    public function about()
    {
        $viewData = [];
        $viewData["title"] = "Sobre nós - LaraWell";
        $viewData["subtitle"] = "Conheça nossa loja online";
        $viewData["description"] = "Bem-vindo ao LaraWell, sua loja online de produtos diversos. Nosso objetivo é fornecer uma experiência de compra simples e agradável para nossos clientes.";
        $viewData["author"] = "Desenvolvido por Adelino Bard";
        return view('home.about')->with("viewData", $viewData);
    }
}
