<?php require "layouts/restaurant/header.php"; ?>
<div class="container mt-5 px-5">
    <form action="/restaurant/check-signup" method="post" class="form shadow-sm darkmode row p-0" style="background-image: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,0.23853291316526615) 35%), url(../../assets/images/test.jpg); background-position: 0; background-size: cover;">
        <div class="col-6"></div>
        <div class="col-6 p-5 bg-dark" style=" border-radius: 0px 5px 5px 0px;">
            <h2 class="text-info">Restaurant Register</h2>
            <div class="row d-flex justify-content-between mt-4">
                <div class="group-form col-6">
                    <label class="form-label" for="f-name">First name</label>
                    <input class="form-control text-white" type="text" name="f-name" id="f-name" style="background: #676767;">
                </div>
                <div class="group-form col-6">
                    <label class="form-label" for="l-name">Last name</label>
                    <input class="form-control text-white" type="text" name="l-name" id="l-name" style="background: #676767;">
                </div>
            </div>

            <div class="row d-flex justify-content-between mt-3">
                <div class="group-form col-6">
                    <label class="form-label" for="email">Email</label>
                    <input class="form-control text-white" type="email" name="email" id="email" style="background: #676767;">
                </div>
                <div class="group-form col-6">
                    <label class="form-label" for="pass">Password</label>
                    <input class="form-control text-white" type="password" name="password" id="pass" style="background: #676767;">
                </div>
            </div>
            <div class="row d-flex justify-content-between mt-3">
                <div class="group-form col-12">
                    <label class="form-label" for="phone">Phone</label>
                    <input class="form-control text-white" type="text" name="phone" id="phone" style="background: #676767;">
                </div>
            </div>
            <div class="row d-flex justify-content-between mt-3">
                <div class="group-form col-12">
                    <label class="form-label" for="address">Address</label>
                    <input class="form-control text-white" type="text" name="address" id="address" style="background: #676767;">
                </div>
            </div>
            <div class="row d-flex justify-content-between mt-3">
                <div class="group-form col-12">
                    <label class="form-label" for="descpription">Description</label>
                    <input class="form-control text-white" type="text" name="description" id="description" style="background: #676767;">
                </div>
            </div>
            <div class="d-grid mt-5">
                <button type="submit" class="btn btn-info col-12">Submit</button>
            </div>
        </div>
    </form>
</div>