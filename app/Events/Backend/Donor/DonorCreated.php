<?php
namespace App\Events\Backend\Donor;

use Illuminate\Queue\SerializesModels;
/**
 * Class DonorCreated.
 */
class DonorCreated
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
