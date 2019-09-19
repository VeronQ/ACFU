<?php

namespace VeronQ\ACFU;

/**
 * Class Link
 *
 * @package ACFU\Link
 */
class Link extends ACFU
{

  protected $slot;


  /**
   * Link constructor.
   *
   * @param  array         $field
   * @param  mixed         $slot
   * @param  string|array  $attr
   */
  public function __construct(
    array $field,
    $slot = '',
    $attr = ''
  ) {
    $default_attr = [
      'href'   => $field['url'],
      'target' => $field['target'],
      'rel'    => strpos($field['url'], $_SERVER['HTTP_HOST'])
        ? ''
        : 'noopener noreferrer',
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
