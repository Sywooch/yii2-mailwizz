mailwizz-php-sdk
================
#Install
> Note: Check the [composer.json](https://github.com/kartik-v/yii2-date-range/blob/master/composer.json) for this extension's requirements and dependencies. 
Read this [web tip /wiki](http://webtips.krajee.com/setting-composer-minimum-stability-application/) on setting the `minimum-stability` settings for your application's composer.json.

Either run

```
$ php composer.phar require yii2-mailwizz/mailwizz "dev-master"
```

or add

```
"yii2-mailwizz/mailwizz": "dev-master"
```
to the ```require``` section of your `composer.json` file.

#USAGE 
Please see the examples folder for usage and available endpoints.


#EXAMPLE Component
```
<?php
namespace common\components\mailwizz;

use MailWizzApi\Base;
use MailWizzApi\Cache\File;
use MailWizzApi\Config;
use MailWizzApi\Endpoint\Lists;
use MailWizzApi\Endpoint\ListSubscribers;
use yii\base\Component;
use Yii;

/**
 * Class MailWizz
 * @package common\components\mailwizz\MailWizz
 */
class MailWizz extends Component
{


    public function __construct(){
        $config = new Config([
            'apiUrl'        => 'ApiUrl',
            'publicKey'     => 'Pub_key',
            'privateKey'    => 'Private_key',
            'components' => array(
                'cache' => array(
                    'class'     => File::class,
                    'filesPath' => dirname(__FILE__) . '/../MailWizzApi/Cache/data/cache', // make sure it is writable by webserver
                )
            ),
        ]);
        Base::setConfig($config);
    }
}
```