<div class="main-wrapper">
    <!-- ! Main nav -->
    <nav class="row m-0 p-0" style="height: 50px;">
        <div class="col-6">
            <div class="dropdown d-flex">
                <a href="#" class="dropdown-toggle text-dark py-3 d-block" id="dropdownMenuButton" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    
                    <img alt="#"
                        src="../../assets/images/uploads/customer_profile/<?= isset ($customer["profile"]) ? $customer["profile"] : 'avatar.png' ?>"
                        class="img-fluid rounded-circle header-user mr-2 header-user border border-secondary" style="height: 35px; width: 35px;" />
                    <span class="main_color font-weight-bolder">
                        <?= isset ($customer) ? $customer['first_name'] : "" ?>
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="/customer/profile">My account</a>
                    <a class="dropdown-item" href="/customer/delivery">Delivery support</a>
                    <a class="dropdown-item" href="/customer/contact">Contant us</a>
                    <a class="dropdown-item" href="/customer/term">Term of use</a>
                    <a class="dropdown-item" href="customer/privacy">Privacy policy</a>
                    <a class="dropdown-item" href="/customer/signout">Logout</a>
                </div>
            </div>
        </div>
    </nav>