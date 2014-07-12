<?php

class ProductController extends Controller
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
				'actions'=>array('list', 'productDetails'),
				'users'=>array('*'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','index','view','create','update'),
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
               $str = "productID = ".$model->id;
               $img = Image::model()->findAll(array('condition'=>$str));
		$this->render('view',array(
			'model'=>$model,
                    'img'=>$img,
		));
	}
        public function actionList($status = null, $gender = null, $type = null){
            $this->layout = '//layouts/column2';
            $str = "";
            if ($status!= null){
                $str = "status='$status'";
                if($gender != null){
                    $str = $str." AND gender=$gender";
                    if($type != null){
                        $str = $str." AND type='$type'";
                    }
                }
            }
            else {
                if($type == "Phụ Kiện Đính Kèm")
                    $str = "type = '$type'";
            }

            $criteria = new CDbCriteria;
            $criteria->select = '*';
            $criteria->condition = $str;
            $criteria->order = 'date DESC';
             
            $model = Product::model()->findAll($criteria);
            //$model = Product::model()->findAll();
             //die($model);
             $this->render('List', array('model'=>$model));
            
            
            
        }
        
        public function actionProductDetails($id){
                        $this->layout = '//layouts/column2';

            $model = $this->loadModel($id);
                $str = "productID = ".$model->id;
                $img = Image::model()->findAll(array('condition'=>$str));
                $this->render('productDetail', array('model'=>$model, 'img'=>$img));
        }

        public function actionCatalog()
        {
            $criteria = new CDbCriteria();
            $criteria->distinct=true;
            $criteria->select = 'status, type';
            $model=  Product::model()->find($criteria);
            $this->render('../layouts/catalog', array('model'=>$model));
        }

        /**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Product;
                
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Product']))
		{
                    $model->attributes = $_POST['Product'];
                    $baseLink = "images/Products";
                   $model->save();
                    $allowedExts = array("gif", "jpeg", "jpg", "png");
                     $files = scandir("images/");
                     $k = 0;
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
                            $img = new Image;
                            $img->productID = $model->id;
                            $img->link = $_FILES["file" . $i]["name"];
                            if ($k == 0) $img->important = 0;
                            else $img->important = 1;
                            $img->save();
                        }
                    }
                    $this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
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
                 $str = "productID = ".$model->id;
                $img = Image::model()->findAll(array('condition'=>$str));

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Product']))
		{
			$model->attributes=$_POST['Product'];
                        
                        $baseLink = "images/Products";
                        $model->save();
                        $allowedExts = array("gif", "jpeg", "jpg", "png");
                        for ($i = 0; $i < (int)$_POST['number']; $i++){
                            
                            $temp = explode(".", $_FILES["file".$i]["name"]);
                            $extension = end($temp);
                            if(in_array($extension, $allowedExts)){
                                $file = CUploadedFile::getInstanceByName('file'.$i);
                                $file->saveAs($baseLink.'/'.$file->name);
                                $img = new Image;
                                $img->productID = $model->id;
                                $img->link = $_FILES["file".$i]["name"];
                                $img->important = 1;
                                $img->save();

                            }
                        }
			
			$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
                        'img' => $img,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$model = $this->loadModel($id);
                $str = "productID = ".$model->id;
                $model->delete();
                $img = Image::model()->findAll(array('condition'=>$str));
                foreach($img as $i)
                    $i->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
            $criteria = new CDbCriteria;
            $criteria->select = '*';
            $criteria->order = 'date DESC';     
		$dataProvider=new CActiveDataProvider('Product', array('criteria'=>$criteria));
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}


        /**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Product('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Product']))
			$model->attributes=$_GET['Product'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Product the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Product::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Product $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='product-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
