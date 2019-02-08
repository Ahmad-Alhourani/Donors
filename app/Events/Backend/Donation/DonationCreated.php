<?php
namespace App\Events\Backend\Donation;

use Illuminate\Queue\SerializesModels;
/**
 * Class DonationCreated.
 */
class DonationCreated
{
    use SerializesModels;
    /**
     * @var
     */

    public $donation;

    /**
     * @param $donation
     */
    public function __construct($donation)
    {
        $this->donation = $donation;
    }
}
