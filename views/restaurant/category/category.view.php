<main class="main users chart-page" id="skip-target">
    <div class="container-fluid">
        <div class="d-flex flex-row justify-content-sm-between px-2">
            <h1 class="main-title col-10">Category</h1>
            <button class="btn btn-primary font-weight-bold text-gray rounded" data-bs-toggle="modal"
                data-bs-target="#categoryModal">
                Add Category
            </button>
        </div>
    </div>
    <!-- create category -->
    <div class="modal fade" id="categoryModal" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content p-4">
                <div class="modal-header">
                    <h5 class="modal-title">
                        <h5 class="modal-title" id="modal-title">Create new Category</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </h5>
                </div>
                <div class="modal-body">
                    <form action="/restaurant/add_category" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="form-group col-6">
                                <label for="image">Image</label>
                                <input type="file" name="image" id="image" class="form-control border border-info"
                                    required>
                            </div>
                            <div class="form-group col-6">
                                <label for="cate_name">Category Name:</label>
                                <input type="text" name="cate_name" id="cate_name"
                                    class="form-control border border-info" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description">Description:</label>
                            <textarea name="description" id="description" class="form-control border border-info"
                                style="min-height: 50px; max-height:200px;" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="users-table table-wrapper mt-4 p-4">
        <table class="posts-table rounded-3">
            <thead>
                <tr class="users-table-info  bg-transparent">
                    <th>
                        <label class="users-table__checkbox ms-20">
                            <input type="checkbox" class="check-all">
                            Image
                        </label>
                    </th>
                    <th>Name</th>
                    <th>Description</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($category as $item) { ?>
                    <tr>
                        <td>
                            <label class="users-table__checkbox">
                                <input type="checkbox" class="check">
                                <div class="categories-table-img">
                                    <picture>
                                        <source
                                            srcset="../../assets/images/uploads/restaurants/categories/<?= $item["cate_img"] ?>"
                                            type="image/webp"><img src="assets/images/categories/01.jpg" alt="category">
                                    </picture>
                                </div>
                            </label>
                        </td>
                        <td>
                            <?= $item["cate_name"] ?>
                        </td>
                        <td>
                            <?= $item["description"] ?>
                        </td>
                        <td>
                            <span class="p-relative">
                                <button class="dropdown-btn transparent-btn" type="button" title="More info">
                                    <div class="sr-only">More info</div>
                                    <i data-feather="more-horizontal" aria-hidden="true"></i>
                                </button>
                                <ul class="users-item-dropdown dropdown">
                                    <li><button class="btn btn-tranparent main-title" data-bs-toggle="modal"
                                            data-bs-target="#edit">Edit</button></li>
                                </ul>
                            </span>
                        </td>
                    </tr>
                    <!-- edit category -->
                    <div class="modal fade" id="edit" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content p-4">
                                <div class="modal-header">
                                    <h5 class="modal-title">
                                        <h5 class="modal-title" id="modal-title">Create new Category</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </h5>
                                </div>
                                <div class="modal-body">
                                    <form action="/restaurant/edit_category" method="post" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="form-group col-6">
                                                <label for="image">Image</label>
                                                <input type="file" name="image" id="image"
                                                    class="form-control border border-info" required>
                                            </div>
                                            <div class="form-group col-6">
                                                <label for="cate_name">Category Name:</label>
                                                <input type="text" name="cate_name" id="cate_name"
                                                    class="form-control border border-info" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="description">Description:</label>
                                            <textarea name="description" id="description"
                                                class="form-control border border-info"
                                                style="min-height: 50px; max-height:200px;" required></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </tbody>
        </table>


    </div>

</main>