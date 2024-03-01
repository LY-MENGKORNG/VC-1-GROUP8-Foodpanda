<!-- Main -->
<main class="main users chart-page" id="skip-target">
    <div class="px-5">
        <form action="/admin/check_add_restaurant" method="post" enctype="multipart/form-data" class="px-5 pt-2">
            <h2 class="text-primary">Add Restaurant</h2>
            <div class="row mt-2">
                <div class="form-group col-6">
                    <label for="name" class="form-label">Restaurant name</label>
                    <input type="text" name="restaurant_name" id="name" class="form-control border">
                </div>
                <div class="form-group col-6">
                    <label for="location" class="form-label">Restaurant location</label>
                    <input type="text" name="location" id="location" class="form-control border">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control border">
                </div>
                <div class="form-group col-6">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control border">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-6">
                    <label for="contact_info" class="form-label">Contact Information</label>
                    <input type="contact_info" name="contact_info" id="contact_info" class="form-control border">
                </div>
                <div class="form-group col-6 ">
                    <label for="restaurant_img" class="form-label">Restaurant Image</label>
                    <input type="file" name="restaurant_img" id="restaurant_img" class="form-control border ">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-12">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" class="form-control" id="description" style="max-height: 100px; min-height: 50px;" placeholder="Description"></textarea>
                </div>
            </div>
            <div class="form-group">
                <input type="hidden" name="owner_id" value="">
                <button class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</main>