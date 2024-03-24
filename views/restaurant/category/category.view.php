<main class="main users chart-page" id="skip-target">
    <div class="container-fluid">
        <div class="d-flex flex-row justify-content-sm-between px-2">
            <h1 class="main-title col-10">Category</h1>
            <button class="btn btn-primary btn-sm font-weight-bold text-gray rounded" data-bs-toggle="modal"
                data-bs-target="#categoryModal" style="width: 130px; height: 40px;">
                Add Category
            </button>
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
        <div class="users-table table-wrapper mt-4 shadow-sm">
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
                    <?php foreach ($categories as $category) { ?>
                        <tr>
                            <td>
                                <label class="users-table__checkbox">
                                    <input type="checkbox" class="check">
                                    <div class="categories-table-img">
                                        <picture>
                                            <source
                                                srcset="../../assets/images/uploads/restaurants/categories/<?= $category["cate_img"] ?>"
                                                type="image/webp"><img src="assets/images/categories/01.jpg" alt="category">
                                        </picture>
                                    </div>
                                </label>
                            </td>
                            <td>
                                <?= $category["cate_name"] ?>
                            </td>
                            <td>
                                <?= $category["description"] ?>
                            </td>
                            <td>
                                <span class="p-relative">
                                    <button class="dropdown-btn transparent-btn" type="button" title="More info">
                                        <div class="sr-only">More info</div>
                                        <i data-feather="more-horizontal" aria-hidden="true"></i>
                                    </button>
                                    <ul class="users-item-dropdown dropdown">
                                        <li><a class="btn btn-tranparent" data-bs-toggle="modal"
                                                data-bs-target="#editCate<?= $category["cate_id"] ?>">Edit</a></li>
                                        <li><a class="btn btn-tranparent" data-bs-toggle="modal"
                                                data-bs-target="#deleteCate<?= $category["cate_id"] ?>">Trash</a></li>
                                    </ul>
                                </span>
                            </td>
                        </tr>
                        <!-- edit category -->
                        <div class="modal fade" id="editCate<?= $category["cate_id"] ?>" tabindex="-1"
                            aria-labelledby="modal-title" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content p-4">
                                    <div class="modal-header">
                                        <h5 class="modal-title">
                                            <h5 class="modal-title text-dark" id="modal-title">Edit Category</h5>
                                            <button type="button" class="btn btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"><i class="feather-x" style="font-size: 20px;"></i></button>
                                        </h5>
                                    </div>
                                    <div class="modal-body text-dark">
                                        <form action="/restaurant/edit_category" method="post" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="form-group col-6">
                                                    <label for="image">Image</label>
                                                    <input type="file" name="image" id="image"
                                                        class="form-control border border-info">
                                                </div>
                                                <div class="form-group col-6">
                                                    <label for="cate_name">Category Name:</label>
                                                    <input type="text" name="cate_name" id="cate_name"
                                                        class="form-control border border-info"
                                                        value="<?= $category["cate_name"] ?>" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="description">Description:</label>
                                                <textarea name="description" id="description"
                                                    class="form-control border border-info"
                                                    style="min-height: 50px; max-height:200px;"
                                                    required><?= $category["description"] ?></textarea>
                                            </div>
                                            <input type="hidden" name="cate_id" value="<?= $category["cate_id"] ?>">
                                            <input type="hidden" name="current_img" value="<?= $category["cate_img"] ?>">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- delete category -->
                        <div class="modal fade" id="deleteCate<?= $category["cate_id"] ?>" tabindex="-1"
                            aria-labelledby="modal-title" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header row p-2 m-0">
                                        <div class="alert alert-danger col-12 rounded-0" role="alert">
                                            Are you sure you want to delete this category?
                                        </div>
                                    </div>
                                    <div class="modal-body p-2 m-2 d-flex justify-content-end">
                                        <button type="button" class="btn btn-secondary mx-2"
                                            data-bs-dismiss="modal">Close</button>
                                        <form action="/restaurant/delete_category" method="post">
                                            <button type="submit" name="cate_id" value="<?= $category["cate_id"] ?>"
                                                class="btn btn-primary">Save changes</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>


</main>