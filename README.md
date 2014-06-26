ProductKeyGenerator
===================

**ProductKeyGenerator** is a useful class to generate product keys.

## Installation

Just require the class.:

``` php
<?php

require_once 'src/ProductKeyGenerator.php';
```

You're done.


## Usage


Create a new ```ProductKeyGenerator``` object.

``` php
$key=new ProductKeyGenerator();
```

Then you can generate a key (a-z)

``` php
$key->key('****-****-****-****');
```

or (0-9)

``` php
$key->key('....-....-....-....');
```

or (a-z and 0-9)

``` php
$key->key('+++-+++-+++');
```


### Change to lowercase

By default the key is generated uppercase, to change to lowercase:

``` php
$key->uppercase(false);
```

### Add standard characters


``` php
$key->key('ABC2-****-****-****');

$key->key('****-**B*-*8**');
```
