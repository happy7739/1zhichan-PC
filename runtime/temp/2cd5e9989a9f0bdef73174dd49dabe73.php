<?php /*a:4:{s:73:"F:\Project\DolphinPHPV1.4.5\application\index\view\contactus\message.html";i:1589527201;s:67:"F:\Project\DolphinPHPV1.4.5\application\index\view\public\base.html";i:1589519154;s:69:"F:\Project\DolphinPHPV1.4.5\application\index\view\public\header.html";i:1588210734;s:69:"F:\Project\DolphinPHPV1.4.5\application\index\view\public\footer.html";i:1589527201;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title><?php echo htmlentities($title); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no">
    <!-- 公共样式和JS -->
    <meta name="robots" content="all" />
    <meta name="author" content="成都餐协餐饮管理有限公司,蜀ICP备12020698号-3" />
    <meta name="keywords" content="<?php echo htmlentities($configuration['keywords']); ?>" />
    <meta name="description" content="<?php echo htmlentities($configuration['description']); ?>" />
    <link rel="shortcut icon" href="/static/index/favicon.ico" />
    <link type="text/css" rel="stylesheet" href="/static/index/css/css.css" />
    <link type="text/css" rel="stylesheet" href="/static/index/css/style.css" />
    <script src="/static/index/js/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="/static/index/js/jquery.form.js"></script>
    <script src="/static/index/js/layer/layer.js"></script>
    <script type="text/javascript">
        function uaredirect(f) { try { if (document.getElementById("bdmark") != null) { return } var b = false; if (arguments[1]) { var e = window.location.host; var a = window.location.href; if (isSubdomain(arguments[1], e) == 1) { f = f + "/#m/" + a; b = true } else { if (isSubdomain(arguments[1], e) == 2) { f = f + "/#m/" + a; b = true } else { f = a; b = false } } } else { b = true } if (b) { var c = window.location.hash; if (!c.match("fromapp")) { if ((navigator.userAgent.match(/(iPhone|iPod|Android|ios)/i))) { location.replace(f) } } } } catch (d) { } } function isSubdomain(c, d) { this.getdomain = function (f) { var e = f.indexOf("://"); if (e > 0) { var h = f.substr(e + 3) } else { var h = f } var g = /^www\./; if (g.test(h)) { h = h.substr(4) } return h }; if (c == d) { return 1 } else { var c = this.getdomain(c); var b = this.getdomain(d); if (c == b) { return 1 } else { c = c.replace(".", "\\."); var a = new RegExp("\\." + c + "$"); if (b.match(a)) { return 2 } else { return 0 } } } };
    </script>
    <script type="text/javascript">
        uaredirect("http://www.wap.1zhichan.com/?laiyuan=baiduziranliuliang");
    </script>
    <!-- 当前页面的样式及JS -->
    
<script src="/static/index/js/jquery.xdomainrequest.min.js" type="text/javascript"></script>
<style>
    .but_s{
        width: 150px;
        background-color: #F36801;
        border: none;
        color: white;
        padding: 10px 10px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 20px;
        font-weight: bold;
    }
    .but_r{
        width: 150px;
        background-color: #00F0FF;
        border: none;
        color: black;
        margin-top: 20px;
        margin-bottom: 8px;
        padding: 10px 10px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 20px;
        font-weight: bold;
  }
</style>

</head>
<body>
<!--头部-->
<div class="a1" align="center">
    <div class="a11" align="center">
        <table width="1024" align="center" cellpadding="0" cellspacing="0" border="0">
            <tr>
                <td width="164" align="left" valign="top">
                    <table width="100" align="center" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td height="5">
                            </td>
                        </tr>
                    </table>
                    <a href="/index.html">
                        <img alt="一纸馋" src="<?php echo htmlentities(get_file_path($configuration['logo'])); ?>" /></a>
                    <table width="100" align="center" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td height="5">
                            </td>
                        </tr>
                    </table>
                </td>
                <td width="27">
                </td>
                <td width="833" align="left" valign="top">
                    <div class="wx_tips5 j_tips5" align="center">
                        <div class="tips_hd5">
                            <div class="menu sy">
                                <ul class="clearfix">
                                    <?php if(!(empty($nav_1) || (($nav_1 instanceof \think\Collection || $nav_1 instanceof \think\Paginator ) && $nav_1->isEmpty()))): if(is_array($nav_1) || $nav_1 instanceof \think\Collection || $nav_1 instanceof \think\Paginator): $i = 0; $__LIST__ = $nav_1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tab): $mod = ($i % 2 );++$i;?>
                                    <li>
                                        <a id="active_<?php echo htmlentities($tab['id']); ?>" href="<?php echo url($tab['url_value']); if($tab['params'] != ''): ?>?<?php echo htmlentities($tab['params']); ?><?php endif; ?>">
                                            <b><?php echo htmlentities($tab['title']); ?></b><br />
                                        </a>
                                    </li>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </div>
                        <div class="tips_bd5">
                            <div style="z-index: 9999; width: 1141px; background: url(/static/index/image/sbgs.png) repeat-x;
                                    height: 240px;">
                                <table width="1024" border="0" cellpadding="0" cellspacing="0" align="center">
                                    <tr>
                                        <td height="20">
                                        </td>
                                    </tr>
                                </table>
                                <table width="1024" border="0" cellpadding="0" cellspacing="0" align="center">
                                    <tr>
                                        <td  align="center" valign="top" >
                                            <img style=" width:310px; height:200px" alt="首页" src="/static/index/image/tqs.png" />
                                        </td>
                                        <?php if(!(empty($nav_2) || (($nav_2 instanceof \think\Collection || $nav_2 instanceof \think\Paginator ) && $nav_2->isEmpty()))): if(is_array($nav_2) || $nav_2 instanceof \think\Collection || $nav_2 instanceof \think\Paginator): if( count($nav_2)==0 ) : echo "" ;else: foreach($nav_2 as $key=>$val): ?>
                                        <td align="left" valign="top">
                                            <div style="line-height: 28px;    text-align: center;width:119px" class="font13">
                                                <?php if(is_array($val) || $val instanceof \think\Collection || $val instanceof \think\Paginator): $i = 0; $__LIST__ = $val;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>
                                                <a id="active_<?php echo htmlentities($list['id']); ?>" href="<?php echo url($list['url_value']); if($list['params'] != ''): ?>?<?php echo htmlentities($list['params']); ?><?php endif; ?>"><?php echo htmlentities($list['title']); ?></a><br />
                                                <?php endforeach; endif; else: echo "" ;endif; ?>
                                            </div>
                                        </td>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                        <?php endif; ?>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</div>
<div style="clear: both;">
</div>
<!--二级导航栏-->
<?php if(!(empty($nav_h) || (($nav_h instanceof \think\Collection || $nav_h instanceof \think\Paginator ) && $nav_h->isEmpty()))): ?>
<div class="a1" align="center" style="border-bottom: 1px solid #e0dede;">
    <div class="a11" align="center" style="border-left: 1px solid #e0dede; border-right: 1px solid #e0dede;">
        <table width="1024" border="0" cellpadding="0" cellspacing="0" align="center">
            <tr>
                <td width="50" height="50" align="center">
                    <a href="/">
                        <img alt="" src="/static/index/image/isy.jpg" /></a>
                </td>
                <td width="974" align="center" valign="top">
                    <table width="974" border="0" cellpadding="0" cellspacing="0" align="center">
                        <tr>
                            <?php if(is_array($nav_h) || $nav_h instanceof \think\Collection || $nav_h instanceof \think\Paginator): $i = 0; $__LIST__ = $nav_h;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
                            <td id="tebs_<?php echo htmlentities($val['id']); ?>" class=" tebs cline ">
                                <a href="<?php echo url($val['url_value']); if($val['params'] != ''): ?>?<?php echo htmlentities($val['params']); ?><?php endif; ?>"><?php echo htmlentities($val['title']); ?></a>
                            </td>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>
</div>
<?php endif; ?>
<script>
    window.onload =function() {
        var nav_pid =  "<?php echo htmlentities($nav_pid); ?>";
        var nav_id =  "<?php echo htmlentities($nav_id); ?>";
        var str1 = '#active_' + nav_pid;
        //console.log(nav_pid);
        $(str1).addClass('active');
        if (nav_id != 0){
            //console.log(nav_id);
            var str2 = '#tebs_' + nav_id;
            $(str2).addClass('tebs2');
        }
    }
</script>


<div class="a1" align="center">
    <div class="a15" align="center">
        <table width="910" border="0" cellpadding="0" cellspacing="0" align="center">
            <tr>
                <td height="50">
                </td>
            </tr>
            <tr>
                <td>
                    <div align="left" class="font14" style="line-height: 27px;">
                        <div class="a1" align="center">
                            <div class="a17" align="center">
                                <table width="930" border="0" cellpadding="0" cellspacing="0" align="center">
                                    <tr>
                                        <td height="50">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div align="left" class="font14" style="line-height: 27px;">
                                                <table width="930" align="center" style="background: url(/static/index/image/lxwm.jpg);"
                                                       border="0" cellspacing="0" cellpadding="0">
                                                    <tbody>
                                                    <tr class="firstRow">
                                                        <td height="70" colspan="3">
                                                            <br />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="523">
                                                            <br />
                                                        </td>
                                                        <td width="303" height="50">
                                                            <p>
                                                                <span style="color: rgb(255, 255, 255); font-size: 14px;">一纸馋总部</span><span style="color: rgb(255, 192, 0);
                                                    font-size: 18px;"><br />
                                                    客服电话：<?php echo htmlentities($configuration['tel']); ?></span> <span style="color: rgb(255, 192, 0); font-size: 18px;">
                                                        <br />
                                                        400热线：<?php echo htmlentities($configuration['mobile']); ?></span>
                                                            </p>
                                                            <p>
                                                                <span style="color: rgb(255, 255, 255); font-size: 12px;">总部地址：<?php echo htmlentities($configuration['address']); ?></span>
                                                            </p>
                                                            <p>
                                                                <span style="color: rgb(255, 255, 255); font-size: 12px;">投资有风险，选择需谨慎</span>
                                                            </p>
                                                        </td>
                                                        <td width="104">
                                                            <br />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height="100" colspan="3">
                                                            <br />
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                <p>
                                                    &nbsp;</p>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div align="center" style="width: 800px; margin: 0 auto; text-align: center; background: #f2f2f2;
                            border: 1px solid #e0dede;">
                                                <div align="center">
                                                    <table width="660" border="0" cellpadding="0" cellspacing="0" align="center" class="bais">
                                                        <form method="post" class="form-horizontal" action="<?php echo url('index/Contactus/insert_message'); ?>" id="contactForm">
                                                            <?php echo token(); ?>
                                                            <tr>
                                                                <td height="30" colspan="3">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td width="36" height="35" align="left" class="heis font14 ">姓名</td>
                                                                <td width="11"></td>
                                                                <td width="315" align="left">
                                                                    <input id="cName" name="name" type="text" style="width: 280px; height: 26px;
                                                    line-height: 26px; border: 1px solid #d9d9d9;" maxlength="50" />
                                                                </td>
                                                                <td width="298" class="font14 huis" align="left">
                                                                    <span class="hongs">*</span> 您的真实姓名
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td height="10" colspan="3">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td height="35" align="left" class="heis font14 ">电话</td>
                                                                <td></td>
                                                                <td align="left" class="heis font14 ">
                                                                    <input id="cPhone" name="phone" type="tel" style="width: 280px; height: 26px; line-height: 26px;
                                                    border: 1px solid #d9d9d9;" onkeyup="value=value.replace(/[^\d]/g,'') " maxlength="11" />
                                                                </td>
                                                                <td class="font14 huis" align="left">
                                                                    <span class="hongs">*</span> 电话是与您联系的重要方式,请正确填写
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td height="10" colspan="3">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td height="35" align="left" class="heis font14 ">
                                                                    邮箱
                                                                </td>
                                                                <td>
                                                                </td>
                                                                <td align="left" class="heis font14 ">
                                                                    <input id="cEmail" name="email" type="email" style="width: 280px; height: 26px; line-height: 26px;
                                                    border: 1px solid #d9d9d9;" maxlength="30" />
                                                                </td>
                                                                <td>
                                                                    <span class="hongs">*</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td height="10" colspan="3">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td height="35" align="left" class="heis font14 ">
                                                                    地址
                                                                </td>
                                                                <td>
                                                                </td>
                                                                <td align="left" class="heis font14 ">
                                                                    <input id="cAddress" name="address" type="text" style="width: 280px; height: 26px;
                                                    line-height: 26px; border: 1px solid #d9d9d9;" maxlength="30" />
                                                                </td>
                                                                <td>
                                                                    <span class="hongs">*</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td height="10" colspan="3">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td height="35" align="left" class="heis font14 ">
                                                                    内容
                                                                </td>
                                                                <td>
                                                                </td>
                                                                <td align="left" class="heis font14 ">
                                                <textarea id="cContent" name="content" style="width: 278px; height: 139px; line-height: 20px;
                                                    border: 1px solid #d9d9d9;"></textarea>
                                                                </td>
                                                                <td valign="bottom" align="left">
                                                                    <div>
                                                                        <button class="but_s" type="submit">提交留言</button>
                                                                    </div>

                                                                        <button class="but_r" type="reset">重置</button>

                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td height="70" colspan="5">
                                                                </td>
                                                            </tr>
                                                        </form>
                                                    </table>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="20">
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td height="30">
                </td>
            </tr>
        </table>
    </div>
</div>
<script>
    /*<====================================表单提交==========================================>*/
    $('#contactForm').ajaxForm({
        //前端验证
        beforeSubmit:function () {
            if($.trim($('#cName').val()) == ''){
                layer.msg('姓名不能为空',{icon: 5,time:1500,shade:0.5});
                return false;
            }
            if($.trim($('#cPhone').val()) == ''){
                layer.msg('电话不能为空',{icon: 5,time:1500,shade:0.5});
                return false;
            }
        },
        //提交到后台后，和后台进行交互 ，处理结果
        success:function (res){
            console.log(res);
            if(res.code == 1){
                layer.msg(res.msg,{icon: 6,time:1500,shade:0.5},
                    function(){
                        history.go(0);
                    });
            }else{
                layer.msg(res.msg,{icon: 5,time:1500,shade:0.5});
                return false;
            }
        },

        //其他错误信息
        error:function () {
            layer.msg("非法操作",{icon: 5,time:1500,shade:0.5});
            return false;
        },
    })
