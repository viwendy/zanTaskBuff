<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title><?php echo ($title); ?></title>
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
    <meta name="description" content=""/>

    <!--JQ-->
    <script type="text/javascript" src="/tpl/Public/js/jquery.min.js"></script>
    <script type="text/javascript" src="/tpl/Public/js/jquery-form.js"></script>
    <script type="text/javascript" src="/tpl/Public/js/layer_mobile2/layer.js?<?php echo ($version); ?>"></script>
    <script type="text/javascript" src="/tpl/Public/js/swiper.3.1.7.min.js"></script>

    <script src="/tpl/Public/js/jquery.simplesidebar.js"></script>
    <script src="/tpl/Public/js/jquery.SuperSlide.2.1.1.js"></script>
    <script src="/tpl/Public/js/TouchSlide.1.0.js"></script>

    <script type="text/javascript" src="/tpl/Public/js/func.js"></script>

    <link rel="stylesheet" href="/tpl/Public/css/share.css?3"/>
    <link rel="stylesheet" href="/tpl/Public/css/font.css?3"/>
    <link rel="stylesheet" href="/tpl/Public/css/qianyuan.css"/>
</head>
<body class="gray_bg" style="background:#f2f2f2;">
	
	<div class="head_img">
		<img src="/tpl/Public/images/header.png"/>
	</div>
	
	<div class="head_nav">
		<ul>
			<a href="/index.php/Home/Page/index">
			<li>
				<img src="/tpl/Public/images/h1.png"/>
				<p>新闻公告</p>
			</li>
			</a>
			
		<!--	<a href="http://www.geilime.com/">
			<li>
				<img src="/tpl/Public/images/h2.png"/>
				<p>优惠券</p>
			</li>
			</a>
			
			<a href="https://liqucn.com/os/ios/rj/">
			<li>
				<img src="/tpl/Public/images/h3.png"/>
				<p>软件乐园</p>
			</li>
			</a>
			
			<a href="http://m.doyo.cn/">
			<li>
				<img src="/tpl/Public/images/h4.png"/>
				<p>游戏天地</p>
			</li>
			</a>-->
		</ul>
	</div>
	
	
	<!--头部选择-->
        <div class="header__top">
        	<p class="header__top_fl">
        		<a href="/index.php/Home/Task/lists_lb/lb/1.html"><img src="/tpl/Public/images/dy.png"/>抖音任务</a>
        	</p>
        	<p class="header__top_fl">
        		<a href="/index.php/Home/Task/lists_lb/lb/2.html" class="header__top_fr"><img src="/tpl/Public/images/ks.png"/>快手任务</a>
        	</p>
        	<p class="header__top_fl">
        		<a href="/index.php/Home/Task/lists_lb/lb/4.html" class="header__top_frr"><img src="/tpl/Public/images/hs.png"/>火山任务</a>
        	</p>
        	<p class="header__top_fl">
        		<a href="/index.php/Home/Task/lists_lb/lb/3.html" class="header__top_frrr"><img src="/tpl/Public/images/ws.png"/>微视任务</a>
        	</p>
        </div>
        <!--头部选择结束-->
        <!--任务列表-->
        <div class="renwuliebiao_a">
        	<ul>
        		<?php if(is_array($task_list)): $i = 0; $__LIST__ = $task_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
        			<duv class="renwu_xq_img">
        				<p class="renwu_xq_dj"><?php if(is_array($level)): $i = 0; $__LIST__ = $level;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vv): $mod = ($i % 2 );++$i; if($vv['level'] == $vo['level']): echo ($vv["name"]); endif; endforeach; endif; else: echo "" ;endif; ?></p>
        				<?php if($vo['tasklb'] == 1): ?><img src="/tpl/Public/images/dy.png"/><?php endif; ?>
        				<?php if($vo['tasklb'] == 2): ?><img src="/tpl/Public/images/ks.png"/><?php endif; ?>
                     	 <?php if($vo['tasklb'] == 3): ?><img src="/tpl/Public/images/ws.png"/><?php endif; ?>
                      <?php if($vo['tasklb'] == 4): ?><img src="/tpl/Public/images/hs.png"/><?php endif; ?>
        			</duv>
        			
        			<div class="renwu_xq_center">
        				<p class="renwu_xq_pa">要求：<?php if($vo['task_require'] == 1): ?>点赞<?php endif; ?>
                              <?php if($vo['task_require'] == 2): ?>关注<?php endif; ?>
                              <?php if($vo['task_require'] == 3): ?>点赞+关注<?php endif; ?></p>
        				<p class="renwu_xq_pa">需方：admin<span>剩余<?php echo ($vo["leftnum"]); ?></span></p>
        				<p class="renwu_xq_pa">截止：<?php echo (date('m-d H:i',$vo["end_time"])); ?></p>
        			</div>
        			
        			<div class="renwu_jd">
        				<p class="renwu_jdjg">¥ <?php echo (floatval($vo["price"])); ?>元</p>
        				<p class="renwu_jdbtn">
        					<a href="javascript:;" class="get_task" data-id='<?php echo ($vo["id"]); ?>'>接单</a>
        				</p>
        			</div>
        		</li><?php endforeach; endif; else: echo "" ;endif; ?>
        		
        	</ul>
        </div>
        <!--任务列表结束-->

    	
      
        
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

<script>
  //领取任务
    $('.get_task').click(function(){
        var task_id = $(this).attr('data-id');
        var url = "<?php echo U('Task/get_task');?>";
        $.post(url,{id:task_id},function(data){
            if( data.status == 1 ) {
                sp_alert(data.info);
                $('.bala-btn').css('background-color','#ccc').html('任务已领取');
            } else {
                sp_alert(data.info);
            }
        },'json')
    })
    $(document).ready(function () {
        //幻灯片
        var swiper = new Swiper('.swiper-container', {
            pagination: '.swiper-pagination',
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev',
            paginationClickable: true,
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: 4000,
            autoplayDisableOnInteraction: false
        });
    });
</script>
<?php if(!empty($page_notice_list)): ?><script>
    //文字向上滚动
    (function($){
        $.fn.FontScroll = function(options){
            var d = {time: 3000,s: 'fontColor',num: 1}
            var o = $.extend(d,options);

            this.children('ul').addClass('line');
            var _con = $('.line').eq(0);
            var _conH = _con.height(); //滚动总高度
            var _conChildH = _con.children().eq(0).height();//一次滚动高度
            var _temp = _conChildH;  //临时变量
            var _time = d.time;  //滚动间隔
            var _s = d.s;  //滚动间隔


            _con.clone().insertAfter(_con);//初始化克隆

            //样式控制
            var num = d.num;
            var _p = this.find('li');
            var allNum = _p.length;

            _p.eq(num).addClass(_s);


            var timeID = setInterval(Up,_time);
            this.hover(function(){clearInterval(timeID)},function(){timeID = setInterval(Up,_time);});

            function Up(){
                _con.animate({marginTop: '-'+_conChildH});
                //样式控制
                _p.removeClass(_s);
                num += 1;
                _p.eq(num).addClass(_s);

                if(_conH == _conChildH){
                    _con.animate({marginTop: '-'+_conChildH},"normal",over);
                } else {
                    _conChildH += _temp;
                }
            }
            function over(){
                _con.attr("style",'margin-top:0');
                _conChildH = _temp;
                num = 1;
                _p.removeClass(_s);
                _p.eq(num).addClass(_s);
            }
        }
    })(jQuery);

    $('#MScroll').FontScroll({time: 3000,num: 1});

</script><?php endif; ?>