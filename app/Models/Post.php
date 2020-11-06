<?php

namespace App\Models;

use Database\Factories\BlogPostFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Post extends Model
{
    use HasFactory;

    public $primaryKey  = 'id';

    protected $fillable = [
        'id',
        'title',
        'body',
        'image',
        'category_id',
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }

        public static function save_image($file)
           {
          $realname = str_slug(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME));
          $extension = $file->getClientOriginalExtension();
          $new_name = str_slug($realname) . "-" . time() . "." . $extension;
          $file->storeAs('public/images/', $new_name);
          return $new_name;
            }

            public static function delete_image($file)
            {
               if(Storage::delete('images/' . $file)) {
                 return true;
               }
               return false;
             }

}
