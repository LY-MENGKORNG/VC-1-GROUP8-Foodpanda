<!-- ! Main -->
<main class="main users chart-page" id="skip-target">
    <div class="container d-flex flex-row justify-content-between">
        <h3 class="title">Orders 🥗 <span class="text-secondary">
                <?= count($orders) ?>
            </span></h2>
            <button type="button" class="btn btn-primary btn-md shadow-none" data-toggle="modal" data-target="#addReport" >Add Report</button>
            <!-- Modal -->
            <div class="modal fade" id="addReport" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Recipient Name</label>
                                    <input type="text" class="form-control" id="recipient-name">
                                </div>
                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label">Message:</label>
                                    <textarea class="form-control" id="message-text"></textarea>
                                </div>
                                <div class="row d-flex flex-row justify-content-end px-2">
                                    <button type="button" class="btn btn-primary col-4">Send message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <div class="container mt-4">
        <div class="users-table table-wrapper rounded-lg overflow-hidden shadow-lg">
            <table class="">
                <thead class="">
                    <tr class="users-table-info ">
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
                        <tr style="background: white;">
                            <td>
                                <label class="users-table__checkbox">
                                    <input type="checkbox" class="check">
                                    <div class="categories-table-img">
                                        <picture class="d-flex align-items-center">
                                            <source
                                                srcset="../../assets/images/uploads/customer_profile/<?= isset($order["profile"]) ? $order["profile"] : 'avatar.png' ?>"
                                                type="image/webp">
                                            <img src="../../assets/images/uploads/customer_profile/<?= isset($order["profile"]) ? $order["profile"] : 'avatar.png' ?>"
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


    </div>
</main>