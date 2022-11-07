<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:80:"/Users/panliu/Documents/project/frdrillgroup/addons/cms/view/default2/index.html";i:1667831513;s:86:"/Users/panliu/Documents/project/frdrillgroup/addons/cms/view/default2/common/head.html";i:1667833645;s:86:"/Users/panliu/Documents/project/frdrillgroup/addons/cms/view/default2/common/foot.html";i:1667828983;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head id="1">
<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<meta http-equiv="X-UA-Compatible" content="IE=10" />
<meta name="msvalidate.01" content="13D6934EC79D9A73657A16A413368183" />
<title>DTH Bit, DTH Hammer, Dth Hammer Bit, Drill Dth Bit--{tmp:sitetitle}{tmp:sitetitle2}</title>
<meta name="keywords" content="{tmp:sitekeys}" >
<meta name="description" content="{tmp:sitedesc}">
<link rel="stylesheet" type="text/css" href="/group/css/public.css"/>
<link rel="stylesheet" type="text/css" href="/group/css/main.css"/>
<link rel="stylesheet" type="text/css" href="/group/css/swiper3.css"/>
<link type="text/css" rel="stylesheet" href="/group/css/media-queries.css" />
<script type="text/javascript" src="/group/js/jquery.js"></script>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PQ8J39D');</script>
<!-- End Google Tag Manager -->
</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PQ8J39D"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PQ8J39D');</script>
<!-- End Google Tag Manager -->
<body> 
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PQ8J39D"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


<div class="sitetop">
    <div class="cl">        <span class="fl mo-header-menu"><i class="qico qico-caidan"></i></span>		<span class="fr mo-header-search"><i class="qico qico-search3"></i></span>	</div>
  <div class="mo-search">
    <form role="search" id="searchform" class="cl" method="post" action="{tmp:sitepath}search/">
      <input type="hidden" name="type" value="product" />
      <input type="text" class="form-control" name="keys" placeholder="">
      <button type="submit" class="submit_btn" value=""><i class="qico qico-search"></i></button>
    </form>
  </div>
</div>
<div class="mo-leftmenu visible-xs-block">
  <div class="tit cl">
    <h6>All Categories</h6>
    <span><i class="qico qico-guanbi"></i></span></div>
  <ul>
    <li><a href="{tmp:homelink}" rel="nofollow">Home</a></li>
    {tmp:navlist type=all}
    <li><a href="[navlist:link]" rel="nofollow">[navlist:name]</a> {if:[navlist:num]>0} <i class="qico qico-down down-btn"></i>
      <ul>
        {tmp:navlist1 sid=[navlist:sid]}
        <li><a href="[navlist1:link]" rel="nofollow">[navlist1:name]</a></li>
        {/tmp:navlist1}
      </ul>
      {end if} </li>
    {/tmp:navlist}

    <!-- <?php $__lQJ6W9c0nr__ = \addons\cms\model\Channel::getChannelList(["id"=>"nav","type"=>"top","cache"=>"0","condition"=>"1=isnav","row"=>"20"]); if(is_array($__lQJ6W9c0nr__) || $__lQJ6W9c0nr__ instanceof \think\Collection || $__lQJ6W9c0nr__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__lQJ6W9c0nr__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav): $mod = ($i % 2 );++$i;?>
      <li>
          <a class="<?php if($nav->is_active): ?>active<?php endif; ?>" <?php if($nav['href'] == 0): ?>href="<?php echo $nav['url']; ?>"<?php endif; if($nav['target'] == 1): ?>target="_blank"<?php endif; ?>><?php echo $nav['name']; ?></a>
      </li>
    <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__lQJ6W9c0nr__; ?> -->
  </ul>
