<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Sign Out</title>
    <link rel="shortcut icon" href="../../assets/images/logo/panda-logo.png" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Additional custom styles */
        body {
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
        .card {
            border-radius: 10px;
            overflow: hidden;
        }
    </style>
</head>

<body>
    <video autoplay loop muted class="video-background">
        <source src="../../../assets/images/background/video (2160p) (1).mp4" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <h3 class="card-header bg-danger text-white">Sign Out</h3>
                    <div class="card-body">
                        <form action="/customer/check-signout" method="post">
                            <div class="form-group mb-4">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
                                <span class='text-danger'><?= $is_customer_email ?></span>
                            </div>
                            <div class="form-group mb-5">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                                <span class='text-danger'><?= $is_customer_password ?></span>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-danger col-12">Sign Out</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>