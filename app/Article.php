<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model {
	
	protected $table = 'article';

    protected $fillable = [];

    protected $dates = [];

    public static $rules = [
        // Validation rules
    ];

    // Relationships

}
