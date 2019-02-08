<?php
namespace App\Repositories\Backend;

use App\Models\OrphanSponsorship;
use App\Repositories\BaseRepository;
use Prettus\Repository\Contracts\CacheableInterface;
use Prettus\Repository\Traits\CacheableRepository;

class OrphanSponsorshipRepository extends BaseRepository implements
    CacheableInterface
{
    use CacheableRepository;

    protected $defaultOrderBy = 'id';
    protected $defaultSortBy = 'asc';

    protected $fieldSearchable = ["donor_id", "orphan_id", "value"];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return OrphanSponsorship::class;
    }

    public function getPaginated($paged = 25, $condions_array = null)
    {
        if ($condions_array) {
            return $this->model->where($condions_array)->paginate($paged);
        }
        return $this->model->paginate($paged);
    }
}
