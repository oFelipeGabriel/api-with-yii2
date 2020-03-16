<?php

namespace app\controllers;
use Yii;
use yii\rest\ActiveController;
use app\models\Post;

class PostController extends ActiveController
{
    public $modelClass = Post::class;
    public function actionIndex()
    {
        return $this->render('index');
    }

}
