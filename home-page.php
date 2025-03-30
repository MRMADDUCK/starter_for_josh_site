<?php
    /*
    Template Name: Home page
    */
    ?>
<?php get_header();?>

<section class="container-fluid aboutbg text-center">
        <div class="container">
        <h2><?php the_field('titleforaboutme'); ?></h2><!--  custom field for the aboutme content-->
        <p class="particle"><?php the_field('subtitleforaboutme'); ?></p>
<p class="about-text"><?php the_field('paragraphforaboutme'); ?></p>

            <div class="blocker"></div>
        </div>
    </section>

    <section class="container-fluid articelsbg">
        <div class="container">
            <h3 class="text-center"><?php the_field('titleforarticles'); ?></h3>
            <div class="row">
                <div class="col-md-4">
                <?php
$image = get_field('articleoneimage');
?>
<img class="img-fluid" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">

                    <h4 class="article-title"><?php the_field('articleonetitle'); ?></h4>
                    <p class="date" ><?php the_field('articleonedate'); ?></p>
                    <p class="article-p"><?php the_field('articleoneexcerpt'); ?> </p>
                    <a href="<?php the_field('readonemore'); ?>" class="readmore">CONTINUE READING</a>
                </div>
                <div class="col-md-4">
                <?php
$image = get_field('articletwoimage');
?>
<img class="img-fluid" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">


                    <h4 class="article-title"><?php the_field('articletwotitle'); ?></h4>
                    <p class="date" ><?php the_field('articletwodate'); ?></p>
                    <p class="article-p"><?php the_field('articletwoexcerpt'); ?> </p>
                    <a href="<?php the_field('readtwomore'); ?>" class="readmore">CONTINUE READING</a>
                </div>
                <div class="col-md-4">
                <?php
$image = get_field('articlethreeimage');
?>
<img class="img-fluid" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">


                    <h4 class="article-title"><?php the_field('articlethreetitle'); ?></h4>
                    <p class="date" ><?php the_field('articlethreedate'); ?></p>
                    <p class="article-p"><?php the_field('articlethreeexcerpt'); ?> </p>
                    <a href="<?php the_field('readthreemore'); ?>" class="readmore">CONTINUE READING</a>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

<?php get_footer();?>   