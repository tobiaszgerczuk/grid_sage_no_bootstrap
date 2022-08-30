<footer class="content-info footer">
  <div class="container footer_grid">
    <div>
      <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
      <div class="footer_text">
        <p> <?php echo the_field('footer_text','option'); ?></p>
        <div class="footer_social">

          <?php if( have_rows('footer_social_media', 'option') ): ?>
            <?php while( have_rows('footer_social_media', 'option') ) : the_row(); ?>
              <a href="{{ the_sub_field('icon_link')['url'] }}"><img src="{{ the_sub_field('icon') }}" alt=""></a>
            <?php endwhile; ?>
        <?php endif; ?>
    
        </div>
        <div class="footer_copyright">
          ©2022 Coditive_test
        </div>
      </div>
    </div>
    <div>
  
     <?php 
      if (is_active_sidebar( 'footer-left' )) {
          dynamic_sidebar( 'footer-left' );
      }
     ?>
    </div>
    <div>

      <?php 
      if (is_active_sidebar( 'footer-middle' )) {
          dynamic_sidebar( 'footer-middle' );
      }
     ?>
    </div>
    <div>

      <?php 
      if (is_active_sidebar( 'footer_right' )) {
          dynamic_sidebar( 'footer_right' );
      }
     ?>
    </div>
   
  </div>
</footer>
