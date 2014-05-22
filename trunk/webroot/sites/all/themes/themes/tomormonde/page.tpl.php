<div id='wrapper'>
  <div id='border-wrapper'>
  <div id='page-title'>
    <div class='limiter clearfix'>
      <div class='tabs clearfix'>
        <?php if ($primary_local_tasks): ?>
          <ul class='primary-tabs links clearfix'><?php print render($primary_local_tasks) ?></ul>
        <?php endif; ?>
      </div>
      <?php print render($title_prefix); ?>
      <div class='page-title'>
        <div id="tom-ormonde-media">
          <?php
            print "<img src='/".path_to_theme()."/images/tom-ormone-media.png' alt='".variable_get('site_name', '')."' title='".variable_get('site_name', '')."' />";
          ?>
      </div>
        <?php if ($site_slogan) print "<div id='slogan'>$site_slogan</div>"; ?>
        <?php
        $site_email = variable_get('site_mail', ini_get('sendmail_from'));
        print "<div id='site-email'><a href='mailto:$site_email'>$site_email</a></div>";
        ?>
      <?php if ($action_links): ?>
        <ul class='action-links links clearfix'><?php print render($action_links) ?></ul>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
    </div></div>

  <?php if ($show_messages && $messages): ?>
    <div id='console'><div class='limiter clearfix'><?php print $messages; ?></div></div>
  <?php endif; ?>

  <div id='page'>
    <div id='main-content' class='limiter clearfix'>
      <?php if ($page['help']) print render($page['help']) ?>
      <div id='content' class='page-content clearfix'>
        <?php if (!empty($page['content'])) print render($page['content']) ?>
      </div>
    </div>
  </div>

  <div id='footer' class='clearfix'>
    <?php if ($feed_icons): ?>
      <div class='feed-icons clearfix'>
        <label><?php print t('Feeds') ?></label>
        <?php print $feed_icons ?>
      </div>
    <?php endif; ?>
  </div>
</div>
  </div>
  <div id="social-icons">
    <a href=""><img src="/<?php print path_to_theme(); ?>/images/tom-ormonde-linkedin-account.jpg" alt="linkedin" title="linkedin" /></a>
  </div>
</div>
