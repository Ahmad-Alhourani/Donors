<?php namespace App\Events\Backend\City;

use Illuminate\Queue\SerializesModels;
/**
 * Class CityDeleted.
 */

class CityDeleted
{
    use SerializesModels;
    /**
     * @var
     */

    public $city;

    /**
     * @param $city
     */
    public function __construct($city)
    {
        $this->city = $city;
    }
}
