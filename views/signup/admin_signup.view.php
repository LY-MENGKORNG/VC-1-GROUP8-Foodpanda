<?php require "layouts/admin/header.php"; ?>
<div class="container mt-5 col-6">
    <form action="/admin" method="post" class="form darkmode">
        <h2 class="text-info">Admin Register</h2>
        <div class="row d-flex justify-content-between mt-4">
            <div class="group-form col-6">
                <label class="form-label" for="f-name">First name</label>
                <input class="form-control text-white" type="text" name="admin-name[]" id="f-name" style="background: #67676767;">
            </div>
            <div class="group-form col-6">
                <label class="form-label" for="l-name">Last name</label>
                <input class="form-control text-white" type="text" name="admin-name[]" id="l-name" style="background: #676767;">
            </div>
        </div>
        <div class="row d-flex justify-content-between mt-2">
            <div class="group-form col-12">
                <label class="form-label" for="phone">Phone</label>
                <input class="form-control text-white" type="text" name="phone" id="phone">
            </div>
        </div>
        <div class="row d-flex justify-content-between mt-2">
            <div class="group-form col-6">
                <label class="form-label" for="email">Email</label>
                <input class="form-control text-white" type="email" name="email" id="email">
            </div>
            <div class="group-form col-6">
                <label class="form-label" for="pass">Password</label>
                <input class="form-control text-white" type="password" name="password" id="pass">
            </div>
        </div>
        <button type="submit" class="btn btn-info mt-4 col-12">Submit</button>
    </form>
</div>