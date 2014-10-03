<div class="container navbar-wrapper">
    <div class="navbar navbar-inverse ">
        <div class="navbar-inner">
            <!-- Button for triggering responsive navbar -->
            <a class="btn btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <div class="span3">
                <h1 class="logo"><a href="<?php print $front_page; ?>"><img src="<?php print $logo; ?>" alt="<?php print $site_name; ?>" /></a></h1>
            </div>
            <div class="span3 callus">
                <strong>Call Us on: 020 7100 4231</strong>
            </div>
            <!-- Place all navbar contents you want collapsed within .navbar-collapse.collapse. -->
            <div class="nav-collapse collapse pull-right" style="height: 0px; ">
              <?php if ($primary_nav): ?>
                <?php print $primary_nav; ?>
              <?php endif; ?>

              <?php if ($search): print render($search); endif; ?>
            
              <?php if ($secondary_nav): ?>
                <?php print $secondary_nav; ?>
              <?php endif; ?>
            </div><!--/.nav-collapse -->
        </div><!-- /.navbar-inner -->
    </div><!-- /.navbar -->
</div>

<?php print render($page['header']); ?>

<div class="container">
	
	<div class="row">	  
    <?php if ($page['highlighted']): ?>
      <div class="highlighted hero-unit"><?php print render($page['highlighted']); ?></div>
    <?php endif; ?>
    <?php if ($breadcrumb): print $breadcrumb; endif;?>
    <a id="main-content"></a>
    <?php print render($title_prefix); ?>
    <?php if ($title): ?>
      <h1 class="page-header"><?php print $title; ?></h1>
    <?php endif; ?>
    <?php print render($title_suffix); ?>
    <?php print $messages; ?>
    <?php if ($tabs): ?>
      <?php print render($tabs); ?>
    <?php endif; ?>
    <?php if ($page['help']): ?> 
      <div class="well"><?php print render($page['help']); ?></div>
    <?php endif; ?>
    <?php if ($action_links): ?>
      <ul class="action-links"><?php print render($action_links); ?></ul>
    <?php endif; ?>
    <?php print render($page['content']); ?>

    <?php if ($page['sidebar_second']): ?>
      <aside class="span3" role="complementary">
        <?php print render($page['sidebar_second']); ?>
      </aside>  <!-- /#sidebar-second -->
    <?php endif; ?>

  </div>

</div>

<!-- FOOTER -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="span12">
                <a href="#"><img src="<?php print $logo; ?>" alt="Silex Resources"></a>
            </div>
        </div>
        <div class="row links-horizontal">
            <div class="span12">
              <?php print $footer_links; ?>
            </div>
        </div>
        <div class="row">
            <div class="span12">
                <a href="http://twitter.com/silexresources" class="twitter-link">Follow us on Twitter</a>
            </div>
        </div>

        <p>Copyright Silex Resources Ltd. All rights reserved.</p>
    </div>
</footer>

<script>
    !function ($) {
        $(function(){
            // carousel demo
            $('#myCarousel').carousel()
        })
    }(window.jQuery)
</script>



	

