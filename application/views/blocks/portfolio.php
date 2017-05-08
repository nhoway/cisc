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
