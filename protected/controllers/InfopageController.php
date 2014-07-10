<?php

class InfopageController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column1';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
                        array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update', 'index', 'view', 'upload'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id = 1)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */


	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($col)
	{
		$model=$this->loadModel(1);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Infopage']))
		{
			$model->attributes=$_POST['Infopage'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
                        'col' =>$col,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
        public function actionUpload(){
            if(isset($_POST['submitImage'])){
                $baseLink = "../ShopCuoi/images";
                    $allowedExts = array("gif", "jpeg", "jpg", "png");
                    $mes = "Link file: <br>";
                    for ($i = 0; $i < (int) $_POST['number']; $i++) {

                        $temp = explode(".", $_FILES["file" . $i]["name"]);
                        $extension = end($temp);
                        if (in_array($extension, $allowedExts)) {
                            
                            $file = CUploadedFile::getInstanceByName('file' . $i);
                             if(file_exists($baseLink."/".$file->name)) {
                                $r = rand(000000, 99999);
                                $file->saveAs($baseLink . '/' . $file->name.$r);
                            }
                            else
                                $file->saveAs($baseLink . '/' . $file->name);
                            $mes = $mes.Yii::app()->baseUrl."/images/".$file->name."<br>";
                        }
                        else{
                            $mes = $mes."Kiểu file không phù hợp<br>";
                        }
                    }
            }
            $this->render('upImg', array('mes'=>$mes));
        }

        /**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Infopage');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */


	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Infopage the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Infopage::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Infopage $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='infopage-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
