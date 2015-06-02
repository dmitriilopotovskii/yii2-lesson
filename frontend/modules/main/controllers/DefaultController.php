<?php

namespace app\modules\main\controllers;

use frontend\components\Common;
use yii\web\Controller;
use yii\imagine\Image;


class DefaultController extends Controller
{
    public function actionIndex()
    {
        $this->layout = 'bootstrap';
        return $this->render('index');
    }

    public function actionService()
    {
        $locator = \Yii::$app->locator;
        $cache = $locator->cache;
        $cache->set('test',1);
        print $cache->get('test');
    }
    public function actionEvent(){
        $component = new Common();
        //$component = \Yii::$app->common;
        $component->on(Common::EVENT_NOTIFY,[$component,'notifyAdmin']);
        $component->sendMail("lom1666@gmail.com","Test","Test text");
        $component->off(Common::EVENT_NOTIFY,[$component,'notifyAdmin']);

    }
    public function actionCrop()
    {

        Image::crop(\Yii::getAlias('@webroot/images/text-photo.jpg'),50,50)
            ->save(\Yii::getAlias('@webroot/images/text-photo.jpg'), ['quality' => 80]);
    }
    public  function actionPath(){
       print \Yii::getAlias('@webroot');
    }
}
