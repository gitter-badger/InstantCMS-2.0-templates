<?php
    $config = cmsConfig::getInstance();
    $core = cmsCore::getInstance();
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php $this->title(); ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $this->addMainCSS("templates/{$this->name}/css/theme-text.css"); ?>
    <?php $this->addMainCSS("templates/{$this->name}/css/theme-layout.css"); ?>
    <?php $this->addMainCSS("templates/{$this->name}/css/theme-gui.css"); ?>
    <?php $this->addMainCSS("templates/{$this->name}/css/theme-widgets.css"); ?>
    <?php $this->addMainCSS("templates/{$this->name}/css/theme-content.css"); ?>
    <?php $this->addMainCSS("templates/{$this->name}/css/theme-modal.css"); ?>
    <?php $this->addMainCSS("templates/{$this->name}/css/bootstrap.css"); ?>
    <?php $this->addMainJS("templates/{$this->name}/js/jquery.js"); ?>
    <?php $this->addMainJS("templates/{$this->name}/js/jquery-modal.js"); ?>
    <?php $this->addMainJS("templates/{$this->name}/js/core.js"); ?>
    <?php $this->addMainJS("templates/{$this->name}/js/modal.js"); ?>
    <?php $this->addMainJS("templates/{$this->name}/js/messages.js"); ?>
    <!--[if lt IE 9]>
        <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
    <?php $this->head(); ?>
    <style><?php include('options.css.php'); ?></style>
</head>
<body>
        <?php if (!$config->is_site_on){ ?>
            <div id="site_off_notice"><?php printf(ERR_SITE_OFFLINE_FULL, href_to('admin', 'settings', 'siteon')); ?></div>
        <?php } ?>

        <header role="banner">
  <div class="site-logo image-logo">
						<a rel="home" href="<?php echo href_to_home(); ?>"><img alt="logo" src="http://preview.ait-themes.club/theme/eventguide/wp-content/themes/eventguide/design/img/logo.png"></a>
</div>        
       <!-- MENU -->     
        <?php if($this->hasWidgetsOn('top')) { ?>
                         <nav>
                            <div class="container-fluid">
                                <?php $this->widgets('top', false, 'wrapper_plain'); ?>
                            </div>
                        </nav>                      
           
        <?php } ?>
       <!-- MENU CANSEL -->   
            <?php $this->widgets('header', false, 'wrapper_plain'); ?>
        </header>
        <section class="slder">
            
        </section>   
    <div class="container">


        <div id="body">

            <?php
                $is_sidebar = $this->hasWidgetsOn('right-top', 'right-center', 'right-bottom');
                $section_width = $is_sidebar ? '730px' : '100%';
            ?>

            <?php
                $messages = cmsUser::getSessionMessages();
                if ($messages){
                    ?>
                    <div class="sess_messages">
                        <?php
                            foreach($messages as $message){
                                echo $message;
                            }
                        ?>
                    </div>
                    <?php
                }
            ?>

            <section style="width:<?php echo $section_width; ?>">

                <?php $this->widgets('left-top'); ?>

                <?php if ($this->isBody()){ ?>
                    <article>
                        <?php if ($this->isBreadcrumbs()){ ?>
                            <div id="breadcrumbs">
                                <?php $this->breadcrumbs(array('strip_last'=>false)); ?>
                            </div>
                        <?php } ?>
                        <?php $this->body(); ?>
                    </article>
                <?php } ?>

                <?php $this->widgets('left-bottom'); ?>

            </section>

            <aside>
                <?php $this->widgets('right-top'); ?>

                <?php $this->widgets('right-center'); ?>

                <?php $this->widgets('right-bottom'); ?>
            </aside>

        </div>

        <?php if ($config->debug && cmsUser::isAdmin()){ ?>
            <div id="sql_debug" style="display:none">
                <div id="sql_queries">
                    <?php foreach($core->db->query_list as $sql) { ?>
                        <div class="query">
                            <div class="src"><?php echo $sql['src']; ?></div>
                            <?php echo nl2br($sql['sql']); ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>

        <footer>
            <ul>
                <li id="copyright">
                    <a href="<?php echo $this->options['owner_url'] ? $this->options['owner_url'] : href_to_home(); ?>">
                        <?php html($this->options['owner_name'] ? $this->options['owner_name'] : cmsConfig::get('sitename')); ?></a>
                    &copy;
                    <?php echo $this->options['owner_year'] ? $this->options['owner_year'] : date('Y'); ?>
                </li>
                <li id="info">
                    <span class="item">
                        <?php echo LANG_POWERED_BY_INSTANTCMS; ?>
                    </span>
                    <span class="item">
                        <?php echo LANG_ICONS_BY_FATCOW; ?>
                    </span>
                    <?php if ($config->debug && cmsUser::isAdmin()){ ?>
                        <span class="item">
                            SQL: <a href="#sql_debug" class="ajax-modal"><?php echo $core->db->query_count; ?></a>
                        </span>
                        <span class="item">
                            Cache: <?php echo cmsCache::getInstance()->query_count; ?></a>
                        </span>
                        <span class="item">
                            Mem: <?php echo round(memory_get_usage()/1024/1024, 2); ?> Mb
                        </span>
                    <?php } ?>
                </li>
                <li id="nav">
                    <?php $this->widgets('footer', false, 'wrapper_plain'); ?>
                </li>
            </ul>
        </footer>

    </div>
</body>
</html>