</script>

<!--底部-->
﻿<table width="1024" align="center" cellpadding="0" cellspacing="0" border="0">
    <tr>
        <td height="50">
        </td>
    </tr>
</table>
<div class="adb" align="center">
    <div class="a18" align="center" style="position: relative;">
        <table width="1024" align="center" cellpadding="0" cellspacing="0" border="0">
            <tr>
                <td align="left" height="50" class="bais font16 ">
                    <?php if(!(empty($nav_f) || (($nav_f instanceof \think\Collection || $nav_f instanceof \think\Paginator ) && $nav_f->isEmpty()))): if(is_array($nav_f) || $nav_f instanceof \think\Collection || $nav_f instanceof \think\Paginator): $key = 0; $__LIST__ = $nav_f;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($key % 2 );++$key;?>
                    <a href="<?php echo url($val['url_value']); if($val['params'] != ''): ?>?<?php echo htmlentities($val['params']); ?><?php endif; ?>"><?php echo htmlentities($val['title']); ?></a>
                    <?php if($key < count($nav_f)){ ?> | <?php } ?>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                    <?php endif; ?>
                </td>
            </tr>
        </table>
    </div>
</div>



<div class="a1" align="center" style="background: #484848;">
    <div class="a18" align="center">
        <table width="1024" align="center" cellpadding="0" cellspacing="0" border="0">
            <tr>
                <td height="30" colspan="5">
                </td>
            </tr>
            <tr>
                <td width="189" align="center" valign="top">
                    <div align="center">
                        <img alt="关注微博" src="<?php echo htmlentities(get_file_path($configuration['wb_img'])); ?>" title="关注微博" />
                        <div class="font14 bais" style="padding-top: 10px;">
                            关注微博</div>
                    </div>
                </td>
                <td width="175" align="center" valign="top">
                    <div align="center">
                        <img alt="关注微信" src="<?php echo htmlentities(get_file_path($configuration['wx_img'])); ?>" title="关注微信" />
                        <div class="font14 bais" style="padding-top: 10px;">
                            关注微信</div>
                    </div>
                </td>
                <td width="20">
                </td>
                <td width="310" align="left" valign="top" colspan="2">
                    <div class="font16 bais" style=" font-size:16px">
                        一纸馋总部</div>
                    <div class="font12 bais" style="padding-top: 15px; line-height: 26px;font-size:16px">
                        客服电话：<?php echo htmlentities($configuration['mobile']); ?><br />
                        400热线：<?php echo htmlentities($configuration['tel']); ?><br />
                        总部地址：<?php echo htmlentities($configuration['address']); ?><br />
                        投资有风险  选择需谨慎
                    </div>
                </td>
                <td width="20">
                </td>
                <td>
                    <div class="lyzhe" >
                        <form method="post" class="form-horizontal" action="<?php echo url('index/Home/insert_message'); ?>" id="homeForm">
                            <?php echo token(); ?>
                            <div class="ly1">
                                <span>姓名：</span>
                                <input type="text" name="name" id="hName"><br />
                            </div>
                            <div class="ly1">
                                <span>电话：</span>
                                <input type="tel" name="phone" id="hPhone"><br />
                            </div>
                            <div class="ly1">
                                <span>留言：</span>
                                <textarea name="content" rows="" cols="" id="hContent"></textarea>
                            </div>
                            <button type="submit" id="tjly" class="b4">在线申请</button>
                        </form>
                    </div>
                </td>
            </tr>
            <tr style="    float: left; width: 326%;margin-top: -116px;margin-left: 67px;">
                <td align="left" colspan="5" class="font14 bais" style="">
                    2014 ©成都餐协餐饮管理有限公司. ALL rights reservd. <a href="http://www.beian.miit.gov.cn/">蜀ICP备12020698号-3</a>
                </td>
            </tr>
            <tr style="    float: left;width: 126%; margin-top: -97px;margin-left: 65px;">
                <td height="30" colspan="5" align="center" class="font14 bais">
                    友情链接： <a href="http://www.1zhichan.com" target="_blank">纸上烤肉</a> &nbsp; &nbsp;
                    <script type="text/javascript">
                        var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
                        document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F7df9947f924dba11b94fe85fad935d1d' type='text/javascript'%3E%3C/script%3E"));
                    </script>

                    <script>(function() {var _53code = document.createElement("script");_53code.src = "https://tb.53kf.com/code/code/10132959/3";var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(_53code, s);})();</script>
                </td>
            </tr>
            <tr>
                <td height="20" colspan="5">
                </td>
            </tr>
        </table>
    </div>
