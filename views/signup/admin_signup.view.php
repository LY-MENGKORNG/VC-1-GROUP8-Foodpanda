<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Registration Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
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

        .container {
            margin-top: 50px;
        }

        h2 {
            text-align: center;
        }
    </style>
</head>

<body>
    <video autoplay loop muted class="video-background">
        <source src="../assets/videos/video (2160p) (1).mp4" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="/admin/check-signup" method="POST" enctype="multipart/form-data" class="bg-light p-4 rounded-sm">
                    <h2 class="mb-4">Register</h2> 
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="firstName">First Name</label>
                            <input type="text" class="form-control" id="firstName" name="f-name" required>
                        </div>
                        <div class="form-group col-6">
                            <label for="lastName">Last Name</label>
                            <input type="text" class="form-control" id="lastName" name="l-name" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group col-6">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="tel" class="form-control" id="phone" name="phone" require>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" name="image" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" required>
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Register</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>