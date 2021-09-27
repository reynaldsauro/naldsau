<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Teachers
 * @package App\Models
 * @version September 18, 2021, 9:40 am UTC
 *
 * @property string $FirstName
 * @property string $MiddleName
 * @property string $LastName
 */
class Teachers extends Model
{
    //use SoftDeletes;

    use HasFactory;

    public $table = 'teachers';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'FirstName',
        'MiddleName',
        'LastName'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'FirstName' => 'string',
        'MiddleName' => 'string',
        'LastName' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'FirstName' => 'nullable|string|max:50',
        'MiddleName' => 'nullable|string|max:50',
        'LastName' => 'nullable|string|max:50',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
