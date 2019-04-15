      <footer class="container-fluid" role="footer">
        <?php if ( is_active_sidebar( 'footer' ) ) : ?>
          <?php dynamic_sidebar( 'footer' ); ?>
        <?php endif; ?>
        <p>
          &copy; - <?php the_date('Y'); ?> - <?php bloginfo('name'); ?> - <?php bloginfo('descritpion'); ?>
        </p>
      </footer>

  <?php wp_footer(); ?>
    <script>
      // pour le dev, pour prod minify avec les autres
      window.onscroll = function() {myFunction()};

      function myFunction() {
        var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
        var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        var scrolled = (winScroll / height) * 100;
        document.getElementById("myBar").style.width = scrolled + "%";
      }
    </script>
  </body>
</html>
