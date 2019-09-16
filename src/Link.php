<?php

namespace VeronQ\ACFU;

/**
 * Class Link
 *
 * @package ACFU\Link
 */
class Link {
  protected $href;
  protected $target;
  protected $classes;
  protected $slot;
  protected $rel;

  /**
   * Link constructor.
   *
   * @param array  $field
   * @param string $classes
   * @param mixed  $slot
   */
  public function __construct( array $field, string $classes = '', $slot = null ) {
    $this->href    = $field['url'];
    $this->target  = ! empty ( $field['target'] ) ? "target=\"{$field['target']}\"" : null;
    $this->classes = $classes ? "class=\"{$classes}\"" : null;
    $this->slot    = $slot ?? $field['title'];

    if ( preg_match( "#^{$_SERVER['HTTP_HOST']}#", $this->href ) === 0 ) {
      $this->rel = "rel=\"noopener noreferrer\"";
    }

    $this->render();
  }

  public function render(): void {
    if ( empty ( $this->href ) ) {
      return;
    }
    echo "<a href=\"{$this->href}\" {$this->target} {$this->classes} {$this->rel}>
            {$this->slot}
          </a>";
  }
}
