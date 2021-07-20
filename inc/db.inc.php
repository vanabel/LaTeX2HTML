<?php
defined( 'ABSPATH' ) OR exit;

if( !interface_exists( 'l2h_db_interface' ) )
{
  interface l2h_db_interface{
    public function l2h_db_create();
    public static function l2h_db_update( array $bibdata );
    public static function l2h_db_drop( $dbname );
  }
}

if( !class_exists( 'l2h_db_class' ) )
{
  class l2h_db_class implements l2h_db_interface
  {
    private $l2h_db_version = l2h_main_class::l2hdbVER;

    public function l2h_db_create()
    {
      global $wpdb;
      $tab_name = $wpdb->prefix . 'l2hbibtex';
      $charset_collate = $wpdb->get_charset_collate();
      $sql = "CREATE TABLE $tab_name (
        id mediumint NOT NULL AUTO_INCREMENT,
        type text NOT NULL,
        bibkey text NOT NULL,
        author tinytext NOT NULL,
        title text,
        series tinytext,
        edition tinytext,
        publisher text,
        year YEAR(4) NOT NULL,
        booktitle text,
        editor tinytext,
        journal tinytext,
        fjournal tinytext,
        school tinytext DEFAULT '',
        volume tinytext,
        number tinytext,
        pages tinytext,
        doi tinytext, 
        issn tinytext,
        mrnumber tinytext,
        note text DEFAULT '' NOT NULL,
        implementationurl tinytext DEFAULT '' NOT NULL,
        paperurl tinytext DEFAULT '' NOT NULL,
        tags tinytext DEFAULT '' NOT NULL,
        `creation_time` timestamp DEFAULT 0 NOT NULL,
        `update_time` timestamp DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,	
        PRIMARY KEY (id)
      ) $charset_collate;";
      require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
      dbDelta( $sql );
    }

    public static function l2h_db_update( array $bibdata )
    {
      global $wpdb;
      $tab_name = $wpdb->prefix . 'l2hbibtex';
      $wpdb->insert(
        $tab_name,
        $bibdata
      );
      // var_export($bibdata);
    }

    public static function l2h_db_drop( $dbname )
    {
      global $wpdb;
      $tab_name = $wpdb->prefix . $dbname;
      $sql = "DROP TABLE IF EXISTS `$tab_name`"; 
      $wpdb->query( $sql );
      // reset the db version
      $upgrade_options = get_option( 'l2h_upgrade_options' );
      $upgrade_options['dbVER'] = '1.0.0'; 
      update_option( 'l2h_upgrade_options', $upgrade_options );
    }

    /**
     * Upgrade for database, version:1.0.0
     */
    public static function l2h_db_upgradefrom_100_callback()
    {
      // need to check update_confirm value
      $upgrade_options = get_option( 'l2h_upgrade_options' );
      if( isset( $upgrade_options['upgrade_confirm'] ) && $upgrade_options['upgrade_confirm'] ){
        if( version_compare( $upgrade_options['dbVER'] , '1.0.0' ) > 0 )
          return;

        global $wpdb;
        // First we need to delete the table
        self::l2h_db_drop( 'l2hbibtex' );
        $tab_name = $wpdb->prefix . 'l2hbibtex';
        // new sql datatable
        $sql = "CREATE TABLE $tab_name(
          id mediumint NOT NULL AUTO_INCREMENT,
          type text NOT NULL,
          bibkey text NOT NULL,
          author tinytext NOT NULL,
          title text,
          series tinytext,
          edition tinytext,
          publisher text,
          year YEAR(4) NOT NULL,
          booktitle text,
          editor tinytext,
          journal tinytext,
          fjournal tinytext,
          school tinytext DEFAULT '',
          volume tinytext,
          number tinytext,
          pages tinytext,
          doi tinytext, 
          issn tinytext,
          mrnumber tinytext,
          note text DEFAULT '' NOT NULL,
          implementationurl tinytext DEFAULT '' NOT NULL,
          paperurl tinytext DEFAULT '' NOT NULL,
          tags tinytext DEFAULT '' NOT NULL,
          `creation_time` timestamp DEFAULT 0 NOT NULL,
          `update_time` timestamp DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,	
          PRIMARY KEY (id)
        );";
        require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
        dbDelta( $sql );
        $upgrade_options['dbVER'] = l2h_settings_class::l2h_upgrade_vernum( '1.0.0'); 
        $upgrade_options['upgrade_confirm']=false;
        update_option( 'l2h_upgrade_options', $upgrade_options );
        //die( get_option('l2h_upgrade_options')['dbVER']);
        echo __( 'The database upgrade successfully!', 'latex2html') ."<br />";
      }else{
        echo __( 'This update will lose your bibtex data, please backup the `wp_l2hbibtex` table at first!' , 'latex2html' ) . "<br />";
      }
    }
/* 
public static function l2h_db_upgradefrom_101_callback()
  {
    if( isset( $upgrade_options['upgrade_confirm'] ) && $upgrade_options['upgrade_confirm'] ){
      $upgrade_options = get_option( 'l2h_upgrade_options' );
      if( version_compare( $upgrade_options['dbVER'] , '1.0.1' ) > 0 )
        return;


      $upgrade_options['dbVER'] = l2h_settings_class::l2h_upgrade_vernum( '1.0.1'); 
      $upgrade_options['upgrade_confirm']=false;
      update_option( 'l2h_upgrade_options', $upgrade_options );
    }
*/

/*
  public static function l2h_db_upgradefrom_110_callback()
  {
    if( isset( $upgrade_options['upgrade_confirm'] ) && $upgrade_options['upgrade_confirm'] ){
      $upgrade_options = get_option( 'l2h_upgrade_options' );
      if( version_compare( $upgrade_options['dbVER'] , '1.1.0' ) > 0 )
        return;
    }
  }
 */
  }
}
