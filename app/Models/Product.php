<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Spatie\MediaLibrary\HasMedia;

class Product extends Model implements TranslatableContract, HasMedia
{
    use HasFactory;
    use Translatable;
    use InteractsWithMedia;




    public $translatedAttributes = ['name', 'description'];
    protected $fillable = ['main_image', 'multi_image'];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('main_image');
        $this->addMediaCollection('multi_image');
    }
}
