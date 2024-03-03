<!-- ! Body -->
<a class="skip-link sr-only" href="#skip-target">Skip to content</a>
<div class="page-flex">
    <!-- ! Sidebar -->
    <aside class="sidebar">
        <div class="sidebar-start">
            <div class="sidebar-head">
                <!-- <a href="/restaurant" class="logo-wrapper" title="Home">
                    <span class="sr-only">Home</span>
                    <span class="icon logo" aria-hidden="true"></span>
                    <div class="logo-text">
                        <span class="logo-title">Elegant</span>
                        <span class="logo-subtitle">Dashboard</span>
                    </div>
                </a> -->
                <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
                    <span class="sr-only">Toggle menu</span>
                    <span class="icon menu-toggle" aria-hidden="true"></span>
                </button>
            </div>
            <div class="sidebar-body">
                <ul class="sidebar-body-menu">
                    <li>
                        <a class="active" href="/restaurant"><span class="icon home" aria-hidden="true"></span>Dashboard</a>
                    </li>
                    <li>
                        <a class="show-cat-btn" href="##">
                            <span class="icon folder" aria-hidden="true"></span>Categories
                            <span class="category__btn transparent-btn" title="Open list">
                                <span class="sr-only">Open list</span>
                                <span class="icon arrow-down" aria-hidden="true"></span>
                            </span>
                        </a>
                        <ul class="cat-sub-menu">
                            <li>
                                <a href="/restaurant/category">All Categories</a>
                            </li>
                            <li>
                                <a href="/restaurant/food">All Foods</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="" href="/restaurant/delivery"><span class="icon home" aria-hidden="true"></span>Delivery</a>
                    </li>
                    <li>
                        <a class="" href="/restaurant/customer"><span class="icon home" aria-hidden="true"></span>Customer</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="sidebar-footer">
            <a href="##" class="sidebar-user">
                <span class="sidebar-user-img">
                    <picture>
                        <source srcset="../../assets/images/uploads/admin_profile/<?= isset($admin) ? $admin["profile"] : 'avatar.png' ?>" type="image/webp"><img src="../../assets/images/uploads/admin_profile/<?= isset($admin) ? $admin["profile"] : 'avatar.png' ?>" alt="User name">
                    </picture>
                </span>
                <div class="sidebar-user-info">
                    <span class="sidebar-user__title"><?= isset($admin) ? $admin["first_name"] : "" ?></span>
                    <span class="sidebar-user__subtitle">Support manager</span>
                </div>
            </a>
        </div>
    </aside>