</div>

<div id="back-to-top" style="display: block;">
    <a href="#top">
        <img alt="" src="/static/index/image/xtop.png" />
    </a>
</div>

<div id="kf_nav">
    <ul>
        <li class="kf_2"><a class="xy_53" href="https://tb.53kf.com/code/client/10132959/3"
                            target="_blank">
            <img alt="" src="/static/index/image/kf-1.jpg" /></a></li>
        <li class="qq"><a href="http://wpa.qq.com/msgrd?V=1&Uin=1434414081&Site=一纸馋烤肉&Menu=yes" target="_blank">
            <img alt="" src="/static/index/image/kf-2.jpg" /></a></li>
        <li class="tel"><a href="https://tb.53kf.com/code/client/10132959/3">
            <img alt="" src="/static/index/image/kf-3.jpg" /></a></li>
        <li class="dw"><a href="https://tb.53kf.com/code/client/10132959/3"
                          target="_blank">
            <img alt="" src="/static/index/image/kf-4.jpg"/></a></li>
    </ul>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $("#back-to-top").hide();
        $(function () {
            $(window).scroll(function () {
                if ($(window).scrollTop() > 100) {
                    $("#back-to-top").fadeIn(500);
                }
                else {
                    $("#back-to-top").fadeOut(500);
                }
            });
            $("#back-to-top").click(function () {
                $('body,html').animate({ scrollTop: 0 }, 100);
                return false;
            });
        });
    });
</script>

<script>
    /*<====================================表单提交==========================================>*/
    $('#homeForm').ajaxForm({
        //前端验证
        beforeSubmit:function () {
            if($.trim($('#hName').val()) == ''){
                layer.msg('姓名不能为空',{icon: 5,time:1500,shade:0.5});
                return false;
            }
            if($.trim($('#hPhone').val()) == ''){
                layer.msg('电话不能为空',{icon: 5,time:1500,shade:0.5});
                return false;
            }
        },
        //提交到后台后，和后台进行交互 ，处理结果
        success:function (res){
            console.log(res);
            if(res.code == 1){
                layer.msg(res.msg,{icon: 6,time:1500,shade:0.5},
                    function(){
                        history.go(0);
                    });
            }else{
                layer.msg(res.msg,{icon: 5,time:1500,shade:0.5});
                return false;
            }
        },

        //其他错误信息
        error:function () {
            layer.msg("非法操作",{icon: 5,time:1500,shade:0.5});
            return false;
        },
    })
</script>

</body>
</html>