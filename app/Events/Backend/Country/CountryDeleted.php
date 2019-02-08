<?php namespace App\Events\Backend\Country;

use Illuminate\Queue\SerializesModels;
/**
 * Class CountryDeleted.
 */

class CountryDeleted
{
    use SerializesModels;
    /**
     * @var
     */

    public $country;

    /**
     * @param $country
     */
    public function __construct($country)
    {
        $this->country = $country;
    }
}
