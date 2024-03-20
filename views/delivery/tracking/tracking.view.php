<main class="main users chart-page" id="skip-target">
    <div class="container p-3 bg-white shadow-sm rounded-lg overflow-hidden">
        <h3 class="title mb-4">Order Tracking Map</h3>
        <iframe width="100%" height="360px"
            src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=Phnom%20Penh%2C%20Cambodia&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed"
            frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
    </div>
    <div class="container w-100 py-4 ms-2 mx-auto row stat-cards">
        <div class="col-md-8 py-3 white-block row m-0 p-0">
            <h4 class="mb-3">Recent Orders</h4>
            <div class="users-table table-wrapper rounded-lg overflow-y-hidden">
                <table class="posts-table">
                    <thead class="">
                        <tr class="users-table-info">
                            <th class="py-3">
                                <label class="users-table__checkbox ms-20">
                                    <input type="checkbox" class="check-all">Customer
                                </label>
                            </th>
                            <th>Purchase Date</th>
                            <th>Status</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($orders as $order) { ?>
                            <tr>
                                <td>
                                    <label class="users-table__checkbox">
                                        <input type="checkbox" class="check">
                                        <div class="categories-table-img">
                                            <picture class="d-flex align-items-center">
                                                <source
                                                    srcset="../../assets/images/uploads/customer_profile/<?= isset ($order["profile"]) ? $order["profile"] : 'avatar.png' ?>"
                                                    type="image/webp">
                                                <img src="../../assets/images/uploads/customer_profile/<?= isset ($order["profile"]) ? $order["profile"] : 'avatar.png' ?>"
                                                    alt="customer" class="rounded-circle border border-gray"
                                                    style="width: 40px; height: 40px;">
                                                <div class="d-flex flex-column">
                                                    <span class="main_title">
                                                        <?= $order["first_name"] . " " . $order["last_name"] ?>
                                                    </span>
                                                    <span class="text-gray" style="font-size: 12px;">
                                                        <?= $order["email"] ?>
                                                    </span>
                                                </div>
                                            </picture>
                                        </div>
                                    </label>
                                </td>
                                <td>
                                    <?= $order["order_date"] ?>
                                </td>
                                <td class="text-warning">
                                    <i class="feather-circle bg-warning rounded-circle"></i>
                                    <?= $order["order_status"] ?>
                                </td>
                                <td> $
                                    <?= $order["payment_amount"] ?>.00
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-4 m-0 row pl-4">
            <article class="white-block col-12">
                <div class="top-cat-title">
                    <h3>Top categories</h3>
                    <p>28 Categories, 1400 Posts</p>
                </div>
                <ul class="top-cat-list">
                    <li>
                        <a href="##">
                            <div class="top-cat-list__title">
                                Lifestyle <span>8.2k</span>
                            </div>
                            <div class="top-cat-list__subtitle">
                                Dailiy lifestyle articles <span class="purple">+472</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="##">
                            <div class="top-cat-list__title">
                                Tutorials <span>8.2k</span>
                            </div>
                            <div class="top-cat-list__subtitle">
                                Coding tutorials <span class="blue">+472</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="##">
                            <div class="top-cat-list__title">
                                Technology <span>8.2k</span>
                            </div>
                            <div class="top-cat-list__subtitle">
                                Dailiy technology articles <span class="danger">+472</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="##">
                            <div class="top-cat-list__title">
                                UX design <span>8.2k</span>
                            </div>
                            <div class="top-cat-list__subtitle">
                                UX design tips <span class="success">+472</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="##">
                            <div class="top-cat-list__title">
                                Interaction tips <span>8.2k</span>
                            </div>
                            <div class="top-cat-list__subtitle">
                                Interaction articles <span class="warning">+472</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="##">
                            <div class="top-cat-list__title">
                                App development <span>8.2k</span>
                            </div>
                            <div class="top-cat-list__subtitle">
                                Mobile development articles <span class="warning">+472</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="##">
                            <div class="top-cat-list__title">
                                Nature <span>8.2k</span>
                            </div>
                            <div class="top-cat-list__subtitle">
                                Wildlife animal articles <span class="warning">+472</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="##">
                            <div class="top-cat-list__title">
                                Geography <span>8.2k</span>
                            </div>
                            <div class="top-cat-list__subtitle">
                                Geography articles <span class="primary">+472</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </article>
        </div>
    </div>
</main>