<?php
/**
 * Created by PhpStorm.
 * User: smile
 * Date: 2018/6/26
 * Time: 下午4:04
 */

namespace frontend\controllers;


use yii\web\Controller;
use Yii;
class BaseController extends Controller
{
    public $enableCsrfValidation = false;
    protected $request;

    public function init()
    {
        parent::init();
        $this->request = Yii::$app->request;
    }
}