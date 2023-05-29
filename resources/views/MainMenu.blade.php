<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Website Responsif</title>
    <link rel="stylesheet" href="resources\css\MainMenu.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        .card-header {
            background-color: #434242;
            color: #fff;
        }

        .background {
            background-image: url('resources/views/image1.png');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        .container {
            flex: 1;
        }

        .footer {

            padding: 20px 0;
            text-align: center;
        }

    </style>
</head>

<body class="background">

    <div class="container">
        @include('partials.Navbar')

        <main>
            <div class="container mt-5">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        @if(session()->has('LoginError'))
                        <div class="alert alert-danger" role="alert">
                            <strong>{{ session('LoginError') }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        
                            
                        @endif
                        <div class="card">
                            <div class="card-header">
                                <h3 class="text-center">Form Login</h3>
                            </div>
                            <div class="card-body">
                                <form action="/login" method="POST">
                                    @csrf
                                    <div class="form-group mt-3">
                                        <label for="username">Username</label>
                                        <input type="text" class="form-control mt-1 " id="username" name="username" placeholder="Masukkan username" required autofocus>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control mt-1" id="password" name="password" placeholder="Masukkan password" required>
                                    </div>
                                    <div class="text-center mt-3">
                                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                                        
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        @include('Partials.Footer')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.4.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>
