<?php

namespace Goodwong\Miniapp\Entities;

use Illuminate\Database\Eloquent\Model;

class MiniappUser extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'openId',
        'unionId',
        'nickName', //	String	用户昵称
        'avatarUrl', //	String	用户头像，最后一个数值代表正方形头像大小（有0、46、64、96、132数值可选，0代表640*640正方形头像），用户没有头像时该项为空。若用户更换头像，原有头像URL将失效。
        'gender',   //	String	用户的性别，值为1时是男性，值为2时是女性，值为0时是未知
        'city',     //	String	用户所在城市
        'province', //	String	用户所在省份
        'country',  //	String	用户所在国家
        'language', //	String	用户的语言，简体中文为zh_CN
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'openId',
        'unionId',
    ];
}
