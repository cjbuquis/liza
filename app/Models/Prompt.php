<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prompt extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'prompt';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'prompt_id';

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'prompt',
        'sender',
        'user_id', //this is not desplayed in tableplus
    ];

}