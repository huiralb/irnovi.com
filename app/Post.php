<?php 
namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {

	protected $fillable = ["user_id", "title", "body"];

	protected $dates = ["published_at"];

	public static $rules = [
		// Validation rules
	];

	public function users()
	{
		return $this->belongsTo("App\User");
	}


}
