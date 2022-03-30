@extends('layouts.app')

@section('content')
      <!-- Header -->
        <section id="header">
            <div class="inner">
                <span class="icon solid major fa-cloud"></span>
                <h1>
                    <strong>Cidade Verde</strong><br />
                </h1>
                  <p>Reuze, Reduza, Recicle</p>
                <ul class="actions special">
                    <li><a href="#one" class="button scrolly">Iniciar</a></li>
                </ul>
            </div>
        </section>

      <!-- One -->
            <section id="one" class="main style1">
                <div class="container">
                    <div class="row gtr-100">
                        <div class="col-6 col-12-medium">
                            <header class="major">
                                <h2>Quem Somos<br /></h2>
                            </header>
                            <p>Somos uma associação sem fins lucrativos, com o objetivo de evitar o descarte de materiais inservíveis e itens recicláveis, que não possuem mais utilidade, em locais irregulares causando transtornos urbanos como obstruções na rede de drenagem, aspecto de local sujo, além de servir como criadouros de insetos. Indicamos estabelecimentos que recebem Vidros, plásticoas, metais, madeiras, pilhas, óleo de cozinha, pneus, restos de móveis, dentre outros itens.</p>
                        </div>

                        <div class="col-6 col-12-medium imp-medium">
                            <span class="image fit"><img src="{{ asset('images/fundo.png') }}" alt="" /></span>
                        </div>
                    </div>
                </div>
            </section>
@endsection