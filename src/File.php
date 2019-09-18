<?php

namespace VeronQ\ACFU;

/**
 * Class File
 *
 * @package ACFU\File
 */
class File
{

  protected $url;

  protected $classes;

  protected $slot;

  /**
   * Link constructor.
   *
   * @param  array   $field
   * @param  string  $classes
   * @param  mixed   $slot
   */
  public function __construct(
    array $field = [],
    string $classes = '',
    $slot = null
  ) {
    $this->url     = $field['url'];
    $this->classes = $classes ? "class=\"{$classes}\"" : null;
    $this->slot    = $slot ?? $field['title'];

    $this->render();
  }

  public function render(): void
  {
    if (empty ($this->url)) {
      return;
    }
    echo "<a href=\"{$this->url}\" {$this->classes} download>
			      {$this->slot}
			    </a>";
  }

}
