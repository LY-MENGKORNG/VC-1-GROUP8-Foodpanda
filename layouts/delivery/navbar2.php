<div class="main-wrapper">
    <!-- ! Main nav -->
    <nav class="main-nav--bg bg-light row px-5" style="border-bottom: 1px solid lightgray;">
        <nav class="navbar navbar-light bg-light col-6 pl-5">
            <form class="d-flex">
                <input class="form-control me-2 border border-gray" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </nav>
        <div class="d-flex flex-row justify-content-sm-between pr-5 col-6">
            <button class="btn btn-primary font-weight-bold text-gray rounded  ml-auto my-auto" data-bs-toggle="modal" data-bs-target="#deliveryModal" style="height: 45px;">
                <i></i>
                + Add Report
            </button>
        </div>
        <div class="modal fade" id="deliveryModal" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content p-4">
                    <div class="modal-body">
                        <form action="/restaurant/add_delivery" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="report_id">No</label>
                                    <input type="text" name="report_id" id="report_id" class="form-control border" required>
                                </div>
                                <div class="form-group col-6">
                                    <label for="recipient">Recipient</label>
                                    <input type="text" name="recipient" id="recipient" class="form-control border" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="status">Status</label>
                                    <input type="status" name="status" id="status" class="form-control border" required>
                                </div>
                                <div class="form-group col-6">
                                    <label for="fee">Fee</label>
                                    <input type="fee" name="fee" id="fee" class="form-control border" required>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <input type="hidden" name="delivery_id" value="3">
                                <button type="submit" class="btn btn-primary width= 60">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </nav>