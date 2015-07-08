<?php

/**
 * This is the model class for table "{{product}}".
 *
 * The followings are the available columns in table '{{product}}':
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $price
 * @property integer $quantity
 * @property string $image
 * @property integer $category_id
 *
 * The followings are the available model relations:
 * @property Comment[] $comments
 * @property Category $category
 */
class Product extends GiiProduct
{

}
