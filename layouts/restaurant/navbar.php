<!-- ! Body -->
<a class="skip-link sr-only" href="#skip-target">Skip to content</a>
<div class="page-flex">
    <!-- ! Sidebar -->
    <aside class="sidebar">
        <div class="sidebar-start">
            <div class="sidebar-head">
                <a href="/admin" class="logo-wrapper" title="Home">
                    <span class="sr-only">Home</span>
                    <span class="icon logo" aria-hidden="true"></span>
                    <div class="logo-text">
                        <span class="logo-title text-primary">Owner</span>
                        <span class="logo-subtitle"></span>
                    </div>
                </a>
                <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
                    <span class="sr-only">Toggle menu</span>
                    <span class="icon menu-toggle" aria-hidden="true"></span>
                </button>
            </div>
            <div class="sidebar-body">
                <ul class="sidebar-body-menu">
                    <li>
                        <a class="<?= getActivePage('/restaurant/category') ?>" href="/restaurant/category"><span
                                class="icon home" aria-hidden="true"></span>Category</a>
                    </li>
                    <li>
                        <a class="<?= getActivePage('/restaurant/food') ?>" href="/restaurant/food"><span
                                class="icon home" aria-hidden="true"></span>Food</a>
                    </li>
                    <li>
                        <a class="<?= getActivePage('/restaurant/delivery') ?>" href="/restaurant/delivery"><span
                                class="icon home" aria-hidden="true"></span>Delivery</a>
                    </li>
                    <li>
<<<<<<< HEAD
                        <a class="<?= getActivePage('/restaurant/customer') ?>" href="/restaurant/order"><span class="icon home" aria-hidden="true"></span>Order</a>
=======
                        <a class="<?= getActivePage('/restaurant/order') ?>" href="/restaurant/order"><span
                                class="icon home" aria-hidden="true"></span>Order</a>
>>>>>>> 6c908776ebceedeb04020943dde2eaa44b563beb
                    </li>
                </ul>
            </div>
        </div>
        <div class="sidebar-footer">
            <a href="/restaurant/profile" class="sidebar-user">
                <span class="sidebar-user-img">
                    <picture class="overflow-hidden">
                        <source
                            srcset="../../assets/images/uploads/owner_profile/<?= isset ($restaurant_owner["profile"]) ? $restaurant_owner["profile"] : 'avatar.png' ?>">
                        <img src="../../assets/images/uploads/owner_profile/<?= isset ($restaurant_owner["profile"]) ? $restaurant_owner["profile"] : 'avatar.png' ?>"
                            alt="User name">
                    </picture>
                </span>
                <div class="sidebar-user-info">
                    <span class="sidebar-user__title">
                        <?= isset ($restaurant_owner) ? $restaurant_owner["first_name"] : "" ?>
                    </span>
                    <span class="sidebar-user__subtitle">Support manager</span>
                </div>
            </a>
        </div>
    </aside>