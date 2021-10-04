    <header class="container max-width-md margin-bottom-lg">
    <div class="text-component text-center line-height-lg v-space-md margin-bottom-md">
      <h1><?php the_title(); ?></h1>
      <?php if ( has_excerpt( $post->ID ) ) { ?>
         <p class="color-contrast-medium text-md"><?php echo get_the_excerpt(); ?></p>
      <?php } ?>
    </div>
  </header>
  <div class="container max-width-adaptive-md">
    <div class="text-component line-height-lg v-space-md">
        <?php the_content(); ?> 
    </div>
  </div>