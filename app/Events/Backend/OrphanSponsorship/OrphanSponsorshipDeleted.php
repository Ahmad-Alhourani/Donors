<?php namespace App\Events\Backend\OrphanSponsorship;

use Illuminate\Queue\SerializesModels;
/**
 * Class OrphanSponsorshipDeleted.
 */

class OrphanSponsorshipDeleted
{
    use SerializesModels;
    /**
     * @var
     */

    public $orphan_sponsorship;

    /**
     * @param $orphan_sponsorship
     */
    public function __construct($orphan_sponsorship)
    {
        $this->orphan_sponsorship = $orphan_sponsorship;
    }
}
