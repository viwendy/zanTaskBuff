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
<body class="gray_bg" style="background: #f2f2f2;">
<!-- 头部部分 开始 -->

<div class="header__top">
        	<p class="header__top_fl" style="border-bottom: 2px #22a8db solid;box-sizing: border-box;">
        		<a href="<?php echo U('Task/submission_task');?>"><img src="/tpl/Public/images/dai.png"/>待完成</a>
        	</p>
        	<p class="header__top_fl">
        		<a href="<?php echo U('Member/apply');?>" class="header__top_fr"><img src="/tpl/Public/images/yi.png"/>已完成</a>
        	</p>
  <p class="header__top_fl" style="display:none;">
        		<a href="<?php echo U('Member/apply');?>" class="header__top_ffr"><img src="/tpl/Public/images/zheng.png"/>审核/争议</a>
        	</p>
        </div>


 <div class="renwuliebiao">
        	<ul>
        		<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
        			<div class="renwuliebiao_left_tu">
        				<?php if($vo['tasklb'] == 1): ?><img src="/tpl/Public/images/dy.png"/><p>抖音任务</p><?php endif; ?>
        				<?php if($vo['tasklb'] == 2): ?><img src="/tpl/Public/images/ks.png"/><p>快手任务</p><?php endif; ?>
                     	 <?php if($vo['tasklb'] == 3): ?><img src="/tpl/Public/images/ws.png"/><p>微视任务</p><?php endif; ?>
                      <?php if($vo['tasklb'] == 4): ?><img src="/tpl/Public/images/hs.png"/><p>火山任务</p><?php endif; ?>
        			</div>
        			
        			<div class="renwuliebiao_cen_p">
        				<p>
        					<img src="/tpl/Public/images/yq.png"/>
        					<a href="#">任务要求：<?php if($vo['task_require'] == 1): ?>点赞<?php endif; ?>
                              <?php if($vo['task_require'] == 2): ?>关注<?php endif; ?>
                              <?php if($vo['task_require'] == 3): ?>点赞+关注<?php endif; ?></a>
        				</p>
        				<p>
        					<img src="/tpl/Public/images/sj.png"/>
        					<a href="#">发布时间：<?php echo (date('Y-m-d H:i',$vo["create_time"])); ?></a>
        				</p>
        				<a href="<?php echo ($vo["video_url"]); ?>" class="task_dkrwsp">打开任务视频</a>
        			</div>
        			
        			<div class="renwuliebiao_yjlq">
        				<p>
        					<span>任务佣金</span>
        					<span><?php echo (floatval($vo["price"])); ?>元</span>
        				</p>
        				<a href="<?php echo U('submission_task_do',array('id'=>$vo['id']));?>">提交</a>
        			</div>
        			
        		</li><?php endforeach; endif; else: echo "" ;endif; ?>
        	</ul>
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