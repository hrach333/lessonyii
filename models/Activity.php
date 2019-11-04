<?php

namespace app\models;

use yii\base\Model;

class Activity extends Model
{
    public $title;

    public $description;
    public $date;
    public $isBlocked;
    public $isReapeat;

    public function rules()
    {
        return [
            ['title','required'],
            ['description','string','max'=>250],
            ['date','string'],
            [['isBlocked','isReapeat'],'boolean']
        ];
    }

    public function attributeLabels()
    {
        return ['title'=>'Загаловок события',
                'description'=>'Описание',
                'date'=>'Дата',
                'isBlocked'=>'Блокирующее событие'
        ];
    }
}