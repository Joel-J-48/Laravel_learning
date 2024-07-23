<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link css for bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Register</title>

    <!-- My CSS -->
    <style>
        
        .register-container {
            background: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            margin: 30px;
            padding: 15px;
        }
        .illustration {
            margin-left: 20px;
        }
    </style>
</head>
<body>
    <!-- My HTML -->
        <div class="d-flex">
            <div class="register-container">
                <h2 class="text-center">REGISTER</h2>
                <form>
                    <div class="form-group">
                        <label for="name">Name: </label>
                        <input type="text" class="form-control" id="name" placeholder="Enter name" size="25" minlength="2" autofocus required>
                    </div>
                    <div class="form-group">
                        <label for="surname">Surname: </label>
                        <input type="text" class="form-control" id="surname" placeholder="Enter surname" size="25" minlength="2" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email: </label>
                        <input type="email" class="form-control" id="email" placeholder="example@mail.com" size="25" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password: </label>
                        <input type="password" class="form-control" id="password" placeholder="Enter password" size="25" minlength="8" required>
                    </div>
                    <div class="form-group">
                        <label for="confirm-password">Confirm Password: </label>
                        <input type="password" class="form-control" id="confirm-password" placeholder="Confirm password" size="25" minlength="8" required>
                    </div>
                    <div class="form-group">
                        <label>Gender: </label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="sexe" id="male" value="M">
                                <label class="form-check-label" for="male">M</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="sexe" id="female" value="F">
                                <label class="form-check-label" for="female">F</label>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success btn-block">Register</button>
                </form>
            </div>
            <div class="illustration">
                <img src="Media/illustration/Registration illustration.png" alt="Illustration" class="img-fluid">
            </div>
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