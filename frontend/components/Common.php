<?php
namespace frontend\components;

use yii\base\Component;
use yii\base\Event;

class Common extends Component{

    const EVENT_NOTIFY = 'notify_admin';

    public  function SendMail($email,$subject,$body,$name=''){

        \Yii::$app->mail->compose()
            ->setFrom([\Yii::$app->params['supportEmail'] => \Yii::$app->name])
            ->setTo([$email => $name])
            ->setSubject($subject)
            ->setTextBody($body)
            ->send();
            $this->trigger(self::EVENT_NOTIFY);

    }
    public function notifyAdmin(){

        print "Notify Admin";
    }


}