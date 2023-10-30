<!DOCTYPE html>
<html lang="en" class="h-100" data-bs-theme="auto">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.118.2">
    <title>login</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/cover/">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link href="sign-in.css" rel="stylesheet">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }
        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
        .form-signin {
            max-width: 400px;
            margin: 0 auto;
            padding: 15px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .form-signin h1 {
            font-size: 24px;
            text-align: center;
        }
    </style>
</head>
<body class="d-flex align-items-center py-4 bg-body-tertiary">
    <main class="form-signin">
        <form action="auth" method="POST">
            @csrf
            <h1 class="h3 mb-3 fw-normal">Iniciar sesión</h1>
            <div class="form-floating">
                <input type="email" class="form-control" name="email">
                <label>Correo</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" name="password">
                <label>Contraseña</label>
            </div>
            <button class="btn btn-primary w-100 py-2" type="submit">Ingresar</button>
        </form>
    </main>
</body>
</html>
