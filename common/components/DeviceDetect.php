<?php

namespace common\components;


class DeviceDetect
{

    private static function isMobile()
    {
        return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
    }

    static function getDeviseType()
    {
       return self::isMobile() ? 'mobile' : 'desktop';

    }
}