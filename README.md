#Gooogle
基于flask的谷歌搜索API

版本：v0.3

文档更新时间：2015.8.26

###功能说明
根据关键字实时返回google搜索结果


###URL
http://103.253.147.155:5000/search


###支持格式
JSON


###请求方式
GET


###请求数限制
无


###请求参数

key：必填，搜索时的关键词，string类型

page：必填，搜索结果的页数，int类型

###返回结果
####JSON实例：

	
	[{
		
		"title": "ASD ...”, 
		"url": "http://www.disabilityscoop.com/2015/08/25/study-dads-key-asd/20595/“
	}]

字段说明-title：搜索结果的标题

字段说明-url：  搜索结果的网址
###其他
phpdemo：
```
<?php
$res=json_decode(file_get_contents('http://103.253.147.155:5000/search?key=asd&page=4'));
foreach ($res as $key
) 
{
echo "<a href=\"$key->url\">$key->title</a><br>";
}
?>
```

server端源码：
[https://github.com/Ph0enixxx/GoogleSearchAPI](https://github.com/Ph0enixxx/GoogleSearchAPI)

