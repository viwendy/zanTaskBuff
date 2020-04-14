测试环境为：宝塔面板php5.6+ Apache 2.4 +MysQL 5.5


第一步，导入数据库文件：zzz.sql

第二步：修改数据库配置文件\Application\Ccommon\Conf\db.php

批量修改文件中a013.weqixun.cn为你自己的域名

后台地址：域名/index.php/admin

账号：admin 密码：123456

支付配置地址在：\Application\Api\Controller\PaysapiController.class.php

前台注册后跳转app下载地址的修改地方在：\tpl\Home\Task\appxiazai.html