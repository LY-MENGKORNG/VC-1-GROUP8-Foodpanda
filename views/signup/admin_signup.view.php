<?php require "./layouts/admin/header.php" ?>
<div class="container-fluid p-0">
    <form action="/admin/check-signup" method="post" class="shadow-sm darkmode row m-0" style="background-image: url(../../assets/images/test.jpg); background-position: 0; background-size: cover; height: 100vh;">
        <div class="p-5 m-0 ml-auto" style="background:linear-gradient(90deg, rgba(38,5,12,0.9640231092436975) 27%, rgba(42,5,33,0.927608543417367) 71%); max-width: 800px;">
            <h2 class="text-success">Admin Register</h2>
            <div class="row d-flex justify-content-between mt-4">
                <div class="group-form col-6">
                    <label class="form-label" for="f-name">First name</label>
                    <input class="form-control" type="text" name="f-name" id="f-name" required style="background: #e2e2e2;">
                </div>
                <div class="group-form col-6">
                    <label class="form-label" for="l-name">Last name</label>
                    <input class="form-control" type="text" name="l-name" id="l-name" required style="background: #e2e2e2;">
                </div>
            </div>

            <div class="row d-flex justify-content-between mt-3">
                <div class="group-form col-6">
                    <label class="form-label" for="email">Email</label>
                    <input class="form-control" type="email" name="email" id="email" required style="background: #e2e2e2;">
                </div>
                <div class="group-form col-6">
                    <label class="form-label" for="pass">Password</label>
                    <input class="form-control" type="password" name="password" id="pass" required style="background: #e2e2e2;">
                </div>
            </div>
            <div class="row d-flex justify-content-between mt-3">
                <div class="group-form col-12">
                    <label class="form-label" for="phone">Phone</label>
                    <input class="form-control" type="text" name="phone" id="phone" required style="background: #e2e2e2;">
                </div>
            </div>
            <div class="d-grid mt-5">
                <button type="submit" class="btn btn-success col-12">Submit</button>
            </div>
        </div>
    </form>
</div>