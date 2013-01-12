# OOP config

Get complex config array in OOP way with code completion and documentation. Some kind of array builder.

## Why?

Many frameworks loves __magic & complex multi-dimensional arrays when we calls some methods.
During development you must remember all those trivia and details instead of just thinking on your problem.
Also bad thing is that to know/remember all that keys and rules behind them -- you also must open docs and
read them.

After some time you can copy/paste your code from somewhere to currently developing method/class. But it's also
not good as you should search or open those other place.

That's why people invent IDEs and PHPDoc -- we want to get those comlex config arrays right here and right now.

## How?

Let's take some easy abstract example like:

```php
    $someConfig = array(
        'fields' => array('field1', 'DISTINCT field2'),
        'where'  => array('field' => 123),
        'order'  => array('created', 'field3 DESC'),
    )
```

We want to transform it to something like:

```php
    $someConfig = $this->someConfig
        ->fields->add('field1')->addDistinct('field2')->up
        ->where->fieldIs('field', 123)->up
        ->order->add('created', 'field3 DESC')->up
        ->get()
    ;
```

From first view it looks like more code, but in each code completion cycle we see only relevant methods
each of them has documentation.

## Tests

To check, that it works we will use PHPUnit:

```bash
    cd $oopconfig
    phpunit
```

Details are inside tests/OopConfig.