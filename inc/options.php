<?php
defined( 'ABSPATH' ) OR exit;

if( !interface_exists( 'l2h_default_options_interface' ) )
{
  interface l2h_default_options_interface
  {
    public static function l2h_get_default_options( $ops_name );
    public static function l2h_set_default_options( $ops_name, $elem_name, $elem_value );
    public static function l2h_update_default_options( $ops_name, $ops_value );
  }
}
if( !class_exists( 'l2h_default_options_class' ) )
{
  class l2h_default_options_class implements l2h_default_options_interface
  {
    /**
     * The default options
     */
    public static $mathjax_cdn = "https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.5/MathJax.js?config=TeX-AMS-MML_SVG.js";
    public static $mathjax_config= <<<EOF
MathJax.Hub.Config({
  tex2jax: {
    inlineMath: [['$','$'], ["\\\\(","\\\\)"]],
    displayMath: [['$$', '$$'], ["\\\\[", "\\\\]"]],
    processEscapes: true
  },
  TeX: {
    equationNumbers: {autoNumber: "AMS",
    useLabelIds: true}
  },
}); 
EOF;
    public static $latex_cmd= <<<'EOD'
\newcommand{\eps}{\varepsilon}
\newcommand{\RR}{\mathbb{R}}
\newcommand{\rd}{\operatorname{d}}
\newcommand{\set}[1]{\left\{#1\right\}}
EOD;
    public static $latex_style= <<<EOF
.latex_thm, .latex_lem, .latex_cor, .latex_defn, .latex_prop, .latex_rem{
  margin:0;padding:5px;
  background: lightcyan;
  border: solid 3px green;
  -moz-border-radius: 1.0em;
  -webkit-border-radius: 7px;
  box-shadow: 0 0 0 green;
}
.latex_em{
  font-style: italic;
}
.bibtex_title{
  font-weight:bold;
  color: #004b33;
}
a.bibtex_title{
  text-decoration: none;
}
.latex_proof::after{
  content: "\\220E";
  color: gray;
  text-align: right;
  display: block;
  font-size: 1.2em;
}
EOF;

    static $bibdata_examp = <<<EOF
@article {EinsteinInfeldHoffmann1938Gravitational,
    AUTHOR = {Einstein, A. and Infeld, L. and Hoffmann, B.},
     TITLE = {The gravitational equations and the problem of motion},
   JOURNAL = {Ann. of Math. (2)},
  FJOURNAL = {Annals of Mathematics. Second Series},
    VOLUME = {39},
      YEAR = {1938},
    NUMBER = {1},
     PAGES = {65--100},
      ISSN = {0003-486X},
     CODEN = {ANMAAH},
   MRCLASS = {Contributed Item},
  MRNUMBER = {1503389},
       DOI = {10.2307/1968714},
       URL = {http://dx.doi.org/10.2307/1968714},
}
EOF;
    public static function l2h_get_default_options( $ops_name )
    {
      return get_option( $ops_name );
    }

    public static function l2h_set_default_options( $ops_name, $elem_name, $elem_value )
    {
      if( isset( get_option( $ops_name)[ $elem_name ] ) && get_option( $ops_name)[ $elem_name ] != null ){
        return get_option( $ops_name )[ $elem_name ];
      }else{
        return $elem_value;
      }

    }

    public static function l2h_update_default_options( $ops_name, $ops_value )
    {
      update_option( $ops_name, $ops_value );
    }

    public function __construct()
    {
      $options = self::l2h_get_default_options( 'l2h_options' );
      $upgrade_options = self::l2h_get_default_options( 'l2h_upgrade_options' );
      $options = [
        'enall'		  => self::l2h_set_default_options( 'l2h_options', 'enall', 0 ),
        'single'	  => self::l2h_set_default_options( 'l2h_options', 'single', 0 ),
        'mathjax_cdn'	  => self::l2h_set_default_options( 'l2h_options', 'mathjax_cdn', self::$mathjax_cdn ),
        'mathjax_config'  => self::l2h_set_default_options( 'l2h_options', 'mathjax_config', self::$mathjax_config ),
        'latex_cmd'	  => self::l2h_set_default_options( 'l2h_options', 'latex_cmd', self::$latex_cmd ),
        'latex_style'	  => self::l2h_set_default_options( 'l2h_options', 'latex_style', self::$latex_style )
      ];
      $upgrade_options['VER'] = self::l2h_get_default_options( 'latex2html_mathjax_custom_cdn' ) ? '1.2.3' : l2h_main_class::l2hVER;
      $upgrade_options['dbVER'] = self::l2h_set_default_options( 'l2h_upgrade_options', 'dbVER', '1.0.0' );

      self::l2h_update_default_options( 'l2h_options', $options );
      self::l2h_update_default_options( 'l2h_upgrade_options', $upgrade_options );
    }
  }
}
