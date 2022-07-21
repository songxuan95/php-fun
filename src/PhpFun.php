<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2022/7/19
 * Time: 17:26
 */

namespace SongXuan;

/**
 * Class PhpFun
 * @package SongXuan
 */
class PhpFun{
    /**
     * uuid  生成32位以内随机字符串
     * $len  长度
     */
    static function uuid32($len = 10){
        $str = md5(uniqid(mt_rand(), true));
        return substr ( $str, 0, $len );
    }

    /**
     * 手机号正则
     * $phone  11 位手机号
     */
    static function isPhone($phone){
        $myreg='/^1[3-9]\d{9}$/';

        if (!preg_match($myreg, $phone)) {
            return false;
        } else {
            return true;
        }
    }

    /**
     * 邮箱正则
     * $email  邮箱号
     */
    static function isEmail($email){
        $myreg = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/';
        if (!preg_match($myreg, $email)) {
            return false;
        } else {
            return true;
        }
    }


}