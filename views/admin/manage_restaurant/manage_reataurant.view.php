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
                                <source srcset="../../assets/images/uploads/admin_profile/<?= $admin['image'] ?>"><img src="../../assets/images/uploads/admin_profile/<?= $admin['image'] ?>" alt="User name">
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
        <div class="container">
            <div class="d-flex">
                <h1 class="main-title col-10">Restaurants</h1>
                <button class="btn bg-white font-weight-bold text-gray rounded" id="addRestaurant">
                    Add Restaurant
                </button>
            </div>
            <form action="/admin/check_add_restaurant" method="post" enctype="multipart/form-data" class="bg-white shadow-lg p-4 rounded position-absolute d-none" id="form" style="width: 600px; z-index: 10; left: 10%; top: 20px;">
                <h3 class="title mb-4 main_color">Add a new Restaurant with Owner</h3>
                <div class="row d-flex gap-3">
                    <div class="form-group col-6">
                        <label for="restaurant" class="">Restaurant Name</label>
                        <input type="text" name="restaurant_name" class="form-control border" id="restaurant">
                    </div>
                    <div class="form-group col-6">
                        <label for="owner" class="">Owner Name</label>
                        <input type="text" name="owner_name" class="form-control border" id="owner" required>
                    </div>
                </div>
                <div class="row d-flex gap-3">
                    <div class="form-group col-6">
                        <label for="email">Email Adress</label>
                        <input type="email" name="email" class="form-control border" id="email" required>
                    </div>
                    <div class="form-group col-6">
                        <label for="phone">Contact Info</label>
                        <input type="tel" name="contact_info" class="form-control border" id="phone" required>
                    </div>
                </div>
                <div class="row d-flex gap-3">
                    <div class="form-group col-6">
                        <label for="location">Location</label>
                        <input type="text" name="location" class="form-control border" id="location" required>
                    </div>
                    <div class="form-group col-6">
                        <label for="open">Opening hour</label>
                        <input type="number" name="opening_hour" class="form-control border" id="open" required min="1" max="24">
                    </div>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" class="form-control" id="description" cols="30" rows="10" style="max-height: 100px;" required></textarea>
                </div>
                <div class="form-group">
                    <label for="img">Restaurant Image</label>
                    <input type="file" name="restaurant_img" class="form-control" id="img" required>
                </div>
                <button type="submit" class="btn main_bg col-12 text-white">Submit</button>
            </form>
            <div class="container-fluid p-0 mt-3" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 300px)); gap: 10px;">
                <div class="card border-0 rounded-sm overflow-hidden" style="min-height: 300px; max-height: 400px; background-image: url(../../../assets/images/popular3.png);">
                    <div class="card-body col-12 m-0" style="position: absolute; bottom: -1px; right: 0px; background: rgba(0, 0, 0, 0.4); backdrop-filter: blur(5px);">
                        <div class="card-content py-3">
                            <h5 class="text-white">Restaurant Name</h5>
                            <span class="text-light">rate</span>
                        </div>
                        <h6 class="card-title text-white">Owner Name</h6>
                        <span class="card-text text-light font-weight-bold">Location</span>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script>
        document.getElementById("addRestaurant").onclick = () => {
            document.getElementById("form").classList.toggle("d-none");
        }
    </script>