<?php
defined( 'ABSPATH' ) OR exit;

if( !class_exists( 'l2h_load_language_class' ) )
{
  class l2h_load_language_class
  {
    public function __construct()
    {
      add_action( 'plugins_loaded', [ $this, 'l2h_load_textdomain' ] );
    }

    public function l2h_load_textdomain()
    {
      load_plugin_textdomain( 'latex2html', FALSE, dirname( plugin_basename( __FILE__ ) ) . '/../langs/' );
    }
  }
}