</div>
<div class="header">
  <div class="wp">
    <div class="logo"> <a href="{tmp:homelink}" rel="nofollow"><img src="/group/images/logo.png" alt="logo"></a> </div>
    <div class="nav">
      <ul>
        <!-- <li><a href="{tmp:homelink}" rel="nofollow">Home</a></li>
        {tmp:navlist type=all}
        <li><a href="[navlist:link]"  rel="nofollow">[navlist:name]</a> {if:[navlist:num]>0}
          <dl>
            {tmp:navlist1 sid=[navlist:sid]}
            <dd><a href="[navlist1:link]" rel="nofollow">[navlist1:name]</a></dd>
            {/tmp:navlist1}
          </dl>
          {end if} </li>
        {/tmp:navlist} -->


        <?php $__sw0zON4GXP__ = \addons\cms\model\Channel::getChannelList(["id"=>"nav","type"=>"top","cache"=>"0","condition"=>"1=isnav","row"=>"20"]); if(is_array($__sw0zON4GXP__) || $__sw0zON4GXP__ instanceof \think\Collection || $__sw0zON4GXP__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__sw0zON4GXP__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav): $mod = ($i % 2 );++$i;?>
                <li>
                    <a <?php if($nav['target'] == 1): ?>target="_blank" <?php endif; ?>><?php echo $nav['name']; ?></a>
                    <?php if($nav['has_child']): ?>
                        <dl class="dropdown-menu" style="min-width: 100px;">
                            <?php $__jmU49qLPFy__ = \addons\cms\model\Channel::getChannelList(["id"=>"son","type"=>"son","condition"=>"1=isnav","typeid"=>$nav['id'],"cache"=>"0","row"=>"20"]); if(is_array($__jmU49qLPFy__) || $__jmU49qLPFy__ instanceof \think\Collection || $__jmU49qLPFy__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__jmU49qLPFy__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$son): $mod = ($i % 2 );++$i;?>
                            <dd><a href="<?php echo $son['url']; ?>"><?php echo $son['name']; ?></a></dd>
                            <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__jmU49qLPFy__; ?>
                          </dl>
                    <?php endif; ?>
                </li>
                <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__sw0zON4GXP__; ?>
      </ul>
    </div>
    <div class="header_right">
      <div class="search">
        <h3><i class="qico qico-search3"></i></h3>
        <form class="serchbox" name="search"  method="post" action="{tmp:sitepath}search/">
          <input type="hidden" name="type" value="product" />
          <input class="submit_text" type="text" name="keys" placeholder="Search" />
          <input class="submit_btn" type="submit" value="GO" />
        </form>
      </div>
      <div class="header-lang">
        <div class="box"> <img src="/group/images/flag/en.png" /><em>EN</em><i class="qico qico-down-jiantou"></i> </div>
        <ul>
		  <li><a href="https://www.frdrillgroup.com" tran="no" ><img src="/group/images/flag/en.png" />EN</a></li>
          <li><a href="https://www.frdrillgroup.com/es/index.html" tran="no" ><img src="/group/images/flag/es.png" />ES</a></li>
          <li><a href="https://www.frdrillgroup.com/pt/index.html" tran="no" ><img src="/group/images/flag/pt.png" />PT</a></li>
          <li><a href="https://www.frdrillgroup.com/sv/index.html" tran="no" ><img src="/group/images/flag/sv.png" />SV</a></li>
          <li><a href="https://www.frdrillgroup.com/de/index.html" tran="no" ><img src="/group/images/flag/de.png" />DE</a></li>
          <li><a href="https://www.frdrillgroup.com/tr/index.html" tran="no" ><img src="/group/images/flag/tr.png" />TR</a></li>
          <li><a href="https://www.frdrillgroup.com/fr/index.html" tran="no" ><img src="/group/images/flag/fr.png" />FR</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div id="banner">
  <div class="swiper-container">
    <div class="swiper-wrapper"> {tmp:slidelist type=A num=3}
      <div class="swiper-slide"><img src="{tmp:rootdir}[slidelist:pic]" /></div>
      {/tmp:slidelist} </div>
    <div class="swiper-pagination"></div>
  </div>
</div>
<div class="indexA">
  <div class="wp cl">
    <h3><em>Product Categories</em></h3>
    <ul class="cl">
      {tmp:ad atid=1 max=6}
      <li> <a class="pic" href="[ad:link]"><img src="{tmp:rootdir}[ad:pic]" /></a>
        <h5><a href="[ad:link]">[ad:title]</a></h5>
      </li>
      {/tmp:ad}
    </ul>
  </div>
</div>
<div class="indexB">
  <div class="wp cl">
    <div class="pic">
      <div class="swiper-container">
        <div class="swiper-wrapper"> {tmp:ad atid=2 max=3}
          <div class="swiper-slide"><img src="{tmp:rootdir}[ad:pic]" /></div>
          {/tmp:ad} </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
    <div class="txt">
      <h3>ABOUT US</h3>
      {label:about}[label:content]{/label} <a class="more" href="{tmp:type sid=8}[type:link]{/tmp:type}">MORE <i class="qico qico-right7"></i></a> </div>
  </div>
</div>
{tmp:ad atid=3 max=1}
<div class="indexC" style="background: url({tmp:rootdir}[ad:pic])">
  <div class="wp cl">
    <h3>OUR MISSION</h3>
    <img src="{tmp:rootdir}[ad:pic2]" />
    <h5>[ad:title]</h5>
    <p>[ad:adcontent]</p>
  </div>
</div>
{/tmp:ad}
<div class="wp indexD cl">
  <h3>LATEST NEWS</h3>
  <div class="cl"></div>
  <div class="indexnews">
    <ul>
      {tmp:content sid=9 num=3 order=isgood}
      <li class="cl"> <a class="pic" href="[content:link]"><img src="{tmp:rootdir}[content:pic]" alt="[content:title]"/></a>
        <div class="t">
          <h5><a href="[content:link]">[content:title]</a></h5>
          <p>[content:zdesc]</p>
          <div class="more"><span>{formatdate:[content:date],enm} {formatdate:[content:date],dd}, {formatdate:[content:date],yyyy}</span><a href="[content:link]">MORE <i class="qico qico-right7"></i></a></div>
        </div>
      </li>
      {/tmp:content}
    </ul>
    <a class="getmore" href="{tmp:type sid=9}[type:link]{/tmp:type}">MORE <i class="qico qico-right7"></i></a> </div>
  <div class="v"> <img src="/group/images/news.jpg" /> </div>
