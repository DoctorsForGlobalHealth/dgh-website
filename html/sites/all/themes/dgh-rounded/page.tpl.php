<?php
    $themePath = base_path().path_to_theme(); // use this as a shortcut to the theme path
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">

<head>
  <title><?php print $head_title; ?></title>
  <link rel="alternate" type="application/rss+xml" title="Doctors For Global Health - News [RSS]" href="/dgh-news.rss">
  <?php print $head; ?>
  <?php print $styles; ?>
  <?php print $scripts; ?>                                                                               
  <script type="text/javascript"><?php /* Needed to avoid Flash of Unstyled Content in IE */ ?> </script>
  
</head>

<body id="whole-page" class="<?php print $body_classes; ?>">

  <?php if($topofpage) : ?>
    <div id="topofpage">
      Welcome <?php global $user; print $user->name; ?>!
      <?php print $topofpage; ?>
    </div>
  <?php endif; ?>
  
  <div id="header">
    <img src="<?php print $themePath ?>/images/saying.gif" alt="promoting health and human rights with those who have no voice">
  </div>

  <div id="page-wrapper">
    <div class="page-rounded-top"><img alt="" class="page-rounded-corner" src="<?php print $themePath ?>/images/page-rounded-tl.gif" style="display: none" /></div>

    <div id="sidebar-col">
      <a href="<?php print base_path() ?>" alt="home"><img id="header-logo" src="<?php print $themePath ?>/images/logo.gif" alt="logo"/></a>
      <br />
      
      <?php print $sidebar; ?>
      
    </div>

  <div id="content-col">

    <div id="content-title-bar">
      <div id="header-featurette"><?php print $header_featurette; ?></div>
      <a href="<?php print base_path() ?>" alt="home"><img id="header-name" src="<?php print $themePath ?>/images/banner-name.gif" alt="Doctors for Global Health"/></a>
    </div>    

    <?php if($pre_content || $tabs) : ?>
      <div id="pre-content"> 
          <?php if($tabs): ?>
          <div class="admin-tabs">
              <div style="padding-left: 10px;">Manage this page: <?php print $tabs; ?></div>
          </div>
          <?php endif; ?>
        <?php print $pre_content; ?>
      </div>    
    <?php endif; ?>

    <div id="content">
      <?php if($title && !$is_front): //hide title on homepage ?>
          <h1><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print $help; ?>
      <?php print $messages; ?>
      <?php print $content; ?>  
    </div>

    <?php if($post_content) : ?>
      <div id="post-content"> 
        <?php print $post_content; ?>
      </div>
    <?php endif; ?>

  </div>
  <!-- /content-col -->
  
  <br style="clear:both;"/>

  <div class="page-rounded-bottom"><img alt="" class="page-rounded-corner" src="<?php print $themePath ?>/images/page-rounded-bl.gif" style="display: none" /></div>
  </div>
  
  <div id="footer">
    This site and its contents are &#169; 1998 - <?php echo date("Y")?> by Doctors for Global Health.
    <?php print $footer; ?>
    <?php print $footer_message; ?>
    <br />
    <a href="/login"><?php echo t('login')?></a>
  </div>

  <?php print $closure; ?>

</body>

</html>