<?php

namespace VeronQ\ACFU;

/**
 * Class File
 *
 * @package ACFU\File
 */
class File extends ACFU
{

  protected $slot;

  /**
   * File constructor.
   *
   * @param  array         $field
   * @param  string        $slot
   * @param  string|array  $attr
   */
  public function __construct(
    array $field = [],
    $slot = '',
    $attr = ''
  ) {
    $default_attr = [
      'href'  => $field['url'],
      'title' => $field['filename'],
      'download',
    ];
    $this->slot = $slot ?: $field['title'];
    $this->handleAttr($attr, $default_attr);
    $this->render();
  }

  public function render(): void
  {
    echo "<a {$this->attr_html}>
			      {$this->slot}
			    </a>";
  }

}
