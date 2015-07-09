<?php

    if (count($product_category)>= 1)
    {
        foreach ($product_category as $product) {
            echo '<h3>'.$product->name.'</h3>';
            echo "<table class='product' align='center' border='2px' cellpadding='5'>";
            echo '<tr>
                            <td align="center">Описание</td>
                            <td align="center">Цена</td>
                            <td align="center">Фото</td>
                        </tr>';
            echo '<tr>
                    <td align="center">'.$product->description.'</td>
					<td align="center">'.$product->price.'</td>
					<td align="center"><img src="../images/product/'.$product->image.'" alt="photo" width="150" height="150"/></td>

				</tr>';

            echo "</table>";
        }
    } else {
       echo  '<p>Нет товаров в этой категории</p>';
    }

?>