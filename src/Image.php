<?php

namespace VeronQ\ACFU;

/**
 * Class Image
 *
 * @package ACFU\Image
 */
class Image extends ACFU
{

  /**
   * Image constructor.
   *
   * @param  array         $field
   * @param  string        $size
   * @param  string|array  $attr
   */
  public function __construct(
    array $field = [],
    string $size = 'post-thumbnail',
    $attr = ''
  ) {
    $default_attr = [
      'src'   => $size ? $field['sizes'][$size] : $field['url'],
      'alt'   => $field['alt'],
      'title' => $field['title'],
    ];
    $this->handleAttr($attr, $default_attr);
    $this->render();
  }

  public function render(): void
  {
    echo "<img {$this->attr_html} />";
  }

}
