<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\Attribute\FundraisingAttribute;
use Sofa\Eloquence\Eloquence;
use Sofa\Eloquence\Metable;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\SoftDeletes;
use Iatstuti\Database\Support\CascadeSoftDeletes;
use Kyslik\ColumnSortable\Sortable;
use Storage;

class Fundraising extends Model
{
    use Sortable,
        FundraisingAttribute,
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

    protected $sortable = ["id", "name", "founded_at"];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = ["name", "founded_at", "description"];

    public $timestamps = ["create_at", "update_at"];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at', "founded_at"];
    protected $cascadeDeletes = ['donorsCascade'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'fundraisings';

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
     * Get all the donors for the Fundraising.
     * @return \Illuminate\Database\Eloquent\Relations\belongsToMany
     */
    public function getDonors()
    {
        return $this->belongsToMany(Donor::class, 'donations')
            ->whereNull('donations.deleted_at')
            ->withTimestamps()
            ->withPivot(['value']);
    }

    // ***********************************************************
    // ***********************************************************
    // ************************CASCADE  RELATIONS ****************
    // ***********************************************************
    // ***********************************************************

    /**
     * Cascade Deletes for donations relation
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */

    public function donorsCascade()
    {
        return $this->hasMany(Donation::class, "fundraising_id", "id");
    }
}
