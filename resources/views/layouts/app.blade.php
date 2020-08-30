<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">

    <style>
        body {
            min-height: 100vh;
        }
       .bg1 {
            background: url("bg1.png");
            background-size: cover;
            background-repeat: no-repeat;
        }
        .hide-bg {
            background-color: rgba(255,255,255,0.60);
        }
    </style>

    <title>Hello, world!</title>
</head>
  <body class="bg1">
    {{-- navbar --}}
    <nav class="navbar navbar-expand navbar-dark m-0 p-0">
        <ul class="nav navbar-nav w-100 h-100 bg-primary pr-5 mx-auto">
            <li class="nav-item">
                <a class="nav-link text-light pr-5" href="/about"><i class="fas fa-question-circle"></i> About</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light pr-5" href="/"><i class="fas fa-home"></i> Home</a>
            </li>
            <li class="nav-item">
                <a href="/download" class="nav-link text-light pr-5"><i class="fas fa-download"></i> Download</a>
            </li>
            <li class="nav-item">
                <a href="/docs" class="nav-link text-light pr-5"><i class="fas fa-book-open"></i> Documentation</a>
            </li>
        </ul>
    </nav>
    <div class="container h-100 w-100">
        @yield('content')
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.1.1/js/all.js" integrity="sha384-BtvRZcyfv4r0x/phJt9Y9HhnN5ur1Z+kZbKVgzVBAlQZX4jvAuImlIz+bG7TS00a" crossorigin="anonymous"></script>
    </div>
    <footer class="h4 m-0 w-100 fixed-bottom text-center text-capitalize font-weight-bold text-white bg-dark">Oxygen 2020</footer>
</body>
</html>