<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Lieux extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom_lieux',
        'ville',
        'image',
    ];

    public function evenements()
    {
        return $this->hasMany(Evenement::class);
    }

    public function saveFile($file)
    {
        return $this->update([
            'image'=> $file->store('image')
        ]);
    }

    public function getImagePathAttribute()
    {
        if($this->image !== null && Storage::exists($this->image)) {
            return Storage::url($this->image);
        }

        return null;
    }
}
