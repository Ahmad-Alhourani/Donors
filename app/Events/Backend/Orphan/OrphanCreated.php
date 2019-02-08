<?php
namespace App\Events\Backend\Orphan;

use Illuminate\Queue\SerializesModels;
/**
 * Class OrphanCreated.
 */
class OrphanCreated
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
