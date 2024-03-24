<div class="main-wrapper">
    <!-- ! Main nav -->
    <nav class="m-0 p-0 d-flex flex-row justify-content-between align-items-center px-5 shadow-sm"
        style="height: 54px;  background: #0e2234;">
        <div class="nav-left"></div>
        <div class="d-flex flex-row align-items-center gap-3">
            <a href="/delivery/notification" class="delivery-notification">
                <i class="feather-bell h6 fs-4 mr-2 mb-0"></i>
                <span></span>
            </a>
            <a href="#" class="dropdown-toggle text-dark py-3 d-block" id="dropdownMenuButton" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <img alt="#"
                    src="../../assets/images/uploads/delivery_profile/<?= isset ($delivery["profile"]) ? $delivery["profile"] : 'avatar.png' ?>"
                    class="img-fluid rounded-circle header-user mr-2 header-user border border-secondary"
                    style="height: 35px; width: 35px;" />
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="/delivery/profile">My account</a>
                <a class="dropdown-item" href="/delivery/delivery">Delivery support</a>
                <a class="dropdown-item" href="/delivery/contact">Contant us</a>
                <a class="dropdown-item" href="/delivery/term">Term of use</a>
                <a class="dropdown-item" href="delivery/privacy">Privacy policy</a>
                <a class="dropdown-item" href="/delivery/signout">Logout</a>
            </div>
        </div>
    </nav>