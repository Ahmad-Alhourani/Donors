<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\Attribute\OrphanAttribute;
use Sofa\Eloquence\Eloquence;
use Sofa\Eloquence\Metable;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\SoftDeletes;
use Iatstuti\Database\Support\CascadeSoftDeletes;
use Kyslik\ColumnSortable\Sortable;
use Storage;

class Orphan extends Model
{
    use Sortable,
        OrphanAttribute,
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

    protected $sortable = ["id", "name", "f_name", "m_name"];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = ["name", "f_name", "m_name", "description"];

    public $timestamps = ["create_at", "update_at"];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
    protected $cascadeDeletes = ['donorsCascade'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'orphans';

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
     * Get all the donors for the Orphan.
     * @return \Illuminate\Database\Eloquent\Relations\belongsToMany
     */
    public function getDonors()
    {
        return $this->belongsToMany(Donor::class, 'orphan_sponsorships')
            ->whereNull('orphan_sponsorships.deleted_at')
            ->withTimestamps()
            ->withPivot(['value', 'start_date', 'expected_date', 'end_date']);
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

    public function donorsCascade()
    {
        return $this->hasMany(OrphanSponsorship::class, "orphan_id", "id");
    }
}
