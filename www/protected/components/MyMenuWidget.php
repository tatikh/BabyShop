<?php
 
class MyMenuWidget extends CWidget
{
    /**
     * @var string имя пользователя
     */
    public $username = '';
 
    /**
     * Запуск виджета
     */
    public function run()
    {
        $this->render('myMenuWidget', array(
            'username' => $this->username,
        ));
    }
	
	
	// public function run()
	// {

   
		// $this->render('myMenuWidget', array('lastProducts' => $this->getLastThreeProducts()));
	// }
	
	
	private function getLastThreeProducts()
        {

				//get last 3 products
		$criteria = new CDbCriteria();
		
		
		$criteria->with = array(
			"comments" =>array(
				// "with" = array(
					// 'together' => true, // след-й уровень вложенности, приджойнили к Коммент еще таблицу
				
			   'together' => true,
			   'on' => 'comments.is_delete = 0'
				)
		);

		$criteria->select = "t.id, t.description, t.name";
		$criteria->limit = 3;
		$criteria->order = "t.id DESC";
		
		$products = Product::model()->findAll($criteria);


		//$criteria->select = "id, description";
		// $criteria->condition = "id=3"; //WHERE в запросах SELECT
		// $criteria->addCondition = "id>3"; // если несколько условий
		// $criteria->addCondition = "id<10, OR"; //2-й параметр - условие AND, OR
		// $criteria->with = array(
		// "comment"=>array(
			// "on"=>"comment.is_delete = 0"
			// )
		// ); // приJOIN-или таблицу comment, здесь LEFTJOIN 
		//для использ-я INNER указать "joinType" 
		
		
		
		//print_r($products); //die;
		
		$lastThreeProducts = Product::model()->findAll($criteria);
		
		// foreach ($lastThreeProducts as $products) {
			// var_dump($products->id);
			// var_dump($products->name);
			// var_dump($products->description);
			// echo "</br>";
		// }
		
    }
	
}