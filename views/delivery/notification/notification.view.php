<div class="container w-100">
    <section class="py-2 ">
        <div class="container">
            <div class="">
                <ul class="nav d-flex flex-row nav-tabsa custom-tabsa border-0 overflow-hidden shadow-sm c-t-order"
                    id="myTab" role="tablist">
                    <li class="nav-item border-top" role="presentation">
                        <a class="nav-link border-0 text-dark py-3 active" id="canceled-tab" data-toggle="tab" href="#canceled"
                            role="tab" aria-controls="canceled" aria-selected="false">  All</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link border-0 text-dark py-3" id="progress-tab" data-toggle="tab"
                            href="#progress" role="tab" aria-controls="progress" aria-selected="true"> Recently</a>
                    </li>
                    <li class="nav-item border-top" role="presentation">
                        <a class="nav-link border-0 text-dark py-3" id="completed-tab" data-toggle="tab"
                            href="#completed" role="tab" aria-controls="completed" aria-selected="false"> Completed</a>
                    </li>
                </ul>
            </div>
            <div class="tab-content col-md-9" id="myTabContent">
                <div class="tab-pane fade show active" id="completed" role="tabpanel" aria-labelledby="completed-tab">
                    <div class="order-body">
                        hi
                    </div>
                </div>
                <div class="tab-pane fade " id="progress" role="tabpanel" aria-labelledby="progress-tab">
                    <div class="order-body">
                        hello
                    </div>
                </div>
                <div class="tab-pane fade" id="canceled" role="tabpanel" aria-labelledby="canceled-tab">
                    <div class="order-body">
                        hey
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <?php var_dump($notifications[0]["address_name"]) ?> -->
</div>