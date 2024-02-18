<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            margin-top: 50px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            position: relative;
        }

        .password-toggle-btn {
            cursor: pointer;
            position: absolute;
            top: 75%;
            right: 10px;
            transform: translateY(-50%);
            z-index: 1;
        }

        .btn-primary {
            width: 100%;
        }

        .btn-primary:hover {
            background-color: #0069d9;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="text-start">Admin Signout</h1>
        <form action="/admin/check-signout" method="post" class="mt-5">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Email Address" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                <i class="password-toggle-btn fa fa-eye-slash" id="eye" aria-hidden="true"></i>
            </div>

            <button type="submit" class="btn btn-primary mt-4">Submit</button>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies (jQuery) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".password-toggle-btn").click(function() {
                var passwordField = $("#password");
                var icon = $("eye");
                if (passwordField.attr("type") === "password") {
                    passwordField.attr("type", "text");
                    icon.removeClass("fa-eye-slash");
                    icon.addClass("fa-eye");
                } else {
                    passwordField.attr("type", "password");
                    icon.removeClass("fa-eye");
                    icon.addClass("fa-eye-slash");
                }
            });
        });
    </script>
</body>

</html>