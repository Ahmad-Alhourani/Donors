<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\Attribute\DonationAttribute;
use Sofa\Eloquence\Eloquence;
use Sofa\Eloquence\Metable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Iatstuti\Database\Support\CascadeSoftDeletes;
use Kyslik\ColumnSortable\Sortable;
use Storage;

class Donation extends Model
{
    use Sortable,
        DonationAttribute,
        Eloquence,
        Metable,
        SoftDeletes,
        CascadeSoftDeletes;

    /**
     * The sortable attributes.
     *
     * @var array
     */

    protected $sortable = ["id", "donor_id", "fundraising_id", "value"];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = ["donor_id", "fundraising_id", "value"];

    public $timestamps = ["create_at", "update_at"];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
    protected $cascadeDeletes = [];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'donations';

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
     * Get  the Donor that owns the Donation.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function donor()
    {
        return $this->belongsTo(Donor::class, 'donor_id');
    }

    /**
     * Get  the Fundraising that owns the Donation.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function fundraising()
    {
        return $this->belongsTo(Fundraising::class, 'fundraising_id');
    }

    // ***********************************************************
    // ***********************************************************
    // ************************CASCADE  RELATIONS ****************
    // ***********************************************************
    // ***********************************************************
}
