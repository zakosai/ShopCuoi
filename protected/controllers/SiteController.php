<?php

class SiteController extends Controller
{
    	public $layout='//layouts/column2';

	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex($page = null)
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
            $model = Infopage::model()->findAllByPk(1);
            $str = $model[0]->home;
            
		$this->render('index', array('str'=>$str, 'page'=>$page));
	}
        public function actionAlbum(){
            $model = Infopage::model()->findAllByPk(1);
            $str = $model[0]->album;
            $this->render('album', array('str'=>$str));
        }
       
        public function actionHowToBuy(){
            $model = Infopage::model()->findAllByPk(1);
            $str = $model[0]->shopping;
            $this->render('howToBuy', array('str'=>$str));
        }
        
         public function actionMap(){
             $model = Infopage::model()->findAllByPk(1);
            $str = $model[0]->map;
            $this->render('map', array('str'=>$str));
        }
        
        public function actionShoppingCart(){
            $productList = isset(Yii::app()->request->cookies['shopcuoi-product']) ? Yii::app()->request->cookies['shopcuoi-product']->value : '';

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
                $criteria->with = array(
                    'images',
                );
                 $model = Product::model()->findAll($criteria);
            }
            $this->render('/transaction/shoppingCart', array('model'=>$model));
        }
	public function actionCreate()
	{
             $productList = isset(Yii::app()->request->cookies['shopcuoi-product']) ? Yii::app()->request->cookies['shopcuoi-product']->value : '';;
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
			if($model->save()){
				$this->render('/transaction/cartMes');
                        }
		}

		$this->render('/transaction/create',array(
			'model'=>$model,
                        'data' => $data,
		));
	}

        public function actionCookies(){
            $this->render('cookies');
        }

        /**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
                public function actionLogin()
	{
                    $this->layout = '//layouts/column1';
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('/site/login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
            $this->layout = '//layouts/column1';
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->baseUrl);
	}
        
	
}