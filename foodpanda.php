<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Foodpanda</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        /* Add custom styles here */
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f8f9fa;
        }

        .hero {
            color: #ffffff;
            text-align: center;
            padding: 100px 0;
        }

        .hero h1 {
            font-size: 3rem;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .hero p {
            font-size: 1.5rem;
            margin-bottom: 30px;
        }

        .btn-primary {
            background-color: #ff6f61;
            border-color: #ff6f61;
            padding: 10px 30px;
            font-size: 1.2rem;
            font-weight: bold;
            letter-spacing: 1px;
        }

        .btn-primary:hover {
            background-color: #f54c42;
            border-color: #f54c42;
        }

        .btn-secondary {
            background-color: #ffffff;
            border-color: #ff6f61;
            color: #ff6f61;
            padding: 10px 30px;
            font-size: 1.2rem;
            font-weight: bold;
            letter-spacing: 1px;
        }

        .btn-secondary:hover {
            background-color: #ff6f61;
            border-color: #ff6f61;
            color: #ffffff;
        }

        footer {
            background-color: #343a40;
            color: #ffffff;
            padding: 20px 0;
            text-align: center;
        }
    </style>
</head>

<body>
    <header>
        <!-- Include your navigation bar here -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Foodpanda</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                    <!-- Add more navigation links as needed -->
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <section class="hero">
            <div class="container">
                <h1>Welcome to Foodpanda</h1>
                <p>Order food from your favorite restaurants and get it delivered right to your doorstep.</p>
                <a href="login.php" class="btn btn-primary">Sign In</a>
                <a href="register.php" class="btn btn-secondary">Sign Up</a>
            </div>
        </section>
        <!-- Add more sections or content as needed -->
    </main>
    <footer>
        <!-- Include your footer content here -->
        <div class="container">
            <p>&copy; 2024 Foodpanda. All rights reserved.</p>
        </div>
    </footer>
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>