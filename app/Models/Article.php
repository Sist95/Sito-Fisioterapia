<?php

namespace App\Models;

use App\Models\Image;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
   use Searchable;
   use HasFactory;

   protected $fillable= [
    'title', 'description', 'service_id', 'user_id'
   ];

   public function user():BelongsTo{
    return $this->belongsTo(User::class);
   }

   public function service():BelongsTo{
    return $this->belongsTo(Service::class);
   }
   public function images():HasMany{
      return $this->hasMany(Image::class);
  }
  public function toSearchableArray()
  {
   return[
       'id'=>$this->id,
       'title'=>$this->title,
       'description'=>$this->description,
       'service'=>$this->service,
   ];
}
}
