<!-- Header-->
<header>

<?php get_header();
require_once('components/navbar.inc.php');
?>
    <!-- Intro: Carousel Slider -->
    <div class="card card-intro blue-gradient">

        <div class="card-body white-text rgba-black-light text-center pt-2 pb-2">

            <div id="carousel-images" class="carousel slide" data-ride="carousel">
            
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-images" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-images" data-slide-to="1"></li>
                    <li data-target="#carousel-images" data-slide-to="2"></li>
                    <li data-target="#carousel-images" data-slide-to="3"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                <?php $slider = get_posts(array('post_type' => 'slider', 'posts_per_page' => 4)); ?>
                <?php $count = 0; ?>
                <?php foreach($slider as $slide): ?>
                
                    <div class="carousel-item <?php echo ($count == 0) ? 'active' : ''; ?>">
                        <img class="" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($slide->ID)) ?>">
                    </div>
                    <?php $count++; ?>
                    <?php endforeach; ?>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-images" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-images" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        </div>

    </div>
    <!-- End Intro: Carousel Slider -->

</header>
<!-- End Header -->

<!-- Main layout -->
<main>

    <div class="container-fluid">

        <!-- Grid row -->
        <div class="row wow fadeIn">
            
            <!-- Grid column: Featured Content -->
            <div class="col-md-10 mt-4 mb-4">
    
                <!-- Grid row -->
                <div class="row">
      
                    <div class="col-md-4 mb-3">
                        
                        <div class="card">
                            <img class="card-img-top" src="" alt="">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-outline-dark">Go somewhere</a>
                            </div>
                        </div>

                    </div>
      
                    <div class="col-md-4 mb-3">
                        
                        <div class="card">
                            <img class="card-img-top" src="" alt="">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-outline-dark">Go somewhere</a>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-4 mb-3">
                        
                        <div class="card">
                            <img class="card-img-top" src="" alt="">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-outline-dark">Go somewhere</a>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-4 mb-3">
                        
                        <div class="card">
                            <img class="card-img-top" src="" alt="">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-outline-dark">Go somewhere</a>
                            </div>
                        </div>

                    </div>  

                    <div class="col-md-4 mb-3">
                        
                        <div class="card">
                            <img class="card-img-top" src="" alt="">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-outline-dark">Go somewhere</a>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-4 mb-3">
                        
                        <div class="card">
                            <img class="card-img-top" src="" alt="">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-outline-dark">Go somewhere</a>
                            </div>
                        </div>

                    </div>                                      
                
                </div>
                <!-- End Grid row -->
  
            </div>
            <!-- End Grid column: Featured Content -->

            <!-- Grid column: Sidebar -->
            <div class="col-md-2 mt-4 mb-4">

                    <?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
                    <?php dynamic_sidebar( 'sidebar' ); ?>
                    <?php endif; ?>

            </div>
            <!-- End Grid column: Sidebar -->

        </div>
        <!-- End Grid row -->
    
    </div>

</main>
<!-- End Main layout -->

<?php get_footer(); ?>