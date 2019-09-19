<?php

namespace VeronQ\ACFU;

/**
 * Class ACFU
 *
 * @package VeronQ
 */
class ACFU
{

  protected $attr_html;

  protected function handleAttr($attr, $default_attr)
  {
    // @see https://developer.wordpress.org/reference/functions/wp_parse_args/
    $attr = wp_parse_args($attr, $default_attr);
    $attr = array_map('esc_attr', $attr);

    foreach (array_filter($attr) as $name => $value) {
      if (is_int($name)) {
        $this->attr_html .= $value;
        continue;
      }
      $this->attr_html .= " $name=".'"'.$value.'"';
    }
  }

}
