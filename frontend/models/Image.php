<?php
/**
 * Created by PhpStorm.
 * User: dmitry
 * Date: 29.05.2015
 * Time: 14:30
 */

namespace frontend\models;


use yii\base\Model;

class Image extends Model
{
    public static function getImgUrl()
    {
        return 'image.png';

    }

}