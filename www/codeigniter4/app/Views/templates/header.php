<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css')?> ">

    <title>Code Igniter</title>

</head>

<body>

    <header class="jumbotron mb-0">
        <a href="<?=base_url('home')?>">
            <h1>Deselvolvimento web</h1>
        </a>
    </header>

    <div class="container ">

        <nav class="navbar navbar-expand-lg navbar-light bg-light mb-5" width="100%" height="80px">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

                <a class="navbar-brand" href="<?=base_url('home')?>">
                    <img src="https://www.pngfind.com/pngs/m/170-1701498_code-png-code-logo-png-transparent-png.png" width="53.97" height="30" alt="code-logo">
                    Web Dev
                </a>

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link linkpaginaatual" href="<?=base_url('home')?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=base_url('about')?>">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=base_url('products')?>">Produtos e serviços</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=base_url('contact')?>">Formulário de contato</a>
                    </li>
                    <li class="nav-item mr-4">
                        <a class="nav-link" href="<?=base_url('clients')?>" class="dropdown-item">Clientes</a>
                    </li>
                    <li>
                        <a class="nav-link" href="<?=base_url('register')?>">Cadastro</a>
                    </li>
                </ul>

            </div>
        </nav>
        <section>