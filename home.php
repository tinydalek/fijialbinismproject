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
                <?php $slider = get_posts(array('post_type' => 'slider', 'posts_per_page' => 4 )); ?>
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

    <div class="container">

        <!-- Grid row -->
        <div class="row wow fadeIn">
            
            <!-- Grid column: Featured Content -->
            <div class="col-md-9 mt-4 mb-4">

                <!-- Grid row -->
                <div class="row">
                
                <?php
                $args = array(
                // Arguments for your query.
                'tag' => 'homepage-feature-1, homepage-feature-2, homepage-feature-3'
                );
  
                // Custom query.
                $query = new WP_Query( $args );
                // Check that we have query results.
                if ( $query->have_posts() ) {
                // Start looping over the query results.
                while ( $query->have_posts() ) {
                $query->the_post(); 
                ?>
  
                    <!-- Grid column: Featured Posts -->
                    <div class="col-md-6 mb-3">

                        <div class="card text-center">
                            
                            <div class="card-img-top">
                                <?php the_post_thumbnail( array('class'=> 'img-responsive z-depth-1-half mt-2')); ?>
                            </div>
                    
                            <div class="card-body">
                                <h5 class="card-title"><strong><?php the_title(); ?></strong></h5>
                                <p class="card-text"><?php the_excerpt(); ?></p>
                                <a href="#" class="btn btn-outline-dark">Read more</a>
                            </div>
                        </div>

                    </div>
                    <!-- End Grid column: Featured Posts -->
   
                    <?php
                    } // end while
                    } // end if 
                    // Restore original post data.
                    wp_reset_postdata();
                    ?>

                    <?php
                    $args = array(
                    // Arguments for your query.
                    'pagename' => 'donate'
                    );
  
                    // Custom query.
                    $query = new WP_Query( $args );
                    // Check that we have query results.
                    if ( $query->have_posts() ) {
                    // Start looping over the query results.
                    while ( $query->have_posts() ) {
                    $query->the_post(); 
                    ?>
  
                    <!-- Grid column: Featured Posts -->
                    <div class="col-md-6 mb-3">

                        <div class="card text-center">
                            
                            <div class="card-img-top">
                                <?php the_post_thumbnail( array('class'=> 'img-responsive z-depth-1-half mt-2')); ?>
                            </div>
                    
                            <div class="card-body">
                                <h5 class="card-title"><strong><?php the_title(); ?></strong></h5>
                                <p class="card-text"><?php the_excerpt(); ?></p>
                                <a href="#" class="btn btn-outline-dark">Donate</a>
                            </div>
                        </div>

                    </div>
                    <!-- End Grid column: Featured Posts -->
   
                <?php
                } // end while
                } // end if 
                // Restore original post data.
                wp_reset_postdata();
                ?>


                </div>
                <!-- End Grid row -->
  
    

            </div>
            <!-- End Grid column: Featured Content -->

            <!-- Grid column: Sidebar -->
            <div class="col-md-3 mt-4 mb-4">

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