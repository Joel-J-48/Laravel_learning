<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>

    {{-- link CSS for bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    {{-- My CSS --}}
    <style>
        body {
            background: rgba(255, 255, 255, 0.5); /* Background transparency */
            background-size: cover;
            background-position: center;
            height: 100vh;
            margin: 0;
        }
        .logout-container {
            position: fixed;
            top: 0;
            right: 0;
            margin: 20px;
        }
        .logout-button {
            display: flex;
            align-items: center;
            background: rgba(255, 255, 255, 0.8);
            padding: 10px 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-decoration: none;
            color: #000;
        }
        .logout-button img {
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div class="logout-container">
        <a href="{{ route('logout') }}" class="logout-button">
            <img src="{{asset('images/icons8-logout-64.png')}}" alt="Logout Icon" width="20" height="20"> <!-- Replace with your icon path -->
            Logout
        </a>
    </div>
    
    {{-- script Js for bootstrapp --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
