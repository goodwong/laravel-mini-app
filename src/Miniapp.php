<?php

namespace Goodwong\Miniapp;

use Goodwong\Miniapp\Entities\MiniappUser;

class Miniapp
{
    /**
     * find or create miniappUser by code
     * 
     * @param  string  $code
     * @return MiniappUser
     */
    public static function findByCode(string $code)
    {
        $response = app('wechat.mini_program')->auth->session($code);
        return MiniappUser::firstOrCreate([ 'openId' => $response['openid'] ]);
    }
}
