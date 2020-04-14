<?php if (!defined('THINK_PATH')) exit(); $title = "个人信息";?>
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

<body class="gray_bg">
<div id="body">
    <!-- 头部部分 开始 -->
    <!--主体部分 开始-->
    <div class="body_main tline mt info_main" style="margin-top: -8px;">
        <ul>
            <li>
                <a href="<?php echo U('info_edit',array('field'=>'nickname'));?>"><p>姓名</p>
                    <span>&nbsp;<?php echo ($member["nickname"]); ?></span></a>
            </li>
            <li>
                <a href="<?php echo U('info_edit',array('field'=>'phone'));?>"><p>手机</p>
                    <span>&nbsp;<?php echo ($member["phone"]); ?></span></a>
            </li>
            <li>
                <a href="<?php echo U('info_edit',array('field'=>'sex'));?>"><p>性别</p>
                    <span>&nbsp;
                        <?php if($member['sex'] == '0'): ?>男<?php endif; ?>
                        <?php if($member['sex'] == '1'): ?>女<?php endif; ?>
                    </span>
                </a>
            </li>
            <li>
                <a href="<?php echo U('info_edit',array('field'=>'address'));?>"><p>地址</p>
                    <span>&nbsp;<?php echo ($member["address"]); ?></span></a>
            </li>

        </ul>
        <ul style="margin-top: 7px">
        

            <li>
                <a href="<?php echo U('info_edit',array('field'=>'bank_number'));?>"><p>收款信息</p>
                    <span>&nbsp;<?php echo ($member["bank_number"]); ?></span></a>
            </li>

            <!--<li>
                <a href="<?php echo U('info_edit',array('field'=>'occupation'));?>">
                    <p>职业</p>
                    <span><?php echo ($member["occupation"]); ?></span>
                </a>
            </li>-->
        </ul>
    </div>
</div>
  
  <a href="<?php echo U('Public/logout');?>" style="width:92%;height:3rem;display:block;background:#1fb2f6;line-height:3rem;text-align:center;color:#fff;margin-left:4%;border-radius:0.5rem;">退出系统</a>
</body>
</html>