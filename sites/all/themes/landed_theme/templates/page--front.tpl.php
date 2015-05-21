<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/garland.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 */
 
 $theme_path =  drupal_get_path('theme','landed_theme')
 
?>

   <div id="header-wrap" class="clr fixed-header">
    <!-- Header -->
    <header id="header">
       <div id="logo" class="clr">
        <?php if (theme_get_setting('image_logo','landed_theme')): ?>
        <?php if ($logo): ?><div id="site-logo"><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
        </a></div><?php endif; ?>
        <?php else: ?>
        <h2 id="site-name">
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a>
        </h2>
        <?php endif; ?>
      </div>
      <nav id="nav">
        <ul>
          <li><a href="index.php">Home</a></li>
           <li><a href="#five" class="button special scrolly">Sign Up</a></li>
        </ul>
      </nav>
    </header>
	</div> <br> <br> <br> <?php print $messages; ?>	
    <!-- Banner -->
    <section id="banner">
      <div class="content">	
		<?php if ($page['home_tab_one']): ?>
        <header>
         <?php print render($page['home_tab_one']); ?>
		</header>
      <?php endif; ?>
        <span class="image"><img src="<?php echo $theme_path; ?>/images/uLytics-logo-New-Black.png" alt=""></span>
      </div>
      <a href="#one" class="goto-next scrolly">Next</a> </section>
    <!-- One -->
    <section id="one" class="spotlight style1 bottom"> <span class="image fit main">
	<img    src="<?php echo $theme_path; ?>/images/second.jpeg"
          alt=""></span>
      <div class="content">
        <div class="container">
	   <?php if ($page['home_tab_two']): ?>      
         <?php print render($page['home_tab_two']); ?>		
      <?php endif; ?>
		  
        </div>
      </div>
      <a href="#two" class="goto-next scrolly">Next</a> </section>
    <!-- Two -->
    <section id="two" class="spotlight style2 right"> <span class="image fit main"><img
          src="<?php echo $theme_path; ?>/images/understand.jpeg"
          alt=""></span>
      <div class="content">
	  
	  	   <?php if ($page['home_tab_three']): ?>      
         <?php print render($page['home_tab_three']); ?>		
      <?php endif; ?>
	  
       
        <ul class="actions">
          <li><a href="#five" class="button scrolly">Learn More</a></li>
        </ul>
      </div>
      <a href="#three" class="goto-next scrolly">Next</a> </section>
    <!-- Three -->
    <section id="three" class="spotlight style3 left"> <span class="image fit main bottom"><img
          src="<?php echo $theme_path; ?>/images/acq.jpeg"
          alt=""></span>
      <div class="content">
	  <?php if ($page['home_tab_four']): ?>      
         <?php print render($page['home_tab_four']); ?>		
      <?php endif; ?>

        <ul class="actions">
          <li><a href="#five" class="button scrolly">Learn More</a></li>
        </ul>
      </div>
      <a href="#four" class="goto-next scrolly">Next</a> </section>
    <!-- Four -->
    <section id="four" class="wrapper style1 special fade-up">
      <div class="container">
        <header class="major">
          <h2>Products</h2>
          <p>Acquire, Engage and Convert your customers</p>
        </header>
        <div class="box alt">
          <div class="row uniform">
            <section class="4u 6u(medium) 12u$(xsmall)"> <span class="icon alt major fa-flask"></span>
              <h3><span style="font-style: italic;">u</span>Segment</h3>
              <p>Easily segment your customer database using demographic &amp;
                behavioral attributes.</p>
            </section>
            <section class="4u 6u$(medium) 12u$(xsmall)"> <span class="icon alt major fa-comment"></span>
              <h3><span style="font-style: italic;">u</span>Engage</h3>
              <p>Power your marketing automation system with identified
                segments.</p>
            </section>
            <section class="4u$ 6u(medium) 12u$(xsmall)"> <span class="icon alt major fa-area-chart"></span>
              <h3><span style="font-style: italic;">u</span>Report</h3>
              <p>Measure your ROI on different marketing channels in one place.</p>
            </section>
            <section class="4u 6u$(medium) 12u$(xsmall)"> <span class="icon alt major fa-paper-plane"></span>
              <h3><span style="font-style: italic;">u</span>Owned</h3>
              <p>Transmit personalized communications on your owned media
                channels.</p>
            </section>
            <section class="4u 6u(medium) 12u$(xsmall)"> <span class="icon alt major fa-file"></span>
              <h3><span style="font-style: italic;">u</span>Earned</h3>
              <p>Drive engagement &amp; create viral tendencies through earned
                media.</p>
            </section>
            <section class="4u$ 6u$(medium) 12u$(xsmall)"> <span class="icon alt major fa-lock"></span>
              <h3><span style="font-style: italic;">u</span>Paid</h3>
              <p>Drive Intelligent advertising through paid media outlets.</p>
            </section>
          </div>
        </div>
        <footer class="major">
          <ul class="actions">
            <li><a href="#five" class="button scrolly">Learn More</a></li>
          </ul>
        </footer>
      </div>
    </section>
    <!-- Five -->
    <section id="five" class="wrapper style2 special fade">
      <div class="container">
        <header>
          <h2>Wanna know more?</h2>
          <p>Give us your email and we promise to keep you updated :-)</p>
        </header>
				 <?php print render($page['newsletter']); ?>
      </div>
    </section>
    <!-- Footer -->
    <footer id="footer">
      <ul class="icons">
        <li><a target="_blank" href="https://twitter.com/ulytics" class="icon alt fa-twitter"><span
              class="label">Twitter</span></a><br>
        </li>
        <li><a target="_blank" href="https://www.facebook.com/ulytics" class="icon alt fa-facebook"><span
              class="label">Facebook</span></a><br>
        </li>
        <li><a target="_blank" href="https://www.linkedin.com/company/ulytics" class="icon alt fa-linkedin"><span
              class="label">LinkedIn</span></a><br>
        </li>
        <li><a href="mailto:hello@ulytics.com" class="icon alt fa-envelope"><span
              class="label">Email</span></a><br>
        </li>
      </ul>
      <ul class="copyright">
        <li>© uLytics. All rights reserved.</li>
      </ul>
    </footer>