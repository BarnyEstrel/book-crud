<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Novel extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'genre',
        'description',
        'image'
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;


    // get form fields 
    public static function get_fields($request){
        $form_fields = $request->validate([
            'name' => 'string',
            'description' => 'string',
            'genre' => 'nullable|string'
        ]);

        return $form_fields;
    }
}
