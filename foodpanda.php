<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Foodpanda</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        .hero {
            width: 100%;
            height: 100vh;
            background-image: linear-gradient(rgba(12, 3, 51, 0.3), rgba(12, 3, 51, 0.3));
            position: relative;
            display: flex;
        }

        .video-background {
            position: fixed;
            right: 0;
            top: 0;
            z-index: -1;
            width: 100%;
        }

        .content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-70%, -50%);
        }

        .content h1 {
            font-size: 4rem;
            margin-bottom: 20px;
        }

        .content p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            color: #DDDDDD;
        }

        .start, .signin {
            font-weight: bold;
            padding: 10px 25px;
            border-radius: 20px;
            transition: 0.3s;
            background: #FF2B85;
            color: white;
        }

        .start:hover {
            padding: 10px 35px;
            color: white;
        }

        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            animation: slideInDown 0.5s ease;
            background:  rgba(255, 255, 255, 0.8);
        }

        @keyframes slideInDown {
            from {
                transform: translateY(-100%);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .card-header {
            background-color: #007bff;
            color: #fff;
            border-radius: 10px 10px 0 0;
        }

        .card-body {
            padding: 30px;
        }

        .form-group label {
            font-weight: bold;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="hero">
        <!-- Background Video -->
        <video autoplay loop muted class="video-background">
            <source src="./assets/images/background/video (2160p) (1).mp4" type="video/mp4">
            Your browser does not support HTML5 video.
        </video>

        <!-- Content -->
        <div class="content">
            <h1 class="text-white">Welcome to <span class="text-warning">Foodpanda</span></h1>
            <p class="text">We’re here to help you live life the panda way.
                Spend more time doing what you love – we’ll take
                care of tasty meals, fresh groceries and new flavours.
            </p>
            <button class="btn start">Get Started</button>
        </div>
        <div class="container mt-5" style="display: none;">
            <form action="/customer/check-signin" class="bg-light p-5 rounded-lg m-auto" style="max-width: 800px;">
                <h2 style="color: #FF2B85;">Sign up to register</h2>
                <div class="form-group mt-4">
                    <label for="email">Email Adress</label>
                    <input type="email" class="form-control" placeholder="Enter your email" id="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" placeholder="Enter your password" id="password" required>
                </div>
                <button type="submit" class="btn signin">Sign in</button>
            </form>

        </div>
    </div>

    <!-- Bootstrap JS and dependencies (jQuery and Popper.js) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        const start = document.querySelector(".start");
        start.onclick = () => {
            document.querySelector(".content").style.display = "none";
            document.querySelector(".container").style.display = "block";
        }
    </script>
</body>

</html>