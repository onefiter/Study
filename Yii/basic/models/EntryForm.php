<?php  
namespace  app\modles;
use Yii;
use Yii\base\Model;


class EntryForm extends Model
{
	public $name;
	public $email;
	public function rules()
	{
		return [
			[['name','email'],'required'],
			['email','email'],
		];
	}
}
