      <footer class="colophon">
        <div class="follow-btn">
          <!-- Twitter Follow button -->
          <a href="http://twitter.com/mdo" class="twitter-follow-button" data-show-count="false">Follow @mdo</a>
          <script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script>
        </div>
        <ul>
          <li>
            <a href="./about">About</a>
          </li>
          <li>
            <a href="http://feeds.feedburner.com/mdo">RSS feed</a>
          </li>
        </ul>
        <ul>
          <li>
            <a href="http://dribbble.com/players/mdo" title="Follow my work on Dribbble">Dribbble</a>
          </li>
          <li>
            <a href="http://flickr.com/photos/markdotto" title="View my photos and screenshots on Flickr">Flickr</a>
          </li>
          <li>
            <a href="http://rdio.com/people/mdo/" title="Follow me and my musical tastes on Rdio">Rdio</a>
          </li>
          <li>
            <a href="mailto:hi@markdotto.com?subject=Oh hai!" title="Email Me">Email</a>
          </li>
        </ul>
        <p>&copy; <?php echo date("Y") ?>. All rights reserved.</p>
      </footer>

    </div> <!-- /close container -->

    <script type="text/javascript">
      var _gauges = _gauges || [];
      (function() {
        var t   = document.createElement('script');
        t.type  = 'text/javascript';
        t.async = true;
        t.id    = 'gauges-tracker';
        t.setAttribute('data-site-id', '4deefa8bf5a1f53328000004');
        t.src = '//secure.gaug.es/track.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(t, s);
      })();
    </script>

    <script type="text/javascript">
      (function(){
        var fusion = document.createElement('script');
        fusion.src = window.location.protocol + '//adn.fusionads.net/api/1.0/ad.js?zoneid=149&rand=' + Math.floor(Math.random()*9999999);
        fusion.async = true;
        (document.head || document.getElementsByTagName('head')[0]).appendChild(fusion);
      })();
    </script>


    <?php wp_footer(); ?>
  </body>
</html>