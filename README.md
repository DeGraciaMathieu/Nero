<p align="center">
<a class="badge-align" href="https://www.codacy.com/app/DeGraciaMathieu/Nero?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=DeGraciaMathieu/Nero&amp;utm_campaign=Badge_Grade"><img src="https://api.codacy.com/project/badge/Grade/d79b8fc9f4bb44b48af1faf0881d4e73"/></a>
<a href="https://scrutinizer-ci.com/g/degraciamathieu/nero/?branch=master"><img src="https://scrutinizer-ci.com/g/DeGraciaMathieu/Nero/badges/quality-score.png?b=master" alt="Scrutinizer Code Quality"></a>
</p>

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