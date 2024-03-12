<?php
if (count(getAllUsers(1)) == 0) {
    header('Location: /admin/signup');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Foodpanda</title>
    <link rel="shortcut icon" href="./assets/images/logo/panda-logo.png" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
            width: 55%;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-70%, -50%);
        }

        .content h2 {
            font-size: 4rem;
            margin-bottom: 20px;
        }

        .content p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            color: #DDDDDD;
        }

        .start,
        .signin {
            font-weight: bold;
            padding: 8px 25px;
            border-radius: 20px;
            transition: 0.3s;
            background: #FF2B85;
            color: white;
        }

        .start:hover,
        .signin:hover {
            padding: 8px 35px;
            background: #FF2B85;
            color: white;
        }

        .text {
            color: #FF2B85;
        }
    </style>
</head>

<body>
    <div class="hero">
        <!-- Background Video -->
        <video autoplay loop muted class="video-background">
            <source src="./assets/videos/video (2160p) (1).mp4" type="video/mp4">
            Your browser does not support HTML5 video.
        </video>

        <!-- Content -->
        <div class="content">
            <h2 class="text-white">Welcome to <span class="text-warning">Foodpanda</span></h2>
            <p class="text">We're here to help you live life the panda way.
                Spend more time doing what you love - we'll take
                care of tasty meals, fresh groceries and new flavours.
            </p>
            <a class="btn start" href="/customer/signup">Get Started</a>
            <!-- <button class="btn start" data-bs-toggle="modal" data-bs-target="#cusotmerRegister">Get Started</button> -->
        </div>
        <div class="modal fade" id="cusotmerRegister" tabindex="-1" aria-labelledby="cusotmerRegisterLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content pt-3 px-3">
                    <div class="modal-header">
                        <h1 class="modal-title fs-4 text" id="cusotmerRegisterLabel">Create account</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="/customer/check_signup" method="post">
                            <div class="row d-flex flex-row">
                                <div class="col-6">
                                    <label for="first_name" class="col-form-label">First Name:</label>
                                    <input type="text" name="first_name" class="form-control" id="first_name">
                                </div>
                                <div class="col-6">
                                    <label for="last_name" class="col-form-label">Last Name:</label>
                                    <input type="text" name="last_name" class="form-control" id="last_name">
                                </div>
                            </div>
                            <div class="mt-3">
                                <label for="email" class="col-form-label">Email:</label>
                                <input type="email" name="email" class="form-control" id="email">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="col-form-label">Password:</label>
                                <input type="password" name="password" class="form-control" id="password">
                            </div>
                            <div class="mb-1">
                                <label for="phone" class="col-form-label">Phone:</label>
                                <input type="tel" name="phone" class="form-control" id="phone"></input>
                            </div>
                            <div class="mt-3">
                                <button class="btn btn-primary start border-0 rounded-0">Submit</button>
                                <p class="">Already have the account? <a href="/customer/signin">Sing In</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies (jQuery and Popper.js) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>