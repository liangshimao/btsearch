<?php
/**
 * Created by PhpStorm.
 * User: smile
 * Date: 2018/6/26
 * Time: 下午6:46
 */

return [
    'class' => 'yii\elasticsearch\Connection',
    'nodes' => [
        ['http_address' => '127.0.0.1:9200'],
        // configure more hosts if you have a cluster
        ]
    ];