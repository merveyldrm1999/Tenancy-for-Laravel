<!DOCTYPE html>
<html>
<head>
    <title>Hoş Geldiniz!</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="jumbotron mt-5">
        <h4 class="">{{$email}}</h4>
        <h1 class="display-4">Hoş Geldiniz!</h1>
        <p class="lead">Merhaba, {{$name}}. {{$tenant}}'a Hoş Geldiniz!</p>
    </div>
</div>
</body>
</html>
