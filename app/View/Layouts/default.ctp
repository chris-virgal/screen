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
				<h1>FlatScreen <br><span>Tv Screen addict</span></h1>
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
		<div class="navMain">
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">News</a></li>
			<li><a href="#">Cinéma</a></li>
			<li><a href="#">Séries</a></li>
			<li><a href="#">Forum</a></li>
		</ul>
			
	</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div class="context">
			<div>
			<?php echo 	
			$this->Html->image('right_promo.jpg', array('alt' => 'promo', 'border' => '0','height' => '350','width' => '300'))	
			?>
			</div>
			<div class="topBox">
    <h2>Le top 10 Revue</h2>
    <div class="Box">
	        <ol>
	        	 <li><a href="#">test</a></li>
	        	 <li><a href="#">test</a></li>
	        	 <li><a href="#">test</a></li>
	        	 <li><a href="#">test</a></li>
	        	 <li><a href="#">test</a></li>
	        </ol>
    </div>

    </div>
		</div>
		<br class="clear">
		
	</div>
	<div id="footer">
			<div class="footContent">
			<div class="rSocial">
				<h2>FlatScreen<br> <span>Tv Screen addict</span></h2>
				<p>Flatscreen est le site référence des TV shows, celui des accros de la tv, des séries d'hier, d'aujourd'hui et de demain...
					Alors venez partager vos coups de coeur télévisuelle avec nous.</p>
			</div>
			<div class="listTop">

    <dl>
    <dt>Séries du moment</dt>
    <dd><a href="#">Plus belle la vie</a></dd>
    <dd><a href="#">Dr. House</a></dd>
    <dd><a href="#">Mentalist</a></dd>
    <dd><a href="#">Gossip Girl</a></dd>
    <dd><a href="#">Glee</a></dd>
    <dd><a href="#">Dexter</a></dd>
    <dd><a href="#">Desperate Housewives</a></dd>
</dl>
 <dl>
    <dt>Acteur du moment</dt>
    <dd><a href="#">Ryan gosling</a></dd>
    <dd><a href="#">Russel crowe</a></dd>
    <dd><a href="#">Christian Bale</a></dd>
    <dd><a href="#">Idriss Alba</a></dd>
</dl>

			</div>
			</div>
			<div class="subFooter">
				<div class="subContent">

				</div>
			</div>
		</div>
</body>
	<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
	<?php echo $this->Html->script('backstretch.min');?>
	<script>
	$(document).ready(function(){
	$(".highlight").backstretch(["http://www.lintegrateur-web.fr/screen/got.jpg","http://www.lintegrateur-web.fr/screen/Arrow.jpg"], {fade: 500});
	})
	</script>
</html>
