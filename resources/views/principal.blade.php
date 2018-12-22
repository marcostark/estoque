<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Controle de estoque</title>  
    <link href="/css/app.css" rel="stylesheet">    
    <link href="/css/custom.css" rel="stylesheet">
</head>
<body>

    <div class="container">
        <nav class="navbar navbar-default">

            <div class="container-fluid">

                <div class="navbar-header">
                    <a class="navbar-brand" href="/produtos">Estoque Laravel</a>
                </div>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/produtos">Listagem</a></li>
                    <li><a href="/produtos/novo">Novo</a></li>
                </ul>
            </div>
        </nav>

        @yield('conteudo')

        <footer class="footer">
            <p>Controle de estoque com Laravel</p>
        </footer>
    </div>
</body>
</html>