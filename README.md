# ACFU

> A collection of useful PHP Classes for Advanced Custom Fields

[![MIT license](https://img.shields.io/badge/License-MIT-blue.svg)](https://github.com/VeronQ/ACFU/blob/master/LICENSE)
[![Latest Unstable Version](https://poser.pugx.org/veronq/acfu/v/unstable)](https://packagist.org/packages/veronq/acfu)

## Prerequisite

* `PHP` >= 7.1

## Installation

```sh
$ composer require veronq/acfu
```

## API

### File(field, ?slot, ?attr)

```php
use VeronQ\ACFU\File;

$post_file = get_field('my_acf_file');

new File($post_file);
```

### Image(field, ?size, ?attr)

```php
use VeronQ\ACFU\Image;

$post_image = get_field('my_acf_image');

new Image($post_image);
```

### Link(field, ?slot, ?attr)

```php
use VeronQ\ACFU\Link;

$post_link = get_field('my_acf_link');

new Link($post_link);
```

### Map(field, ?attr)

```php
use VeronQ\ACFU\Map;

$post_map = get_field('my_acf_map');

new Map($post_map);
```

## License

[MIT](https://github.com/VeronQ/acfu/blob/master/LICENSE)
