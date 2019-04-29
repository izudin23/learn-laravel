<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    // Mass assignment
    // You can use fillable to protect which fields you want this to actually allow for updating
    // 1) Fillabel Example
    // protected $fillable = ['name', 'email', 'status'];

    // Guarded is the reverse of fillable. If fillable specifies which fields to be mass assigned, guarded specifies which fields are not mass assignable
    // 2) Guarded Example 
    //  [] means nothing guarded
    protected $guarded = [];

    // Eloquent Scopes
    public function scopeActive($query)
    {
        return $query->where('status', '1');
    }
    // Eloquent Scopes
    public function scopeInactive($query)
    {
        return $query->where('status', '0');
    }
}
