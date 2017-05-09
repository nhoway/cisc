  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading"><?php echo $title;?></h2>
          <h3 class="section-subheading text-muted"><?php echo $description;?></h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <ul class="timeline">
            <?php foreach ($items as $key => $item) { ?>
            <li<?php if ($key & 1) echo '  class="timeline-inverted"'; ?>>
              <?php if (isset($item['title'])) { ?>
              <div class="timeline-image">
                <img class="img-circle img-responsive" src="<?php echo $item['image_link'];?>" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4><?php echo $item['date'];?></h4>
                  <h4 class="subheading"><?php echo $item['title'];?></h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted"><?php echo $item['description'];?></p>
                </div>
              </div>
              <?php } else { ?>
                <div class="timeline-image">
                  <h4><?php echo $item['description'];?></h4>
                </div>
              <?php } ?>
            </li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </div>
  </section>
