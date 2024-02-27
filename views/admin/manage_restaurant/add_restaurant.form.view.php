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
        <div class="container p-4">
            <form action="/admin/check_add_restaurant">
                <h2 class="text-primary">Add Restaurant</h2>
                <div class="row mt-4">
                    <div class="form-group col-6">
                        <label for="name">Restaurant name</label>
                        <input type="text" name="restaurant_name" id="name" class="form-control">
                    </div>
                    <div class="form-group col-6">
                        <label for="location">Restaurant location</label>
                        <input type="text" name="location" id="location" class="form-control">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="form-group col-6">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                    <div class="form-group col-6">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                </div>
            </form>
        </div>
    </main>