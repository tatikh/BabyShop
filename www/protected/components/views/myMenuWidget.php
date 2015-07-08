<?php

echo $this->getTree();

foreach($categories as $category)
{
    if($category->parent_id == null)
    {
        $result[$category->id] = array('title' => $category->title);
    }
    else
    {
        $result[$category['parent_id']]['sub-category'][$category->cat_id] = $category->title;
    }
}

foreach($result as $key => $item) {
    echo '<div class="category" id="cat' . $key . '">';
    echo '<p>' . $item->title . '</p>';
    if (isset($item['sub-category']) && is_array($item['sub-category']))
        foreach ($item['sub-category'] as $sub_key => $sub_cat)
            echo '<div class="sub-category" id="cat' . $sub_key . '"><p>' . $sub_cat . '</p></div>';
    echo "</div>\n";
}

//echo(build_tree($categories,$id)) ;
//
//foreach ($categories as $category) {
//    if ($category->parrent_id == null) {
//        $items_title = array();
//        $items_parrent_id = array();
//        array_push($items_title, $category);
//        array_push($items_parrent_id, $category->id);
//        echo '</br>';
//        var_dump($items_title);
//        //var_dump($items_parrent_id);
//    };
//
//    foreach ($items_parrent_id as $item_par_id) {
//        if ($item_par_id->category->id == $category->parrent_id) {
//            $subitems_title = array();
//            //$subitems_parrent_id = array();
//            array_push($subitems_title, $item_par_id);
//            //array_push($subitems_parrent_id, $category->id);
//            echo '</br>';
//            var_dump($subitems_title);
//            //var_dump($subitems_parrent_id);
//        }
//    }
//}
////echo $this->generateItem($id);
//
//foreach ($categories as $category){
//    //echo $this->generateItem($category_id);
//        echo '<ul>';
//    if ($category->id == null) {
//        '<li>'.$item_title.'</li>';
//        foreach ($subitems_title as $subitem_title) {
//            if ($category->id == $category->parrent_id) {
//                echo '<ul> <li>'.$category->title.'</li>
//                            </ul>';
//            }
//        }
//        '</ul>';
//    }
//
//}

?>

<ul id="sidebar">
    <li><a href="#">Action Toys &amp; Figures</a></li>
    <li><a href="#">Arts &amp; Crafts</a></li>
    <li><a href="#">Discovery &amp; Learning</a></li>
    <li><a href="#">Dolls &amp; Soft Toys</a></li>
    <li><a href="#">Games &amp; Puzzles</a></li>
    <li><a href="#">Collectibles</a></li>
    <li><a href="#">Infant &amp; Preschool</a></li>
    <li><a href="#">Novelty &amp; Virtual</a></li>
    <li><a href="#">Outdoors</a></li>
    <li><a href="#">TV &amp; Films</a></li>
</ul>



