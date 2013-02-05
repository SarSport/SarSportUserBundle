SarSportApplicationBundle
==============================

Introduction
------------

[![Build Status](https://secure.travis-ci.org/SarSport/SarSportUserBundle.png?branch=master)](http://travis-ci.org/SarSport/SarSportUserBundle)

Installation
------------

Using Composer (recommended)
----------------------------

To install SarSportUserBundle with Composer just add the following to your composer.json file:

```yml
// composer.json
{
    // ...
    require: {
        // ...
        "sarsport/sarsport-user-bundle": "dev"
    }
}
```

Then, you can install the new dependencies by running Composer’s update command from the directory
where your composer.json file is located:

```bash
$ php composer.phar update
```

Composer will automatically download all required files, and install them for you.
All that is left to do is to update your AppKernel.php file, and register the new bundle:

```php
<?php
// in AppKernel::registerBundles()
$bundles = array(
    // ...
    new SarSport\Bundle\UserBundle\SarSportUserBundle(),
    // ...
);
```

Configuration
-------------

SarSportUserBundle requires no initial configuration to get you started.
