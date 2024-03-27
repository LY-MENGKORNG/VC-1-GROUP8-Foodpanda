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
                        <span class="logo-title">Admin</span>
                        <span class="logo-subtitle">Dashboard</span>
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
                        <a class="<?= getActivePage('/admin') ?>" href="/admin"><span class="icon home" aria-hidden="true"></span>Dashboard</a>
                    </li>
                    <li>
                        <a class="<?= getActivePage('/admin/manage_restaurant') ?>" href="/admin/manage_restaurant"><span class="icon home" aria-hidden="true"></span>Restaurants</a>
                    </li>
                    <li>
                        <a class="<?= getActivePage('/admin/restaurant_owner') ?>" href="/admin/restaurant_owner"><span class="icon home" aria-hidden="true"></span>Owners</a>
                    </li>
                    <!-- <li>
                        <a class="show-cat-btn" href="##">
                            <span class="icon paper" aria-hidden="true"></span>Pages
                            <span class="category__btn transparent-btn" title="Open list">
                                <span class="sr-only">Open list</span>
                                <span class="icon arrow-down" aria-hidden="true"></span>
                            </span>
                        </a>
                        <ul class="cat-sub-menu">
                            <li>
                                <a href="pages.html">All pages</a>
                            </li>
                            <li>
                                <a href="new-page.html">Add new page</a>
                            </li>
                        </ul>
                    </li> -->
                    <!-- <li>
                        <a href="comments.html">
                            <span class="icon message" aria-hidden="true"></span>
                            Comments
                        </a>
                        <span class="msg-counter">7</span>
                    </li> -->
                </ul>
                <span class="system-menu__title">system</span>
                <ul class="sidebar-body-menu">
                    <!-- <li>
                        <a href="appearance.html"><span class="icon edit" aria-hidden="true"></span>Appearance</a>
                    </li> -->
                    <!-- <li>
                        <a class="show-cat-btn" href="##">
                            <span class="icon category" aria-hidden="true"></span>Extentions
                            <span class="category__btn transparent-btn" title="Open list">
                                <span class="sr-only">Open list</span>
                                <span class="icon arrow-down" aria-hidden="true"></span>
                            </span>
                        </a>
                        <ul class="cat-sub-menu">
                            <li>
                                <a href="extention-01.html">Extentions-01</a>
                            </li>
                            <li>
                                <a href="extention-02.html">Extentions-02</a>
                            </li>
                        </ul>
                    </li> -->
                    <!-- <li>
                        <a class="show-cat-btn" href="controllers/users/new_user.registration.user.php">
                            <span class="icon user-3" aria-hidden="true"></span>Users
                            <span class="category__btn transparent-btn" title="Open list">
                                <span class="sr-only">Open list</span>
                                <span class="icon arrow-down" aria-hidden="true"></span>
                            </span>
                        </a>
                        <ul class="cat-sub-menu">
                            <li>
                                <a href="views/users/new_user_registration.users.php">Users-01</a> 
                                users-01.html
                            </li>
                            <li>
                                <a href="users-02.html">Users-02</a>
                            </li>
                        </ul>
                    </li> -->
                    <li>
                        <a class="show-cat-btn" href="#">
                            <i class="feather-settings mx-2" aria-hidden="true"></i>Autentication
                            <span class="category__btn transparent-btn" title="Open list">
                                <span class="sr-only">Open list</span>
                                <span class="icons arrow-down" aria-hidden="true"></span>
                            </span>
                        </a>
                        <ul class="cat-sub-menu">
                            <li>
                                <a href="/admin/signin">Forgot password</a> 
                            </li>
                            <li>
                                <a href="/admin/signout">Log out</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="sidebar-footer">
            <a href="##" class="sidebar-user">
                <span class="sidebar-user-img">
                    <picture>
                        <source srcset="../../assets/images/uploads/admin_profile/<?= isset($admin["profile"]) ? $admin["profile"] : 'avatar.png' ?>" type="image/webp"><img src="../../assets/images/uploads/admin_profile/<?= isset($admin) ? $admin["profile"] : 'avatar.png' ?>" alt="User name">
                    </picture>
                </span>
                <div class="sidebar-user-info">
                    <span class="sidebar-user__title"><?= isset($admin) ? $admin["first_name"] : "" ?></span>
                    <span class="sidebar-user__subtitle">Support manager</span>
                </div>
            </a>
        </div>
    </aside>