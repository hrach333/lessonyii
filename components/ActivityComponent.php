<?php
declare(strict_types=1);
namespace app\components;


use app\models\Activity;
use yii\base\Component;
//@бизнес логику пиши тут
class ActivityComponent extends Component
{
    public function init()
    {
        parent init(); //тут Анатолий объяснял про иницилизацию)
        //todo function
    }

    public function addActivity(Activity &$activity):bool
    {
        if($activity->validate()){
            return true;
        }
        return false;
    }
}