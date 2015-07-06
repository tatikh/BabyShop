<?php
/* @var $this DefaultController 

<?php $this->widget('application.components.MyMenuWidget', array(
    'username' => 'Борис'
)); ?>

*/

$this->breadcrumbs=array(
	$this->module->id,
);
?>


<h1>
	Последние 3 продукта
</h1>


<?php echo "<table class='product' align='center' border='2px' cellpadding='5'>"; 
		echo '<tr>
				<td align="center">Название</td>
				<td align="center">Описание</td>
				<td align="center">Цена</td>
				<td align="center">Фото</td>
			</tr>';
			
		foreach($lastProducts as $products){
				echo '<tr>
					<td align="center">'.$products->name.'</td>
					<td align="center">'.$products->description.'</td>
					<td align="center">'.$products->price.'</td>
					<td><img src="../images/product/'.$products->image.'" alt="photo" width="200" height="200"/></td>
					
				</tr>';
			}
	echo "</table>"; 
?>









