<body>
<?php
error_reporting(0);
function PrintResult()
{
	$key=$_GET['key'];
	$page=$_GET['page'];
	if(is_null($page))$page=1;
	$res=json_decode(file_get_contents("http://103.253.147.155:5000/search?key=$key&page=$page"));
	echo '<div id="center" style="width:75%;"><ol class="rounded-list">';
	foreach ($res as $k) 
	{
		echo "<li><a href=\"$k->url\">$k->title</a></li>";
	}
	echo "</ol></div>";
	if((!is_null($page))||$page>1)
	{
		$next=$page+1;
		$pre=$page-1;
		$file=$_SERVER["SCRIPT_NAME"];
		echo "<hr>";
		if($page!=1)echo "<h1><a href=\"".$file."?key=".$key."&page=".$pre."\" type=\"button\">⬅️pre</a> <a></a>";
		echo "<a href=\"".$file."?key=".$key."&page=".$next."\"  type=\"button\">next➡️</a>";
	}
}
function PrintHead()
{
?>
	<style>
	*
	{
		padding: 2;
	}
      #s
      {
        height: 37;
        margin-right: auto;
        width: 600;
      }
      #a
      {
        width:100px;
      }
      
    </style>
	<div id="center">
	<form action="#">
	<input name="key" id="s" value="<?php echo $_GET['key']?>"/>
	<input type="submit" id='a' class="am-btn am-btn-success"/>
	</form>
	</div>
<?php
}
function PrintIndex()
{
	?>
	<style>
      #s
      {
        height: 37;
        margin-right: auto;
        width: 600;
      }
      #a
      {
        width:100px;
      }
      h2
      {
        margin: 0;
        padding: 0;
        margin-left: auto;
        font-size: 100px;
        margin-top: -14%;
      }
    </style>
	<div style="margin-left: auto;height:340;margin-top:20%;osition:absolutely">
	<form action="#">
	<h2>Google</h2>
	<input type="text" id='s' name="key" />
	<input type="submit" id='a' class="am-btn am-btn-success"/>
	</form>
	</div>
	<?php

}
function Import()
{
	?>
	<link rel="stylesheet" type="text/css" href="http://cdn.amazeui.org/amazeui/2.4.2/css/amazeui.min.css">
	<style>
				ol{
        counter-reset: li; /* 创建一个计数器 */
        list-style: none; /* 清除列表默认的编码*/
        *list-style: decimal; /* 让IE6/7具有默认的编码 */
        font: 18px 'trebuchet MS', 'lucida sans';
        padding: 0;
        margin-bottom: 0;
        text-shadow: 0 1px 0 rgba(255,255,255,.5);
			}

			ol ol{
				margin: 0 0 0 0em; /* 给二级列表增加一定的左边距*/
			}
			li
			{
				margin: 0;
				padding: 0;
				list-style-type:none;
			}
				/*rounded shaped numbers*/
		.rounded-list a {
			position: relative;
			display: block;
			padding: 0.4em 0.4em 0.4em 2em;
			margin: 0.5em 0;
			background: #ddd;
			color: #444;
			text-decoration: none;
			/*CSS3属性*/
			border-radius: 0.3em;/*制作圆角*/
			/* transition动画效果*/
			-moz-transition: all 0.3s ease-out;
			-webkit-transition: all 0.3s ease-out;
			-o-transition: all 0.3s ease-out;
			-ms-transition: all 0.3s ease-out;
			transition: all 0.3s ease-out;
		}
		.rounded-list a:hover {
			background: #eee;
		}
		.rounded-list a:hover::before {
			/*悬停时旋转编码*/
			-moz-transform: rotate(360deg);
			-webkit-transform: rotate(360deg);
			-o-transform: rotate(360deg);
			-ms-transform: rotate(360deg);
			transform: rotate(360deg);
		}
		.rounded-list a::before {
			
			content: counter(li);
			counter-increment: li;
			
			position: absolute;
			left: -1.3em;
			margin-top: -1.3em;
			background: #87ceeb;
			height: 2em;
			width: 2em;
			line-height: 2em;
			border: 0.3em solid #fff;
			text-align: center;
			font-weight: bold;
			border-radius: 2em;
			-webkit-transition: all 0.3s ease-out;
			-moz-transition: all 0.3s ease-out;
			-ms-transition: all 0.3s ease-out;
			-o-transition: all 0.3s ease-out;
			transition: all 0.3s ease-out;
		}
			/*rectangle list*/
		.rectangle-list a {
			position: relative;
			display: block;
			padding: 0.4em 0.4em 0.4em 0.8em;
			*padding: 0.4em;
			margin: 0.5em 0 0.5em 2em;
			background: #ddd;
			color: #444;
			text-decoration: none;
			/*transition动画效果*/
			-webkit-transition: all 0.3s ease-out;
			-moz-transition: all 0.3s ease-out;
			-ms-transition: all 0.3s ease-out;
			-o-transition: all 0.3s ease-out;
			transition: all 0.3s ease-out;
		}
		.rectangle-list a:hover {
			background: #eee;
		}
		
		.rectangle-list a::before {
			
			content: counter(li);
			counter-increment: li;
			
			position: absolute;
			left: -2.5em;
			top: 50%;
			margin-top: -1em;
			background: #fa8072;
			width: 2em;
			height: 2em;
			line-height: 2em;
			text-align: center;
			-webkit-transition: all 0.3s ease-out;
			-moz-transition: all 0.3s ease-out;
			-o-transition: all 0.3s ease-out;
			-ms-transition: all 0.3s ease-out;
			transition: all 0.3s ease-out;
		}
		.rectangle-list a::after {
			position: absolute;
			content:"";
			border: 0.5em solid transparent;
			left: -1em;
			top: 50%;
			margin-top: -0.5em;
			-webkit-transition: all 0.3s ease-out;
			-moz-transition: all 0.3s ease-out;
			-o-transition: all 0.3s ease-out;
			-ms-transition: all 0.3s ease-out;
			transition: all 0.3s ease-out;
		}
		.rectangle-list a:hover::after {
			left: -0.5em;
			border-left-color: #fa8072;
		}
.accordion {
  color: #FFF;
  width: 100%;
}
.accordion .section {
  width: 100%;
}
.accordion .section input[type='radio'] {
  display: none;
}
.accordion .section input[type='radio']:checked + label {
  background: #363636;
}
.accordion .section input[type='radio']:checked + label:before {
  content: " ";
  position: absolute;
  border-left: 3px solid #21CCFC;
  height: 100%;
  left: 0;
}
.accordion .section input[type='radio']:checked ~ .content {
  max-height: 300px;
  opacity: 1;
  z-index: 10;
  overflow-y: auto;
}
.accordion .section label {
  position: relative;
  cursor: pointer;
  padding: 10px 20px;
  display: table;
  background: #222222;
  width: 100%;
  -webkit-transition: background 0.3s ease-in-out;
  -moz-transition: background 0.3s ease-in-out;
  -ms-transition: background 0.3s ease-in-out;
  transition: background 0.3s ease-in-out;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  -o-user-select: none;
  user-select: none;
}
.accordion .section label:before {
  content: " ";
  width: 100%;
  position: absolute;
  left: 0;
  top: 0;
  height: 1px;
  border-top: 1px solid #363636;
}
.accordion .section label:hover {
  background: #363636;
}
.accordion .section label span {
  display: table-cell;
  vertical-align: middle;
}
.accordion .section:last-of-type {
  border-bottom: 1px solid #363636;
}
.accordion .section .content {
  max-height: 0;
  -webkit-transition: all 0.4s;
  -moz-transition: all 0.4s;
  -ms-transition: all 0.4s;
  transition: all 0.4s;
  opacity: 0;
  position: relative;
  overflow-y: hidden;
}

*, *:before, *:after {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

body {
  font-family: 'Quicksand', sans-serif;
}

.left-menu {
  background: #222;
  width: 200px;
  position: absolute;
  top: 0;
  bottom: 0;
}

.accordion {
  font-size: 14px;
}
.accordion .section .content {
  padding: 0 15px;
}
.accordion .section input[type='radio'] {
  display: none;
}
.accordion .section input[type='radio']:checked ~ .content {
  padding: 15px;
}

ul {
  width: 100%;
  padding: 0;
  margin: 0;
  list-style: none;
}
ul li {
  padding: 10px;
}
ul li i {
  font-size: 13px;
  width: 15px;
  margin-right: 15px;
}
ul li:hover {
  cursor: pointer;
}
ul li:hover i {
  color: #21CCFC;
}

.logo {
  padding: 30px 10px;
  width: 200px;
  text-align: center;
  color: #FFF;
  font-size: 20px;
}
.logo i {
  font-size: 70px;
  color: #21CCFC;
}
body {TEXT-ALIGN: center;}
#center { MARGIN-RIGHT: auto; MARGIN-LEFT: auto; }

	</style>
	<?php
}
if(!is_null($_GET['key']))
{
	PrintHead();
	PrintResult();
	Import();

}
else 
{
	Import();
	PrintIndex();
}
?>
</body>
