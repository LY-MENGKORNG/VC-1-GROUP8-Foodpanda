<div class="osahan-profile">
    <div class="d-none">
        <div class="bg-primary border-bottom p-3 d-flex align-items-center">
            <a class="toggle togglew toggle-2" href="#"><span></span></a>
            <h4 class="font-weight-bold m-0 text-white">Profile</h4>
        </div>
    </div>

    <div class="container position-relative">
        <form action="/restaurant/edit_profile" method="post" class="py-5 row" enctype="multipart/form-data">
            <div class="col-md-4 mb-3">
                <div class="white-block rounded shadow-sm sticky_sidebar overflow-hidden p-5 d-flex flex-column align-items-center position-relative">
                    <div class="left rounded-circle d-flex align-items-center position-relative overflow-hidden" style="width: 150px; height: 150px;">
                        <img alt="#" id="originImage" src="../../assets/images/uploads/owner_profile/<?= isset($restaurant_owner["profile"]) ? $restaurant_owner["profile"] : 'avatar.png' ?>" style="width: 100%; border: 1px solid gray;">
                    </div>
                    <div class="rounded-circle bg-light position-absolute d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; bottom: 40%; right: 25%; border: 1px solid gray;" >
                        <label for="profile_img" class="m-auto">
                            <input type="file" name="profile" id="profile_img" style="display: none;">
                            <i class="feather-download fs-5 text-secondary border text-primary"></i>
                        </label>
                    </div>
                    
                    <div class="d-flex  d-flex flex-column gap-5 p-3">
                        <div class="left text-center">
                            <h6 class="mb-1 font-weight-bold"><?= $restaurant_owner["first_name"] . " " . $restaurant_owner["last_name"] ?><i class="feather-check-circle text-success mx-1 "></i></h6>
                            <p class="text-muted m-0 small">
                                <span class="__cf_email__" data-cfemail="fd949c90928e9c959c93bd9a909c9491d39e9290">[&#160;<?= $restaurant_owner["email"] ?>]</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 mb-3">
                <div class="rounded shadow-sm p-4 white-block">
                    <h5 class="mb-4">My account</h5>
                    <div id="edit_profile">
                        <div>
                            <div class="form-group">
                                <input type="hidden" name="user_id" value="<?= $restaurant_owner["user_id"] ?>">
                                <label for="first_name">First Name</label>
                                <input type="text" class="form-control main-title border" name="first_name" id="first_name" value="<?= $restaurant_owner["first_name"] ?>" required style="background: transparent;">
                            </div>
                            <div class="form-group">
                                <label for="last_name">Last Name</label>
                                <input type="text" class="form-control main-title border" name="last_name" id="last_name" value="<?= $restaurant_owner["last_name"] ?>" required style="background: transparent;">
                            </div>
                            <div class="form-group">
                                <label for="phone">Mobile Number</label>
                                <input type="tel" class="form-control main-title border" name="phone" id="phone" value="<?= $restaurant_owner["phone"] ?>" required style="background: transparent;">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control main-title border" name="email" id="email" value="<?= $restaurant_owner["email"] ?>" required style="background: transparent;">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-block">Save Changes</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="white-block">
                    <div class="additional">
                        <div class="change_password my-3">
                            <a href="/restaurant/change_password" class="p-3 border rounded bg-white btn d-flex align-items-center">Change
                                Password
                                <i class="feather-arrow-right ml-auto"></i></a>
                        </div>
                        <div class="deactivate_account">
                            <a href="/restaurant/forgot_password" class="p-3 border rounded bg-white btn d-flex align-items-center">Deactivate
                                Account
                                <i class="feather-arrow-right ml-auto"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>