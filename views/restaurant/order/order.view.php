<main class="main users chart-page" id="skip-target">
  <div class="container">
    <h5 class="main-title">Customer Lists</h5>
    <div class="users-table table-wrapper mt-4 border border-gray shadow-sm">
      <table class="posts-table rounded-3">
        <thead>
          <tr>
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
            <tr class="users-table-info  bg-transparent">
              <td>
                <label class="users-table_checkbox">
                  <input type="checkbox" class="check">
                  <div class="categories-table-img">
                    <picture>
                      <source srcset="../../assets/images/uploads/customer_profile/<?= $order["profile"] ?>" type="image/webp"><img src="../../assets/images/uploads/customer_profile/<?= $order["profile"] ?>" alt="orders">
                    </picture>
                  </div>
                </label>
              </td>
              <td> <?= $order["order_date"] ?> </td>
              <td> <?= $order["order_staus"] ?> </td>
              <td> <?= $order["price"] ?> </td>
             


            </tr>

          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</main>
</div>
</div>