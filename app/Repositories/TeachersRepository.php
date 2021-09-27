<?php

namespace App\Repositories;

use App\Models\Teachers;
use App\Repositories\BaseRepository;

/**
 * Class TeachersRepository
 * @package App\Repositories
 * @version September 18, 2021, 9:40 am UTC
*/

class TeachersRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'FirstName',
        'MiddleName',
        'LastName'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Teachers::class;
    }
}
