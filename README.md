[![Latest Stable Version](https://poser.pugx.org/thanhtaivtt/codeigniter-blade/v/stable)](https://packagist.org/packages/thanhtaivtt/codeigniter-blade)[![Total Downloads](https://poser.pugx.org/thanhtaivtt/codeigniter-blade/downloads)](https://packagist.org/packages/thanhtaivtt/codeigniter-blade)[![Latest Unstable Version](https://poser.pugx.org/thanhtaivtt/codeigniter-blade/v/unstable)](https://packagist.org/packages/thanhtaivtt/codeigniter-blade)[![License](https://poser.pugx.org/thanhtaivtt/codeigniter-blade/license)](https://packagist.org/packages/thanhtaivtt/codeigniter-blade)[![Monthly Downloads](https://poser.pugx.org/thanhtaivtt/codeigniter-blade/d/monthly)](https://packagist.org/packages/thanhtaivtt/codeigniter-blade)[![Daily Downloads](https://poser.pugx.org/thanhtaivtt/codeigniter-blade/d/daily)](https://packagist.org/packages/thanhtaivtt/codeigniter-blade)[![composer.lock](https://poser.pugx.org/thanhtaivtt/codeigniter-blade/composerlock)](https://packagist.org/packages/thanhtaivtt/codeigniter-blade)
## Codeiginter-core

-Codeiginter Blade is composition codeiginter framework, composer and blade templade.

## installation

- In application/config/config.php

 **fix lines:**

```
$config['composer_autoload'] = FALSE;
//replace to
$config['composer_autoload'] = FCPATH.'vendor/autoload.php';
```

- In index.php 

**fix lines:**

 ```
$system_path = 'system';
//replace to
$system_path = 'vendor/thanhtaivtt/codeigniter-blade/src/system';
```

## Usage

- In controllers use;

```
//load view
$this->view('viewName',[data]);

//get input get
$this->get($name);

//get input post
$this->post($name);
```

## Tutorial

- [Toidicode.com](http://toidicode.com)
