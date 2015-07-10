<h1>
    Наши новинки!
</h1>


<?php

$url_base = Yii::app()->request->hostInfo;
var_dump($url_base) ;
echo "<table class='product' align='center' border='2px' cellpadding='5'>";
echo '<tr>
				<td align="center">Название</td>
				<td align="center">Описание</td>
				<td align="center">Цена</td>
				<td align="center">Фото</td>
				<td align="center">Комментарии</td>
			  </tr>';


foreach($lastProducts as $products){
    echo '<tr>
					<td align="center">'.$products->name.'</td>
					<td align="center">'.$products->description.'</td>
					<td align="center">'.$products->price.'</td>
					<td><img src="/images/product/'.$products->image.'" alt="photo" width="200" height="200"/></td>' ;


    if(!empty($products->comments)) {
        echo'<td align="center">';
            foreach($products->comments as $comments) {
                echo $comments->comment;
                echo '<hr>';
            }'<hr></td> ';
        }  else {
        echo '<td align="center"><a href="#">Нет отзывов о товаре. Оставьте свой отзыв первым!</a></td>';
    }

    '</tr>';
}
echo "</table>";

?>

