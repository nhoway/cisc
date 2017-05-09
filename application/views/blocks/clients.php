  <aside class="clients">
    <div class="container">
      <div class="row">
        <?php foreach ($items as $item) { ?>
        <div class="col-md-3 col-sm-6">
          <a href="<?php echo $item['link_target']; ?>">
            <img src="<?php echo $item['link_image']; ?>" class="img-responsive img-centered" alt="">
          </a>
        </div>
        <?php } ?>
      </div>
    </div>
  </aside>
