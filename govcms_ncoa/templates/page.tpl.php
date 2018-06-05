<?php
/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
?>

<header class="header" id="header" role="banner">
  <div class="header__inner">



    <?php if ($logo): ?>
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="header__logo" id="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="header__logo-image" /></a>
  <?php endif; ?>

  <?php print render($page['header']); ?>
  </div>
</header>

<?php print render($page['navigation']); ?>

<div id="page" class="row">

  <?php print render($page['highlighted']); ?>

  <?php print $breadcrumb; ?>

  <div id="main">

    <?php
      // Render the sidebar first to see if there is anything in it.
      $sidebar_first  = render($page['sidebar_first']);
      $sidebar_second = render($page['sidebar_second']);
    ?>

    <?php if ($sidebar_first): ?>
      <aside class="sidebars col-md-3 sidebar-first" role="complementary">
        <?php print $sidebar_first; ?>
      </aside>
    <?php endif; ?>

    <div id="content" <?php print $variables['content_column_class']; ?> role="main">

      <a href="#skip-link" id="skip-content" class="element-invisible">Go to top of page</a>

      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1 class="page__title title" id="page-title"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php print render($tabs); ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
      <?php print $feed_icons; ?>
    </div>

    <?php
      // Render the sidebar second to see if there is anything in it.
      
    ?>
    <?php if ($sidebar_second): ?>
      <aside class="sidebars col-md-3 sidebar-second" role="complementary">
        <?php print $sidebar_second; ?>
      </aside>
    <?php endif; ?>

  </div>

  <?php print render($page['footer']); ?>

</div>

<?php print render($page['bottom']); ?>
