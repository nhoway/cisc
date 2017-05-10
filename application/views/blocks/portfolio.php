  <section id="portfolio" class="bg-light-gray">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading"><?php echo $title;?></h2>
          <h3 class="section-subheading text-muted"><?php echo $description;?></h3>
        </div>
      </div>
      <div class="row">
        <?php foreach ($items as $item) { ?>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a href="<?php echo $item['link_target'];?>" class="portfolio-link" data-toggle="modal">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fa fa-plus fa-3x"></i>
              </div>
            </div>
            <img src="<?php echo $item['image_link'];?>" class="img-responsive" alt="">
          </a>
          <div class="portfolio-caption">
            <h4><?php echo $item['title'];?></h4>
            <p class="text-muted"><?php echo $item['description'];?></p>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </section>

  <!-- Portfolio Modals -->
  <!-- Use the modals below to showcase details about your portfolio projects! -->
  <?php
    foreach ($items as $item) {
      if (isset($item['modal'])) {
  ?>
    <div class="portfolio-modal modal fade" id="<?php echo substr($item['link_target'], 1);?>" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl">
              </div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 col-lg-offset-2">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2><?php echo $item['modal']['title'];?></h2>
                  <p class="item-intro text-muted"><?php echo $item['modal']['subtitle'];?></p>
                  <img class="img-responsive img-centered" src="<?php echo $item['modal']['image_link'];?>" alt="">
                  <?php echo $item['modal']['body'];?>
                  <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php }} ?>
