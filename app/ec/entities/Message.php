<?php namespace App\ec\entities;

use Illuminate\Database\Eloquent\Model;

class Message extends Model {

	//
	protected $fillable = array('id', 'subject', 'text');
}
