<?php if ( block_rows( 'evento' ) ) : ?>
  <section class="feature-v9 ">
    <div class="grid">
<?php while ( block_rows( 'evento' ) ) :
      block_row( 'evento' ); ?>
    <div class="feature-v9__block col-6@md" style="background-image: url('<?php block_sub_field( 'imagem', $echo = true ); ?>');">
        <div class="feature-v9__content text-component text-center max-width-xxxs">
            <h2 class="text-xxl color-inherit"><?php block_sub_field( 'titulo', $echo = true );?></h2>
            <p class="opacity-90%"><?php block_sub_field( 'descricao', $echo = true );?></p>
            <p><a class="feature-v9__link" href="<?php block_sub_field( 'link', $echo = true );?>">Ver</a></p>
        </div>
    </div>
<?php  endwhile;?>  
    </div>
  </section>
  <?php endif;
reset_block_rows( 'timeline' ); ?>