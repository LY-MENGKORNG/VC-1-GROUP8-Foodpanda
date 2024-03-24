<div class="main-wrapper">
    <!-- ! Main nav -->
    <nav class="row m-0 p-0">
        <div class="ml-auto">
            <a class="dropdown-toggle text-dark py-3 d-block" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <img alt="#"
                    src="../../assets/images/uploads/customer_profile/<?= isset ($customer["profile"]) ? $customer["profile"] : 'avatar.png' ?>"
                    class="img-fluid rounded-circle header-user mr-2 header-user" style="height: 35px; width: 35px;" />
                <span class="main_color font-weight-bolder">
                    <?= isset ($customer) ? $customer['first_name'] : "" ?>
                </span>
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="/customer/profile">My account</a>
                <a class="dropdown-item" href="/customer/delivery">Delivery support</a>
                <a class="dropdown-item" href="/customer/contact">Contant us</a>
                <a class="dropdown-item" href="/customer/term">Term of use</a>
                <a class="dropdown-item" href="customer/privacy">Privacy policy</a>
                <a class="dropdown-item" href="/customer/signout">Logout</a>
            </div>
        </div>
    </nav>