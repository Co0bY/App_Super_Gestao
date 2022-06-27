@extends('app.layouts.basico')

@section('titulo', 'Produtos')

@section('conteudo')
    
    <div class="conteudo-pagina">

        <div class="titulo-pagina-2">
                <p> Adicionar Detalhe ao Produto </p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="">Voltar</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            <div style="width: 30%; margin-left:auto; margin-right:auto;">
                @component('app.produto_detalhe._components.form_create_and_edit', ['unidades' => $unidades])
                @endcomponent
            </div>
        </div>
        
    </div>

@endsection