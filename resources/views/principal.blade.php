<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script src="//code.jquery.com/jquery-1.12.3.js"></script>
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>

</head>


<title>Cadastro de Pessoas</title>

</head>

<body>

    
        <div class="container">
        <header class="blog-header py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">


                <div class="col-4 d-flex justify-content-end align-items-center">

                </div>
            </div>
        </header>

        <div class="nav-scroller py-1 mb-2">
            <img src="../resources/img/logo.png" alt="">
            <nav class="nav d-flex justify-content-between">
                <li><a class="p-2 text-muted" href="#" />Home</a></li>
                <li><a class="p-2 text-muted" href="#" />Banco de Dados</a></li>
                <li><a class="p-2 text-muted" href="cadastro-form" />Cadastrar</a></li>
            </nav>
        </div>

        <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
            <div class="col-md-6 px-0">
                <h1 class="display-4 font-italic">Cadastro de Pessoas</h1>
                <p class="lead my-3">Aqui você encontra o tempo de serviço de cada pessoa cadastrada.<br>E pode gerar um
                    documento PDF para comprovar esse tempo de serviço.</p>
            </div>
        </div>


    </div>

    <main role="main" class="container">

        @yield('conteudo')

    </main>


    <footer class="blog-footer">

    </footer>


</body>

</html>
