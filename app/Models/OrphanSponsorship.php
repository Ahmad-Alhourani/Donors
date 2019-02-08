<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\Attribute\OrphanSponsorshipAttribute;
use Sofa\Eloquence\Eloquence;
use Sofa\Eloquence\Metable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Iatstuti\Database\Support\CascadeSoftDeletes;
use Kyslik\ColumnSortable\Sortable;
use Storage;

class OrphanSponsorship extends Model
{
    use Sortable,
        OrphanSponsorshipAttribute,
        Eloquence,
        Metable,
        SoftDeletes,
        CascadeSoftDeletes;

    /**
     * The sortable attributes.
     *
     * @var array
     */

    protected $sortable = [
        "id",
        "donor_id",
        "orphan_id",
        "value",
        "start_date",
        "expected_date",
        "end_date"
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        "donor_id",
        "orphan_id",
        "value",
        "start_date",
        "expected_date",
        "end_date"
    ];

    public $timestamps = ["create_at", "update_at"];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'deleted_at',
        "start_date",
        "expected_date",
        "end_date"
    ];
    protected $cascadeDeletes = [];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'orphan_sponsorships';

    /**
     * Get the key name for route model binding.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'id';
    }

    // ***********************************************************
    // ***********************************************************
    // ************************ RELATIONS ************************
    // ***********************************************************
    // ***********************************************************

    /**
     * Get  the Donor that owns the OrphanSponsorship.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function donor()
    {
        return $this->belongsTo(Donor::class, 'donor_id');
    }

    /**
     * Get  the Orphan that owns the OrphanSponsorship.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function orphan()
    {
        return $this->belongsTo(Orphan::class, 'orphan_id');
    }

    // ***********************************************************
    // ***********************************************************
    // ************************CASCADE  RELATIONS ****************
    // ***********************************************************
    // ***********************************************************
}
