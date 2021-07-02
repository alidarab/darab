<?php get_header(); ?>

<main class="bg-gray-900 h-screen flex flex-wrap justify-center content-center">
  <section class="max-w-screen-2xl mx-auto text-white">
    <div class="text-center mb-4">
      <h1 class="font-bold text-6xl mb-2">
        <?php bloginfo( 'name' ); ?>
      </h1>
      <p class="text-lg max-w-prose">
        <?php bloginfo('description'); ?>
      </p>
    </div>


    <div class="grid grid-cols-3 gap-1">
      <?php if ( have_rows( 'links', 'options' ) ) : ?>
        <?php while ( have_rows( 'links', 'options' ) ) :
          the_row(); ?>
          <div class="mx-auto">
          <?php if ( $link = get_sub_field( 'link', 'options' ) ) : ?>
            <a href="<?php echo esc_url( $link ); ?>" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
            <?php endif; ?>
              <span class="mr-2">
                <?php if ( $title = get_sub_field( 'title', 'options' ) ) : ?>
                  <?php echo esc_html( $title ); ?>
                <?php endif; ?>
              </span>
              <i class="
              <?php if ( $icon = get_sub_field( 'icon', 'options' ) ) : ?>
                <?php echo esc_html( $icon ); ?>
              <?php endif; ?>"></i>
            </a>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>

  </section>
</main>



<?php get_footer(); ?>