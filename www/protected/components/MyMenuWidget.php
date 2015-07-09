<?php
 
class MyMenuWidget extends CWidget
{
    /* @var string имя пользователя
     *     public $username = '';
     */


    /* Запуск виджета    */
    public function run()
    {
        $this->render('myMenuWidget', array('categories' => $this->getCategories()));
    }



    public function getCategories($parrent_id = null)
    {
       $categories = Category::model()->findAllByAttributes(array('parrent_id' => $parrent_id));
        //var_dump($categories);
        return $categories;
    }


    public function renderCategories($categoryList)
    {
        //print_r($this->getCategories());
        foreach ($categoryList as $category) {
            echo "<li><a href='/index.php/site/category/".$category->id."'>$category->title</a></li>";
            $subCategory = $this->getCategories($category->id);
            if($subCategory) {
                echo "<ul class='subitem'>";
                $this->renderCategories($subCategory);
                echo "</ul>";
            }

        }
    }

}