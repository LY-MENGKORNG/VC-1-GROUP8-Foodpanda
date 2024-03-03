<div class="container p-4">
    <div class="category mb-5">
        <h2>Category</h2>
    </div>
    
    <?php foreach ($category as $item) { ?>
        <div class="card" style="width: 18rem;">
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-item-id"><?= $item['item_id'] ?></h5>
            <h5 class="card-restaurant-id"><?= $item['restaurant_id'] ?></h5>
            <h5 class="card-cuisine"><?= $item['cuisine'] ?></h5>
            <h5 class="card-available-status"><?= $item['available_status'] ?></h5>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
    <?php } ?>

</div>

</div> 
</div>