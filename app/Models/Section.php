<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

class Section extends Model
{
    use HasFactory;
    use Translatable;

    protected $fillable =['name'];
    public $translatedAttributes = ['name'];

    public function doctors()
    {
        return $this->hasMany(Doctor::class);
    }
}
