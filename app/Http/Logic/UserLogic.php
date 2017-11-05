<?php
/**
 * Created by PhpStorm.
 * User: xuxiaodao
 * Date: 2017/11/5
 * Time: 下午4:43
 */

namespace App\Http\Logic;


use App\User;

class UserLogic
{

    public function createWeChatUser($openId, $data)
    {
        $result = User::create([
            User::FIELD_NICKNAME => $data['nickName'],
            User::FIELD_GENDER => $data['gender'],
            User::FIELD_AVATAR => $data['avatarUrl'],
            User::FIELD_CITY => $data['city'],
            User::FIELD_COUNTRY => $data['country'],
            User::FIELD_PROVINCE => $data['province'],
            User::FIELD_LANGUAGE => $data['language'],
            User::FIELD_TYPE => User::ENUM_TYPE_WE_CHAT_USER,
            User::FIELD_STATUS => User::ENUM_STATUS_ACTIVITY
        ]);

        return $result;

    }

}