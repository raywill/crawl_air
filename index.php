<style>
<html><head><meta charset='UTF-8' /><meta name='viewport' content='width=device-width,user-scalable=yes'><meta name='apple-mobile-web-app-capable' content='yes'>
<title>租房</title>
<link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<style>
 a:visited {color:gray;} a:active {color:red;} a {color:blue;}
 img, p {text-align:center;}
 img {width:100%;}
 footer {display:block;clear:both;margin:30px 0px;}
 footer a {text-decoration:none; color:gray;}
</style>
<div class="container-fluid">
<div class='row'>
<div class='col-md-6 col-lg-4 col-sm-12 col-xs-12'><img src='images/animation.gif?v=<?php echo time();?>' /><p>动态图</p></div>
<?php

//getfiles(__DIR__);

/**
 * 递归显示当前指定目录下所有文件
 * 使用dir函数
 * @param string $dir 目录地址
 * @return array $files 文件列表
 */
function get_files($dir) {
    $files = array();
    if (!is_dir($dir)) {
        return $files;
    }
    $d = dir($dir);
    while (false !== ($file = $d->read())) {
        if ($file != '.' && $file != '..' && $file != 'animation.gif') {
            $filename = $dir . "/"  . $file;
            if(is_file($filename)) {
                $files[] = $file;
            }
        }
    }
    $d->close();
    rsort($files);
    return $files;
}

$files = get_files(__DIR__ . "/images");
foreach ($files as $f) {
    echo "<div class='col-md-6 col-lg-4 col-sm-12 col-xs-12'><img src='images/{$f}' /><p>{$f}</p></div>";
}

?>
</div>
<footer>
<p><a href="http://air-level.com/">数据来源 air-level.com - 全国空气质量指数查询</a></p>
</footer>
</div>

</body></html>
