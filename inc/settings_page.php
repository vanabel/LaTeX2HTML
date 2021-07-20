<?php
defined( 'ABSPATH' ) OR exit;
?>
<div class='l2h_wrap'>
  <h1>LaTeX2HTML <?php echo l2h_main_class::l2hVER; ?></h1>
  <div class="about-text">
    <p>
<?php
printf( __( 'Thanks for your updating! %s %s is totally rebuild based on the neweast version of wordpress, I hope you will enjoy it!', 'latex2html'), 'LaTeX2HTML', l2h_main_class::l2hVER );
?>
    </p>
  </div>
<?php
$this->active_tab = isset( $_GET['tab'] ) ? $_GET['tab'] : 'welcome';
?>
<h2 class="nav-tab-wrapper">
  <a href="?page=latex2html&tab=welcome" class="nav-tab <?php echo $this->active_tab == 'welcome' ? 'nav-tab-active' : ''; ?>"><?php echo __( 'What\'s New?', 'latex2html'); ?></a>
  <a href="?page=latex2html&tab=settings" class="nav-tab <?php echo $this->active_tab == 'settings' ? 'nav-tab-active' : ''; ?>"><?php echo __( 'Settings', 'latex2html'); ?></a>
  <a href="?page=latex2html&tab=bibtex" class="nav-tab <?php echo $this->active_tab == 'bibtex' ? 'nav-tab-active' : ''; ?>"><?php echo __( 'BibTeX', 'latex2html'); ?></a>
  <a href="?page=latex2html&tab=support" class="nav-tab <?php echo $this->active_tab == 'support' ? 'nav-tab-active' : ''; ?>"><?php echo __( 'Support &amp; Credit', 'latex2html'); ?></a>
  <a href="?page=latex2html&tab=manual" class="nav-tab <?php echo $this->active_tab == 'manual' ? 'nav-tab-active' : ''; ?>"><?php echo __( 'Manual', 'latex2html'); ?></a><br />
</h2>
<?php
switch( $this->active_tab ){
case 'settings':
  echo "<form action='options.php' method='post'>";
  settings_fields( 'l2h_setting_group' );
  do_settings_sections( 'l2h_setting_page' );
  submit_button( esc_html__( 'Save settings', 'latex2html' ) );
  break;
case 'bibtex':
  echo "<form action='". admin_url( 'admin-post.php' ) . "' method='post'>";
  //settings_fields( 'l2h_bibtex_group' );
  echo "<input type='hidden' name='action' value='bibtex' />";
  wp_nonce_field( $this->action, 'bibtex_nonce', FALSE );

  do_settings_sections( 'l2h_bibtex_page' );
  submit_button( esc_html__( 'Submit', 'latex2html' ) );
  echo "<div class='bibitems'>";
  if( isset( $_GET['status'] ) )
  {
    switch ( $_GET['status'] ){
    case 'success':
      echo "<h3>" . __( 'The following items have been added to the database', 'latex2html') .":</h3><hr />";
      global $wpdb;
      $tab_name = $wpdb->prefix . 'l2hbibtex';
      $bibkeys = explode( ' ', $_GET['bibkeys'] );
      echo "<div class='bibtex'>\n<ol>";
      foreach( $bibkeys as $bibkey ){
	$sql = "SELECT * FROM " . $tab_name . " WHERE `bibkey` = '" . $bibkey . "' LIMIT 1;";
	$bibitem = $wpdb->get_results( $sql, ARRAY_A)[0];
	//die( var_export($bibitem));
	echo l2h_bibtex_class::l2h_bibtex_render( $bibitem );
      }
      echo "</ol></div>";
      break;
    case 'failtowrite':
      echo "<h3>" . __( 'Error', 'latex2html') . "!</h3>";
      echo sprintf( __( "Can't write bibtex data to file %s, please check the file permission!", "latex2html"), '<code>latex2html/inc/bibtex.bib.txt</code>' );
      break;
    default:
      echo "<h3>" . __( 'Error', 'latex2html') . "!</h3>";
      echo sprintf( "<p>" . __( "Please check your bibtex data, the key %s already exists in the database.", 'latex2html') . "</p>", "<strong>" . $_GET['message'] . "</strong>");
    }
  }
  echo "</div>";
  break;
case 'support':
  do_settings_sections( 'l2h_support_page' );
  break;
case 'manual':
  do_settings_sections( 'l2h_manual_page' );
  break;
case 'welcome':
default:
  echo "<form action='options.php' method='post'>";
  settings_fields( 'l2h_upgrade_group' );
  echo "<input type='hidden' name='l2h_upgrade_options[upgrade_confirm]' value='1' />";
  do_settings_sections( 'l2h_upgrade_page' );
  if( version_compare( get_option( 'l2h_upgrade_options')['VER'] , l2h_main_class::l2hVER ) < 0 || version_compare( get_option( 'l2h_upgrade_options' )['dbVER'], l2h_main_class::l2hdbVER ) < 0 )
    submit_button( esc_html__( 'Upgrade', 'latex2html' ) );
}
?>
  </form>
</div>
