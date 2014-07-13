<?php

class TransactionController extends Controller
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
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view', 'create'),
				'users'=>array('*'),
			),

			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','indexNew'),
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
	public function actionView($id)
	{
            $model = $this->loadModel($id);
            $productList = $model->productStr;
            if ($productList == "")
                $product = NULL;
            else{
//                $list = explode(",", $productList);
//                for ($i=0; $i<len($list); $i++)
//                    $list[$i] = substr($list[$i], 0, strpos($list[$i], ''));
                $idList = array_map('intval', explode(",", $productList));
                $idList = array_unique($idList);
                $criteria = new CDbCriteria;
                $criteria->select = '*';
                $criteria->alias = 'p';
                $criteria->addInCondition('p.id', $idList);
                $criteria->order = 'date DESC';

                 $product = new CActiveDataProvider('Product', array('criteria'=>$criteria));
                }
                $model->status = 1;
                $model->save();
                    $this->render('view',array(
                            'model'=>$model,
                            'product' =>$product
                    ));
                
	}
        
        public function actionIndexNew(){
            $criteria = new CDbCriteria;
            $criteria->select = '*';
            $criteria->order = 'date DESC';
            $criteria->condition = 'status = 0';
            $dataProvider=new CActiveDataProvider('Transaction', array('criteria'=>$criteria));
		$this->render('indexNew',array(
			'dataProvider'=>$dataProvider,
		));
        }
	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
            $this->layout = '//layouts/column2';
             $productList = $_POST['productID'];
            if ($productList == "")
                $model = NULL;
            else{
//                $list = explode(",", $productList);
//                for ($i=0; $i<len($list); $i++)
//                    $list[$i] = substr($list[$i], 0, strpos($list[$i], ''));
                $idList = array_map('intval', explode(",", $productList));
                $idList = array_unique($idList);
                $criteria = new CDbCriteria;
                $criteria->select = '*';
                $criteria->alias = 'p';
                $criteria->addInCondition('p.id', $idList);
                $criteria->order = 'date DESC';

                 $data = Product::model()->findAll($criteria);
            }
		$model=new Transaction;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Transaction']))
		{
			$model->attributes=$_POST['Transaction'];
			if($model->save())
				$this->render('cartMes');
		}

		$this->render('create',array(
			'model'=>$model,
                        'data' => $data,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Transaction']))
		{
			$model->attributes=$_POST['Transaction'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('index'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		 $criteria = new CDbCriteria;
            $criteria->select = '*';
            $criteria->order = 'date DESC';
            $dataProvider=new CActiveDataProvider('Transaction', array('criteria'=>$criteria));
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Transaction('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Transaction']))
			$model->attributes=$_GET['Transaction'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Transaction the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Transaction::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Transaction $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='transaction-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
