<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class seo extends Model {
	use HasFactory;
	protected $table = "seo";
	protected $fillable = [
		"title",
		"share_title",
		"description",
		"tag",
		"seo_name",
		"img",
		"status",
	];
}
