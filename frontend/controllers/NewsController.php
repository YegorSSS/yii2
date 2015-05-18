<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use common\models\News;
use common\models\Author;
use common\models\Category;

class NewsController extends Controller
{
	public function actionView($id)
    {
        return $this->render('view', [
            'news' => $this->findModel($id),
        ]);
    }

    protected function findModel($id)
    {
        if (($model = News::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
	
}