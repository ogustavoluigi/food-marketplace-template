@extends('template.'.config('settings.template').'.content.layout')
@section('head')
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="https://kenwheeler.github.io/slick/slick/slick-theme.css">
    <style>
        .slick-prev:before, .slick-next:before {
            color: #212121;
        }
        .food-categorie{
            display: flex !important;
            flex-flow: column;
            align-items: center;
            background-image: linear-gradient(to bottom, #fee183 50%, #f8f9fa 50%);
            transition: all .2s linear;
            cursor: pointer;
        }
        .food-categorie:hover, .store:hover {
            box-shadow: 0 2px 8px rgba(0,0,0,.12);
            transform: scale(1.02);
        }
        .store{
            display: flex !important;
            flex-flow: column;
            align-items: center;
            transition: all .2s linear;
            cursor: pointer;
        }
    </style>
@stop
@section('content')
    <div class="container mt-3 pb-5">
        <div class="row">
            <div class="col-12">
                <div id="food-categories">
                    <div class="food-categorie m-2 px-3 py-2 rounded rounded-4">
                        <img src="{{storage('assets/home/bolo.png')}}">
                        <h6 class="mt-2 small">Bolo e Docê</h6>
                    </div>
                    <div class="food-categorie m-2 px-3 py-2 rounded rounded-4">
                        <img src="{{storage('assets/home/hamburguer.png')}}">
                        <h6 class="mt-2 small">Lanche</h6>
                    </div>
                    <div class="food-categorie m-2 px-3 py-2 rounded rounded-4">
                        <img src="{{storage('assets/home/japones.png')}}">
                        <h6 class="mt-2 small">Japonesa</h6>
                    </div>
                    <div class="food-categorie m-2 px-3 py-2 rounded rounded-4">
                        <img src="{{storage('assets/home/acai.png')}}">
                        <h6 class="mt-2 small">Açaí</h6>
                    </div>
                    <div class="food-categorie m-2 px-3 py-2 rounded rounded-4">
                        <img src="{{storage('assets/home/pizza.png')}}">
                        <h6 class="mt-2 small">Pizza</h6>
                    </div>
                    <div class="food-categorie m-2 px-3 py-2 rounded rounded-4">
                        <img src="{{storage('assets/home/sorvete.png')}}">
                        <h6 class="mt-2 small">Sorvetes</h6>
                    </div>
                    <div class="food-categorie m-2 px-3 py-2 rounded rounded-4">
                        <img src="{{storage('assets/home/coxinhas.png')}}">
                        <h6 class="mt-2 small">Salgados</h6>
                    </div>
                    <div class="food-categorie m-2 px-3 py-2 rounded rounded-4">
                        <img src="{{storage('assets/home/pastel.png')}}">
                        <h6 class="mt-2 small">Pastel</h6>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="pt-5">
                    <div class="py-2">
                        <h3>Mais pedidos hoje</h3>
                        <h4 class="small text-secondary fw-normal">Pratos mais pedidos da sua região</h4>
                    </div>
                    <div id="foods">
                        <div class="card m-2 rounded-4 overflow-hidden">
                            <img src="{{storage('assets/home/bolo-cenoura.png')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h6 class="card-title">Bolo de Cenoura</h6>
                              <p class="card-text small text-secondary">1 unidade de 25 cm de um delicioso churros com o recheio a sua escolha.</p>
                              <a href="#" class="btn btn-primary btn-sm mb-2">Pedir</a>
                            </div>
                        </div>
                        <div class="card m-2 rounded-4 overflow-hidden">
                            <img src="{{storage('assets/home/bolo-chocolate.png')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h6 class="card-title">Bolo de Chocolate</h6>
                              <p class="card-text small text-secondary">1 unidade de 25 cm de um delicioso churros com o recheio a sua escolha.</p>
                              <a href="#" class="btn btn-primary btn-sm mb-2">Pedir</a>
                            </div>
                        </div>
                        <div class="card m-2 rounded-4 overflow-hidden">
                            <img src="{{storage('assets/home/pudim-leite.png')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h6 class="card-title">Pudim de Leite</h6>
                              <p class="card-text small text-secondary">1 unidade de 25 cm de um delicioso churros com o recheio a sua escolha.</p>
                              <a href="#" class="btn btn-primary btn-sm mb-2">Pedir</a>
                            </div>
                        </div>
                        <div class="card m-2 rounded-4 overflow-hidden">
                            <img src="{{storage('assets/home/bolo-morango.png')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h6 class="card-title">Bolo de Morango</h6>
                              <p class="card-text small text-secondary">1 unidade de 25 cm de um delicioso churros com o recheio a sua escolha.</p>
                              <a href="#" class="btn btn-primary btn-sm mb-2">Pedir</a>
                            </div>
                        </div>
                        <div class="card m-2 rounded-4 overflow-hidden">
                            <img src="{{storage('assets/home/musse-maracuja.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h6 class="card-title">Musse de Maracuja</h6>
                              <p class="card-text small text-secondary">1 unidade de 25 cm de um delicioso churros com o recheio a sua escolha.</p>
                              <a href="#" class="btn btn-primary btn-sm mb-2">Pedir</a>
                            </div>
                        </div>
                        <div class="card m-2 rounded-4 overflow-hidden">
                            <img src="{{storage('assets/home/pizza-calabresa.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h6 class="card-title">Pizza de Calabresa</h6>
                              <p class="card-text small text-secondary">1 unidade de 25 cm de um delicioso churros com o recheio a sua escolha.</p>
                              <a href="#" class="btn btn-primary btn-sm mb-2">Pedir</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="pt-5">
                    <div class="py-2">
                        <h3>Lojas</h3>
                    </div>
                    <div id="stores">
                        <div class="store m-2 px-3 py-2 rounded rounded-4">
                            <img class="border rounded rounded-4" src="{{storage('assets/home/naypes.jpg')}}">
                            <h6 class="mt-2 small d-flex">
                                <svg style="fill: #fcbb00;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill me-1" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                </svg>
                                Naypes
                            </h6>
                        </div>
                        <div class="store m-2 px-3 py-2 rounded rounded-4">
                            <img class="border rounded rounded-4" src="{{storage('assets/home/caprichado.jpg')}}">
                            <h6 class="mt-2 small">Caprichado</h6>
                        </div>
                        <div class="store m-2 px-3 py-2 rounded rounded-4">
                            <img class="border rounded rounded-4" src="{{storage('assets/home/vovo-dag.jpg')}}">
                            <h6 class="mt-2 small">Vovó Dag</h6>
                        </div>
                        <div class="store m-2 px-3 py-2 rounded rounded-4">
                            <img class="border rounded rounded-4" src="{{storage('assets/home/acaiformosa.jpg')}}">
                            <h6 class="mt-2 small">Açaí Formosa</h6>
                        </div>
                        <div class="store m-2 px-3 py-2 rounded rounded-4">
                            <img class="border rounded rounded-4" src="{{storage('assets/home/dominos.jpg')}}">
                            <h6 class="mt-2 small">Domino's Pizza</h6>
                        </div>
                        <div class="store m-2 px-3 py-2 rounded rounded-4">
                            <img class="border rounded rounded-4" src="{{storage('assets/home/haruy-sushi.jpg')}}">
                            <h6 class="mt-2 small">Haruy Sushi</h6>
                        </div>
                        <div class="store m-2 px-3 py-2 rounded rounded-4">
                            <img class="border rounded rounded-4" src="{{storage('assets/home/xpicanha.jpg')}}">
                            <h6 class="mt-2 small">X Picanha</h6>
                        </div>
                        <div class="store m-2 px-3 py-2 rounded rounded-4">
                            <img class="border rounded rounded-4" src="{{storage('assets/home/oggi.jpg')}}">
                            <h6 class="mt-2 small">Oggi</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script> -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        $(function(){
            $('#food-categories').slick({
                infinite: true,
                slidesToShow: 8,
                slidesToScroll: 3
            });
            $('#stores').slick({
                infinite: true,
                slidesToShow: 8,
                slidesToScroll: 3
            });
            $('#foods').slick({
                infinite: true,
                slidesToShow: 6,
                slidesToScroll: 3
            });
        });
    </script>
@stop