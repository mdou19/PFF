<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Evenement extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom_evenement',
        'type_evenement',
        'date_evenement',
        'descriptions',
        'images',
        'id_lieux',
        'user_id',
    ];

    public function lieu()
    {
        return $this->belongsTo(Lieux::class, 'id_lieux');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function reservations()
    {
        return $this->hasMany(Reservation_Event::class);
    }

    public static function boot()
    {
        parent::boot();

        static::creating(function($evenement) {
            $evenement->user_id = auth()->id();
        });
    }

    public function saveFile($file)
    {
        return $this->update([
            'images'=> $file->store('images')
        ]);
    }

    public function getImagePathAttribute()
    {
        if($this->images !== null && Storage::exists($this->images)) {
            return Storage::url($this->images);
        }

        return null;
    }


}
