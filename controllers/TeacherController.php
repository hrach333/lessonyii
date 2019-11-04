<?php
namespace app\controllers;
use yii\base\Controller;

class TeacherController extends Controller

{
    public function actionStudent()
    {
        return $this->render('student',['name'=>'Роман']);
    }
}