<?php


namespace App\JVZIPN;


class JVZIPN
{
    public static function jvzipnVerification($post) {
        $secretKey = env("JVZIPN_SECRET_KEY");
        $pop = "";
        $ipnFields = array();
        foreach ($post AS $key => $value) {
            if ($key == "cverify") {
                continue;
            }
            $ipnFields[] = $key;
        }
        sort($ipnFields);
        foreach ($ipnFields as $field) {
            // if Magic Quotes are enabled $_POST[$field] will need to be
            // un-escaped before being appended to $pop
            $pop = $pop . $post[$field] . "|";
        }
        $pop = $pop . $secretKey;
        if ('UTF-8' != mb_detect_encoding($pop))
        {
            $pop = mb_convert_encoding($pop, "UTF-8");
        }
        $calcedVerify = sha1($pop);
        $calcedVerify = strtoupper(substr($calcedVerify,0,8));
        return $calcedVerify == $post["cverify"];
    }
}
