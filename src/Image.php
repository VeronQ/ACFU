<?php

namespace VeronQ\ACFU;

/**
 * Class Image
 *
 * @package ACFU\Image
 */
class Image {
  protected $src;
  protected $alt;
  protected $title;
  protected $classes;

  /**
   * Image constructor.
   *
   * @param array  $field
   * @param string $size
   * @param string $classes
   */
  public function __construct( array $field = [], string $size = '', string $classes = '' ) {
    $this->src     = $size ? $field['sizes'][ $size ] : $field['url'];
    $this->alt     = $field['alt'] ? "alt=\"{$field['alt']}\"" : null;
    $this->title   = $field['title'] ? "title=\"{$field['title']}\"" : null;
    $this->classes = $classes ? "class=\"{$classes}\"" : null;

    $this->render();
  }

  public function render(): void {
    if ( empty ( $this->src ) ) {
      return;
    }
    echo "<img src=\"{$this->src}\" {$this->alt} {$this->title} {$this->classes} />";
  }
}
