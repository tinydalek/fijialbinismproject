<?php  get_header();
require_once('components/navbar.inc.php');
if ( have_posts() ) {
    while ( have_posts() ) {
    the_post();
    ?>
    
    <!-- Header -->
    <header>
    
        <!-- Intro -->
        <div class="card card-intro blue-gradient mb-3">
    
            <div class="card-body white-text rgba-black-light pt-5 pb-4">
    
                <!-- Grid row -->
                <div class="row d-flex justify-content-center">
    
                    <!-- Grid column -->
                    <div class="col-md-9">
    
                        <h1 class="font-weight-bold mb-4"><?php the_title() ?></h1>
    
                    </div>
                    <!-- End Grid column -->
    
                </div>
                <!-- End Grid row -->
    
            </div>
    
        </div>
        <!-- End Intro -->
    
    </header>
    <!-- End Header -->
    
    <!-- Main layout -->
    <main>
        <div class="container">
    
            <!-- Section: Post -->
            <section class="mt-3">
    
                <!-- Grid row -->
                <div class="row wow fadeIn">
    
    
                    <!-- Grid column -->
                    <div class="col-md-6 mt-2 mb-4">
    
                        <div class="post-content">
                            <?php the_content(); ?>
                        </div>
    
                    </div>
                    <!-- End Grid column --> 
                    
                    <!-- Grid column -->
                    <div class="col-md-4 mt-2 mb-4">
    
                        <!-- Featured image -->
                        <?php the_post_thumbnail( 'large', array( 'class'=> 'img-fluid z-depth-1-half mb-4')); ?>
    
                    </div>
                    <!-- End Grid column -->
                    
    
                </div>
                <!-- End Grid row -->
    
            </section>
            <!-- End Section: Post-->

            <!-- Section: Form -->
            <section class="mt-3">
    
                <!-- Grid row -->
                <div class="row wow fadeIn">

                    <h3><strong>Send an Enquiry</strong></h3>

                    <!-- Grid column -->
                    <div class="col-md-10 mt-4 mb-4" id="respond">
                    <?php echo $response; ?>

                        <form class="form-horizontal" onsubmit="return validateForm()" action="<?php the_permalink(); ?>" method="post">
    
                            <div class="form-group row">
                                <label class="col-md-2" for="name"> Full Name: </label>
                                <div class="col-md-6">
                                    <input class="form-control" type="text" name="message_name" value="<?php echo esc_attr($_POST['message_name']); ?>" autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-2" for="message_email"> Email: </label>
                                <div class="col-md-6">
                                    <input class="form-control" type="text" name="message_email" value="<?php echo esc_attr($_POST['message_email']); ?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-2" for="message_text"> Message: </label>
                                <div class="col-md-6"> 
                                    <textarea class="form-control" rows="5" type="text" name="message_text"><?php echo esc_textarea($_POST['message_text']); ?></textarea>
                                </div>
                            </div>

                            <input type="hidden" name="submitted" value="1">

                            <div class="form-group row text-center">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-outline-dark">Submit</button>
                                </div>
                            </div>
        
                        </form>

                    </div>
                    <!-- End Grid column -->                

                </div>
                <!-- End Grid row -->

            </section>
            <!-- End Section: Form -->
    
        </div>
    </main>
    <!-- End Main layout -->
    
    <?php
    } // end while
    } // end if

get_footer();
?>