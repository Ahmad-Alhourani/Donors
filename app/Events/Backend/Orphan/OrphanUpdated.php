<?php namespace App\Events\Backend\Orphan;

use Illuminate\Queue\SerializesModels;
/**
 * Class OrphanUpdated.
 */
class OrphanUpdated
{
    use SerializesModels;
    /**
     * @var
     */

    public $orphan;

    /**
     * @param $orphan
     */
    public function __construct($orphan)
    {
        $this->orphan = $orphan;
    }
}
