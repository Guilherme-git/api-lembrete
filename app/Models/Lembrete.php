<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Lembrete extends Model
{
    protected $table = 'lembrete';
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'title',
        'date',
        'text'
    ];
}
