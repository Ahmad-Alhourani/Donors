<?php namespace App\Events\Backend\Donor;

use Illuminate\Queue\SerializesModels;
/**
 * Class DonorDeleted.
 */

class DonorDeleted
{
    use SerializesModels;
    /**
     * @var
     */

    public $donor;

    /**
     * @param $donor
     */
    public function __construct($donor)
    {
        $this->donor = $donor;
    }
}
