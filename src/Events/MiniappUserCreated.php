<?php

namespace Goodwong\Miniapp\Events;

use Goodwong\Miniapp\Entities\MiniappUser;
use Illuminate\Queue\SerializesModels;

class MiniappUserCreated
{
    use SerializesModels;

    public $miniappUser;

    /**
     * Create a new event instance.
     *
     * @param  MiniappUser  $miniappUser
     * @return void
     */
    public function __construct(MiniappUser $miniappUser)
    {
        $this->miniappUser = $miniappUser;
    }
}
