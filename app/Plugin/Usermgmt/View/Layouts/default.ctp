<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
        echo $this->Html->css(array('cake.generic','smoothness/jquery-ui-1.10.4.custom.min','style'));

		echo $this->fetch('meta');
		echo $this->fetch('css');

	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1>
                <a id="Menu">Menu</a>
                <div id="MenuBox" class="MenuBox">
                    <ul class="menuitems-wrapper">
                        <li class="menuitems">
                            <?php echo $this->Html->link('Roles','/roles')?>
                            <ul class="child-items">
                                <li><a href="/roles">List Users</a></li>
                                <li><a href="/add-role">Add User</a></li>

                            </ul>
                        </li>
                        <li class="menuitems"><?php echo $this->Html->link('Users','/users')?> </li>
                        <li class="menuitems"><?php echo $this->Html->link('Posts','/posts')?> </li>
                        <li class="menuitems"><?php echo $this->Html->link('Widgets','/widgets')?> </li>
                    </ul>
                </div>

                <div style="float: right;">
                    <?php echo $this->Html->link('logout','/logout');?>
                </div>
            </h1>
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div>
	</div>
    <?php

        echo $this->fetch('script');
        echo $this->Html->script(array('jquery-1.11.0.min','jquery-ui-1.10.4.custom','common','customMenuBar'));
    ?>
	<?php //echo $this->element('sql_dump'); ?>
</body>
</html>
