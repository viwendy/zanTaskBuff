<?php if (!defined('THINK_PATH')) exit(); $title = "任务记录";?>
<!DOCTYPE html>
<html>
<head>
    <?php
 $version = time(); ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <title><?php echo ($title); ?></title>
    <link rel="stylesheet" href="/tpl/Public/css/share.css?<?php echo ($version); ?>">
    <link rel="stylesheet" href="/tpl/Public/css/font.css?<?php echo ($version); ?>" />
   <link rel="stylesheet" href="/tpl/Public/css/qianyuan.css"/>
    <!--JQ-->
    <script type="text/javascript" src="/tpl/Public/js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="/tpl/Public/js/jquery-form.js"></script>
    <script type="text/javascript" src="/tpl/Public/js/layer_mobile2/layer.js?<?php echo ($version); ?>"></script>
    <script type="text/javascript" src="/tpl/Public/js/swiper.3.1.7.min.js"></script>

    <script src="/tpl/Public/js/jquery.simplesidebar.js"></script>
    <script src="/tpl/Public/js/jquery.SuperSlide.2.1.1.js"></script>
    <script src="/tpl/Public/js/TouchSlide.1.0.js"></script>

    <script type="text/javascript" src="/tpl/Public/js/func.js?<?php echo ($version); ?>"></script>
    <script>
        var SITE_URL  = 'https:' == document.location.protocol ?'https://' : 'http://' + "<?php echo $_SERVER['HTTP_HOST'];?>";
    </script>
</head>
<style type="text/css">
	.header__top_fl{
		width: 50%;
	}
	.header__top_ffr{
		color: red;
	}
</style>
<body class="gray_bg">
<div class="header__top">
        	<p class="header__top_fl">
        		<a href="<?php echo U('Task/submission_task');?>"><img src="/tpl/Public/images/dai.png"/>待完成</a>
        	</p>
        	<p class="header__top_fl" style="border-bottom: 2px #22a8db solid;box-sizing: border-box;">
        		<a href="<?php echo U('Member/apply');?>" class="header__top_fr"><img src="/tpl/Public/images/yi.png"/>已完成</a>
        	</p>
        	<p class="header__top_fl" style="display:none;">
        		<a href="<?php echo U('Member/apply');?>" class="header__top_ffr"><img src="/tpl/Public/images/zheng.png"/>审核/争议</a>
        	</p>
       </div>


 <div class="apply_list" style="margin-bottom: 4rem;">
        <!--<div class="apply_nav">
            <span class="active">
                <a href="">供应信息</a>
            </span>
            <span>
                <a href="">需求信息</a>
            </span>
        </div>-->
        <?php if(!empty($list)): if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="item">
                    <a href="<?php echo U('apply_show',array('id'=>$vo['id']));?>">
                        <h6><?php echo ($vo["title"]); ?> <span class="status<?php echo ($vo["status"]); ?>"><?php echo $apply_status[$vo['status']];?></span></h6>
                        <p>任务收益：￥<?php echo (floatval($vo["price"])); ?></p>
                        <p>申请时间：<?php echo (date("Y-m-d",$vo["create_time"])); ?></p>
                    </a>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
            <?php else: ?>
            <div class="none">
                <div class="none_box">
                    <img src="/tpl/Public/images/none.png" alt="">
                    <span>暂无信息</span>
                </div>
            </div><?php endif; ?>
    </div>



<footer class="footer">
    <ul>
        <li>
            <a href="<?php echo U('Index/index');?>">
                <span><i class="icon_home"></i></span>
                <p>首页</p>
            </a>
        </li>
        <li>
            <a href="<?php echo U('Task/submission_task');?>">
                <span><i class="icon_task"></i></span>
                <p>任务</p>
            </a>
        </li>
        <li>
            <a href="<?php echo U('Member/vip');?>">
                <span><i class="icon_info"></i></span>
                <p>服务</p>
            </a>
        </li>
        <li>
            <a href="<?php echo U('Member/index');?>">
                <span><i class="icon_user"></i></span>
                <p>我的</p>
            </a>
        </li>
    </ul>
</footer>
</body>
</html>