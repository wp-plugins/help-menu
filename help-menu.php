<?php

/*
Plugin Name: Help Menu
Version: 1.1
Plugin URI: http://www.reverbstudios.ie/wordpress-help-menu-plugin/
Description: Adds a "Help" Menu and Page in admin with links to Wordpress resources.
Author: Leon Quinn
Author URI: http://www.reverbstudios.ie
*/

// mt_add_pages() is the function for the 'admin_menu' hook
function mt_add_pages() {
    //Add a new top-level menu
    add_menu_page('Wordpress Help', 'Reverb Help','5','help', 'mt_toplevel_page', plugins_url('help-menu/help.png'), 1 );
	// Add Submenus
	add_submenu_page('help', 'Screenshots', 'Screenshots','5','screenshots','mt_submenu_page_screenshots' );
	add_submenu_page('help', 'Videos', 'Video Tutorials','5', 'videos','mt_submenu_page_videos' );
	add_submenu_page('help', 'Links', 'Links & Resources','5', 'links','mt_submenu_page_links' );
}

// mt_toplevel_page() displays the page content for the Toplevel menu
function mt_toplevel_page() {
	
	echo "<div class='wrap'>

			<h2>Wordpress Help</h2>	  

      		<p>You are using the <a href='http://www.wordpress.org' target='_blank'>Wordpress Content Management System</a> as the basis of your site.<br /><br />

	  			Wordpress is widely considered to be one of the easiest and most flexible such systems to use but if you find that you can't get the hang of it on first play then please have a 				look at the Resources left for further help.</p> 
				
				<a href='http://www.reverbstudios.ie' target='_blank' title='Reverb Studios Design' /><img src='../wp-content/plugins/help-menu/reverb-studios-logo.png' /></a>   			
      
      			<p>Leon Quinn<br>
      			<a href='http://www.reverbstudios.ie' target='_blank'>ReverbStudios.ie</a></p>			
		</div>";		  
}

// Displays the submenu content
function mt_submenu_page_screenshots() {
	
	echo "<div class='wrap'>

			<h2>Screenshots</h2>
			
			<p>Some helpful screen grabs pointing out common functions in Wordpress.</p>
			
      		<p><a href='../wp-content/plugins/help-menu/wordpress_manual.pdf' target='_blank'>View/Download these screen shots in PDF form.</a></p>
			
			<h3>Add a Page</h3> 
			
			<img src='../wp-content/plugins/help-menu/wp1.png ' />  
			
			<img src='../wp-content/plugins/help-menu/wp2.png ' />
			
			<h3>Add a Post</h3> 
			
			<img src='../wp-content/plugins/help-menu/wp3.png ' />
			
			<img src='../wp-content/plugins/help-menu/wp4.png ' />
			
			<h3>Add a Link</h3> 
			
			<img src='../wp-content/plugins/help-menu/wp5.png ' />
			
			<img src='../wp-content/plugins/help-menu/wp6.png ' />
			
			<h3>Add a Photo Gallery (Using NextGen)</h3> 
			
			<img src='../wp-content/plugins/help-menu/wp7.png ' />
			
			<img src='../wp-content/plugins/help-menu/wp8.png ' />
			
			<img src='../wp-content/plugins/help-menu/wp9.png ' />
			
			<h3>Add Widgets</h3> 
			
			<img src='../wp-content/plugins/help-menu/wp10.png ' />
			
			<img src='../wp-content/plugins/help-menu/wp11.png ' />
			
			<h3>Re-arrange Admin Screen Content</h3> 
			
			<img src='../wp-content/plugins/help-menu/wp12.png ' />

		</div>";
	 	  
}

// Displays the submenu content
function mt_submenu_page_videos() {
	
	echo "<div class='wrap'>

			<h2>Video Tutorials</h2>
			
			<p>Some helpful Video screen recordings on how to do some of the most common things in Wordpress.</p>
			
			<h3>Wordpress Video Manual</h3>
      
      		<iframe width='853' height='480' src='http://www.youtube.com/embed/l5RHAxJDzV4?rel=0' frameborder='0' allowfullscreen></iframe>
      
      		<h3>Add or Edit a Page in Wordpress</h3>
      
      		<embed type='application/x-shockwave-flash' src='http://s0.videopress.com/player.swf?v=1.03' width='640' height='480' wmode='direct' seamlesstabbing='true' allowfullscreen='true' allowscriptaccess='always' overstretch='true' flashvars='guid=j4FP08Xs&amp;isDynamicSeeking=true'></embed>
      
      		<h3>Add or Edit a Post in Wordpress</h3>
      
      		<embed type='application/x-shockwave-flash' src='http://s0.videopress.com/player.swf?v=1.03' width='640' height='480' wmode='direct' seamlesstabbing='true' allowfullscreen='true' allowscriptaccess='always' overstretch='true' flashvars='guid=a81PKPUD&amp;isDynamicSeeking=true'></embed>
      
      		<h3>Add Photos, Video or Audio to Pages in Wordpress</h3>
      
      		<embed type='application/x-shockwave-flash' src='http://s0.videopress.com/player.swf?v=1.03' width='640' height='480' wmode='direct' seamlesstabbing='true' allowfullscreen='true' allowscriptaccess='always' overstretch='true' flashvars='guid=mAQazAM6&amp;isDynamicSeeking=true'></embed>
      
      		<h3>Add/Edit Widgets in Wordpress</h3>
      
      		<embed type='application/x-shockwave-flash' src='http://s0.videopress.com/player.swf?v=1.03' width='640' height='480' wmode='direct' seamlesstabbing='true' allowfullscreen='true' allowscriptaccess='always' overstretch='true' flashvars='guid=vk0UzFjq&amp;isDynamicSeeking=true'></embed> 

		</div>";
	 	  
}

// Displays the submenu content
function mt_submenu_page_links() {
	
	echo "<div class='wrap'>

			<h2>Links & Resources</h2>

			<h3>Wordpress Visual Manual (PDF)</h3>

      		<p><a href='../wp-content/plugins/help-menu/wordpress_manual.pdf' target='_blank'>View/Download the Manual</a></p>	    

	 		<h3>Official Wordpress Video Tutorial Site</h3>

      		<p><a href='http://wordpress.tv/category/how-to/' target='_blank'>Wordpress.TV Video Tutorials</a></p>  
	  
	 		<h3>Wordpress Support Forums</h3>
	  
      		<p><a href='http://wordpress.org/support/' target='_blank'>Wordpress.org/Support</a></p>

	 		<h3>Twitter</h3>

      		<p><a href='http://twitter.com/wordpress' target='_blank'>Twitter.com/Wordpress</a></p>	  

	 		<h3>Facebook</h3>

      		<p><a href='http://www.facebook.com/WordPress' target='_blank'>Facebook.com/WordPress</a></p>
			
			<h3>Reverb Studios Design</h3>

      		<p><a href='http://www.reverbstudios.ie/category/wordpress-tips' target='_blank'>ReverbStudios.ie/Category/Wordpress-Tips/</a></p>	
      
		</div>";	 	  
}

// Insert the mt_add_pages() sink into the plugin hook list for 'admin_menu'
add_action('admin_menu', 'mt_add_pages');
?>