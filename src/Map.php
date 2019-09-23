<?php

namespace VeronQ\ACFU;

/**
 * Class Map
 *
 * @package ACFU\Map
 */
class Map extends ACFU
{

  /**
   * Map constructor.
   *
   * @param  array         $field
   * @param  string|array  $attr
   */
  public function __construct(
    array $field,
    $attr = ''
  ) {
    $default_attr = [
      'data-lat'     => $field['lat'],
      'data-lng'     => $field['lng'],
      'data-address' => $field['address'],
    ];
    $this->handleAttr($attr, $default_attr);
    $this->render();
  }

  public function render(): void
  {
    echo "<div {$this->attr_html}></div>";
  }

}
