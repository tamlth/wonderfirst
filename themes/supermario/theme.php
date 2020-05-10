<?php global $Wcms ?>

<!DOCTYPE html>
<html lang="en">
    <head>
    	<meta charset="UTF-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	
        <title><?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?></title>
        <meta name="description" content="<?= $Wcms->page('description') ?>">
        <meta name="keywords" content="<?= $Wcms->page('keywords') ?>">
    	<link href="<?= $Wcms->asset('favicon.ico')?>" rel="shortcut icon" type="image/x-icon" />

    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="<?= $Wcms->asset('css/style.css')?>">
        <?= $Wcms->css() ?>

    </head>

    <body>
        <?= $Wcms->settings() ?>
        <?= $Wcms->alerts() ?>
    
        <div id="sun"></div>
    	<nav class="navbar navbar-default">
    		<div class="container">
    			<div class="col-sm-5 text-center">
    				<div class="navbar-header">
    					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navMobile">&#9776;</button>
    					<a href="<?= $Wcms->url() ?>">
    					    <h3><?= $Wcms->get('config', 'siteTitle') ?><span class="navbar" id="logo"></span></h3>
    					</a>
    				</div>
    			</div>
    			<div class="col-sm-7 text-center">
    				<div class="collapse navbar-collapse" id="navMobile">
    					<ul class="nav navbar-nav navbar-right">
                            <?= $Wcms->menu() ?>
    
    					</ul>
    				</div>
    			</div>
    		</div>
    	</nav>
    
    	<div class="container">
    		<div class="col-xs-12 col-sm-8">
    			<div class="whiteBackground grayFont padding20 rounded5">
    				<?= $Wcms->page('content')?>
    
    			</div>
    		</div>
    		<div class="col-xs-12 col-sm-4">
    			<div class="visible-xs spacer20"></div>
    			<div class="blueBackground padding20 rounded5">
    				<?= $Wcms->block('subside')?>
    
    				<br>
    				<!-- Add font awesome icons below this comment -->
    
    				<!-- Add font awesome icons above this comment -->
    			</div>
    		</div>
    	</div>
    
    	<footer class="container-fluid">
    		<div class="padding20 text-right">
                <?= $Wcms->footer() ?>
    		</div>
    	</footer>
    
        <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <?= $Wcms->js() ?>

    	<div id="scroller" class="b-top" style="display: none;"><span class="b-top-but">Back to top</span></div>
    	<script type="text/javascript">
        	$(document).ready(function() {
        		$("body").css("display", "none");
        		$("body").fadeIn(1000);

        		$("a.fade").click(function(event){
        			event.preventDefault();
        			linkLocation = this.href;
        			$("body").fadeOut(1000, redirectPage);
        		});
        		function redirectPage() {
        			window.location = linkLocation;
        		}
        	});
    	</script>
    	<script type="text/javascript">
    		$(document).ready(function(){
    			$(window).scroll(function () {if ($(this).scrollTop() > 0) {$('#scroller').fadeIn();} else {$('#scroller').fadeOut();}});
    			$('#scroller').click(function () {$('body,html').animate({scrollTop: 0}, 400); return false;});
    		});
    	</script>
    </body>
</html>
