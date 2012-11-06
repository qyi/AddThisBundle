
<div class="addthis_toolbox addthis_default_style " <?php echo $custom_share?>>
<a class="addthis_button_preferred_1"></a>
<a class="addthis_button_preferred_2"></a>
<a class="addthis_button_preferred_3"></a>
<a class="addthis_button_preferred_4"></a>
<a class="addthis_button_compact"></a>
<a class="addthis_counter addthis_bubble_style"></a>
</div>
<?php
 	break; 	
 	case 'style_2':
 ?>
<div class="addthis_toolbox addthis_default_style " <?php echo $custom_share?>>
<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
<a class="addthis_button_tweet"></a>
<a class="addthis_counter addthis_pill_style"></a>
</div>
<?php
 	break; 	
 	case 'style_4':
?>
<div class="addthis_toolbox addthis_default_style " <?php echo $custom_share?>>
<a href="http://www.addthis.com/bookmark.php?v=250&amp;pubid=xa-4f0d95b663c861f6" class="addthis_button_compact">Share</a>
<span class="addthis_separator">|</span>
<a class="addthis_button_preferred_1"></a>
<a class="addthis_button_preferred_2"></a>
<a class="addthis_button_preferred_3"></a>
<a class="addthis_button_preferred_4"></a>
</div>
<?php
 	break; 	
 	case 'style_5':
?>
<div class="addthis_toolbox addthis_default_style " <?php echo $custom_share?>>
<a href="http://www.addthis.com/bookmark.php?v=250&amp;pubid=xa-4f0d960e09c42ec4" class="addthis_button_compact">Share</a>
</div>
<?php
 	break; 	
 	case 'style_6':
?>
<div class="addthis_toolbox addthis_default_style " <?php echo $custom_share?>>
<a class="addthis_counter addthis_pill_style"></a>
</div>
<?php
 	break; 	
 	case 'style_7':
?>
<div class="addthis_toolbox addthis_default_style " <?php echo $custom_share?>>
<a class="addthis_counter"></a>
</div>
<?php
 	break; 	
 	case 'style_8':
?>
<a class="addthis_button" href="http://www.addthis.com/bookmark.php?v=250" <?php echo $custom_share?>>
<img src="http://s7.addthis.com/static/btn/sm-plus.gif" alt="Bookmark and Share" style="border:0"/></a>
<?php
 	break; 	
 	case 'style_9':
 	$custom_button_url = $this->getCustomButtonUrl();
?>
<a class="addthis_button" href="http://www.addthis.com/bookmark.php?v=250" <?php echo $custom_share?>>
<img src="<?php echo $custom_button_url ?>" alt="Bookmark and Share" style="border:0"/></a>
<?php
 	break; 	
 	default:
?>
<div class="addthis_toolbox addthis_default_style addthis_32x32_style" <?php echo $custom_share?>>
<a class="addthis_button_preferred_1"></a>
<a class="addthis_button_preferred_2"></a>
<a class="addthis_button_preferred_3"></a>
<a class="addthis_button_preferred_4"></a>
<a class="addthis_button_compact"></a>
<a class="addthis_counter addthis_bubble_style"></a>
</div>  
<?php
 }//switch ends	
?>
<script type="text/javascript" src="http://s7.addthis.com/js/<?php echo $menu_version;?>/addthis_widget.js#pubid=xa-4f0c254f1302adf8"></script>
<!-- AddThis Button END -->
<?php
endif; //if plugin not enabled
?>