<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ZPI_from_scratch</title>
    <?php wp_head(); ?>
    <script type="text/javascript">
// <![CDATA[
    var settings = {
        templateDir: '<?php echo get_template_directory_uri();?>'
    };
// ]]>
</script>	    
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.dropdown.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/is.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.izilla.touchMenuHover.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>

<?php wp_head(); ?>
<?php
	/**
	 * Change contrast
	 */
	$_SESSION['contrast_dir'] = '';
	if (!isset($_SESSION['contr'])){
		$_SESSION['contr'] = 0;
	}
	
	if ($_SESSION['contr'] == 1)
	{
		$_SESSION['contrast_dir'] = 'hc/';
	    echo '<link rel="stylesheet" media="all" type="text/css" href="'.  get_template_directory_uri() .'/css/style-contrast.css"/>' . "\r\n";
	}	
	
	/**
	 * Change font size
	 */
	if (!isset($_SESSION['style'])){
		$_SESSION['style'] = '';
	}
		 
	switch ($_SESSION['style']) {
		case 'r1' :
			 echo '<link rel="stylesheet" media="all" type="text/css" href="'.  get_template_directory_uri() .'/css/style-r1.css"/>' . "\r\n";
			break;
		case 'r2' :
			echo '<link rel="stylesheet" media="all" type="text/css" href="'.  get_template_directory_uri() .'/css/style-r2.css"/>' . "\r\n";
			break;
		default : break;
	}
	
	echo '<link rel="stylesheet" media="all" type="text/css" href="'.  get_template_directory_uri() .'/css/responsive.css"/>' . "\r\n";
?>

</head>

<body <?php body_class(); ?>>

    <header>
        <section class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="social-media-icons col-xl-9 col-md-8 col-sm-8 col-6">
                    <div id="font-wrapper">
                <div id="fonts">
                <?php
					echo '<p class="screen-reader-text">Dostosuj wygląd:</p>';
						echo '<ul>';
						echo '<li><a href="'.get_template_directory_uri().'/inc/change-style.php?style=0"  class="font-size0"><img src="'.get_template_directory_uri().'/images/'.$_SESSION['contrast_dir'].'fontSize0.png" alt="Czcionka domyślna"/></a></li>';
						echo '<li><a href="'.get_template_directory_uri().'/inc/change-style.php?style=r1" class="font-size1"><img src="'.get_template_directory_uri().'/images/'.$_SESSION['contrast_dir'].'fontSize1.png" alt="Czcionka średnia"/></a></li>';
						echo '<li><a href="'.get_template_directory_uri().'/inc/change-style.php?style=r2" class="font-size2"><img src="'.get_template_directory_uri().'/images/'.$_SESSION['contrast_dir'].'fontSize2.png" alt="Czcionka duża"/></a></li>';
						
					if ($_SESSION['contr'] == 0)
						$set_contrast = 1;
					else
						$set_contrast = 0;
					echo '<li><a href="'.get_template_directory_uri().'/inc/change-style.php?contr='.$set_contrast.'" class="font-contrast"><img src="'.get_template_directory_uri().'/images/'.$_SESSION['contrast_dir'].'icoContrast.png" alt="Zmień kontrast"/></a></li>';
						echo '</ul>'; 
                ?> 
                <div class="clear"></div>
                </div>
            </div>
                    </div>
                    <div class="search col-xl-3 col-md-4 col-sm-4 col-6 text-end"><?php get_search_form() ?></div>
                </div>
            </div>

        </section>
        <section class="menu-area">
            <div class="container">
                <div class="align">
                    <div class="row">
                        <section class="logo col-md-2 col-sm-12 col-12 text-center"><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $_SESSION['contrast_dir']; ?>Mainlogo.png" alt="Logo skałada się z napisu WCAG 2.0 baj DK. Poniżej jest elipsa z iksem w środku."/></section>
                        <nav class="main-menu col-md-10 text-end">
							
                            <?php wp_nav_menu( array( 'theme_location' => 'my_main_menu' )); ?>
                        </nav>
                    </div>
                </div>
            </div>

        </section>
    </header>