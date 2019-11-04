<?php

namespace app\controllers\actions\activity;

use app\models\Activity;
use yii\base\Action;

class CreateAction extends Action
{
    public function run(){
        $comp = \Yii::createObject(['class'=>ActivityComponent::class,'modelClass'=>Activity::class]);

        $model = $comp->getModel();

        if(\Yii::$app->request->isPost){
            $model->load(\Yii::$app->request->post());
            
            if(\Yii::$app->activity->addActivity($model)){

            }
        }

        return $this->controller->render('create',['model'=>$model]);
    }
}