
<h1> Отзывы о наших товарах </h1>

<?php

    foreach ($comments as $comment)
    {
        echo '<h3>'.$comment->product->name.'</h3>';

        echo "<table class='product' align='center' border='2px' cellpadding='5'>";
        echo '<tr>
                            <td align="center">Комментарий</td>
                            <td align="center">Описание</td>
                            <td align="center">Фото</td>
                        </tr>';
        echo '<tr>
                    <td align="center">'.$comment->comment.'</td>
					<td align="center">'.$comment->product->description.'</td>
					<td align="center"><img src="../images/product/'.$comment->product->image.'" alt="photo" width="150" height="150"/></td>

				</tr>';

        echo "</table>";
    }

?>


