<?php

/*
 * 获取问答的字典，可以从数据库中读取
 */

/**
 * Description of AskAndAns
 *
 * @author hunliji
 */
class AskAndAns {

    public static function getDictionaries() {
        return array(
            array(
                'ask' => "你是个sb",
                'ans' => "说的好，你这个畜生"
            ),
            array(
                'ask' => "你畜生啊",
                'ans' => "说的好，你这个sb"
            )
        );
    }

}
