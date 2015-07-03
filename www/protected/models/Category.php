<?php

/**
 * This is the model class for table "{{category}}".
 *
 * The followings are the available columns in table '{{category}}':
 * @property integer $id
 * @property string $title
 * @property integer $parrent_id
 * @property integer $is_delete
 *
 * The followings are the available model relations:
 * @property Category $parrent
 * @property Category[] $categories
 */
class Category extends CActiveRecord
{
	
	
}
