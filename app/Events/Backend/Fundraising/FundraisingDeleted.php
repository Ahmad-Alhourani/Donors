<?php namespace App\Events\Backend\Fundraising;

use Illuminate\Queue\SerializesModels;
/**
 * Class FundraisingDeleted.
 */

class FundraisingDeleted
{
    use SerializesModels;
    /**
     * @var
     */

    public $fundraising;

    /**
     * @param $fundraising
     */
    public function __construct($fundraising)
    {
        $this->fundraising = $fundraising;
    }
}
