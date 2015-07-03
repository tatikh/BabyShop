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
 *
 * The followings are the available model relations:
 * @property Comment[] $comments
 */
class Product extends GiiProduct 
//CActiveRecord
{
	public $productImage;
	
	
	const SCENARIO_CREATE = 'create';
    const SCENARIO_UPDATE = 'update';

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        return array_merge(
            parent::rules(),
            array(
				array('name, description, price, quantity','required'),
                array('productImage', 'required', 'on' => self::SCENARIO_CREATE),
                array('productImage', 'file', 'types' => 'gif, png, jpg, jpeg', 'allowEmpty' => true),
			 )
        );
    }
	
	
	/**
     * This method is saving product image
     */
    public function saveImage()
    {
        if ($this->productImage) {
            $productDir = Yii::getPathOfAlias('webroot').Yii::app()->params["productImagePath"];
            $fileName = strtolower(uniqid(rand(0x0, 0xFFFFFFFF))) . "." . $this->productImage->extensionName;
            try {
                if ($this->image) {
                    @unlink($productDir . $this->image);
                }
            } catch (Exception $e) {}

            $this->image = $fileName;
            $this->productImage->saveAs($productDir . $this->image);
            $this->update('image');
        }
    }

	public function afterDelete()
	{	
		var_dump($this->image);
		if($this->image) 
		{
			$productDir = Yii::getPathOfAlias('webroot').Yii::app()->params["productImagePath"]; 
			unlink($productDir.$this->image);
		}
		
	}
}
