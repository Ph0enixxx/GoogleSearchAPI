# GoogleSearchAPI
基于Flask 的Google搜索API文档
版本：v0.2
文档更新时间：2015.8.26

功能说明
根据关键字实时返回google搜索结果

URL
http://103.253.147.155:5000/search

支持格式
JSON

请求方式
GET

请求数限制
无

请求参数
必选	类型及范围	说明
key	true	string	搜索的关键字
page	false	int，缺省值1	每次返回结果的页数

返回结果
JSON实例：
[
{
"title": "ASD ...”, 
"url": "http://www.disabilityscoop.com/2015/08/25/study-dads-key-asd/20595/“
}
]

字段说明-title：搜索结果的标题

字段说明-url：  搜索结果的网址

其他：

phpdemo：
<?php
$res=json_decode(file_get_contents('http://103.253.147.155:5000/search?key=asd&page=4'));
foreach ($res as $key) 
{
echo "<a href=\"$key->url\">$key->title</a><br>";
}
?>

server端源码：
https://github.com/Ph0enixxx/GoogleSearchAPI

usage:git clone https://github.com/Ph0enixxx/GoogleSearchAPI.git
      cd GoogleSearchAPI
      python3 search.py