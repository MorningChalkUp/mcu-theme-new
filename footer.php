</div>

    <script src="js/jquery-2.2.3.min.js"></script>
    <script src="js/material.min.js"></script>

    <script>
      $('.js-share-email').on('click', function() {
        document.location = 'mailto:?subject=TITLE&body=LINK';
      });

      $('.js-share-facebook').on('click', function() {
        FB.ui({
          method: 'feed',
          link: 'http://morningchalkup.com?utm_source=facebook&utm_campaign=article-share&utm_medium=share',
          caption: 'Morning Chalk Up',
          picture: 'https://placekitten.com/770/515',
          name: 'TITLE',
          description: "SUMMERY",
        }, function(response){});
      });

      $('.js-share-twitter').on('click', function() {
        window.open('https://twitter.com/intent/tweet?text=' + 'TITLE' + ' via Morning Chalk Up' + '&link=' + 'URL', '_blank');
      });
    </script>

    <?php wp_footer(); ?>

  </body>
</html>