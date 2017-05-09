  <section id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading"><?php echo $title;?></h2>
          <h3 class="section-subheading text-muted"><?php echo $description;?></h3>
        </div>
      </div>
      <div class="row text-center">
        <?php
          foreach ($items as $key => $item) {
            if ((count($items) - $key) <= 2 && $key % 3 == 0) {
              echo '<div class="col-md-4  col-md-offset-'. (4 / (count($items) - $key)) ."\">\n";
            }
            else {
              echo "<div class=\"col-md-4\">\n";
            }
        ?>
          <span class="fa-stack fa-4x">
            <i class="fa fa-circle fa-stack-2x text-primary"></i>
            <i class="fa <?php echo $item['icon'];?> fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading"><?php echo $item['title'];?></h4>
          <p class="text-muted"><?php echo $item['description'];?></p>
        </div>
        <?php } ?>
      </div>
    </div>
  </section>
