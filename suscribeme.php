<?php
/*

Plugin Name: SuscribeMe!
Plugin URI: http://elotroyo.co.cc/proyectos/suscribeme
Description: Insert web reading RSS in you blog. Add code <code>&lt;?php if(function_exists('suscribeme')) suscribeme();?&gt;</code> in any archive you blog, configure options, and discover!.
Version: 2.0
Author: ejner69
Author URI: http://elotroyo.co.cc/

*/ 

function sscrbm_options() {
$bmcbs = $sscrbm = get_option('suscribeme_options');
if(isset($_POST['submitted'])){
        //Get form data
		$sscrbm['newsgator'] = strip_tags(stripslashes($_POST["newsgator"]));
		$sscrbm['bloglines'] = strip_tags(stripslashes($_POST["bloglines"]));
		$sscrbm['netvibes'] = strip_tags(stripslashes($_POST["netvibes"]));
		$sscrbm['google'] = strip_tags(stripslashes($_POST["google"]));
		$sscrbm['pageflakes'] = strip_tags(stripslashes($_POST["pageflakes"]));
		$sscrbm['plusmo'] = strip_tags(stripslashes($_POST["plusmo"]));
		$sscrbm['live'] = strip_tags(stripslashes($_POST["live"]));
		$sscrbm['bitty'] = strip_tags(stripslashes($_POST["bitty"]));
		$sscrbm['dictionary'] = strip_tags(stripslashes($_POST["dictionary"]));
		$sscrbm['yahoo'] = strip_tags(stripslashes($_POST["yahoo"]));
		$sscrbm['excite'] = strip_tags(stripslashes($_POST["excite"]));
		$sscrbm['yourminis'] = strip_tags(stripslashes($_POST["yourminis"]));
		$sscrbm['attensa'] = strip_tags(stripslashes($_POST["attensa"]));
		$sscrbm['webwag'] = strip_tags(stripslashes($_POST["webwag"]));
		$sscrbm['hub'] = strip_tags(stripslashes($_POST["hub"]));
		$sscrbm['wikio'] = strip_tags(stripslashes($_POST["wikio"]));
		$sscrbm['netvibes'] = strip_tags(stripslashes($_POST["netvibes"]));
		$sscrbm['podnova'] = strip_tags(stripslashes($_POST["podnova"]));
		$sscrbm['odeo'] = strip_tags(stripslashes($_POST["odeo"]));
		$sscrbm['podcastready'] = strip_tags(stripslashes($_POST["podcastready"]));
		$sscrbm['itunes'] = strip_tags(stripslashes($_POST["itunes"]));
		$imagenes = WP_CONTENT_URL.'/plugins/'.plugin_basename(dirname(__FILE__)).'/images/';

		//Update plugin options
        update_option('suscribeme_options', $sscrbm);
        echo '<div id="message" class="updated fade"><p><strong>Opciones Guardadas</strong></p></div>';
    }

	if ( $bmcbs != $sscrbm ) {
		$bmcbs = $sscrbm;
		update_option('suscribeme_options', $bmcbs);
	} ?>
<form method="post" action="<?php echo get_bloginfo('wpurl');?>/wp-admin/options-general.php?page=suscribe-me/suscribeme.php">
<div class="wrap">
<h2>SuscribeMe! 2.0</h2>
<table class="widefat" cellspacing="0" id="">
<thead>
<tr>
<th scope="col">Feeds</th>
<th scope="col"></th>
<th scope="col"></th>
<th scope="col"></th>
</tr>
<tr>
	<td width="100"><input type="checkbox" name="newsgator" value="true"
	<?php if( $sscrbm['newsgator'] == "true" ){ echo ' checked="checked"'; }?>>
	</input> <img src="<?php echo WP_CONTENT_URL;?>/plugins/suscribe-me/images/newsgator.gif" title="Newstagor" /></td>
	<td width="100"><input type="checkbox" name="bloglines" value="true"
	<?php if( $sscrbm['bloglines'] == "true" ){ echo ' checked="checked"'; }?>>
	</input> <img src="<?php echo WP_CONTENT_URL;?>/plugins/suscribe-me/images/bloglines.gif" title="Bloglines" /></td>
	<td width="100"><input type="checkbox" name="google" value="true"
	<?php if( $sscrbm['google'] == "true" ){ echo ' checked="checked"'; }?>>
	</input> <img src="<?php echo WP_CONTENT_URL;?>/plugins/suscribe-me/images/google.gif" title="Google Reader - iGoogle" /></td>
	<td width="100"><input type="checkbox" name="live" value="true"
	<?php if( $sscrbm['live'] == "true" ){ echo ' checked="checked"'; }?>>
	</input> <img src="<?php echo WP_CONTENT_URL;?>/plugins/suscribe-me/images/live.gif" title="Windows Live" /></td>
</tr>
<tr>
    <td width="100"><input type="checkbox" name="pageflakes" value="true"
	<?php if( $sscrbm['pageflakes'] == "true" ){ echo ' checked="checked"'; }?>>
	</input> <img src="<?php echo WP_CONTENT_URL;?>/plugins/suscribe-me/images/pageflakes.gif" title="PagesFlakes" /></td>
    <td width="100"><input type="checkbox" name="plusmo" value="true"
	<?php if( $sscrbm['plusmo'] == "true" ){ echo ' checked="checked"'; }?>>
	</input> <img src="<?php echo WP_CONTENT_URL;?>/plugins/suscribe-me/images/plusmo.gif" title="Plusmo" /></td>
	<td width="100"><input type="checkbox" name="bitty" value="true"
	<?php if( $sscrbm['bitty'] == "true" ){ echo ' checked="checked"'; }?>>
	</input> <img src="<?php echo WP_CONTENT_URL;?>/plugins/suscribe-me/images/bitty.gif" title="Bitty Browser" /></td>
    <td width="100"><input type="checkbox" name="dictionary" value="true"
	<?php if( $sscrbm['dictionary'] == "true" ){ echo ' checked="checked"'; }?>>
	</input> <img src="<?php echo WP_CONTENT_URL;?>/plugins/suscribe-me/images/dictionary.gif" title="The Free Dictionary" /></td>
</tr>
<tr>
    <td width="100"><input type="checkbox" name="yahoo" value="true"
	<?php if( $sscrbm['yahoo'] == "true" ){ echo ' checked="checked"'; }?>>
	</input> <img src="<?php echo WP_CONTENT_URL;?>/plugins/suscribe-me/images/yahoo.gif" title="My Yahoo!" /></td>
    <td width="100"><input type="checkbox" name="excite" value="true"
	<?php if( $sscrbm['excite'] == "true" ){ echo ' checked="checked"'; }?>>
	</input> <img src="<?php echo WP_CONTENT_URL;?>/plugins/suscribe-me/images/excite.gif" title="Excite Mix" /></td>
    <td width="100"><input type="checkbox" name="yourminis" value="true"
	<?php if( $sscrbm['yourminis'] == "true" ){ echo ' checked="checked"'; }?>>
	</input> <img src="<?php echo WP_CONTENT_URL;?>/plugins/suscribe-me/images/yourminis.gif" title="YourMinis" /></td>
    <td width="100"><input type="checkbox" name="attensa" value="true"
	<?php if( $sscrbm['attensa'] == "true" ){ echo ' checked="checked"'; }?>>
	</input> <img src="<?php echo WP_CONTENT_URL;?>/plugins/suscribe-me/images/attensa.gif" title="Attensa" /></td>
</tr>
<tr>
    <td width="100"><input type="checkbox" name="webwag" value="true"
	<?php if( $sscrbm['webwag'] == "true" ){ echo ' checked="checked"'; }?>>
	</input> <img src="<?php echo WP_CONTENT_URL;?>/plugins/suscribe-me/images/webwag.gif" title="WebWag" /></td>
    <td width="100"><input type="checkbox" name="hub" value="true"
	<?php if( $sscrbm['hub'] == "true" ){ echo ' checked="checked"'; }?>>
	</input> <img src="<?php echo WP_CONTENT_URL;?>/plugins/suscribe-me/images/hub.gif" title="netomat Hub" /></td>
	<td width="100"><input type="checkbox" name="wikio" value="true"
	<?php if( $sscrbm['wikio'] == "true" ){ echo ' checked="checked"'; }?>>
	</input> <img src="<?php echo WP_CONTENT_URL;?>/plugins/suscribe-me/images/wikio.gif" title="Wikio" /></td>
	<td width="100"><input type="checkbox" name="netvibes" value="true"
	<?php if( $sscrbm['netvibes'] == "true" ){ echo ' checked="checked"'; }?>>
	</input> <img src="<?php echo WP_CONTENT_URL;?>/plugins/suscribe-me/images/netvibes.gif" title="Netvibes" /></td>
</tr>
</td>
<tr>
<th scope="col">Podcasts</th>
<th scope="col"></th>
<th scope="col"></th>
<th scope="col"></th>
</tr>
<tr>
	<td width="100"><input type="checkbox" name="podnova" value="true"
	<?php if( $sscrbm['podnova'] == "true" ){ echo ' checked="checked"'; }?>>
	</input> <img src="<?php echo WP_CONTENT_URL;?>/plugins/suscribe-me/images/podnova.gif" title="Podnova" /></td>
	<td width="100"><input type="checkbox" name="odeo" value="true"
	<?php if( $sscrbm['odeo'] == "true" ){ echo ' checked="checked"'; }?>>
	</input><img src="<?php echo WP_CONTENT_URL;?>/plugins/suscribe-me/images/odeo.gif" title="Odeo" /></td>
	<td width="100"><input type="checkbox" name="podcastready" value="true"
	<?php if( $sscrbm['podcastready'] == "true" ){ echo ' checked="checked"'; }?>>
	</input> <img src="<?php echo WP_CONTENT_URL;?>/plugins/suscribe-me/images/podcastready.gif" title="PodcastReady" /></td>
	<td width="100"><input type="checkbox" name="itunes" value="true"
	<?php if( $sscrbm['itunes'] == "true" ){ echo ' checked="checked"'; }?>>
	</input> <img src="<?php echo WP_CONTENT_URL;?>/plugins/suscribe-me/images/itunes.gif" title="iTunes" /></td>
</tr>
</td>
</thead>
</table>
<div style="font-style: italic; padding-bottom: 5px; margin-top: 5px; font-size: 9px;">* Para mejor visualización, <strong>no active todos los servicios</strong>. Se recomienda mantener un máximo de 10 servicios activados.</div>
<div style="padding-bottom: 5px; margin-top: 5px; font-size: 12px;">A menos que sea podcaster, <strong>no active los lectores de podcasts</strong> ya que no le serán de utilidad.</div>
<h3>FeedBurner</h3>
<div style="padding-bottom: 5px; margin-top: 5px; font-size: 11px;">Es altamente recomendable utilizar una cuenta en FeedBurner para administrar las suscripciones a tu feed. Si ya tienes una cuenta, puedes asociarla instalando el plugin <a href="http://www.google.com/support/feedburner/bin/answer.py?hl=en&answer=78483" target="_blank">FeedBurner FeedSmith</a> para redirigir tus suscriptores a tu cuenta de FeedBurner. Si no tienes una cuenta, puedes crearla <a href="http://feedburner.google.com" target="_blank">desde aquí</a>. De todas formas, no es necesario tener un cuenta en FeedBurner para que SuscribeMe! funcione correctamente.</div>

<p></p>
<b>Versión:</b> 2.0-staylok (14 de Marzo, 2009)<br /><b>Compatibilidad:</b> WordPress 2.7 o superior.<br /> Desarrollado por <strong><a href="http://elotroyo.co.cc/" target="_blank">ejner69</a></strong>.
<p class="submit">
<input name="submitted" type="hidden" value="yes" />
<input type="submit" name="update-options" class="button-primary" value="Guardar Configuración &raquo;" />
<input type="reset" name="reset-options" class="button-secondary" value="Cancelar cambios actuales &raquo;" />

<center>[<a href="http://elotroyo.co.cc/proyectos/suscribeme" target="_blank">Página oficial</a>] [<a href="http://wordpress.org/extend/plugins/suscribe-me" target="_blank">Repositorio oficial de WordPress</a>]</center>
</form></div>

<?php }
function suscribeme($before=' ', $after='') {
    //Get plugin option to check if we want to show the intro
        $sscrbm = get_option('suscribeme_options'); //Get option title
		$ninguno='true';
	
	   $images = WP_CONTENT_URL.'/plugins/'.plugin_basename(dirname(__FILE__)).'/images/';
	   $feed = get_feed_link();

	    echo ''.$before;
  		echo '<div class="sscrbm">';
		echo '<table align="left" border="0" cellpadding="0" width="100%">';
		echo '<tr>';
		echo '<td>';
    	echo ''.$after;

        if( $sscrbm['newsgator'] == "true" ){ 
 			echo "".$before;
		  	echo "<span class='sscrbm_push'><a href='http://www.newsgator.com/ngs/subscriber/subext.aspx?url=$feed' title='newsgator' target='_blank' rel='nofollow'><img src='$images/newsgator.gif' alt='' class='sus_img' border='none'/></a></span>";
        	echo "".$after;       	
			$ninguno="false";
        }
        if( $sscrbm['bloglines'] == "true" ){ 
	        echo "".$before;
	  		echo "<span class='sscrbm_push'><a href='http://www.bloglines.com/sub/$feed' title='Bloglines' target='_blank' rel='nofollow'><img src='$images/bloglines.gif' alt=''  class='sus_img' border='none'/></a></span>";
	        echo "".$after;
			$ninguno="false";
        }
        if( $sscrbm['netvibes'] == "true" ){ 
        	echo "".$before;
  			echo "<span class='sscrbm_push'><a href='http://www.netvibes.com/subscribe.php?url=$feed' title='Netvibes' target='_blank' rel='nofollow'><img src='$images/netvibes.gif'  alt='' class='sus_img' border='none'/></a></span>";
        	echo "".$after;
			$ninguno="false";
        }
        if( $sscrbm['google'] == "true" ){ 
	        echo "".$before;
	  		echo "<span class='sscrbm_push'><a href='http://fusion.google.com/add?feedurl=$feed' title='Google' target='_blank' rel='nofollow'><img src='$images/google.gif' alt='' class='sus_img' border='none'/></a></span>";
	        echo "".$after;
			$ninguno="false";
        }
        if( $sscrbm['pageflakes'] == "true" ){ 
	        echo "".$before;
	  		echo "<span class='sscrbm_push'><a href='http://www.pageflakes.com/faves?add=$feed' title='Pageflakes' target='_blank' rel='nofollow'><img src='$images/pageflakes.gif' alt='' class='sus_img' border='none'/></a></span>";
	        echo "".$after;
			$ninguno="false";
        }
        if( $sscrbm['plusmo'] == "true" ){ 
	        echo "".$before;
	  		echo "<span class='sscrbm_push'><a href='http://www.plusmo.com/add?url=$feed' title='Plusmo' target='_blank' rel='nofollow'><img src='$images/plusmo.gif' alt='' class='sus_img' border='none'/></a></span>";
	        echo "".$after;
			$ninguno="false";
        }
        if( $sscrbm['live'] == "true" ){ 
	        echo "".$before;
	  		echo "<span class='sscrbm_push'><a href='http://www.live.com/?add=$feed' title='Windows Live' target='_blank' rel='nofollow'><img src='$images/live.gif' alt='' class='sus_img' border='none'/></a></span>";
	        echo "".$after;
			$ninguno="false";
        }
        if( $sscrbm['bitty'] == "true" ){ 
	        echo "".$before;
	  		echo "<span class='sscrbm_push'><a href='http://www.bitty.com/manual/?contenttype=rssfeed&amp;contentvalue=$feed' target='_blank' rel='nofollow'><img title='Bitty Browser' src='$images/bitty.gif' alt='' class='sus_img' border='none'/></a></span>";
	        echo "".$after;
			$ninguno="false";
        }
        if( $sscrbm['dictionary'] == "true" ){ 
	        echo "".$before;
	  		echo "<span class='sscrbm_push'><a href='http://www.thefreedictionary.com/_/hp/AddRSS.aspx?$feed' title='The Free Dictionary' target='_blank' rel='nofollow'><img src='$images/dictionary.gif' alt='' class='sus_img' border='none'/></a></span>";
	        echo "".$after;
			$ninguno="false";
        }
        if( $sscrbm['yahoo'] == "true" ){ 
	        echo "".$before;
		  	echo "<span class='sscrbm_push'><a href='http://add.my.yahoo.com/content?lg=es&amp;url=$feed' title='My Yahoo!' target='_blank' rel='nofollow'><img src='$images/yahoo.gif' alt='' class='sus_img' border='none'/></a></span>";
	        echo "".$after;
			$ninguno="false";
		}
		if( $sscrbm['excite'] == "true" ){ 
			echo "".$before;
			echo "<span class='sscrbm_push'><a href='http://mix.excite.eu/add?feedurl=$feed' title='Excite Mix' target='_blank' rel='nofollow'><img src='$images/excite.gif' alt='' class='sus_img' border='none'/></a></span>";
			echo "".$after;
			$ninguno="false";
		}
		if( $sscrbm['yourminis'] == "true" ){ 
			echo "".$before;
			echo "<span class='sscrbm_push'><a href='http://www.yourminis.com/subscribe.aspx?u=$feed' title='YourMinis' target='_blank' rel='nofollow'><img src='$images/yourminis.gif' alt='' class='sus_img' border='none'/></a></span>";
			echo "".$after;
			$ninguno="false";
		}
		if( $sscrbm['attensa'] == "true" ){ 
	        echo "".$before;
		  	echo "<span class='sscrbm_push'><a href='http://download.attensa.com/app/get_attensa.html?feedurl=$feed' title='Attensa' target='_blank' rel='nofollow'><img src='$images/attensa.gif' alt='' class='sus_img' border='none'/></a></span>";
	        echo "".$after;
			$ninguno="false";
		}
		if( $sscrbm['webwag'] == "true" ){ 
			echo "".$before;
			echo "<span class='sscrbm_push'><a href='http://www.webwag.com/wwgthis.php?url=$feed' title='Webwag' target='_blank' rel='nofollow'><img src='$images/webwag.gif' alt='' class='sus_img' border='none'/></a></span>";
			echo "".$after;
			$ninguno="false";
		}
		if( $sscrbm['hub'] == "true" ){ 
			echo "".$before;
			echo "<span class='sscrbm_push'><a href='http://hub.netomat.net/account/account.autoSubscribe.jspa?urls=$feed' title='netomat Hub' target='_blank' rel='nofollow'><img src='$images/hub.gif' alt='' class='sus_img' border='none'/></a></span>";
			echo "".$after;
			$ninguno="false";
		}
		if( $sscrbm['wikio'] == "true" ){ 
			echo "".$before;
			echo "<span class='sscrbm_push'><a href='http://www.wikio.com/subscribe?url=$feed' title='Wikio' target='_blank' rel='nofollow'><img src='$images/wikio.gif' alt='' class='sus_img' border='none'/></a></span>";
			echo "".$after;
			$ninguno="false";
		}
		if( $sscrbm['podnova'] == "true" ){ 
			echo "".$before;
			echo "<span class='sscrbm_push'><a href='http://www.podnova.com/add.srf?url=$feed' title='Podnova' target='_blank' rel='nofollow'><img src='$images/podnova.gif' alt='' class='sus_img' border='none'/></a></span>";
			echo "".$after;
			$ninguno="false";
		}
		if( $sscrbm['odeo'] == "true" ){ 
			echo "".$before;
			echo "<span class='sscrbm_push'><a href='http://odeo.com/listen/subscribe?feed=$feed' title='Odeo' target='_blank' rel='nofollow'><img src='$images/odeo.gif' alt='' class='sus_img' border='none'/></a></span>";
			echo "".$after;
			$ninguno="false";
		}
		if( $sscrbm['podcastready'] == "true" ){ 
			echo "".$before;
			echo "<span class='sscrbm_push'><a href='http://www.podcastready.com/oneclick_bookmark.php?url=$feed' title='PodcastReady' target='_blank' rel='nofollow'><img src='$images/podcastready.gif' alt='' class='sus_img' border='none'/></a></span>";
			echo "".$after;
			$ninguno="false";
		}
		if( $sscrbm['itunes'] == "true" ){ 
			echo "".$before;
			echo "<span class='sscrbm_push'><a href='itpc://".preg_replace('/^http?:\/\//', '', get_feed_link())."' title='iTunes' rel='nofollow'><img src='$images/itunes.gif' alt='' class='sus_img' border='none'/></a></span>";
			echo "".$after;
			$ninguno="false";
		}
        echo ''.$before;
        if( $ninguno == "true" ){ 
		echo "<span style='font-weight: bold;'>Ups!.</span> Ocurrio un error. Trabajamos en el, no te preocupes.</a>";
		}
  		echo "</td></tr></table><br/><br/></div>";
        echo "".$after;

}

