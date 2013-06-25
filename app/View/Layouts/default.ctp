<?php
/**
 *
 * PHP 5
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
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('screen');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="header">
		<div class="nav">
		<ul>
				<li>Twitter</li>
				<li>Facebook</li>
				<li>Vine</li>
			</ul><br class="clear">	
		</div>
	</div>
	<div class="subHeader">	
		<div class="headContent">
			<div class="flatNav">
				<h1>FlatScreen</h1>
				<div class="headerNav">
					<form>	
					<input type="text" value="" class="search">
					<input type="submit" value="ok" class="submitSearch">
					</form>
				</div>
			</div><br class="clear">	
		</div>
	</div>	
	<br class="clear">
	<div id="container">
		
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div class="context">
			<div>
			<?php echo 	
			$this->Html->image('right_promo.jpg', array('alt' => 'promo', 'border' => '0'))	
			?>
			</div>
		</div>
		<br class="clear">
		
	</div>
	<div id="footer">
			<div class="footContent">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
			</div>
			<div class="subFooter">
				<div class="subContent">

				</div>
			</div>
		</div>
</body>
</html>
