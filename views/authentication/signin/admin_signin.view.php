<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Gurdeep Osahan" />
    <meta name="author" content="Gurdeep Osahan" />
    <link rel="shortcut icon" href="../../assets/images/logo/panda-logo.png" type="image/x-icon">
    <title>Admin - Sign In</title>

    <link rel="stylesheet" type="text/css" href="../../vendor/slick/slick.min.css" />
    <link rel="stylesheet" type="text/css" href="../../vendor/slick/slick-theme.min.css" />

    <link href="../../vendor/icons/feather.css" rel="stylesheet" type="text/css" />

    <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <link href="../../vendor/css/style.css" rel="stylesheet" />

    <link href="../../vendor/sidebar/demo.css" rel="stylesheet" />
</head>

<body>
    <div class="login-page vh-100">
        <video loop autoplay muted id="vid">
            <source src="../../assets/videos/bg.mp4" type="video/ogg" />
            Your browser does not support the video tag.
        </video>
        <div class="d-flex align-items-center justify-content-center vh-100">
            <div class="px-5 col-md-6 ml-auto">
                <div class="px-5 col-10 mx-auto">
                    <h3 class="my-0 text-primary">Signin to your account</h2>
                    <p class="text-50">Welcome back!</p>
                    <form class="mt-5 mb-4" action="/admin/check_signin" method="post">
                        <div class="form-group">
                            <label for="email" class="text-dark form-label">Email</label>
                            <input type="email" name="email" placeholder="Enter Email" class="form-control" id="email" required/>
                            <p class="text-danger"><?= isset($_SESSION["is_admin_email"]) ? $_SESSION["is_admin_email"] : ""  ?></p>
                        </div>
                        <div class="form-group">
                            <label for="password" class="text-dark">Password</label>
                            <input type="password" name="password" placeholder="Enter Password" class="form-control" id="password" required />
                            <p class="text-danger"><?= isset($_SESSION["is_admin_password"]) ? $_SESSION["is_admin_password"] : ""  ?></p>
                        </div>
                        <button class="btn text-white btn-lg btn-block" style="background: #FF2B85;">SIGN IN</button>
                    </form>
                    <a href="forgot_password.html" class="text-decoration-none">
                        <p class="text-center">Forgot your password?</p>
                    </a>
                    <div class="d-flex align-items-center justify-content-center">
                        <p class="text-center m-0">Don't have an account yet? <a href="/foodpanda">Sign up</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="c7cde99310a44e0c8a34cba7-text/javascript" src="../../vendor/jquery/jquery.min.js"></script>
    <script type="c7cde99310a44e0c8a34cba7-text/javascript" src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script type="c7cde99310a44e0c8a34cba7-text/javascript" src="../../vendor/slick/slick.min.js"></script>

    <script type="c7cde99310a44e0c8a34cba7-text/javascript" src="../../vendor/sidebar/hc-offcanvas-nav.js"></script>

    <script type="c7cde99310a44e0c8a34cba7-text/javascript" src="../../vendor/js/osahan.js"></script>
    <script src="../../vendor/rocket/rocket-loader.min.js" data-cf-settings="c7cde99310a44e0c8a34cba7-|49" defer></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"84de77e33d3c8817","r":1,"version":"2024.1.0","token":"dd471ab1978346bbb991feaa79e6ce5c"}' crossorigin="anonymous"></script>
</body>

</html>