<?php
/**
 * Edward Diao Theme
 *
 * @author Adriano de la Cruz <adriano@jps.net>
 * @link http://www.croogo.org
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo $title_for_layout; ?> &raquo; <?php echo Configure::read('Site.title'); ?></title>
    <?php
        echo $this->Layout->meta();
        echo $this->Layout->feed();
        echo $this->Html->script(array('jquery/jquery.min'));
        echo $this->Layout->js();
        echo $this->Html->css(array(
            'reset',
            '960',
            'theme',
        ));
        echo $this->Html->script(array(
            'jquery/jquery.hoverIntent.minified',
            'jquery/superfish',
            'jquery/supersubs',
            'theme',
        ));
        echo $scripts_for_layout;
    ?>
	<!--[if lt IE 9]>
	<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
	<![endif]-->
	<!--[if IE 7]><?php echo $this->Html->css('ie7'); ?><![endif]-->
	<!--[if lt IE 7]><?php echo $this->Html->css('ie6'); ?><![endif]-->
</head>
<body>
    <div id="header_background"></div>
    <div id="wrapper">
    	<?php echo $this->Html->image('header.jpg', array('height' => 183, 'width' => 990, 'style' => 'vertical-align: bottom;')); ?>
		<?php echo $this->Layout->blocks('region1'); ?>
        <div id="nav">
            <?php echo $this->Layout->menu('main', array('dropdown' => true)); ?>
        </div>
		<?php echo $this->Layout->blocks('region2'); ?>

		<div id="content">
			<div id="sidebar-left">
				<?php echo $this->Layout->blocks('left'); ?>
	        </div>
	        <div id="main">
	        <?php
	            $this->Layout->sessionFlash();
	            echo $content_for_layout;
	        ?>
	        </div>
			<div id="sidebar-right">
				<?php echo $this->Layout->blocks('right'); ?>
	        </div>
		</div>

        <div id="footer">
			<?php echo $this->Layout->blocks('footer'); ?>
        </div>
    </div>
</body>
</html>
