<!DOCTYPE HTML>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <meta name="keywords" content="smooth scroll, go to top, css3, css3 animations, css trick">
  <meta name="author" content="Mahieddine Abdelkader">
  <title>Smooth Scroll to Top Using CSS3 Animations!</title>
  <link rel="stylesheet" href="css/style.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700|Lobster' rel='stylesheet' type='text/css'>
  <link rel="icon" type="image/png" href="css/img/favicon.png">
</head>
<body>
  <!-- Top Navigation -->
  <nav class="clearfix">
    <div>
      <!-- Follow -->
      <a href="https://twitter.com/Mitgux" class="twitter-follow-button" data-show-count="false">Follow @Mitgux</a>
      <!-- Share-->
      <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://mitgux.com/smooth-scroll-to-top-using-css3-animations" data-text="Smooth Scroll to Top Using CSS3 Animations!" data-via="Mitgux" data-related="Mitgux" data-hashtags="Mitgux">Tweet</a>  
    </div>
    <div>
      <a class="go-back" href="http://mitgux.com/smooth-scroll-to-top-using-css3-animations">← Back to Article</a>
    </div>
  </nav>
  
  <!-- Main -->
  <div role="main">
    <h3 class="main-title">Smooth Scroll to Top Using CSS3 Animations</h3>
    <p class="description">
      Providing a go to top button is a nice behavior on your website, and adding some scroll effects is more welcome. jQuery animate function help us doing this task, but in this demo we'll not use the jQuery animate for handle the smooth effects, but we'll rely on the <strong>CSS3 animations</strong>, with a bit help from jQuery, for know more about how we do that, please check the <a href="http://mitgux.com/smooth-scroll-to-top-using-css3-animations"><strong>article related</strong></a> to this demonstration ..
    </p>
    <h4 class="go-down">Scroll down to Try!</h4>
    <div class="down-arrow">↓</div>
    <div class="down-arrow">↓</div>
    <div class="down-arrow">↓</div>
    <div class="go-top-sets">
      <ul>
        <li class="easing-1">Go Top - Easing 1</li>
        <li class="easing-2">Go Top - Easing 2</li>
        <li class="easing-3">Go Top - Easing 3</li>
      </ul>
    </div>
  </div>

  <!-- Go To Top -->
  <script src="js/goTop.js"></script>
  <!-- Twitter -->
  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
  <!-- Google Analytic -->
  <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36998273-1']);
    _gaq.push(['_trackPageview']);

    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
  </script>
</body>
</html>