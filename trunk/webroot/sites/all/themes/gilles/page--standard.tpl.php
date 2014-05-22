<?php


$site_name = variable_get('site_name');
?>
  <?php print render($page['header']); ?>

  <div id="wrapper">
    <div id="container" class="clearfix">
      <div id="page">
      <div id="header">
        <h2 id="site_name"><a href="<?php print $front_page ?>"><?php print $site_name ?></a></h2>
        <div id="logo-floater">
        <?php if ($logo || $site_title): ?>
          <?php if ($title): ?>
            <div id="branding"><strong><a href="<?php print $front_page ?>">
            <?php if ($logo): ?>
              <img src="<?php print $logo ?>" alt="<?php print $site_name ?>" title="<?php print $site_name_and_slogan ?>" id="logo" />
            <?php endif; ?>
            <?php print $site_html ?>
            </a></strong></div>
        <?php endif; ?>
        <?php endif; ?>
        </div>

        <?php if ($primary_nav): print $primary_nav; endif; ?>
        <?php if ($secondary_nav): print $secondary_nav; endif; ?>
        <div class="clearfix"></div>
      </div> <!-- /#header -->

      <?php if ($page['sidebar_first']): ?>
        <div id="sidebar-first" class="sidebar">
          <?php print render($page['sidebar_first']); ?>
        </div>
      <?php endif; ?>

      <div id="center"><div id="squeeze">

          <?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
          <a id="main-content"></a>

          <?php print render($title_prefix); ?>
          <h1 class="page-title"><?php print $title ?></h1>

          <?php if ($tabs): ?>
          <div id="tabs-wrapper" class="clearfix">
            <?php print render($tabs); ?></div><?php endif; ?>
              <?php print render($tabs2); ?>
              <?php print $messages; ?>
              <?php print render($page['help']); ?>

              <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul>
            <?php endif; ?>
          <div id="content" class="clearfix">


            <?php

            echo get_node_property($node,'body','value');


            ?>
          </div>
      </div></div></div> <!--  /#squeeze, /#center, /#page -->
       <!--   -->
      <?php //print $feed_icons ?>
      <?php print render($page['footer']); ?>

      <?php if ($page['sidebar_second']): ?>
        <div id="sidebar-second" class="sidebar">
          <?php print render($page['sidebar_second']); ?>
        </div>
      <?php endif; ?>

    </div> <!-- /#container -->
  </div> <!-- /#wrapper -->