</div>
<div id="footer">
  <div class="wp cl">
    <div class="foot-contact">
      <h5>{tmp:companyname}</h5>
      <p>Tel:<a href="tel:{tmp:tel}" rel="nofollow">{tmp:tel}</a></p>
      <p>Fax:{tmp:fax}</p>
      <p>Add:{tmp:address}</p>
      <p>Email: <a href="mailto:{tmp:email1}" rel="nofollow">{tmp:email1}</a>
<a href="mailto:{tmp:email2}" rel="nofollow">{tmp:email2}</a></p>

      <div class="share"> <a href="https://www.facebook.com/pages/creation/?ref_type=universal_creation_hub" rel="nofollow"><i class="qico qico-facebook"></i></a> 
<a href="https://twitter.com/home?lang=en" rel="nofollow"><i class="qico qico-twitter"></i></a> <a href="https://www.linkedin.com/in/%E9%98%B3-%E6%AC%A7-1206161a3/" rel="nofollow"><i class="qico qico-linkedin"></i></a>
 <a href="https://www.pinterest.com/ojack1582/pins/" rel="nofollow"><i class="qico qico-pinterest"></i></a> <a href="https://www.instagram.com/frienddrillgroup/" rel="nofollow"><i class="qico qico-instagram"></i></a>
<a href="https://www.youtube.com/channel/UCuUSPOFcshugm7knbZ0lzcA/videos" rel="nofollow"><i class="qico qico-youtube"></i></a> </div>
    </div>
    <div class="foot-list">
      <h5>Product</h5>
      <ul>
        {tmp:navlist sid=1}
        <li><a href="[navlist:link]" rel="nofollow">[navlist:name]</a></li>
        {/tmp:navlist}
      </ul>
    </div>
    <div class="foot-nav">
      <h5>MENU</h5>
      <ul>
        <li><a href="{tmp:homelink}" rel="nofollow">Home</a></li>
        {tmp:navlist type=all}
        <li><a href="[navlist:link]" rel="nofollow">[navlist:name]</a></li>
        {/tmp:navlist}
      </ul>
    </div>
    <div class="foot-form">
      <h5>Subscribe</h5>
      <div class="sendemail cl">
        <form name="inviteform" method="post" action="{tmp:rootdir}/?invitat">
          <input class="post-text" name="email" type="text" placeholder="Enter your email" />
          <textarea id="pintro-ly_content" name="message" maxlength="300" rows="4" class="c_cnt" placeholder="Enter your message"></textarea>
          <button type="submit" class="post-btn" id="chk_math">SUBMIT</button>
        </form>
      </div>
    </div>
  </div>
  <div class="copyright">
    <p>{tmp:copyright} 
	<script type="text/javascript">window.onload = function() {var mf = document.createElement("script");mf.type = "text/javascript"; mf.src = "https://www.analytics-service.com/analytics.php?cid=hnfuyude&mod=im&type=list&charset=gb2312&gmt8=1";document.getElementsByTagName("body")[0].appendChild(mf);};</script>
	<script type="text/javascript">document.write(unescape("%3Cspan id='cnzz_stat_icon_1278630424'%3E%3C/span%3E%3Cscript src='https://v1.cnzz.com/z_stat.php%3Fid%3D1278630424%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script></p>
  </div>
</div>
<div id="gotop"><i class="qico qico-up"></i></div>
<div id="footBar">
  <ul class="cl">
    <li><a href="{tmp:homelink}" rel="nofollow"><i class="qico qico-home"></i><span>HOME</span></a></li>
    <li><a href="{tmp:type sid=1}[type:link]{/tmp:type}" rel="nofollow"><i class="qico qico-sort"></i><span>Products</span></a></li>
    <li><a href="mailto:{tmp:email}" rel="nofollow"><i class="qico qico-youxiang"></i><span>E-mail</span></a></li>
    <li><a href="tel:{tmp:tel}" rel="nofollow"><i class="qico qico-tel"></i><span>Tel</span></a></li>
  </ul>
</div><!-- Global site tag (gtag.js) - Google Analytics --><script async src="https://www.googletagmanager.com/gtag/js?id=UA-174305374-1"></script><script>  window.dataLayer = window.dataLayer || [];  function gtag(){dataLayer.push(arguments);}  gtag('js', new Date());  gtag('config', 'UA-174305374-1');</script> 
<script type="text/javascript" src="/group/js/js.js"></script> 
<script type="text/javascript" src="/group/js/swiper3.js"></script> 
<script type="text/javascript" src="/group/js/index.js"></script>
</body>
</html>