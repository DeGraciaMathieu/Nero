# DeGraciaMathieu/Nero

Crash your application with elegance
 
## Installation

Run in console below command to download package to your project:

```
composer require degraciamathieu/nero
```

## Usage

```
require 'vendor\autoload.php';

\DeGraciaMathieu\Nero\Breaker::syntaxError();
```
![Demo](https://i62.servimg.com/u/f62/11/13/61/32/syntax11.png)

```
require 'vendor\autoload.php';

\DeGraciaMathieu\Nero\Breaker::classNotFound();
```
![Demo](https://i62.servimg.com/u/f62/11/13/61/32/classe10.png)

## Bonus

You can also provide a file and a specific line.

```
require 'vendor\autoload.php';

\DeGraciaMathieu\Nero\Breaker::classNotFound('C:\laragon\www\Website\routes\web.php', 10);
```

Warning, the file must be a reel full path !