<?php
namespace App\Repositories\Backend;

use App\Models\Donor;
use App\Repositories\BaseRepository;
use Prettus\Repository\Contracts\CacheableInterface;
use Prettus\Repository\Traits\CacheableRepository;

class DonorRepository extends BaseRepository implements CacheableInterface
{
    use CacheableRepository;

    protected $defaultOrderBy = 'id';
    protected $defaultSortBy = 'asc';

    protected $fieldSearchable = [
        "name",
        "l_name",
        "address",
        "city_id",
        "mobile",
        "phone1",
        "phone2",
        "is_orphan",
        "notes"
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Donor::class;
    }

    public function getPaginated($paged = 25, $condions_array = null)
    {
        if ($condions_array) {
            return $this->model->where($condions_array)->paginate($paged);
        }
        return $this->model->paginate($paged);
    }
}
