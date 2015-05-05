<?php namespace App\ec\entities;

use Illuminate\Database\Eloquent\Model;

class Person extends Model {

	//
    public function languages()
    {
        return $this->belongsToMany('App\ec\entities\Language');
    }
    public function groups()
    {
        return $this->belongsToMany('App\ec\entities\Group');
    }
    public function messages()
    {
        return $this->belongsToMany('App\ec\entities\Message');
    }

}
