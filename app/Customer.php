<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
// use Faker\Provider\pt_BR\Company;
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
    protected $attributes = [
        'status' => 1
    ];
    // Eloquent Accessors
    // https://daengweb.id/accessors-dan-mutators-laravel-54
    // Accessors & Mutators, yang kita kenal sebagai getters dan setters. Accessors digunakan untuk memanggil antribut dengan cara tertentu dan Mutators digunakan untuk menyimpan attribut dengan cara tertentu juga.
    // getNamaFieldAttribute
    public function getStatusAttribute($attribute)
    {
        return $this->statusOptions()[$attribute];
    }
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
    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function statusOptions()
    {
        return [
            1 => 'Active',
            0 => 'Inactive',
            2 => 'In-Progress'
        ];
    }
}
