<?php

function use_javascript_host($js, $position = '', $options = array())
{
  $host = sfConfig::get('app_assets_host');
  
  if (!is_null($host))
    $js = sprintf($host, $js);
    
  use_javascript($js, $position, $options);
}

function use_stylesheet_host($css, $position = '', $options = array())
{
  $host = sfConfig::get('app_assets_host');
  
  if (!is_null($host))
    $css = sprintf($host, $css);
    
  use_stylesheet($css, $position, $options);
}