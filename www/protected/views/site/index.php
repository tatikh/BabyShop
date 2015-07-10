<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;


?>
<div id="content">
		<div id="sidebar">
			<div id="navigation">
				<ul>
					<?php $this->widget('zii.widgets.CMenu',array(
						'items'=>array(
							array('label'=>'Акции', 'url'=>array('/site/action')),
							array('label'=>'Новинки', 'url'=>array('/site/new_product')),
							array('label'=>'Все товары', 'url'=>array('/site/products')),
							array('label'=>'Комментарии', 'url'=>array('/site/comments')),
							array('label'=>'Контакты', 'url'=>array('/site/contact')),
							),
					)); ?>
					
				</ul>
				<div id="cart">
					<strong>Shopping cart:</strong> <br /> 0 items
				</div>
			</div>
			<div>
				<img src="/images/title1.gif" alt="" width="233" height="41" /><br />
				<ul class="categories">
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
				<img src="/images/title2.gif" alt="" width="233" height="41" /><br />
				<div class="review">
					<a href="#"><img src="/images/pic1.jpg" alt="" width="181" height="161" /></a><br />
					<a href="#">Product 07</a><br />
					<p>Dolor sit amet, consetetur sadipscing elitr, seddiam nonumy eirmod tempor. invidunt ut labore et dolore magna </p>
					<img src="/images/stars.jpg" alt="" width="118" height="20" class="stars" />
				</div>
			</div>
		</div>
		<div id="main">
			<img src="/images/photo.jpg" alt="" width="682" height="334" border="0" usemap="#Map" />
            <br />
			<div id="inside">
				<img src="/images/title3.gif" alt="" width="159" height="15" /><br />
				<div class="info">
					<img src="/images/pic2.jpg" alt="" width="159" height="132" />
					<p>Dolor sit amet, consetetur sadipscing elitr, seddiam nonumy eirmod tempor. invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadip- scing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur. </p>
					<a href="#" class="more"><img src="/images/more.gif" alt="" width="106" height="28" /></a>
				</div>
				<img src="/images/title4.gif" alt="" width="159" height="17" /><br />
				<div id="items">
					<div class="item">
						<a href="#"><img src="/images/item1.jpg" width="213" height="192" /></a><br />
						<p><a href="#">Product 01</a></p><span class="price">$125</span><br />
					</div>
					<div class="item center">
						<a href="#"><img src="/images/item2.jpg" width="213" height="192" /></a><br />
						<p><a href="#">Product 02</a></p><span class="price">$215</span><br />
					</div>
					<div class="item">
						<a href="#"><img src="/images/item3.jpg" width="213" height="192" /></a><br />
						<p><a href="#">Product 03</a></p><span class="price">$85</span><br />
					</div>
					<div class="item">
						<a href="#"><img src="/images/item4.jpg" width="213" height="192" /></a><br />
						<p><a href="#">Product 04</a></p><span class="price">$35</span><br />
					</div>
					<div class="item center">
						<a href="#"><img src="/images/item5.jpg" width="213" height="192" /></a><br />
						<p><a href="#">Product 05</a></p><span class="price">$27</span><br />
					</div>
					<div class="item">
						<a href="#"><img src="/images/item6.jpg" width="213" height="192" /></a><br />
						<p><a href="#">Product 06</a></p><span class="price">$40</span><br />
					</div>
				</div>
			</div>
		</div>
</div>