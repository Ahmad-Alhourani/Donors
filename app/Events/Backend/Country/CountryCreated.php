<?php
namespace App\Events\Backend\Country;

use Illuminate\Queue\SerializesModels;
/**
 * Class CountryCreated.
 */
class CountryCreated
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
