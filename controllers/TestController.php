<?php
namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\EntryForm;
use yii\helpers\Url;
use app\models\Country;
use yii\data\Pagination;

class TestController extends Controller {

	public function actionSay($message="HELLO Yii") {
        return $this->render('say', ['message' => $message]);
    }

    public function actionEntry() {
        $model = new EntryForm;

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            return $this->render('entry-confirm', ['model' => $model]);
        } else {
            return $this->render('entry', ['model' => $model]);
        }
    }

    public function actionCountry() {
        $query = Country::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count()
        ]);

        $countries = $query->orderBy('name')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('country', [
            'countries' => $countries,
            'pagination' => $pagination,
        ]);
    }

    public function actionCreate() {
        $model = new Country;
        return $this->render('create', [
            'model'=>$model
        ]);
    }

    public function actionInsert() {
        $model = new Country();
        foreach ($_POST as $key => $value) {
            if($key == "_csrf")
                continue;
            $model->$key = $value;
        }
        $model->save();
        return $this->redirect(['country']);
    }
}
?>

