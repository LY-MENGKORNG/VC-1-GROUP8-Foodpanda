<div class="main-wrapper">
    <nav class="main-nav--bg">
        <div class="container main-nav">
            <div class="main-nav-start">
                <div class="search-wrapper">
                    <i data-feather="search" aria-hidden="true"></i>
                    <input type="text" placeholder="Enter keywords ..." required>
                </div>
            </div>
            <div class="main-nav-end">
                <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
                    <span class="sr-only">Toggle menu</span>
                    <span class="icon menu-toggle--gray" aria-hidden="true"></span>
                </button>
                <div class="lang-switcher-wrapper">
                    <button class="lang-switcher transparent-btn" type="button">
                        EN
                        <i data-feather="chevron-down" aria-hidden="true"></i>
                    </button>
                    <ul class="lang-menu dropdown">
                        <li><a href="##">English</a></li>
                        <li><a href="##">French</a></li>
                        <li><a href="##">Uzbek</a></li>
                    </ul>
                </div>
                <button class="theme-switcher gray-circle-btn" type="button" title="Switch theme">
                    <span class="sr-only">Switch theme</span>
                    <i class="sun-icon" data-feather="sun" aria-hidden="true"></i>
                    <i class="moon-icon" data-feather="moon" aria-hidden="true"></i>
                </button>
                <div class="notification-wrapper">
                    <button class="gray-circle-btn dropdown-btn" title="To messages" type="button">
                        <span class="sr-only">To messages</span>
                        <span class="icon notification active" aria-hidden="true"></span>
                    </button>
                    <ul class="users-item-dropdown notification-dropdown dropdown">
                        <li>
                            <a href="##">
                                <div class="notification-dropdown-icon info">
                                    <i data-feather="check"></i>
                                </div>
                                <div class="notification-dropdown-text">
                                    <span class="notification-dropdown__title">System just updated</span>
                                    <span class="notification-dropdown__subtitle">The system has been successfully upgraded. Read more
                                        here.</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="##">
                                <div class="notification-dropdown-icon danger">
                                    <i data-feather="info" aria-hidden="true"></i>
                                </div>
                                <div class="notification-dropdown-text">
                                    <span class="notification-dropdown__title">The cache is full!</span>
                                    <span class="notification-dropdown__subtitle">Unnecessary caches take up a lot of memory space and
                                        interfere ...</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="##">
                                <div class="notification-dropdown-icon info">
                                    <i data-feather="check" aria-hidden="true"></i>
                                </div>
                                <div class="notification-dropdown-text">
                                    <span class="notification-dropdown__title">New Subscriber here!</span>
                                    <span class="notification-dropdown__subtitle">A new subscriber has subscribed.</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="link-to-page" href="##">Go to Notifications page</a>
                        </li>
                    </ul>
                </div>
                <div class="nav-user-wrapper">
                    <button href="##" class="nav-user-btn dropdown-btn" title="My profile" type="button">
                        <span class="sr-only">My profile</span>
                        <span class="nav-user-img">
                            <picture>
                                <source srcset="../../assets/images/uploads/admin_profile/<?= $admin['profile'] ?>"><img src="../../assets/images/uploads/admin_profile/<?= $admin['profile'] ?>" alt="User name">
                            </picture>
                        </span>
                    </button>
                    <ul class="users-item-dropdown nav-user-dropdown dropdown">
                        <li><a href="/admin/profile">
                                <i data-feather="user" aria-hidden="true"></i>
                                <span>Profile</span>
                            </a></li>
                        <li><a href="##">
                                <i data-feather="settings" aria-hidden="true"></i>
                                <span>settings</span>
                            </a></li>
                        <li>
                            <a class="danger" href="/admin/signout">
                                <i data-feather="log-out" aria-hidden="true"></i>
                                <span>Log out</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- Main -->
    <main class="main users chart-page" id="skip-target">
        <div class="container-fluid">
            <div class="d-flex flex-row justify-content-sm-between px-2">
                <h1 class="main-title col-10">Restaurants</h1>
                <a href="/admin/add_restaurant">
                    <button  class="btn bg-white font-weight-bold text-gray rounded">
                        Add Restaurant
                    </button>
                </a>
            </div>

            <div class="container-fluid mt-3" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 20px;">
                <?php foreach ($restaurants as $restaurant) { ?>
                    <div class="card shadow overflow-hidden">
                        <div class="d-flex align-items-center justify-content-center overflow-hidden" style="height: 130px;">
                            <img src="../../../assets/images/uploads/restaurants/<?= $restaurant["restaurant_img"] ?>" class="img-fluid" alt="..." style="width: 100%;">
                        </div>
                        <div class="card-body" style="height: 46%;">
                            <h5 class="card-title"><?= $restaurant["restaurant_name"] ?></h5>
                            <p class="card-text text-bolder">Location: <span class="text-thin"><?= $restaurant["location"] ?></span></p>
                            <a href="/admin/restaurant_detail" class="btn btn-primary mt-4">See more</a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </main>
