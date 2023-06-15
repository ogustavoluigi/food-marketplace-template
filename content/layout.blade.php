<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{storage('/libs/bootstrap-5.2.3/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        :root{
            --bs-primary: #c21111;
            --bs-primary-rgb: 156,118,160;
        }
        .btn-primary {
            --bs-btn-color: #fff;
            --bs-btn-bg: #c21111;
            --bs-btn-border-color: #c21111;
        }
        .btn-outline-primary {
            --bs-btn-color: #c21111;
            --bs-btn-border-color: #c21111;
        }
        #search:focus{
            box-shadow: none;
        }

        #suggestions-list{
            position: absolute;
            padding: 12px 0;
            width: 100%;
            background-color: #fff;
            border-radius: 6px;
            box-shadow: 0 4px 6px rgb(32 33 36 / 28%);
            z-index: 2;
            list-style: none;
            overflow: hidden;
        }
        .suggestion-item:hover{
            background-color: #f8f9fa;
        }
        .suggestion-item span{
            font-weight: 700;
        }

    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.4.1/jquery-migrate.min.js" integrity="sha512-KgffulL3mxrOsDicgQWA11O6q6oKeWcV00VxgfJw4TcM8XRQT8Df9EsrYxDf7tpVpfl3qcYD96BpyPvA4d1FDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @yield('head')
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top border-bottom">
        <div class="container">
            <div class="row w-100 justify-content-between">
                <div class="col-1">
                    <a class="navbar-brand text-light" href="{{url('/')}}">
                        <img src="{{storage('assets/home/logo.png')}}" style="height: 80px;" alt="">
                    </a>
                </div>
                <div class="col-7 d-flex justify-content-center align-items-center">
                    <div class="input-group px-5">
                        <button class="btn btn-light" type="button" id="button-addon1">
                            <svg style="fill: #c31515;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                            </svg>
                        </button>
                        <div class="position-relative flex-fill">
                            <input type="text" id="search" autocomplete="off" class="form-control bg-light border-0" placeholder="Busque por itens ou lojas" aria-label="Example text with button addon" aria-describedby="button-addon1">
                            <ul id="suggestions-list" class="mt-2 p-0"></ul>
                        </div>
                    </div>
                </div>
                <div class="col-2 d-flex justify-content-end align-items-center">
                    <div class="small">
                        Av. Luiz Pequini, 1516
                        <svg style="fill: #dc3545;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    @yield('content')
    <script src="{{storage('/libs/bootstrap-5.2.3/bootstrap.bundle.min.js')}}" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script>
        $(function(){

            let availableSuggestions = [
                "Bolo e Doces",
                "Lanche",
                "Japonesa",
                "Açaí",
                "Pizza",
                "Sobremesa",
                "Saúdavel",
                "Pastel",
            ];

            $("#search").on("input focus", function() {
                let query = $(this).val().toLowerCase();
                let matchedSuggestions = [];

                if (query.length > 0) {
                    matchedSuggestions = availableSuggestions.filter(function(suggestion) {
                        return suggestion.toLowerCase().indexOf(query) !== -1;
                    });
                }

                $("#suggestions-list").empty();

                matchedSuggestions.forEach(function(suggestion) {

                    suggestion = suggestion.replace(new RegExp(query, "gi"), `<span>$&</span>`);

                    let listItem = $(`<li class="suggestion-item py-1 px-3 small">`).html(suggestion);
                    $("#suggestions-list").append(listItem);
                });
            });

        });
    </script>
</body>
</html>