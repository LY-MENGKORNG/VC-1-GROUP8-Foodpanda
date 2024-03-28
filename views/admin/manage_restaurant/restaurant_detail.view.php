<div class="container px-5 pt-3">
  <h2 class="main-title ml-2">Restaurant Detail</h2>
  <div class="card mx-2 stat-cards-item">
    <div class="row g-0 d-flex">
      <div class="col-md-6 d-flex">
        <img src="<?= $target_file_dir . $restaurant["restaurant_img"] ?>" class="rounded" alt="restaurant image" style="width: 100%; margin: auto;">
      </div>
      <div class="col-md-6 d-flex flex-column justify-content-between p-0">
        <div class="card-body d-flex flex-column justify-content-between">
          <div class="">
            <h3 class="stat-cards-info__num " style="font-size: 1.5rem;">Restaurant: <span class="stat-cards-info__title" style="font-size: 1.5rem;"><?= $restaurant["restaurant_name"] ?></span></h3>
            <h5 class="stat-cards-info__num mb-3" style="font-size: 1.2rem;">Owner: <span class="stat-cards-info__title" style="font-size: 1rem;"><?= $restaurant["first_name"] ?></span></h5>
            <strong class="stat-cards-info__num" style="font-size: 14px;">Contact Info: <span class="stat-cards-info__title"><?= $restaurant["contact_info"] ?> </span></strong>
            <p class="stat-cards-info__num"><small class="text-info">Last updated 3 mins ago</small></p>
          </div>
          <div class="mb-3">
            <strong class="stat-cards-info__num" style="font-size: 16px;">Description:</strong>
            <p class="stat-cards-info__title"><?= $restaurant["description"] ?></p>
          </div>
        </div>
        <div class=" px-3">
          <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#reg-modal">Edit Restaurant</button>
        </div>
        
        <!-- modal -->
        <div class="modal fade" id="reg-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <form action="/admin/edit_restaurant" method="post" enctype="multipart/form-data">
                <div class="modal-header">
                  <h1 class="main-title text-primary">Edit Restaurant</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="row form-group">
                    <div class="col-6">
                      <label for="restaurant_name" class="col-form-label">Restaurant Name:</label>
                      <input type="text" name="restaurant_name" class="form-control border" value="<?= $restaurant["restaurant_name"] ?>" id="restaurant_name">
                    </div>
                    <div class="col-6 mt-1" style="margin-top: 3px;">
                      <label for="owner">Restaurant Owner</label>
                      <select class="form-select" name="owner_id" style="height: 40px;" id="owner">

                      <?php foreach ($owners as $owner) {
                          if ($owner["role_id"] == 1) { ?>
                            <option value="<?= $owner["user_id"] ?>"><?= $owner["first_name"]." ". $owner["last_name"] ?>(Admin)</option>                            
                          <?php } if ($owner["user_id"] == $restaurant["owner_id"]) { ?>
                          <option value="<?= $owner["user_id"] ?>" selected><?= $owner["first_name"]." ". $owner["last_name"] ?></option>
                          <?php } else {?>
                          <option value="<?= $owner["user_id"] ?>"><?= $owner["first_name"]." ". $owner["last_name"] ?></option>
                        <?php } 
                      }
                     ?>
                      
                      </select>
                    </div>
                  </div>
                  <div class="row form-group">
                    <div class="col-6">
                      <label for="email" class="col-form-label">Email Address:</label>
                      <input type="email" name="email" value="<?= $restaurant["email"] ?>" class="form-control border" id="email">
                    </div>
                    <div class="col-6">
                      <label for="location" class="col-form-label">Location:</label>
                      <input type="text" name="location" value="<?= $restaurant["location"] ?>" class="form-control border" id="location">
                    </div>
                  </div>
                  <div class="row form-group">
                    <div class="col-6">
                      <label for="contact_info" class="col-form-label">contact Info:</label>
                      <input type="tel" name="contact_info" value="<?= $restaurant["contact_info"] ?>" class="form-control border" id="contact_info">
                    </div>
                    <div class="col-6">
                      <label for="restaurant_img" class="col-form-label">Image:</label>
                      <input type="file" name="restaurant_img" value="<?= $restaurant["restaurant_img"] ?>" class="form-control border" id="restaurant_img">
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="description" class="col-form-label">Message:</label>
                    <textarea name="description" class="form-control" id="description" style="max-height: 100px; min-height: 50px;  "><?= $restaurant["description"] ?></textarea>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary rounded-sm" data-bs-dismiss="modal">Close</button>
                  <input type="hidden" name="restaurant_id" value="<?= $restaurant["restaurant_id"] ?>">
                  <input type="hidden" name="restaurant_img" value="<?= $restaurant["restaurant_img"] ?>">
                  <button type="submit" class="btn btn-primary rounded-sm">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>