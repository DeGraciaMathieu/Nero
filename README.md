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
