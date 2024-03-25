<div class="osahan-profile">
    <div class="d-none">
        <div class="bg-primary border-bottom p-3 d-flex align-items-center">
            <a class="toggle togglew toggle-2" href="#"><span></span></a>
            <h4 class="font-weight-bold m-0 text-white">Profile</h4>
        </div>
    </div>

    <div class="container position-relative">
        <form action="/restaurant/edit_profile" method="post" class="py-5 osahan-profile row" enctype="multipart/form-data">
            <div class="col-md-4 mb-3">
                <div class="bg-white rounded shadow-sm sticky_sidebar overflow-hidden p-5 d-flex flex-column align-items-center">
                    <div class="left rounded-circle d-flex align-items-center position-relative" style="width: 150px; height: 150px;">
                        <img alt="#" id="originImage" src="../../assets/images/uploads/owner_profile/<?= isset($restaurant_owner["profile"]) ? $restaurant_owner["profile"] : 'avatar.png' ?>" class="rounded-circle" style="width: 100%; height: 100%; border: 1px solid gray;">
                        <div class="rounded-circle bg-light position-absolute d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; bottom: 5%; right: 5%; border: 1px solid gray;" >
                            <label for="profile_img" class="m-auto">
                                <input type="file" name="profile" id="profile_img" style="display: none;">
                                <i class="feather-download fs-5 text-secondary border text-primary"></i>
                            </label>
                        </div>
                    </div>
                    
                    <div class="d-flex  d-flex flex-column gap-5 p-3">
                        <div class="left text-center">
                            <h6 class="mb-1 font-weight-bold"><?= $restaurant_owner["first_name"] . " " . $restaurant_owner["last_name"] ?><i class="feather-check-circle text-success mx-1"></i></h6>
                            <p class="text-muted m-0 small">
                                <span class="__cf_email__" data-cfemail="fd949c90928e9c959c93bd9a909c9491d39e9290">[&#160;<?= $restaurant_owner["email"] ?>]</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 mb-3">
                <div class="rounded shadow-sm p-4 bg-white">
                    <h5 class="mb-4">My account</h5>
                    <div id="edit_profile">
                        <div>

                            <div class="form-group">
                                <input type="hidden" name="user_id" value="<?= $restaurant_owner["user_id"] ?>">
                                <label for="first_name">First Name</label>
                                <input type="text" class="form-control border" name="first_name" id="first_name" value="<?= $restaurant_owner["first_name"] ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="last_name">Last Name</label>
                                <input type="text" class="form-control border" name="last_name" id="last_name" value="<?= $restaurant_owner["last_name"] ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">Mobile Number</label>
                                <input type="tel" class="form-control border" name="phone" id="phone" value="<?= $restaurant_owner["phone"] ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control border" name="email" id="email" value="<?= $restaurant_owner["email"] ?>" required>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-block">Save Changes</button>
                            </div>
                        </div>
                        <div class="additional">
                            <div class="change_password my-3">
                                <a href="forgot_password.html" class="p-3 border rounded bg-white btn d-flex align-items-center">Change
                                    Password
                                    <i class="feather-arrow-right ml-auto"></i></a>
                            </div>
                            <div class="deactivate_account">
                                <a href="forgot_password.html" class="p-3 border rounded bg-white btn d-flex align-items-center">Deactivate
                                    Account
                                    <i class="feather-arrow-right ml-auto"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div class="osahan-menu-fotter fixed-bottom bg-white px-3 py-2 text-center d-none">
        <div class="row">
            <div class="col">
                <a href="home.html" class="text-dark small font-weight-bold text-decoration-none">
                    <p class="h4 m-0"><i class="feather-home text-dark"></i></p>
                    Home
                </a>
            </div>
            <div class="col">
                <a href="most_popular.html" class="text-dark small font-weight-bold text-decoration-none">
                    <p class="h4 m-0"><i class="feather-map-pin"></i></p>
                    Trending
                </a>
            </div>
            <div class="col bg-white rounded-circle mt-n4 px-3 py-2">
                <div class="bg-danger rounded-circle mt-n0 shadow">
                    <a href="checkout.html" class="text-white small font-weight-bold text-decoration-none">
                        <i class="feather-shopping-cart"></i>
                    </a>
                </div>
            </div>
            <div class="col">
                <a href="favorites.html" class="text-dark small font-weight-bold text-decoration-none">
                    <p class="h4 m-0"><i class="feather-heart"></i></p>
                    Favorites
                </a>
            </div>
            <div class="col selected">
                <a href="/admin/profile" class="text-danger small font-weight-bold text-decoration-none">
                    <p class="h4 m-0"><i class="feather-user"></i></p>
                    Profile
                </a>
            </div>
        </div>
    </div>
</div>