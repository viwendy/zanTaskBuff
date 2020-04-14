<?php if (!defined('THINK_PATH')) exit(); $title = "个人中心";?>
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

<body class="gray_bg" style="background: #f2f2f2;">
	
	<div class="meme_header">
		<p class="meme_header_sz"><a href="<?php echo U('info');?>"><img src="/tpl/Public/images/sz.png"/></a></p>
		<div class="meme_header_logoxx">
		<img class="meme_qlogo" src="/tpl/Public/images/user.png"/>
		<div class="meme_userxx">
			<p><?php echo ($data["nickname"]); ?></p>
			<p><?php echo ($data["username"]); ?></p>
		</div>
		<p class="meme_tixian">
			<a href="/index.php/Home/Member/tixian.html">提现</a>
		</p>
	</div>
	</div>
	
	<div class="meme_user_ye">
		
		<div class="meme_user_ta">
			<ul>
				<li>
					<p class="meme_user_xx"><?php echo (floatval($total_price["today"])); ?></p>
					<p class="meme_user_xxx">任务收益</p>
				</li>
				<li>
					<p class="meme_user_xx"><?php echo ($data["price"]); ?></p>
					<p class="meme_user_xxx">可用余额</p>
				</li>
				<li>
					<p class="meme_user_xx">0.00</p>
					<p class="meme_user_xxx">任务佣金</p>
				</li>
			</ul>
		</div>
		<div class="meme_user_ta">
			<ul>
				<li>
					<p class="meme_user_xx"><?php echo ($level_info["day_limit_task_num"]); ?></p>
					<p class="meme_user_xxx">可做任务</p>
				</li>
				<li>
					<p class="meme_user_xx">0.00</p>
					<p class="meme_user_xxx">推荐奖励</p>
				</li>
				<li>
					<p class="meme_user_xx"><?php echo (floatval($total_team["all"])); ?></p>
					<p class="meme_user_xxx">团队人数</p>
				</li>
			</ul>
		</div>
		
	</div>
	
	<div class="user_dengji">
		<div class="user_dengji_a">
			<p class="user_dengji_aa"><?php echo ($level_name); ?><span><?php echo ($level_info["day_limit_task_num"]); ?>个/天</span></p>
			<p>今日完成任务：<?php echo ($task_num); ?></p>
		</div>
		<div class="user_dengji_a">
			<p class="user_dengji_aa"><?php echo (floatval($total_price["today"])); ?>元</p>
			<p>今日收益</p>
		</div>
	</div>
	
	
	<div class="meme_user_bt">
		<ul>
			<a href="http://a013.weqixun.cn/">
			<li>
				<img class="meme_user_axx" src="/tpl/Public/images/meme1.png"/>
				<p>红包多多</p>
				<img class="meme_user_ax" src="/tpl/Public/images/memea.png"/>
			</li>
			</a>
			
			<a href="/index.php/Home/Page/index">
			<li>
				<img class="meme_user_axx" src="/tpl/Public/images/meme2.png"/>
				<p>新闻公告</p>
				<img class="meme_user_ax" src="/tpl/Public/images/memea.png"/>
			</li>
			</a>
			
			
			<a href="<?php echo U('info_edit',array('field'=>'bank_number'));?>">
			<li>
				<img class="meme_user_axx" src="/tpl/Public/images/meme3.png"/>
				<p>提现账户</p>
				<img class="meme_user_ax" src="/tpl/Public/images/memea.png"/>
			</li>
			</a>
			
			<a href="<?php echo U('vip');?>">
			<li>
				<img class="meme_user_axx" src="/tpl/Public/images/meme4.png"/>
				<p>我的等级</p>
				<img class="meme_user_ax" src="/tpl/Public/images/memea.png"/>
			</li>
			</a>
			
			
			<a href="<?php echo U('Public/share',array('smid'=>$member['id']));?>">
			<li>
				<img class="meme_user_axx" src="/tpl/Public/images/meme5.png"/>
				<p>推广赚钱</p>
				<img class="meme_user_ax" src="/tpl/Public/images/memea.png"/>
			</li>
			</a>
			
			<a href="	javascript:sp_alert('敬请期待')">
			<li>
				<img class="meme_user_axx" src="/tpl/Public/images/meme6.png"/>
				<p>自媒体账号</p>
				<img class="meme_user_ax" src="/tpl/Public/images/memea.png"/>
			</li>
			</a>
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