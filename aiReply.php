<?php
//引入处理类
$localfile = __DIR__;
require_once $localfile . '/service/closet.php';
require_once $localfile . '/resources/AskAndAns.php';

//设置字典
closet::setWords(AskAndAns::getDictionaries());

echo "字典:<br/>";
print_r(closet::getWords());
$in=<<<HERE
你是sb吗？
HERE;
echo "<br/><br/><br/>";
echo "问：<br/>".$in;
echo "<br/><br/><br/>";

/**
 * 相似度计算，返回最匹配的答案以及相似距离，相似距离越大匹配程度越低，可以规定超过多少就算是匹配失败
 * @param $in 问的问题 
 * @return array array('ans'=>最相近的答案,'shortest'=>相似距离);
 */
$out= closet::closestWord($in);

echo "智能回复:<br/>";
print_r($out);