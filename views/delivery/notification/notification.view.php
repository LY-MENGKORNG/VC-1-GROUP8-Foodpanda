<div class="container w-100">
    <section class="py-1 row">
        <div class="container col-md-5 shadow-sm p-4 rounded-lg d-flex flex-column"
            style="height: 80vh; background: #343a40;">
            <h4 class="text-light mb-2">Notifications</h4>
            <div class="px-0">
                <ul class="nav nav-tabsa custom-tabsa d-flex flex-row p-0 border-bottom-1 c-t-order overflow-hidden"
                    id="myTab" role="tablist" style="border-bottom: 1px solid lightgray;">
                    <li class="rounded-0 flex-grow-1" role="presentation">
                        <a class=" show active" id="all-tab" data-toggle="tab" href="#all" role="tab"
                            aria-controls="all" aria-selected="true">
                            <span class="px-2 text-dark">All</span>
                            <i class="rounded-circle d-flex align-items-center juctify-content-center"
                                style="width: 25px; height: 25px;">
                                <span>
                                    <?= count($notifications) ?>
                                </span>
                            </i>
                        </a>
                    </li>
                    <li class="rounded-0 flex-grow-1" role="presentation">
                        <a class="bg-tranparent" id="recently-tab" data-toggle="tab" href="#recently" role="tab"
                            aria-controls="recently" aria-selected="false">
                            <span class="px-2 text-dark">Recently</span>
                            <i class="rounded-circle d-flex align-items-center juctify-content-center"
                                style="width: 25px; height: 25px;">
                                <span>
                                    <?= count($orders_progress) ?>
                                </span>
                            </i>
                        </a>
                    </li>
                    <li class="rounded-0 flex-grow-1" role="presentation">
                        <a class="" id="completed-tab" data-toggle="tab" href="#completed" role="tab"
                            aria-controls="completed" aria-selected="false">
                            <span class="px-2 text-dark">Completed</span>
                            <i class="rounded-circle d-flex align-items-center juctify-content-center"
                                style="width: 25px; height: 25px;">
                                <span>
                                    <?= count($orders_completed) ?>
                                </span>
                            </i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="tab-content mt-2" id="myTabContent">
                <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                    <div class="order-body bg-white col-12 p-0">
                        <div class="list-group border-0 rounded-0 overflow-y-scroll" id="list-tab" role="tablist"
                            style="height: 55vh;">
                            <?php
                            $is_active = false;
                            foreach ($notifications as $notification) { ?>
                                <a class="list-group-item list-group-item-action <?= !$is_active ? 'active' : '' ?> bg-light"
                                    id="list-order<?= $notification["order_id"] ?>-list" data-bs-toggle="list"
                                    href="#list-order<?= $notification["order_id"] ?>" role="tab" aria-controls="list-home"
                                    style="border-top: none; border-right: none;">
                                    <div class="d-flex flex-row gap-2">
                                        <picture class="d-flex align-items-center rounded-sm"
                                            style="background: lightblue;">
                                            <source
                                                srcset="../../assets/images/uploads/customer_profile/<?= isset ($notification["profile"]) ? $notification["profile"] : 'avatar.png' ?>"
                                                type="image/webp">
                                            <img src="../../assets/images/uploads/customer_profile/<?= isset ($notification["profile"]) ? $notification["profile"] : 'avatar.png' ?>"
                                                alt="customer" class="rounded-sm border border-gray"
                                                style="width: 40px; height: 40px;">
                                        </picture>
                                        <div class="d-flex flex-column gap-2">
                                            <span class="fw-bold text-dark">
                                                <?= $notification["first_name"] ?>
                                            </span>
                                            <span class="fw-lighter text-secondary">16m ago</span>
                                        </div>
                                    </div>
                                </a>
                                <?php
                                $is_active = true;
                            } ?>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade " id="recently" role="tabpanel" aria-labelledby="recently-tab">
                    <div class="order-body">
                        <div class="list-group border-0 rounded-0 overflow-y-scroll" id="list-tab" role="tablist"
                            style="height: 55vh;">
                            <?php
                            $is_active = false;
                            foreach ($orders_progress as $orders) { ?>
                                <a class="list-group-item list-group-item-action <?= !$is_active ? 'active' : '' ?> bg-light"
                                    id="list-order<?= $orders["order_id"] ?>-list" data-bs-toggle="list"
                                    href="#list-order<?= $orders["order_id"] ?>" role="tab" aria-controls="list-home"
                                    style="border-top: none; border-right: none;">
                                    <div class="d-flex flex-row gap-2">
                                        <picture class="d-flex align-items-center rounded-sm"
                                            style="background: lightblue;">
                                            <source
                                                srcset="../../assets/images/uploads/customer_profile/<?= isset ($orders["profile"]) ? $orders["profile"] : 'avatar.png' ?>"
                                                type="image/webp">
                                            <img src="../../assets/images/uploads/customer_profile/<?= isset ($orders["profile"]) ? $orders["profile"] : 'avatar.png' ?>"
                                                alt="customer" class="rounded-sm border border-gray"
                                                style="width: 40px; height: 40px;">
                                        </picture>
                                        <div class="d-flex flex-column gap-2">
                                            <span class="fw-bold text-dark">
                                                <?= $orders["first_name"] ?>
                                            </span>
                                            <span class="fw-lighter text-secondary">16m ago</span>
                                        </div>
                                    </div>
                                </a>
                                <?php
                                $is_active = true;
                            } ?>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="completed" role="tabpanel" aria-labelledby="completed-tab">
                    <div class="order-body">
                        <div class="list-group border-0 rounded-0 overflow-y-scroll" id="list-tab" role="tablist"
                            style="height: 55vh;">
                            <?php
                            $is_active = false;
                            foreach ($orders_completed as $orders) { ?>
                                <a class="list-group-item list-group-item-action <?= !$is_active ? 'active' : '' ?> bg-light"
                                    id="list-order<?= $orders["order_id"] ?>-list" data-bs-toggle="list"
                                    href="#list-order<?= $orders["order_id"] ?>" role="tab" aria-controls="list-home"
                                    style="border-top: none; border-right: none;">
                                    <div class="d-flex flex-row gap-2">
                                        <picture class="d-flex align-items-center rounded-sm"
                                            style="background: lightblue;">
                                            <source
                                                srcset="../../assets/images/uploads/customer_profile/<?= isset ($orders["profile"]) ? $orders["profile"] : 'avatar.png' ?>"
                                                type="image/webp">
                                            <img src="../../assets/images/uploads/customer_profile/<?= isset ($orders["profile"]) ? $orders["profile"] : 'avatar.png' ?>"
                                                alt="customer" class="rounded-sm border border-gray"
                                                style="width: 40px; height: 40px;">
                                        </picture>
                                        <div class="d-flex flex-column gap-2">
                                            <span class="fw-bold text-dark">
                                                <?= $orders["first_name"] ?>
                                            </span>
                                            <span class="fw-lighter text-secondary">16m ago</span>
                                        </div>
                                    </div>
                                </a>
                                <?php
                                $is_active = true;
                            } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="container white-block shadow-sm rounded-lg overflow-hidden"
                style="height: 80vh; background: #343a40;">
                <div class="tab-content" id="nav-tabContent">
                    <?php $is_active = false; ?>
                    <?php foreach ($notifications as $notification) {
                        $array = explode(",", $notification["address_name"]);
                        foreach ($array as &$element) {
                            $element = str_replace(' ', '%20', $element);
                        }
                        ?>
                        <div class="tab-pane fade <?= !$is_active ? 'show active' : '' ?>"
                            id="list-order<?= $notification["order_id"] ?>" role="tabpanel"
                            aria-labelledby="list-order<?= $notification["order_id"] ?>-list" style=" background: #343a40;">
                            <div class="container col-md-12">
                                <h4 class="main-title mb-4">
                                    <?= $notification["address_name"] ?>
                                </h4>
                                <iframe width="100%" height="350px"
                                    src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=<?= $array[0] ?>%2C%20Cambodia&amp;ie=UTF8&amp;t=&amp;z=15&amp;iwloc=B&amp;output=embed"
                                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                            </div>
                        </div>
                        <?php
                        $is_active = true;
                    } ?>
                </div>
            </div>
        </div>
    </section>

</div>