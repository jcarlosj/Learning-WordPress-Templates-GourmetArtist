<div class="orbit" data-orbit data-use-m-u-i="true">
  <ul class="orbit-container">

    <!--Botones laterales del Slider -->
    <button class="orbit-previous">&#9664;</button>
    <button class="orbit-next">&#9654;</button>

    <?php
      $i = 0;
      $args = array(
        'posts_per_page' => 5       # Cantidad de Post por página
      );

      $slider = new WP_Query( $args );

      while( $slider -> have_posts() ):
        $slider -> the_post();
        #echo $i;
    ?>

      <!-- Imagenes del Slider -->
      <li class="<?php echo $i == 0 ? 'is-active' : ''; ?> orbit-slide">
        <a href="<?php the_permalink(); ?>">
          <?php the_post_thumbnail( 'slider-image' ); ?>
          <div class="">
            <h3 class="orbit-caption"><?php the_title(); ?></h3>
          </div>
        </a>
      </li>

    <?php
        $i++;
      endwhile;
      wp_reset_postdata();
    ?>

  </ul>

  <!-- Navegación del Slider -->
  <nav class="orbit-bullets">
    <?php
      $number_posts = $slider -> post_count;
      for( $i = 0; $i < $number_posts; $i++ ):
    ?>
      <button class="<?php echo $i == 0 ? 'is-active' : ''; ?>" data-slide="<?php echo $i; ?>"></button>
    <?php endfor; ?>
  </nav>
</div>
