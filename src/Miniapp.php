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
        $miniuser = MiniappUser::firstOrCreate([ 'openId' => $response['openid'] ], ['unionId' => $response['openid']]);
        if ($miniuser->unionId != $response['openid']) {
            $miniuser->update(['unionId' => $response['openid']]);
        }
        return $miniuser;
    }
}
