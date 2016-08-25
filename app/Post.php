<?php 
namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {

	protected $fillable = ["name", "title", "body"];

	protected $dates = [];

	public static $rules = [
		// Validation rules
	];

	public function users()
	{
		return $this->belongsTo("App\User");
	}


}
