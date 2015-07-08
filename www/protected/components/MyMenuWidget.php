<?php
 
class MyMenuWidget extends CWidget
{
    /* @var string имя пользователя
     *     public $username = '';
     */


    /* Запуск виджета    */
    public function run()
    {
        $this->render('myMenuWidget', array('categories' => $this->getCategories(),));
    }
	
	
	// public function run()
	// {
		// $this->render('myMenuWidget', array('lastProducts' => $this->getLastThreeProducts()));
	// }
	
	private function getCategories(){
        $criteria = new CDbCriteria();
        //$Criteria->select='*';
        $criteria->select = "t.id, t.title, t.parrent_id";

        $categories = Category::model()->findAll($criteria);
        //var_dump($categories);
        return $categories;
    }

    public function generateItem($id)
    {
        // ищем все категории (findAll)
        $model = Category::model()->findAll();
        //$model = Category::model()->find('parrent_id = :id', array(':id' => $id));
        // создаем массив
        $items = array();

        // просматриваем все найденные записи и добавляем в массив $result
        // все значения в виде пар
        foreach($model as $buf)
            $items += array($buf->id => $buf->title);

        // возвращаем полученный результат
        var_dump($items);
        return $items;
    }

    private function buildTree($categories, $rootID = 0)
    {
        $tree = array();
        foreach ($categories as $category->parrent_id) {
            if ($category->parrent_id == $rootID) {
                unset($category->id);
                $cat->childs = $this->buildTree($categories, $category->id);
                $tree[] = $cat;
            }
        }
        return $tree;
    }

    public function getTree()
    {
        $categories = Category::model()->findAll();
        echo'<pre>';
        print_r($categories);
        echo'</pre>';
        return $this->buildTree($categories);
    }

}