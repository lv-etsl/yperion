      <footer class="container-fluid" role="footer">
        <?php if ( is_active_sidebar( 'footer' ) ) : ?>
          <?php dynamic_sidebar( 'footer' ); ?>
        <?php endif; ?>
        <p>
          &copy; - <?php the_date('Y'); ?> - <?php bloginfo('name'); ?> - <?php bloginfo('descritpion'); ?> - <?php echo pll__('Un site utilisant WordPress'); ?>
        </p>
      </footer>

  <?php wp_footer(); ?>

  <script src="<?php bloginfo('template_url'); ?>/js/progress/jquery.v1.12.4.js" type="text/javascript"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/progress/progress-unminify.js" data-minify="1" defer="" type="text/javascript"></script>

    <script>
      document.addEventListener(
        "scroll",
        function() {
          var scrollTop =
            document.documentElement["scrollTop"] || document.body["scrollTop"];
          var scrollBottom =
            (document.documentElement["scrollHeight"] ||
              document.body["scrollHeight"]) - document.documentElement.clientHeight;
          scrollPercent = scrollTop / scrollBottom * 100 + "%";
          document
            .getElementById("_progress")
            .style.setProperty("--scroll", scrollPercent);
        },
        { passive: true }
      );
      </script>

  </body>
</html>
