<?php if (count(getAllUsers(1)) == 1) {
    header("Location: /admin/signin");
    die();
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Gurdeep Osahan" />
    <meta name="author" content="Gurdeep Osahan" />
    <link rel="shortcut icon" href="../../assets/images/logo/panda-logo.png" type="image/x-icon">
    <title>Admin Sign Up</title>

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
                <div class="px-3 col-10 mx-auto">
                    <?php if (isset($_SESSION["is_admin_acc"])) { ?>
                        <div class="alert alert-danger mt-3" role="alert">
                            You don't have the account yet. Please sign up to register
                        </div>
                    <?php } ?>
                    <h3 class="my-0 text-primary">Create your account</h3>
                    <p class="text-50 mb-3">Welcome to Foodpanda</p>
                    <form class="mt-3" action="/admin/check_signup" method="post">
                        <div class="row d-flex gap-2">
                            <div class="form-group col-6">
                                <label for="first_name" class="text-dark form-label">First Name</label>
                                <input type="first_name" name="first_name" class="form-control" id="first_name"
                                    required />
                            </div>
                            <div class="form-group col-6">
                                <label for="last_name" class="text-dark form-label">Last Name</label>
                                <input type="last_name" name="last_name" class="form-control" id="last_name" required />
                            </div>
                        </div>
                        <div class="row d-flex gap-2">
                            <div class="form-group col-6">
                                <label for="email" class="text-dark form-label">Email</label>
                                <input type="email" name="email" class="form-control" id="email" required />
                                <p class="text-danger">
                                    <?= isset($_SESSION["is_admin"]) ? $_SESSION["is_admin"]["email"] : "" ?>
                                </p>
                            </div>
                            <div class="form-group col-6">
                                <label for="password" class="text-dark form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="password" required />
                                <p class="text-danger">
                                    <?= isset($_SESSION["is_admin"]) ? $_SESSION["is_admin"]["password"] : "" ?>
                                </p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="phone" class="text-dark form-label">phone</label>
                            <input type="phone" name="phone" class="form-control" id="phone" required />
                            <p class="text-danger">
                                <?= isset($_SESSION["is_admin"]) ? $_SESSION["is_admin"]["phone"] : "" ?>
                            </p>
                        </div>

                        <button class="btn text-white btn-lg btn-block" style="background: #FF2B85;">SIGN IN</button>
                    </form>
                    <div class="text-center mt-0">
                        <p class="text-info">Already have the account? <a href="/admin/signin">Sign in</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="c7cde99310a44e0c8a34cba7-text/javascript" src="../../vendor/jquery/jquery.min.js"></script>
    <script type="c7cde99310a44e0c8a34cba7-text/javascript"
        src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script type="c7cde99310a44e0c8a34cba7-text/javascript" src="../../vendor/slick/slick.min.js"></script>

    <script type="c7cde99310a44e0c8a34cba7-text/javascript" src="../../vendor/sidebar/hc-offcanvas-nav.js"></script>

    <script type="c7cde99310a44e0c8a34cba7-text/javascript" src="../../vendor/js/osahan.js"></script>
    <script src="../../vendor/rocket/rocket-loader.min.js" data-cf-settings="c7cde99310a44e0c8a34cba7-|49"
        defer></script>
    <script defer
        src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317"
        integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA=="
        data-cf-beacon='{"rayId":"84de77e33d3c8817","r":1,"version":"2024.1.0","token":"dd471ab1978346bbb991feaa79e6ce5c"}'
        crossorigin="anonymous"></script>
</body>

</html>