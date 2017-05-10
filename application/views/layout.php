<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>cisc</title>

  <!-- Bootstrap Core CSS -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Theme CSS -->
  <link href="assets/css/agency.min.css" rel="stylesheet">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js" integrity="sha384-0s5Pv64cNZJieYFkXYOTId2HMA2Lfb6q2nAcx2n0RTLUnCAoTTsS0nKEO27XyKcY" crossorigin="anonymous"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js" integrity="sha384-ZoaMbDF+4LeFxg6WdScQ9nnR1QC2MIRxA1O9KWEXQwns1G8UNyIEZIQidzb0T1fo" crossorigin="anonymous"></script>
  <![endif]-->

</head>

<body id="page-top" class="index">

  <!-- Navigation -->
  <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header page-scroll">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
        </button>
        <a class="navbar-brand page-scroll" href="#page-top">Start Bootstrap</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <?php echo $this->multi_menu
          ->inject_item('<li class="hidden"><a href="#page-top"></a></li>', 'first')
          ->render(array(
          'nav_tag_open'  => '<ul class="nav navbar-nav navbar-right">',
          'item_anchor'   => '<a class="page-scroll" href="%s">%s</a>',
          ));
        ?>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
  </nav>

  <!-- Header -->
  <?php $this->load->view('blocks/header', array(
    'title'       => 'Welcome To Our Studio!',
    'description' => 'It\'s Nice To Meet You',
    'link_text'   => 'Tell Me More',
    'link_target' => '#services',
  )); ?>

  <!-- Services Section -->
  <?php $this->load->view('blocks/services', array(
    'title'       => 'Services',
    'description' => 'Lorem ipsum dolor sit amet consectetur.',
    'items'       => array(
      array(
        'title'       => 'E-Commerce',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.',
        'icon'        => 'fa-shopping-cart',
      ),
      array(
        'title'       => 'Responsive Design',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.',
        'icon'        => 'fa-laptop',
      ),
      array(
        'title'       => 'Web Security',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.',
        'icon'        => 'fa-lock',
      ),
    )
  )); ?>

  <!-- Portfolio Grid Section -->
  <?php $this->load->view('blocks/portfolio', array(
    'title'       => 'Portfolio',
    'description' => 'Lorem ipsum dolor sit amet consectetur.',
    'items'       => array(
      array(
        'title'       => 'Round Icons',
        'description' => 'Graphic Design',
        'link_target' => '#portfolioModal1',
        'image_link'  => 'assets/img/portfolio/roundicons.png',
        'modal'       => array(
          'title'     => 'Project Name',
          'subtitle'  => 'Lorem ipsum dolor sit amet consectetur.',
          'image_link'=> 'assets/img/portfolio/roundicons-free.png',
          'body'      => '<p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
          <p>
            <strong>Want these icons in this portfolio item sample?</strong>You can download 60 of them for free, courtesy of <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">RoundIcons.com</a>, or you can purchase the 1500 icon set <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">here</a>.</p>
          <ul class="list-inline">
            <li>Date: July 2014</li>
            <li>Client: Round Icons</li>
            <li>Category: Graphic Design</li>
          </ul>'
        )
      ),
      array(
        'title'       => 'Startup Framework',
        'description' => 'Website Design',
        'link_target' => '#portfolioModal2',
        'image_link'  => 'assets/img/portfolio/startup-framework.png',
        'modal'       => array(
          'title'     => 'Project Name',
          'subtitle'  => 'Lorem ipsum dolor sit amet consectetur.',
          'image_link'=> 'assets/img/portfolio/startup-framework-preview.png',
          'body'      => '<p><a href="http://designmodo.com/startup/?u=787">Startup Framework</a> is a website builder for professionals. Startup Framework contains components and complex blocks (PSD+HTML Bootstrap themes and templates) which can easily be integrated into almost any design. All of these components are made in the same style, and can easily be integrated into projects, allowing you to create hundreds of solutions for your future projects.</p>
          <p>You can preview Startup Framework <a href="http://designmodo.com/startup/?u=787">here</a>.</p>'
        )
      ),
      array(
        'title'       => 'Treehouse',
        'description' => 'Website Design',
        'link_target' => '#portfolioModal3',
        'image_link'  => 'assets/img/portfolio/treehouse.png',
        'modal'       => array(
          'title'     => 'Project Name',
          'subtitle'  => 'Lorem ipsum dolor sit amet consectetur.',
          'image_link'=> 'assets/img/portfolio/treehouse-preview.png',
          'body'      => '<p>Treehouse is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. This is bright and spacious design perfect for people or startup companies looking to showcase their apps or other projects.</p>
          <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/treehouse-free-psd-web-template/">FreebiesXpress.com</a>.</p>'
        )
      ),
      array(
        'title'       => 'Golden',
        'description' => 'Website Design',
        'link_target' => '#portfolioModal4',
        'image_link'  => 'assets/img/portfolio/golden.png',
        'modal'       => array(
          'title'     => 'Project Name',
          'subtitle'  => 'Lorem ipsum dolor sit amet consectetur.',
          'image_link'=> 'assets/img/portfolio/golden-preview.png',
          'body'      => '<p>Start Bootstrap\'s Agency theme is based on Golden, a free PSD website template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Golden is a modern and clean one page web template that was made exclusively for Best PSD Freebies. This template has a great portfolio, timeline, and meet your team sections that can be easily modified to fit your needs.</p>
          <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/golden-free-one-page-web-template/">FreebiesXpress.com</a>.</p>'
        )
      ),
      array(
        'title'       => 'Escape',
        'description' => 'Website Design',
        'link_target' => '#portfolioModal5',
        'image_link'  => 'assets/img/portfolio/escape.png',
        'modal'       => array(
          'title'     => 'Project Name',
          'subtitle'  => 'Lorem ipsum dolor sit amet consectetur.',
          'image_link'=> 'assets/img/portfolio/escape-preview.png',
          'body'      => '<p>Escape is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Escape is a one page web template that was designed with agencies in mind. This template is ideal for those looking for a simple one page solution to describe your business and offer your services.</p>
          <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/escape-one-page-psd-web-template/">FreebiesXpress.com</a>.</p>'
        )
      ),
      array(
        'title'       => 'Dreams',
        'description' => 'Website Design',
        'link_target' => '#portfolioModal6',
        'image_link'  => 'assets/img/portfolio/dreams.png',
        'modal'       => array(
          'title'     => 'Project Name',
          'subtitle'  => 'Lorem ipsum dolor sit amet consectetur.',
          'image_link'=> 'assets/img/portfolio/dreams-preview.png',
          'body'      => '<p>Dreams is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Dreams is a modern one page web template designed for almost any purpose. It’s a beautiful template that’s designed with the Bootstrap framework in mind.</p>
          <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/dreams-free-one-page-web-template/">FreebiesXpress.com</a>.</p>'
        )
      ),
    )
  )); ?>

  <!-- About Section -->
  <?php $this->load->view('blocks/about', array(
    'title'       => 'About',
    'description' => 'Lorem ipsum dolor sit amet consectetur.',
    'items'       => array(
      array(
        'date'        => '2009-2011',
        'title'       => 'Our Humble Beginnings',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!',
        'image_link'  => 'assets/img/about/1.jpg',
      ),
      array(
        'date'        => 'March 2011',
        'title'       => 'An Agency is Born',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!',
        'image_link'  => 'assets/img/about/2.jpg',
      ),
      array(
        'date'        => 'December 2012',
        'title'       => 'Transition to Full Service',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!',
        'image_link'  => 'assets/img/about/3.jpg',
      ),
      array(
        'date'        => 'July 2014',
        'title'       => 'Phase Two Expansion',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!',
        'image_link'  => 'assets/img/about/4.jpg',
      ),
      array(
        'description' => 'Be Part<br>Of Our<br>Story!',
      ),
    )
  )); ?>

  <!-- Team Section -->
  <?php $this->load->view('blocks/team', array(
    'title'       => 'Our Amazing Team',
    'description' => 'Lorem ipsum dolor sit amet consectetur.',
    'layus'       => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.',
    'items'       => array(
      array(
        'title'       => 'Kay Garland',
        'description' => 'Lead Designer',
        'image_link'  => 'assets/img/team/1.jpg',
        'links'       => array(
          array(
            'icon'    => 'fa-twitter',
            'target'  => '#',
          ),
          array(
            'icon'    => 'fa-facebook',
            'target'  => '#',
          ),
          array(
            'icon'    => 'fa-linkedin',
            'target'  => '#',
          ),
        )
      ),
      array(
        'title'       => 'Larry Parker',
        'description' => 'Lead Marketer',
        'image_link'  => 'assets/img/team/2.jpg',
        'links'       => array(
          array(
            'icon'    => 'fa-twitter',
            'target'  => '#',
          ),
          array(
            'icon'    => 'fa-facebook',
            'target'  => '#',
          ),
          array(
            'icon'    => 'fa-linkedin',
            'target'  => '#',
          ),
        )
      ),
      array(
        'title'       => 'Diana Pertersen',
        'description' => 'Lead Developer',
        'image_link'  => 'assets/img/team/3.jpg',
        'links'       => array(
          array(
            'icon'    => 'fa-twitter',
            'target'  => '#',
          ),
          array(
            'icon'    => 'fa-facebook',
            'target'  => '#',
          ),
          array(
            'icon'    => 'fa-linkedin',
            'target'  => '#',
          ),
        )
      ),
    )
  )); ?>

  <!-- Clients Aside -->
  <?php $this->load->view('blocks/clients', array(
    'items' => array(
      array(
        'link_target' => '#',
        'link_image'  => 'assets/img/logos/envato.jpg',
      ),
      array(
        'link_target' => '#',
        'link_image'  => 'assets/img/logos/designmodo.jpg',
      ),
      array(
        'link_target' => '#',
        'link_image'  => 'assets/img/logos/themeforest.jpg',
      ),
      array(
        'link_target' => '#',
        'link_image'  => 'assets/img/logos/creative-market.jpg',
      ),
    )
  )); ?>


  <!-- Contact Section -->
  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading">Contact Us</h2>
          <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <form name="sentMessage" id="contactForm" novalidate>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="col-lg-12 text-center">
                <div id="success"></div>
                <button type="submit" class="btn btn-xl">Send Message</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <span class="copyright">Copyright &copy; Your Website 2016</span>
        </div>
        <div class="col-md-4">
          <ul class="list-inline social-buttons">
            <li><a href="#"><i class="fa fa-twitter"></i></a>
            </li>
            <li><a href="#"><i class="fa fa-facebook"></i></a>
            </li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul class="list-inline quicklinks">
            <li><a href="#">Privacy Policy</a>
            </li>
            <li><a href="#">Terms of Use</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- jQuery -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <!-- Bootstrap Core JavaScript -->
  <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
  <!-- Plugin JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>
  <!-- Contact Form JavaScript -->
  <script src="assets/js/jqBootstrapValidation.js"></script>
  <script src="assets/js/contact_me.js"></script>
  <!-- Theme JavaScript -->
  <script src="assets/js/agency.min.js"></script>
</body>
</html>
