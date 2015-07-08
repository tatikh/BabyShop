<?php

class SiteController extends Controller
{
	public $layout='//layouts/column1';
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
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index');
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
					"Content-Type: text/plain; charset=UTF-8";

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
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
	
	public function actionRegistration()
	{
		$model=new User;
		$model->scenario = 'registration';

		if(isset($_POST['User']))
			{
				$model->attributes=$_POST['User'];
				if($model->save())
					Yii::app()->user->setFlash('registration','Вы зарегистрировались на сайте. Добро пожаловать!');
			}
		$this->render('registration',array('model'=>$model));	
	}
	

	public function actionProducts()
	{
		$this->render('products', array('all_products' => $this->getProducts(),));
	}

	private function getProducts()
    {

		//get products
		$criteria = new CDbCriteria();
		
		$criteria->with = array(
			"comments" =>array(
				// "with" = array(
					// 'together' => true, // след-й уровень вложенности, приджойнили к Коммент еще таблицу
				
			   'together' => true,
			   'on' => 'comments.is_delete = 0'
				)
		);

		$criteria->select = "t.id, t.description, t.name, t.price, t.image";
		//$criteria->limit = 3;
		$criteria->order = "t.id DESC";
		
		$all_products = Product::model()->findAll($criteria);
		
		//var_dump($all_products); //die;
		return $all_products;
    }
	
	public function actionNew_product()
	{
		//var_dump($this->getLastThreeProducts());
		$this->render('new_product', array('lastProducts' => $this->getLastThreeProducts(),));
	}
	
	
	private function getLastThreeProducts()
    {
		//get last 3 products
		$criteria = new CDbCriteria();
		
		$criteria->with = array(
			"comments" =>array(
				"with" => array(// след-й уровень вложенности, приджойнили к Коммент еще таблицу
                    'together' => true,
                    'select' => 'comments.comment',
                    'order' => "comments.id DESC",
                    'limit' => 3,
                    ),
			   'together' => true,
			   'on' => 'comments.is_delete = 0',
        )
		);

		$criteria->select = "t.id, t.description, t.name, t.price, t.image";
		$criteria->limit = 3;
		$criteria->order = "t.id DESC";

		$lastProducts = Product::model()->with('comments')->findAll($criteria);
		return $lastProducts;

    }

    private function getComments()
    {
        //get comments to product
        $criteria = new CDbCriteria();

        $criteria->with = array(
            "product" =>array(
                // "with" = array(
                // 'together' => true, // след-й уровень вложенности, приджойнили к Коммент еще таблицу
                'together' => true,
                'order' => "product.id DESC",
                //'on' => 'comments.is_delete = 0'
            )
        );

        $criteria->select = "t.id, t.product_id, t.comment";
        $criteria->limit = 3;
        $criteria->order = "t.id DESC";

        $comments = Comment::model()->with('product')->findAll($criteria);
        return $comments;
    }

    public function actionComments()
    {
        $this->render('comments', array('comments' => $this->getComments(),));
    }

    public function actionAction()
    {
        $this->render('action');
    }
}