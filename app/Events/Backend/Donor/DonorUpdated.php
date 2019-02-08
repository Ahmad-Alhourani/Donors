<?php namespace App\Events\Backend\Donor;

use Illuminate\Queue\SerializesModels;
/**
 * Class DonorUpdated.
 */
class DonorUpdated
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
