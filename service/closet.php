<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of closet
 *
 * @author hunliji
 */
class closet {

    private static $words;

    public static function setWords($words) {
        self::$words=$words;
    }
    public static function getWords() {
        return self::$words;
    }
        /**
     * 相似度计算，返回最匹配的答案以及相似距离，相似距离越大匹配程度越低，可以规定超过多少就算是匹配失败
     * @param string 问的问题 
     * @param array 字典，商家设置的字典或者是我们自己的字典 
     * @return array array('ans'=>最相近的答案,'shortest'=>相似距离);
     */
    public static function closestWord($input) {
        $shortest = -1;
        foreach (self::$words as $word) {
            $lev = levenshtein($input, $word['ask']);
            if ($lev == 0) {
                $closest = $word['ans'];
                $shortest = 0;
                break;
            }
            if ($lev <= $shortest || $shortest < 0) {
                $closest = $word['ans'];
                $shortest = $lev;
            }
        }
        return array('ask' => $input, 'ans' => $closest, 'shortest' => $shortest);
    }

}
