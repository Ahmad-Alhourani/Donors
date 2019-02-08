<?php namespace App\Events\Backend\Fundraising;

use Illuminate\Queue\SerializesModels;
/**
 * Class FundraisingUpdated.
 */
class FundraisingUpdated
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
