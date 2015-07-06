<h1>
	Наши товары
</h1>

<?php  var_dump($all_products); //die; ?>
<?php echo "<table class='product' align='center' border='2px' cellpadding='5'>"; 
		echo '<tr>
				<td align="center">Название</td>
				<td align="center">Описание</td>
				<td align="center">Цена</td>
				<td align="center">Фото</td>
			</tr>';
			
		//foreach($all_products as $products)
		{
				echo '<tr>
					<td align="center">'.$products->name.'</td>
					<td align="center">'.$products->description.'</td>
					<td align="center">'.$products->price.'</td>
					<td><img src="../images/product/'.$products->image.'" alt="photo" width="200" height="200"/></td>
					
				</tr>';
		}
	echo "</table>"; 
?>


?>