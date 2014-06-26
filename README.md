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
// GAMJ-HQVK-TWXD-XOIB
```

or (0-9)

``` php
$key->key('....-....-....-....');
// 8499-1345-0397-0109
```

or (a-z and 0-9)

``` php
$key->key('+++-+++-+++');
// GCW-EH3-083
```


### Change to lowercase

By default the key is generated uppercase, to change to lowercase:

``` php
$key->uppercase(false);
```

### Add standard characters


``` php
$key->key('ABC2-****-****-****');
// ABC2-TTXO-JHCP-JWFK

$key->key('****-**B*-*888');
// KBQQ-GKBX-E888
```