function suscribeme_style () {
     echo '<link rel="stylesheet" href="'.WP_CONTENT_URL.'/plugins/'.plugin_basename(dirname(__FILE__)).'/style.css" type="text/css" />';
}

function suscribeme_add_pages() {
    add_submenu_page('options-general.php', 'SuscribeMe!', 'SuscribeMe!', 10, __FILE__, 'sscrbm_options');
}

//Function to create the vars in the database
function suscribeme_install () {
     $sscrbm = get_option('suscribeme_options');
	 $sscrbm['newsgator'] = 'true';
	 $sscrbm['bloglines'] = 'true';
	 $sscrbm['netvibes'] = 'true';
	 $sscrbm['google'] = 'true';
	 $sscrbm['pageflakes'] = 'false';
	 $sscrbm['plusmo'] = 'false';
	 $sscrbm['live'] = 'true';
	 $sscrbm['bitty'] = 'true';
	 $sscrbm['dictionary'] = 'false';
	 $sscrbm['yahoo'] = 'true';
	 $sscrbm['excite'] = 'false';
	 $sscrbm['yourminis'] = 'false';
	 $sscrbm['attensa'] = 'true';
	 $sscrbm['webwag'] = 'false';
	 $sscrbm['hub'] = 'false';
	 $sscrbm['wikio'] = 'true';
	 $sscrbm['netvibes'] = 'true';
	 $sscrbm['podnova'] = 'false';
	 $sscrbm['odeo'] = 'false';
	 $sscrbm['podcastready'] = 'false';
	 $sscrbm['itunes'] = 'false';
     add_option('suscribeme_options',$sscrbm);
      
}

//Function to delete the vars from the database
function suscribeme_uninstall () {
     delete_option('suscribeme_options');
}

add_action('wp_head', 'suscribeme_style');
add_action('admin_menu', 'suscribeme_add_pages');
register_activation_hook(__FILE__,'suscribeme_install');
register_deactivation_hook(__FILE__,'suscribeme_uninstall');
?>