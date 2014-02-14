<header>
    <?php if($page['header']): ?>
        <?php print render($page['header']); ?>
    <?php endif; ?>

    <?php if($logo): ?>
        <a href="<?php print $front_page; ?>"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/></a>
    <?php endif; ?>
    <?php if($site_name): ?>
        <h1><a href="<?php print $front_page; ?>"
                              title="<?php print t('Home'); ?>"><?php print $site_name; ?></a></h1>
    <?php endif; ?>
    <?php if($site_slogan): ?>
        <h2><?php print $site_slogan; ?></h2>
    <?php endif; ?>

    <?php if($main_menu): ?>
        <nav>
            <?php print theme('links__system_main_menu', array(
                'links' => $main_menu,
                'attributes' => array(
                    'class' => array('links',),
                ),
                'heading' => array(
                    'text' => t('Main menu'),
                    'level' => 'h2',
                    'class' => array('element-invisible'),
                ),
            )); ?>
        </nav>
    <?php endif; ?>
</header>

<main id="content-wrap">
    <?php
    $steward_digital_mission = theme_get_setting('steward_digital_mission');
    if($steward_digital_mission && $is_front): ?>
        <div id="mission"><?php print render($steward_digital_mission); ?></div>
    <?php endif; ?>
    <?php if($page['highlighted']): ?>
        <div id="highlighted"><?php print render($page['highlighted']); ?></div>
    <?php endif; ?>

    <div id="content">
        <?php print render($title_prefix); ?>
        <?php if($title): ?>
            <h1 class="node-title"><?php print $title; ?></h1>
        <?php endif; ?>
        <?php print render($title_suffix); ?>
        <?php if($tabs): ?>
            <div class="tabs"><?php print render($tabs); ?></div>
        <?php endif; ?>
        <?php if($show_messages): ?>
            <?php print $messages; ?>
        <?php endif; ?>
        <?php print render($page['help']); ?>
        <?php if($action_links): ?>
            <ul class="action-links">
                <?php print render($action_links); ?>
            </ul>
        <?php endif; ?>

        <?php print render($page['content']); ?>
        <?php print $feed_icons; ?>
    </div>

    <div id="sidebar">
        <?php if($page['sidebar_first']): ?>
            <?php print render($page['sidebar_first']); ?>
        <?php endif; ?>
    </div>

</main>

<?php if($page['footer']): ?>
    <footer>
        <?php print render($page['footer']); ?>
    </footer>
<?php endif; ?>

