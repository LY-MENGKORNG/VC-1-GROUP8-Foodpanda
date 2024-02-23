<?php require "layouts/restaurant/header.php"; ?>
<div class="container mt-5 px-5">
    <form action="/restaurant/check-signin" method="post" class="form darkmode m-auto" style="max-width: 600px;">
        <h2 class="text-success mb-4">Restaurant Signin</h2>
        <div class="mb-4">
            <label for="email" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control bg-light" id="email" aria-describedby="email" required>
            <div id="email" class="form-text text-info">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-1">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control bg-light" id="password" required>
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="check">
            <label class="form-check-label text-info" for="check">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary mt-2">Submit</button>
    </form>
</div>
<script>
    const pass = document.getElementById("password");
    const check = document.getElementById("check");
    check.onclick = () => {
        pass.type = !check.checked ? "password" : "text";
    }
</script>