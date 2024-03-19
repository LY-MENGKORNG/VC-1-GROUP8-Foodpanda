<!-- ! Main -->
<main class="main users chart-page" id="skip-target">
    <div class="container d-flex justify-content-between">
        <h3 class="main_title">Orders </h2>
            <div class="calendar">

            </div>
    </div>
    <div class="container mt-3">
        <div class="users-table table-wrapper border border-gray rounded-lg overflow-hidden shadow-sm">
            <div class="px-4 py-1 bg-white position-relative">
                <i class="fa-solid fa-magnifying-glass text-light" style="position: absolute; top: 38%; left: 30px;"></i>
                <input type="text" class="pl-4 shadow-none rounded-sm" placeholder="Search..." style="background: transparent; outline: none;">
            </div>
            <table class="posts-table">
                <thead>
                    <tr class="users-table-info">
                        <th>
                            <label class="users-table__checkbox ms-20">
                                <input type="checkbox" class="check-all">Restaurant
                            </label>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($orders as $orders) { ?>
                        <tr>
                            <td>
                                <label class="users-table__checkbox">
                                    <input type="checkbox" class="check">
                                    <div class="categories-table-img">
                                        <picture>
                                            <source srcset="../../assets/images/uploads/restaurants/" type="image/webp">
                                            <img src="../../assets/images/uploads/restaurants/" alt="restaurant">
                                        </picture>
                                    </div>
                                </label>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>


    </div>
</main>