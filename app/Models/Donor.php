<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\Attribute\DonorAttribute;
use Sofa\Eloquence\Eloquence;
use Sofa\Eloquence\Metable;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\SoftDeletes;
use Iatstuti\Database\Support\CascadeSoftDeletes;
use Kyslik\ColumnSortable\Sortable;
use Storage;

class Donor extends Model
{
    use Sortable,
        DonorAttribute,
        Eloquence,
        Metable,
        SoftDeletes,
        CascadeSoftDeletes,
        HasSlug;

    /**
     * Get the options for generating the slug.
     */

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name ')
            ->saveSlugsTo('slug');
    }

    /**
     * The sortable attributes.
     *
     * @var array
     */

    protected $sortable = [
        "id",
        "name",
        "l_name",
        "city_id",
        "mobile",
        "phone1",
        "phone2"
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        "image",
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

    public $timestamps = ["create_at", "update_at"];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
    protected $cascadeDeletes = ['orphansCascade', 'fundraisingsCascade'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'donors';

    /**
     * Get the key name for route model binding.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'id';
    }

    public function getImageUrlAttribute()
    {
        return !empty($this->image) ? Storage::url($this->image) : null;
    }

    // ***********************************************************
    // ***********************************************************
    // ************************ RELATIONS ************************
    // ***********************************************************
    // ***********************************************************

    /**
     * Get all the orphans for the Donor.
     * @return \Illuminate\Database\Eloquent\Relations\belongsToMany
     */
    public function orphans()
    {
        return $this->belongsToMany(Orphan::class, 'orphan_sponsorships')
            ->whereNull('orphan_sponsorships.deleted_at')
            ->withTimestamps()
            ->withPivot(['value', 'start_date', 'expected_date', 'end_date']);
    }

    /**
     * Get all the fundraisings for the Donor.
     * @return \Illuminate\Database\Eloquent\Relations\belongsToMany
     */
    public function fundraisings()
    {
        return $this->belongsToMany(Fundraising::class, 'donations')
            ->whereNull('donations.deleted_at')
            ->withTimestamps()
            ->withPivot(['value']);
    }

    /**
     * Get  the City that owns the Donor.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
    }

    // ***********************************************************
    // ***********************************************************
    // ************************CASCADE  RELATIONS ****************
    // ***********************************************************
    // ***********************************************************

    /**
     * Cascade Deletes for orphan_sponsorships relation
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */

    public function orphansCascade()
    {
        return $this->hasMany(OrphanSponsorship::class, "donor_id", "id");
    }

    /**
     * Cascade Deletes for donations relation
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */

    public function fundraisingsCascade()
    {
        return $this->hasMany(Donation::class, "donor_id", "id");
    }
}
