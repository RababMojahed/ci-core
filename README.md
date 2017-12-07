[![Latest Stable Version](https://poser.pugx.org/thanhtaivtt/ci-core/v/stable)](https://packagist.org/packages/thanhtaivtt/ci-core)[![Total Downloads](https://poser.pugx.org/thanhtaivtt/ci-core/downloads)](https://packagist.org/packages/thanhtaivtt/ci-core)[![Latest Unstable Version](https://poser.pugx.org/thanhtaivtt/ci-core/v/unstable)](https://packagist.org/packages/thanhtaivtt/ci-core)[![License](https://poser.pugx.org/thanhtaivtt/ci-core/license)](https://packagist.org/packages/thanhtaivtt/ci-core)[![Monthly Downloads](https://poser.pugx.org/thanhtaivtt/ci-core/d/monthly)](https://packagist.org/packages/thanhtaivtt/ci-core)[![Daily Downloads](https://poser.pugx.org/thanhtaivtt/ci-core/d/daily)](https://packagist.org/packages/thanhtaivtt/ci-core)[![composer.lock](https://poser.pugx.org/thanhtaivtt/ci-core/composerlock)](https://packagist.org/packages/thanhtaivtt/ci-core)
## Codeiginter-core

-Codeiginter Blade is composition codeiginter framework, composer and blade templade.

## installation

- In application/config/config.php

 **fix lines:**

``` php
$config['composer_autoload'] = FALSE;
//replace to
$config['composer_autoload'] = FCPATH.'vendor/autoload.php';
```

- In index.php 

**fix lines:**

``` php
$system_path = 'system';
//replace to
$system_path = 'vendor/thanhtaivtt/ci-core/src/system';
```

## Usage

- In controllers use;

``` php
//load view
$this->view('viewName',[data]);

//get input get
$this->get($name);

//get input post
$this->post($name);
```

## Tutorial

- [Toidicode.com](http://toidicode.com)
