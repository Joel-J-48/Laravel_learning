<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link CSS for bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  
    <link rel="stylesheet" href="{{asset('css/login.css')}}">


    <title>Login</title>

    <!-- My CSS -->
    <style>
        body {
            background: rgba(255, 255, 255, 0.5); /* Background transparency */
            background-image: url('Media/illustration/login\ illustration.png');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }

        .login-container {
            background: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .submit-group{
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
    </style>

</head>
<body>
    <!-- My HTML -->
    <div class="login-container">
        <h2 class="text-center">LOGIN</h2>
        <form>
            <div class="form-group">
                <label for="email">Email: </label>
                <input type="email" class="form-control" id="email" size="25" placeholder="example@mail.com" autofocus
                    required>
            </div>
            <div class="form-group">
                <label for="password">Password: </label>
                <input type="password" class="form-control" id="password" size="25" minlength="8"
                    placeholder="Enter password" required>
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="rememberMe">
                <label class="form-check-label" for="rememberMe">Remember me</label>
            </div>
            <div class="submit-group">
                <div class="form-group">
                    <a href="#" class="float-left">Forgot password</a>
                </div>
                <button type="submit" class="btn btn-success btn-block">Login</button>
            </div>
        </form>
    </div>
    <!-- script Js for bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
        </script>
</body>
</html>