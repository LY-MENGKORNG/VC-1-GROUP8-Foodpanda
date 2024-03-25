<div class="osahan-menu-fotter fixed-bottom bg-white px-3 py-2 text-center d-none">
    <div class="row">
        <div class="col">
            <a href="/customer" class=" small font-weight-bold text-decoration-none">
                <p class="h4 m-0 <?= getActivePage("/customer") ? 'selected text-primary' : 'text-dark' ?>"><i class="feather-home"></i></p>
                <span class="<?= getActivePage("/customer") ? 'selected text-primary' : 'text-dark' ?>">Home</span>
            </a>
        </div>
        <div class="col">
            <a href="/customer/trending" class=" small font-weight-bold text-decoration-none">
                <p class="h4 m-0 <?= getActivePage("/customer/trending") ? 'selected text-primary' : 'text-dark' ?>"><i class="feather-map-pin"></i></p>
                <span class="<?= getActivePage("/customer/trending") ? 'selected text-primary' : 'text-dark' ?>">Trending</span>
            </a>
        </div>
        <div class="col bg-white rounded-circle mt-n4 px-3 py-2">
            <div class="bg-primary rounded-circle mt-n0 shadow">
                <a href="/customer/checkout" class="text-white small font-weight-bold text-decoration-none">
                    <i class="feather-shopping-cart"></i>
                </a>
            </div>
        </div>
        <div class="col">
            <a href="/customer/favorite" class=" small font-weight-bold text-decoration-none">
                <p class="h4 m-0  <?= getActivePage("/customer/favorite") ? 'selected' : 'text-dark' ?>"><i class="feather-heart"></i></p>
                <span class="<?= getActivePage("/customer/favorite") ? 'selected' : 'text-dark' ?>">Favorites</span>
            </a>
        </div>
        <div class="col">
            <a href="/customer/profile" class="small font-weight-bold text-decoration-none">
                <p class="h4 m-0 <?= getActivePage("/customer/profile") ? 'selected text-primary' : 'text-dark' ?> ">
                    <i class="feather-user"></i>
                </p>
                <span class="<?= getActivePage("/customer/profile") ? 'selected' : 'text-dark' ?> ">Profile</span>
            </a>
        </div>
    </div>
</div>
</div>