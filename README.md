<h1 align="center">
    <img src="http://cdn.florian.ec/plum-logo.svg" alt="Plum" width="300">
</h1>

> PlumMarkdown is a [Markdown](http://daringfireball.net/projects/markdown/) converter using
[PHP Markdown](https://michelf.ca/projects/php-markdown/) for Plum. Plum is a data processing pipeline for PHP.

[![Build Status](https://travis-ci.org/plumphp/plum-markdown.svg)](https://travis-ci.org/plumphp/plum-markdown)
[![Windows Build status](https://ci.appveyor.com/api/projects/status/2n7atnpxl5l2c70k?svg=true)](https://ci.appveyor.com/project/florianeckerstorfer/plum-markdown)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/plumphp/plum-markdown/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/plumphp/plum-markdown/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/plumphp/plum-markdown/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/plumphp/plum-markdown/?branch=master)
[![StyleCI](https://styleci.io/repos/32591029/shield)](https://styleci.io/repos/32591029)

Developed by [Florian Eckerstorfer](https://florian.ec) in Vienna, Europe.


Installation
------------

You can install Plum using [Composer](http://getcomposer.org).

```shell
$ composer require plumphp/plum-markdown
```


Usage
-----

Please refer to the [Plum documentation](https://github.com/plumphp/plum/blob/master/docs/index.md) for more
information about Plum in general.

PlumMarkdown contains `Plum\PlumMarkdown\MarkdownConverter` to convert Markdown into HTML.

### `MarkdownConverter`

The `Plum\PlumMarkdown\MarkdownConverter` converts Markdown into HTML.

```php
use Plum\PlumMarkdown\MarkdownConverter;

$converter = new MarkdownConverter();
$converter->convert('*foobar*'); // -> "<p><em>foobar</em></p>
```

You can pass an instance of `Michelf\MarkdownInterface` to the constructor to set the markdown processor you want to
use.


Change Log
----------

### Version 0.1.1 (28 April 2015)

- Fix Plum version

### Version 0.1 (22 April 2015)

- Initial release


Author
------

Plum and PlumMarkdown have been developed by [Florian Eckerstorfer](https://florian.ec)
([Twitter](https://twitter.com/Florian_)) in Vienna, Europe.

> Plum is a project of [Cocur](http://cocur.co). You can contact us on Twitter:
> [**@cocurco**](https://twitter.com/cocurco)


License
-------

The MIT license applies to plumphp/plum-markdown. For the full copyright and license information,
please view the [LICENSE](https://github.com/plumphp/plum-markdown/blob/master/LICENSE) file distributed with this
source code.
