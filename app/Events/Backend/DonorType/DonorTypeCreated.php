<?php
namespace App\Events\Backend\DonorType;

use Illuminate\Queue\SerializesModels;
/**
 * Class DonorTypeCreated.
 */
class DonorTypeCreated
{
    use SerializesModels;
    /**
     * @var
     */

    public $donor_type;

    /**
     * @param $donor_type
     */
    public function __construct($donor_type)
    {
        $this->donor_type = $donor_type;
    }
}
