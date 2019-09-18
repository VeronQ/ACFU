<?php

namespace VeronQ\ACFU;

/**
 * Class Map
 *
 * @package ACFU\Map
 */
class Map
{

  protected $lat;

  protected $lng;

  protected $address;

  protected $classes;

  /**
   * Map constructor.
   *
   * @param  array   $field
   * @param  string  $classes
   */
  public function __construct(
    array $field = [],
    string $classes = ''
  ) {
    $this->lat     = $field['lat'];
    $this->lng     = $field['lng'];
    $this->address = $field['address'];
    $this->classes = $classes ? "class=\"{$classes}\"" : null;

    $this->render();
  }

  public function render(): void
  {
    echo "<div {$this->classes} data-lat=\"{$this->lat}\" data-lng=\"{$this->lng}\" data-address=\"{$this->address}\"></div>";
  }

}
