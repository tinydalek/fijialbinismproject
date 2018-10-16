<!--Main Navigation-->
<header>

<?php get_header();
require_once('components/navbar.inc.php');
?>
    <!-- Intro -->
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
                        <img class="img-responsive" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($slide->ID)) ?>">
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
    <!-- Intro -->

</header>
<!--Main Navigation-->

<!--Main layout-->
<main>
    <div class="container-fluid">


        <!--Section: Articles-->
        <section class="container">

            <!--Grid row-->
            <div class="row wow fadeIn">
            <?php
            if ( have_posts() ) {
            $counter = 1;
            while ( have_posts() ) {
            the_post();
            ?>

                <!--Grid column-->
                <div class="col-lg-4 col-md-12 mt-5 mb-5">

                    <!--Excerpt-->
                    <h4 class="mb-3 font-weight-bold dark-grey-text">
                        <strong><?php the_title(); ?></strong>
                    </h4>
                    <p class="grey-text"><?php the_excerpt(); ?></p>
                    <a href="<?php echo get_permalink() ?>" class="btn btn-outline-dark btn-rounded btn-md">Read more</a>
            
                </div>
                <!--Grid column-->
                <div class="col-lg-2 col-md-12 mt-5 mb-5">
                    
                    <!--Featured image-->
                    <div class="view overlay hm-white-slight rounded z-depth-2 mb-4">
                        <?php the_post_thumbnail( 'medium-large', array( 'class'=> 'img-fluid')); ?>
                        <a href="<?php echo get_permalink() ?>">
                            <div class="mask"></div>
                        </a>
                    </div>

                </div>

                <!--Grid column-->
                <?php
                if ($counter % 3 == 0) {
                ?>
            
            </div>

            <!--Grid row-->
            <!--Grid dynamic row-->
            <div class="row wow fadeIn">
            <?php
            }
            $counter++;
            } // end while
            } // end if
            ?>
            </div>
            <!--Grid row-->

        </section>
        <!--Section: Articles-->

        <!--Grid column-->
        <div class="col-md-4 mb-4">

            <!-- Sticky content -->
            <div class="sticky">
            
                <!--Section: Dynamic Content Wrapper-->
                <section>
                    <div id="dynamic-content"></div>
                </section>
    
                <!--Section: Dynamic Content Wrapper-->
                <!--Sidebar-->
                <?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
                <?php dynamic_sidebar( 'sidebar' ); ?>
                <?php endif; ?>
                <!--/.Sidebar-->

            </div>
            <!-- Sticky content -->

        </div>

</main>
<!--Main layout-->

<?php get_footer(); ?>