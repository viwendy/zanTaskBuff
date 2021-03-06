<?php if (!defined('THINK_PATH')) exit();?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
    <title>注册</title>
    <script type="text/javascript" src="/tpl/Public/js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="/tpl/Public/js/jquery-form.js"></script>
    <script type="text/javascript" src="/tpl/Public/js/layer_mobile2/layer.js"></script>
    <script type="text/javascript" src="/tpl/Public/js/func.js"></script>
    <style>
        html,body,div,p,form,label,ul,li,dl,dt,dd,ol,img,button,b,em,strong,small,h1,h2,h3,h4,h5,h6{margin:0;padding:0;border:0;list-style:none;font-style:normal;}
        body{font-family:SimHei,'Helvetica Neue',Arial,'Droid Sans',sans-serif;font-size:14px;color:#333;background:#f2f2f2;}
        a, a.link{color:#666;text-decoration:none;font-weight:500;}
        a, a.link:hover{color:#666;}
        h1,h2,h3,h4,h5,h6{font-weight: normal;}
        body{
            background:url(/tpl/Public/images/login-bg.png) no-repeat;
            background-size: 100% auto;
            /*background: #58afbd;*/
        }
        .login{}
        .welcome{width:100%;margin:10% 0 10% 0;text-align: center;}
        .welcome img{}
        .login-inp{margin:0 30px 15px 30px;border:1px solid #fff;border-radius:25px;}
        .login-inp label{width:6em;text-align:center;display:inline-block;color:#fff;}
        .login-inp input{line-height:40px;color:#fff;background-color:transparent;border:none;outline: none;}
        .login-inp .submit{display:block;background:none;width:100%;text-align:center;line-height:40px;color:#fff;font-size:16px;letter-spacing:5px;}
        .login-txt{text-align:center;color:#fff;}
        .login-txt a{color:#fff;padding:0 5px;}
    </style>
</head>

<body style="background: #fff;">
<div class="login">
    <div class="welcome"><img src="/tpl/Public/images/logo.png" style="width: 138px;height: 138px;display: block;margin: 0 auto;"></div>
    <div class="login-form">
        <form class="submit-ajax" action="<?php echo U('reg');?>">
        	
        	
        <div class="login-inp" style="background: #f4f4f4;border: none;">
        	<label style="color: #999;">注册账号</label>
        	<input type="text" name="username" id="username" placeholder="请输入手机号码" style="color: #999;">
        </div>
        
          
    
          
        
        <div class="login-inp" style="background: #f4f4f4;border: none;">
        	<label style="color: #999;">您的姓名</label>
        	<input type="text" name="nickname" id="nickname" placeholder="请输入姓名"  style="color: #999;">
        </div>
        
        
        <div class="login-inp" style="background: #f4f4f4;border: none;">
        	<label style="color: #999;">登录密码</label>
        	<input type="password" name="password" id="password" placeholder="请输入密码" class="password" style="color: #999;">
        </div>
        
        <div class="login-inp" style="background: #f4f4f4;border: none;">
        	<label style="color: #999;">确认密码</label>
        	<input type="password" name="repassword" id="repassword" value="" class="password" placeholder="重新输入密码" style="color: #999;">
        </div>
        
        <div class="login-inp" style="background: #f4f4f4;border: none;display:none;">
        	<label style="color: #999;">邀请码</label>
        	<input type="text" name="invite_code" id="invite_code" value="<?php echo ($invite_code); ?>" placeholder="没有可不填" style="color: #999;">
        </div>
        
        <p style="margin-top: -5px;margin-bottom: 10px;width: 80%;margin-left: 10%;font-size: 10px;color: #1fb2f6;">*密码需右英文与字母组成，最少6位</p>
        
        <div class="login-inp" style="border: none;background:#1fb2f6;">
        	<button type="submit" class="submit">立即注册</button>
        </div>
        
        </form>
    </div>
   
   <a href="<?php echo U('login');?>">
        	<p style="width: 150px;height: 60px;line-height: 60px;margin: 20px auto 0; color: #1fb2f6; "> <span style="width: 20px;height: 20px;border: 1px #1fb2f6 solid;display: inline-block;margin: 20px 6px 20px 40px;text-align: center;float: left;line-height: 20px;border-radius: 20px;text-align: center;color: #1fb2f6;">→</span> 去登陆</p>
        </a>
   
</div>
</body>
</html>

<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script>
 
   function daojishi( t )
 
  	$(document).ready(function(){
    	$("#getcode").click(function(){
        	var username = $.trim( $("#username").val() );
          	if( username == ''  )
            {
           	   alert( '请输入手机号码' ); return false;
            }
          	if( username.length != 11 )
            {
            	alert( '手机号码不正确' ); return false;
            }
          
          	$.get( '<?php echo U('getcode');?>',{tel:username},function( res ){
              		alert( res.msg );
            		if( res.code == 1 )
                    {
                    	daojishi( 60 );
                    }
            } , 'json')

        }) 
    })

        scene: Wechat.Scene.TIMELINE   // share to Timeline
    }, function (data) {
        alert("Success"+JSON.stringify(data));
    }, function (reason) {
        alert("Failed: " + JSON.stringify(reason));
    });
</script>