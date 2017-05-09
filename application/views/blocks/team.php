  <section id="team" class="bg-light-gray">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading"><?php echo $title;?></h2>
          <h3 class="section-subheading text-muted"><?php echo $description;?></h3>
        </div>
      </div>
      <div class="row">
        <?php foreach ($items as $item) { ?>
        <div class="col-sm-4">
          <div class="team-member">
            <img src="<?php echo $item['image_link'];?>" class="img-responsive img-circle" alt="">
            <h4><?php echo $item['title'];?></h4>
            <p class="text-muted"><?php echo $item['description'];?></p>
            <ul class="list-inline social-buttons">
              <?php foreach ($item['links'] as $link) { ?>
              <li><a href="<?php echo $link['target'];?>"><i class="fa <?php echo $link['icon'];?>"></i></a></li>
              <?php } ?>
            </ul>
          </div>
        </div>
        <?php } ?>
      </div>
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2 text-center">
          <p class="large text-muted"><?php echo $layus;?></p>
        </div>
      </div>
    </div>
  </section>
