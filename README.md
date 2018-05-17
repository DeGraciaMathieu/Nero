<p align="center">
<img src="https://i62.servimg.com/u/f62/11/13/61/32/nero-010.png" width="250">
</p>
<p align="center">
<a class="badge-align" href="https://www.codacy.com/app/DeGraciaMathieu/Nero?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=DeGraciaMathieu/Nero&amp;utm_campaign=Badge_Grade"><img src="https://api.codacy.com/project/badge/Grade/d79b8fc9f4bb44b48af1faf0881d4e73"/></a>
<a href="https://scrutinizer-ci.com/g/degraciamathieu/nero/?branch=master"><img src="https://scrutinizer-ci.com/g/DeGraciaMathieu/Nero/badges/quality-score.png?b=master" alt="Scrutinizer Code Quality"></a>
<a href="https://packagist.org/packages/degraciamathieu/nero"><img src="https://img.shields.io/packagist/v/degraciamathieu/nero.svg?style=flat-square" alt="Latest Version on Packagist"></a>
<a href='https://packagist.org/packages/degraciamathieu/nero'><img src='https://img.shields.io/packagist/dt/degraciamathieu/nero.svg?style=flat-square' /></a>
</p>

# DeGraciaMathieu/Nero

This package allows you to simulate a fatal error in your PHP application
 
## Installation

Run in console below command to download package to your project:

```
composer require degraciamathieu/nero
```

## How use

There are two possibilities : ```Breaker::syntaxError()``` and ```Breaker::classNotFound()```.

You can pass to these methods several criteria: a file, a specific line and a parameter.

```php
require 'vendor\autoload.php';

use \DeGraciaMathieu\Nero\Breaker;

Breaker::syntaxError($file = null, $line = null, $parameter = null);
```

By default the method will automatically complete all these criteria.

## Basic usage

```php
require 'vendor\autoload.php';

use \DeGraciaMathieu\Nero\Breaker;

Breaker::syntaxError();
```
![Demo](https://i62.servimg.com/u/f62/11/13/61/32/syntax11.png)

```php
require 'vendor\autoload.php';

use \DeGraciaMathieu\Nero\Breaker;

Breaker::classNotFound();
```
![Demo](https://i62.servimg.com/u/f62/11/13/61/32/classe10.png)

## Usage with parameters

```php
require 'vendor\autoload.php';

use \DeGraciaMathieu\Nero\Breaker;

Breaker::syntaxError('Website\routes\web.php', 120, ';');
```
![Demo](https://i62.servimg.com/u/f62/11/13/61/32/syntax12.png)

```php
require 'vendor\autoload.php';

use \DeGraciaMathieu\Nero\Breaker;

Breaker::classNotFound('Website\routes\web.php', 30, 'MySpecificClass');
```
![Demo](https://i62.servimg.com/u/f62/11/13/61/32/classe11.png)
