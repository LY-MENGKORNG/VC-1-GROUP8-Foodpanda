<!-- Main -->
<main class="main users chart-page" id="skip-target">
    <!-- <div class="px-5">
        <div class="px-5 pt-2">
            <h2 class="text-primary">List of Delivery</h2>

            <div class="container mt-5">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">User ID</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Registration Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($delivery as $item) { ?>
                            <tr>
                                <td><?= $item["user_id"] ?></td>
                                <td><?= $item["first_name"] ?></td>
                                <td><?= $item["last_name"] ?></td>
                                <td><?= $item["email"] ?></td>
                                <td><?= $item["phone"] ?></td>
                                <td><?= $item["registration_date"] ?></td>
                            </tr>
                        <?php } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div> -->
    <!-- <div class="container">
        <h5 class="main-title">Delivery</h5>
        <div class="users-table table-wrapper rounded-lg add-border">
            <div class="main-nav-start row p-4 d-flex justify-content-between">
                <div class="search-wrapper">
                    <i data-feather="search" aria-hidden="true"></i>
                    <input type="text" placeholder="Search Here" class="border" required>
                </div>
                <div class="filter">
                    <button type="button" class="btn btn-primary">
                        <i data-feather="filter" class="" aria-hidden="true"></i>
                        Filter
                    </button>
                </div>
            </div>
            <table class="posts-table">
                <thead>
                    <tr class="users-table-info">
                        <th>
                            <label class="users-table__checkbox ms-20">
                                <input type="checkbox" class="check-all">Image
                            </label>
                        </th>
                        <th>Food Name </th>
                        <th>Delivery Name</th>
                        <th>Status</th>
                        <th>Order Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <label class="users-table__checkbox">
                                <input type="checkbox" class="check">
                                <div class="categories-table-img">
                                    <picture>
                                        <source srcset="assets/images/categories/01.webp" type="image/webp"><img src="assets/images/categories/01.jpg" alt="category">
                                    </picture>
                                </div>
                            </label>
                        </td>
                        <td>
                            Starting your traveling blog with Vasco
                        </td>
                        <td>
                            <div class="pages-table-img">
                                <picture>
                                    <source srcset="assets/images/avatar/avatar-face-04.webp" type="image/webp"><img src="assets/images/avatar/avatar-face-04.png" alt="User Name">
                                </picture>
                                Jenny Wilson
                            </div>
                        </td>
                        <td><span class="badge-pending">Pending</span></td>
                        <td>17.04.2021</td>
                        <td>
                            <span class="p-relative">
                                <button class="dropdown-btn transparent-btn" type="button" title="More info">
                                    <div class="sr-only">More info</div>
                                    <i data-feather="more-horizontal" aria-hidden="true"></i>
                                </button>
                                <ul class="users-item-dropdown dropdown">
                                    <li><a href="##">Edit</a></li>
                                    <li><a href="##">Quick edit</a></li>
                                    <li><a href="##">Trash</a></li>
                                </ul>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="users-table__checkbox">
                                <input type="checkbox" class="check">
                                <div class="categories-table-img">
                                    <picture>
                                        <source srcset="assets/images/categories/02.webp" type="image/webp"><img src="assets/images/categories/02.jpg" alt="category">
                                    </picture>
                                </div>
                            </label>
                        </td>
                        <td>
                            Start a blog to reach your creative peak
                        </td>
                        <td>
                            <div class="pages-table-img">
                                <picture>
                                    <source srcset="assets/images/avatar/avatar-face-03.webp" type="image/webp"><img src="assets/images/avatar/avatar-face-03.png" alt="User Name">
                                </picture>
                                Annette Black
                            </div>
                        </td>
                        <td><span class="badge-pending">Pending</span></td>
                        <td>23.04.2021</td>
                        <td>
                            <span class="p-relative">
                                <button class="dropdown-btn transparent-btn" type="button" title="More info">
                                    <div class="sr-only">More info</div>
                                    <i data-feather="more-horizontal" aria-hidden="true"></i>
                                </button>
                                <ul class="users-item-dropdown dropdown">
                                    <li><a href="##">Edit</a></li>
                                    <li><a href="##">Quick edit</a></li>
                                    <li><a href="##">Trash</a></li>
                                </ul>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="users-table__checkbox">
                                <input type="checkbox" class="check">
                                <div class="categories-table-img">
                                    <picture>
                                        <source srcset="assets/images/categories/03.webp" type="image/webp"><img src="assets/images/categories/03.jpg" alt="category">
                                    </picture>
                                </div>
                            </label>
                        </td>
                        <td>
                            Helping a local business reinvent itself
                        </td>
                        <td>
                            <div class="pages-table-img">
                                <picture>
                                    <source srcset="assets/images/avatar/avatar-face-02.webp" type="image/webp"><img src="assets/images/avatar/avatar-face-02.png" alt="User Name">
                                </picture>
                                Kathryn Murphy
                            </div>
                        </td>
                        <td><span class="badge-active">Active</span></td>
                        <td>17.04.2021</td>
                        <td>
                            <span class="p-relative">
                                <button class="dropdown-btn transparent-btn" type="button" title="More info">
                                    <div class="sr-only">More info</div>
                                    <i data-feather="more-horizontal" aria-hidden="true"></i>
                                </button>
                                <ul class="users-item-dropdown dropdown">
                                    <li><a href="##">Edit</a></li>
                                    <li><a href="##">Quick edit</a></li>
                                    <li><a href="##">Trash</a></li>
                                </ul>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="users-table__checkbox">
                                <input type="checkbox" class="check">
                                <div class="categories-table-img">
                                    <picture>
                                        <source srcset="assets/images/categories/04.webp" type="image/webp"><img src="assets/images/categories/04.jpg" alt="category">
                                    </picture>
                                </div>
                            </label>
                        </td>
                        <td>
                            Caring is the new marketing
                        </td>
                        <td>
                            <div class="pages-table-img">
                                <picture>
                                    <source srcset="assets/images/avatar/avatar-face-05.webp" type="image/webp"><img src="assets/images/avatar/avatar-face-05.png" alt="User Name">
                                </picture>
                                Guy Hawkins
                            </div>
                        </td>
                        <td><span class="badge-active">Active</span></td>
                        <td>17.04.2021</td>
                        <td>
                            <span class="p-relative">
                                <button class="dropdown-btn transparent-btn" type="button" title="More info">
                                    <div class="sr-only">More info</div>
                                    <i data-feather="more-horizontal" aria-hidden="true"></i>
                                </button>
                                <ul class="users-item-dropdown dropdown">
                                    <li><a href="##">Edit</a></li>
                                    <li><a href="##">Quick edit</a></li>
                                    <li><a href="##">Trash</a></li>
                                </ul>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="users-table__checkbox">
                                <input type="checkbox" class="check">
                                <div class="categories-table-img">
                                    <picture>
                                        <source srcset="assets/images/categories/01.webp" type="image/webp"><img src="assets/images/categories/01.jpg" alt="category">
                                    </picture>
                                </div>
                            </label>
                        </td>
                        <td>
                            How to build a loyal community online and offline
                        </td>
                        <td>
                            <div class="pages-table-img">
                                <picture>
                                    <source srcset="assets/images/avatar/avatar-face-03.webp" type="image/webp"><img src="assets/images/avatar/avatar-face-03.png" alt="User Name">
                                </picture>
                                Robert Fox
                            </div>
                        </td>
                        <td><span class="badge-active">Active</span></td>
                        <td>17.04.2021</td>
                        <td>
                            <span class="p-relative">
                                <button class="dropdown-btn transparent-btn" type="button" title="More info">
                                    <div class="sr-only">More info</div>
                                    <i data-feather="more-horizontal" aria-hidden="true"></i>
                                </button>
                                <ul class="users-item-dropdown dropdown">
                                    <li><a href="##">Edit</a></li>
                                    <li><a href="##">Quick edit</a></li>
                                    <li><a href="##">Trash</a></li>
                                </ul>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="users-table__checkbox">
                                <input type="checkbox" class="check">
                                <div class="categories-table-img">
                                    <picture>
                                        <source srcset="assets/images/categories/03.webp" type="image/webp"><img src="assets/images/categories/03.jpg" alt="category">
                                    </picture>
                                </div>
                            </label>
                        </td>
                        <td>
                            How to build a loyal community online and offline
                        </td>
                        <td>
                            <div class="pages-table-img">
                                <picture>
                                    <source srcset="assets/images/avatar/avatar-face-03.webp" type="image/webp"><img src="assets/images/avatar/avatar-face-03.png" alt="User Name">
                                </picture>
                                Robert Fox
                            </div>
                        </td>
                        <td><span class="badge-active">Active</span></td>
                        <td>17.04.2021</td>
                        <td>
                            <span class="p-relative">
                                <button class="dropdown-btn transparent-btn" type="button" title="More info">
                                    <div class="sr-only">More info</div>
                                    <i data-feather="more-horizontal" aria-hidden="true"></i>
                                </button>
                                <ul class="users-item-dropdown dropdown">
                                    <li><a href="##">Edit</a></li>
                                    <li><a href="##">Quick edit</a></li>
                                    <li><a href="##">Trash</a></li>
                                </ul>
                            </span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div> -->

    <div class="container">

        <div class="d-flex flex-row justify-content-sm-between px-3">
        <h1 class="main-title">Delivery</h1>
            <button class="btn btn-primary font-weight-bold text-gray rounded" data-bs-toggle="modal" data-bs-target="#reg-modal">
                Add Delivery
            </button>
        </div>
        <div class="users-table table-wrapper rounded-lg add-border mt-5">
            <div class="main-nav-start row p-4 d-flex justify-content-between">
                <div class="search-wrapper">
                    <i data-feather="search" aria-hidden="true"></i>
                    <input type="text" placeholder="Search Here" class="form-control border" required>
                </div>
                <div class="filter">
                    <button type="button" class="btn btn-primary">
                        <i data-feather="filter" class="" aria-hidden="true"></i>
                        Filter
                    </button>
                </div>
            </div>
            <table class="posts-table table table-striped">
                <thead>
                    <tr class="users-table-info">
                        <th>Food Name</th>
                        <th>Delivery Name</th>
                        <th>Status</th>
                        <th>Order Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($delivery as $item) { ?>
                        <tr class="users-table-info">
                            <td><?= $item["first_name"] ?></td>
                            <td><?= $item["last_name"] ?></td>
                            <td><?= $item["email"] ?></td>
                            <td><?= $item["registration_date"] ?></td>
                            <td>Action</td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

</main>


</div>
</div>