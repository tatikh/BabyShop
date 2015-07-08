<?php

class DefaultController extends Controller
{
	public $layout='/layouts/column2';
	
	public function actionIndex()
	{
		$this->render('index', array('lastProducts' => $this->getLastThreeProducts(),));
	}
	
	
	private function getLastThreeProducts()
    {
		//get last 3 products
		$criteria = new CDbCriteria();
		
		$criteria->with = array(
			"comments" =>array(
				"with" => array(
					'together' => true, // след-й уровень вложенности, приджойнили к Коммент еще таблицу
					'limit' => 3,
					'select' => 'comments.comment',
                    'order' => "comments.id DESC",
					),
				'on' => 'comments.is_delete = 0',
				'together' => true,
				)
		);

		$criteria->select = "t.id, t.description, t.name, t.price, t.image";
		$criteria->limit = 3;
		$criteria->order = "t.id DESC";

		$lastProducts = Product::model()->with('comments')->findAll($criteria);
		return $lastProducts;
    }
}