<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:83:"/Users/panliu/Documents/project/qianzhi/addons/cms/view/default1/channel_about.html";i:1653808619;s:80:"/Users/panliu/Documents/project/qianzhi/addons/cms/view/default1/common/top.html";i:1654359903;s:80:"/Users/panliu/Documents/project/qianzhi/addons/cms/view/default1/common/mbx.html";i:1654685697;s:81:"/Users/panliu/Documents/project/qianzhi/addons/cms/view/default1/common/foot.html";i:1654359903;}*/ ?>
<!--<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1,minimum-scale=1.0,maximum-scale=1.0">
<?php if(empty($__CHANNEL__) AND empty($__ARCHIVES__) AND empty($__PAGE__)): ?>
<title><?php echo $site['name']; ?></title>
<meta name="keywords" content="<?php echo $site['keywords']; ?>" />
<meta name="description" content="<?php echo $site['description']; ?>" />
<?php else: ?>
<title><?php echo \think\Config::get("cms.title"); ?>-<?php echo $site['name']; ?></title>
<meta name="keywords" content="<?php echo \think\Config::get("cms.keywords"); ?>" />
<meta name="description" content="<?php echo \think\Config::get("cms.description"); ?>" />
<?php endif; ?>
<!-- link -->
<link rel="stylesheet" type="text/css" href="https://at.alicdn.com/t/font_601403_l9mrrofm0m.css">
<link rel="stylesheet" type="text/css" href="https:<?php echo $site['ico']; ?>">
<link rel="stylesheet" ype="text/css" href="/template/default1/css/common.css?v=<?php echo $site['version']; ?>">
<link rel="stylesheet" type="text/css"media="screen and (min-width:1280px)" href="/template/default1/css/pc.css?v=<?php echo $site['version']; ?>">
<link rel="stylesheet" type="text/css" media="screen and (max-width:1279px)" href="/template/default1/css/wap.css?v=<?php echo $site['version']; ?>">
<!-- link -->
<!-- script -->
<script type="text/javascript" src="/template/default1/js/jquery.js?v=<?php echo $site['version']; ?>"></script>
<script type="text/javascript" src="/template/default1/js/img.js?v=<?php echo $site['version']; ?>"></script>
<script type="text/javascript" src="/template/default1/js/easyzoom.js?v=<?php echo $site['version']; ?>"></script>
<script type="text/javascript" src="/template/default1/js/swiper.js?v=<?php echo $site['version']; ?>"></script>
<!-- script -->
</head>
<body class="<?php if($_SERVER['REQUEST_URI'] != '/'): ?>content<?php endif; ?>">
<?php switch($site['head']): case "1": ?>
<div class="indexNav" id="indexNav">
     <div class="indexheadbj">
        <div class="box indexhead">
                <div class="indexheadL">Welcome to <?php echo $site['name']; ?></div>
                <div class="indexheaR">
               <?php $__2BtLfhYjyg__ = \addons\cms\model\Block::getBlockList(["id"=>"block","name"=>"contact","orderby"=>"weigh","orderway"=>"desc","condition"=>"1=foottop"]); if(is_array($__2BtLfhYjyg__) || $__2BtLfhYjyg__ instanceof \think\Collection || $__2BtLfhYjyg__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__2BtLfhYjyg__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$block): $mod = ($i % 2 );++$i;?>
                    <p><a href="<?php echo $block['url']; ?>" title=""><?php echo $block['title']; ?> : <?php echo str_replace(["<p>","</p>"], "", $block['content']); ?></a></p>
               <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__2BtLfhYjyg__; ?>
               </div>
        </div>
    </div>

    <div class="indexNavNr box">
     	<a class="logo" href="/">
    	<?php if(empty($site['logotxt']) || (($site['logotxt'] instanceof \think\Collection || $site['logotxt'] instanceof \think\Paginator ) && $site['logotxt']->isEmpty())): ?>
        <img class="logo1" src="<?php echo $site['logo']; ?>">
        <img class="logo2" src="<?php echo $site['logo2']; ?>">
    	<?php else: ?>
            <h1><?php echo $site['logotxt']; ?></h1>
    	<?php endif; ?>
    	</a>

        <div class="indexNavNrRight">
        <div class="navA">
            <ul class="qc" id="nav">
            <?php $__Mqa3HAYQNG__ = \addons\cms\model\Channel::getChannelList(["id"=>"nav","type"=>"top","cache"=>"0","condition"=>"1=isnav","row"=>"20"]); if(is_array($__Mqa3HAYQNG__) || $__Mqa3HAYQNG__ instanceof \think\Collection || $__Mqa3HAYQNG__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__Mqa3HAYQNG__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav): $mod = ($i % 2 );++$i;?>
                <li>
                    <a class="<?php if($nav->is_active): ?>this<?php endif; ?>" <?php if($nav['href'] == 0): ?>href="<?php echo $nav['url']; ?>"<?php endif; if($nav['target'] == 1): ?>target="_blank"<?php endif; ?>><?php echo $nav['name']; ?></a>
                    <?php if($nav['has_child']): ?>
                    <ul>

                        <?php $__MwpRdYgy50__ = \addons\cms\model\Archives::getArchivesList(["id"=>"navshow","channel"=>$nav['id'],"orderby"=>"weigh","orderway"=>"desc","flag"=>"top","row"=>"20"]); if(is_array($__MwpRdYgy50__) || $__MwpRdYgy50__ instanceof \think\Collection || $__MwpRdYgy50__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__MwpRdYgy50__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navshow): $mod = ($i % 2 );++$i;?>
                        <li><a href="<?php echo $navshow['url']; ?>" title="<?php echo $navshow['title']; ?>"><?php echo $navshow['title']; ?></a></li>
                        <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__MwpRdYgy50__; $__IeBCvANqH6__ = \addons\cms\model\Channel::getChannelList(["id"=>"son","type"=>"son","condition"=>"1=isnav","typeid"=>$nav['id'],"cache"=>"0","row"=>"20"]); if(is_array($__IeBCvANqH6__) || $__IeBCvANqH6__ instanceof \think\Collection || $__IeBCvANqH6__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__IeBCvANqH6__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$son): $mod = ($i % 2 );++$i;?>

                            <li><a class="<?php if($son->is_active): ?>this<?php endif; ?>"  href="<?php echo $son['url']; ?>"><?php echo $son['name']; ?></a>
                                 <?php if($son['has_child']): ?>
                                 <ul>
                                    <?php $__LDzJgbMtsv__ = \addons\cms\model\Channel::getChannelList(["id"=>"sons","condition"=>"1=isnav","type"=>"son","typeid"=>$son['id'],"cache"=>"0"]); if(is_array($__LDzJgbMtsv__) || $__LDzJgbMtsv__ instanceof \think\Collection || $__LDzJgbMtsv__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__LDzJgbMtsv__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sons): $mod = ($i % 2 );++$i;?>
                                    <li><a class="<?php if($sons->is_active): ?>this<?php endif; ?>"  href="<?php echo $sons['url']; ?>"><?php echo $sons['name']; ?></a></li>
                                    <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__LDzJgbMtsv__; ?>
                                </ul>
                                <?php endif; ?>
                            </li>

                        <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__IeBCvANqH6__; ?>
                    </ul>
                    <?php else: ?>
                    <ul>
                        <?php $__IZxt3AOoa7__ = \addons\cms\model\Archives::getArchivesList(["id"=>"navshow","channel"=>$nav['id'],"orderby"=>"weigh","orderway"=>"desc","flag"=>"top"]); if(is_array($__IZxt3AOoa7__) || $__IZxt3AOoa7__ instanceof \think\Collection || $__IZxt3AOoa7__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__IZxt3AOoa7__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navshow): $mod = ($i % 2 );++$i;?>
                        <li><a href="<?php echo $navshow['url']; ?>" title="<?php echo $navshow['title']; ?>"><?php echo $navshow['title']; ?></a></li>
                        <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__IZxt3AOoa7__; ?>
                    </ul>
                   <?php endif; ?>
               </li>
            <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__Mqa3HAYQNG__; ?>
            </ul>
        </div>

        <?php if(in_array(($site['indexcp']), explode(',',"1"))): ?>
        <a class="CartIco" href="/Cart.html"><i class="ico icon-gouwuche"></i><em>0</em></a>
        <?php endif; if(is_array($site['languages']) || $site['languages'] instanceof \think\Collection || $site['languages'] instanceof \think\Paginator): $i = 0; $__LIST__ = $site['languages'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
        <a class="RequestAQuote" href="<?php echo $item; ?>"> <?php echo $key; ?> <i class="ico icon-arrow-left-copy"></i></a>
        <?php endforeach; endif; else: echo "" ;endif; if(in_array(($site['sousuo']), explode(',',"1"))): ?>
        <div class="sousuoA">
              <form action="/s.html" method="post">
                <input autocomplete = "off" class="form-control" name="q" data-suggestion-url="/addons/cms/search/suggestion.html" type="text" value="" placeholder="Key words">
                <button class="ico icon-icon-test"></button>
            </form>
    	</div>
        <?php endif; ?>

       </div>
   </div>
</div>
<?php break; case "2": ?>
<div class="indexNavC" id="indexNav">
    <div class="headC box">
        <div class="headCNr">
            <a class="headCNrlogo" href="/">
            	<?php if(empty($site['logotxt']) || (($site['logotxt'] instanceof \think\Collection || $site['logotxt'] instanceof \think\Paginator ) && $site['logotxt']->isEmpty())): ?>
                <img class="logo1" src="<?php echo $site['logo']; ?>">
                <img class="logo2" src="<?php echo $site['logo2']; ?>">
            	<?php else: ?>
                    <h1><?php echo $site['logotxt']; ?></h1>
            	<?php endif; ?>
        	</a>
            <div class="headCRight">
                <a><span><i class="ico icon-1-03"></i></span><p><em>Working Days</em>Mon - Sat: 09:00 AM - 06:00 PM</p></a>
                <?php $__8QvB4MxpUf__ = \addons\cms\model\Block::getBlockList(["id"=>"block","name"=>"contact","orderby"=>"weigh","orderway"=>"desc","condition"=>"1=foottop"]); if(is_array($__8QvB4MxpUf__) || $__8QvB4MxpUf__ instanceof \think\Collection || $__8QvB4MxpUf__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__8QvB4MxpUf__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$block): $mod = ($i % 2 );++$i;?>
     		    <a><span><i class="ico <?php echo $block['image']; ?>"></i></span><p><em><?php echo $block['title']; ?></em><?php echo str_replace(["<p>","</p>"], "", $block['content']); ?></p></a>
     			<?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__8QvB4MxpUf__; ?>
            </div>
        </div>
    </div>


 <div class="indexNavNrC">
   <div class="box indexNavNrCBox">

    <ul class="qc" id="navC">
    <?php $__eOphGcb4Ck__ = \addons\cms\model\Channel::getChannelList(["id"=>"nav","type"=>"top","cache"=>"0","condition"=>"1=isnav","row"=>"20"]); if(is_array($__eOphGcb4Ck__) || $__eOphGcb4Ck__ instanceof \think\Collection || $__eOphGcb4Ck__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__eOphGcb4Ck__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav): $mod = ($i % 2 );++$i;?>
        <li>
            <a class="<?php if($nav->is_active): ?>this<?php endif; ?>" href="<?php echo $nav['url']; ?>"><?php echo $nav['name']; ?></a>
            <?php if($nav['has_child']): ?>
            <ul>

                <?php $__GOQVe5bgjL__ = \addons\cms\model\Archives::getArchivesList(["id"=>"navshow","channel"=>$nav['id'],"orderby"=>"weigh","orderway"=>"desc","flag"=>"top"]); if(is_array($__GOQVe5bgjL__) || $__GOQVe5bgjL__ instanceof \think\Collection || $__GOQVe5bgjL__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__GOQVe5bgjL__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navshow): $mod = ($i % 2 );++$i;?>
                <li><a href="<?php echo $navshow['url']; ?>" title="<?php echo $navshow['title']; ?>"><?php echo $navshow['title']; ?></a></li>
                <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__GOQVe5bgjL__; $__D72gq1FROG__ = \addons\cms\model\Channel::getChannelList(["id"=>"son","type"=>"son","condition"=>"1=isnav","typeid"=>$nav['id'],"cache"=>"0"]); if(is_array($__D72gq1FROG__) || $__D72gq1FROG__ instanceof \think\Collection || $__D72gq1FROG__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__D72gq1FROG__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$son): $mod = ($i % 2 );++$i;?>

                    <li><a class="<?php if($son->is_active): ?>this<?php endif; ?>"  href="<?php echo $son['url']; ?>"><?php echo $son['name']; ?></a>
                         <?php if($son['has_child']): ?>
                         <ul>
                            <?php $__qdWNcfyP3j__ = \addons\cms\model\Channel::getChannelList(["id"=>"sons","condition"=>"1=isnav","type"=>"son","typeid"=>$son['id'],"cache"=>"0"]); if(is_array($__qdWNcfyP3j__) || $__qdWNcfyP3j__ instanceof \think\Collection || $__qdWNcfyP3j__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__qdWNcfyP3j__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sons): $mod = ($i % 2 );++$i;?>
                            <li><a class="<?php if($sons->is_active): ?>this<?php endif; ?>"  href="<?php echo $sons['url']; ?>"><?php echo $sons['name']; ?></a></li>
                            <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__qdWNcfyP3j__; ?>
                        </ul>
                        <?php endif; ?>
                    </li>

                <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__D72gq1FROG__; ?>
            </ul>
            <?php else: ?>
            <ul>
                <?php $__u1kWFzLDJR__ = \addons\cms\model\Archives::getArchivesList(["id"=>"navshow","channel"=>$nav['id'],"orderby"=>"weigh","orderway"=>"desc","flag"=>"top"]); if(is_array($__u1kWFzLDJR__) || $__u1kWFzLDJR__ instanceof \think\Collection || $__u1kWFzLDJR__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__u1kWFzLDJR__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navshow): $mod = ($i % 2 );++$i;?>
                <li><a href="<?php echo $navshow['url']; ?>" title="<?php echo $navshow['title']; ?>"><?php echo $navshow['title']; ?></a></li>
                <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__u1kWFzLDJR__; ?>
            </ul>
           <?php endif; ?>
        </li>
    <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__eOphGcb4Ck__; ?>
    </ul>

    <?php if(in_array(($site['sousuo']), explode(',',"1"))): ?>
    <div class="sousuonr">
           <form action="/s.html" method="post">
                <input autocomplete = "off" class="form-control" name="q" data-suggestion-url="/addons/cms/search/suggestion.html" type="text" value="" placeholder="Key words">
                <button class="ico icon-icon-test"></button>
            </form>
	</div>
	<?php endif; ?>

   </div>
    </div>
</div>

    <script>
    function fixedb(a,b){
      var topb=$(a).offset().top;
      $(window).scroll(function(){
          var topa=$(window).scrollTop();
          if(topa>topb){
                 $('html').addClass(b);
           } else {
                 $('html').removeClass(b);
           }
      });
    };
    fixedb('#navC','fixedC');
    </script>

<?php break; endswitch; ?>




<!-- wapNav -->
<div class='WapHead'>
    <a class="WapLogo" href="/">
    <?php if(empty($site['logotxt']) || (($site['logotxt'] instanceof \think\Collection || $site['logotxt'] instanceof \think\Paginator ) && $site['logotxt']->isEmpty())): ?>
    <img src="<?php echo $site['logo']; ?>">
    <?php else: ?>
    <?php echo $site['logotxt']; endif; ?></a>
    <i class='ico menu icon-webicon03'></i>
</div>
<div class='WapNav'>
    <ul class="qc">
    <?php $__ctdINDnYJl__ = \addons\cms\model\Channel::getChannelList(["id"=>"nav","type"=>"top","cache"=>"0","condition"=>"1=isnav","row"=>"20"]); if(is_array($__ctdINDnYJl__) || $__ctdINDnYJl__ instanceof \think\Collection || $__ctdINDnYJl__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__ctdINDnYJl__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav): $mod = ($i % 2 );++$i;?>
        <li>
            <a class="<?php if($nav->is_active): ?>this<?php endif; ?>" <?php if($nav['href'] == 0): ?>href="<?php echo $nav['url']; ?>"<?php endif; if($nav['target'] == 1): ?>target="_blank"<?php endif; ?>><?php echo $nav['name']; ?></a>
            <?php if($nav['has_child']): ?>
            <ul>
                <?php $__h10QOvmXy7__ = \addons\cms\model\Archives::getArchivesList(["id"=>"navshow","channel"=>$nav['id'],"orderby"=>"weigh","orderway"=>"desc","flag"=>"top","row"=>"20"]); if(is_array($__h10QOvmXy7__) || $__h10QOvmXy7__ instanceof \think\Collection || $__h10QOvmXy7__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__h10QOvmXy7__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navshow): $mod = ($i % 2 );++$i;?>
                <li><a href="<?php echo $navshow['url']; ?>" title="<?php echo $navshow['title']; ?>"><?php echo $navshow['title']; ?></a></li>
                <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__h10QOvmXy7__; $__Pp8tqvFCSX__ = \addons\cms\model\Channel::getChannelList(["id"=>"son","type"=>"son","typeid"=>$nav['id'],"cache"=>"0","condition"=>"1=isnav"]); if(is_array($__Pp8tqvFCSX__) || $__Pp8tqvFCSX__ instanceof \think\Collection || $__Pp8tqvFCSX__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__Pp8tqvFCSX__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$son): $mod = ($i % 2 );++$i;?>

                <li><a class="<?php if($son->is_active): ?>this<?php endif; ?>"  href="<?php echo $son['url']; ?>"><?php echo $son['name']; ?></a>
                     <?php if($son['has_child']): ?>

                     <ul>
                        <?php $__R4BmAp0drt__ = \addons\cms\model\Channel::getChannelList(["id"=>"sons","type"=>"son","typeid"=>$son['id'],"cache"=>"0","condition"=>"1=isnav","row"=>"20"]); if(is_array($__R4BmAp0drt__) || $__R4BmAp0drt__ instanceof \think\Collection || $__R4BmAp0drt__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__R4BmAp0drt__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sons): $mod = ($i % 2 );++$i;?>
                        <li><a class="<?php if($sons->is_active): ?>this<?php endif; ?>"  href="<?php echo $sons['url']; ?>"><?php echo $sons['name']; ?></a></li>
                        <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__R4BmAp0drt__; ?>
                    </ul>
                    <?php endif; ?>
                </li>

                <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__Pp8tqvFCSX__; ?>

            </ul>
             <?php else: ?>
            <ul>
                <?php $__bMBeGhj0un__ = \addons\cms\model\Archives::getArchivesList(["id"=>"navshow","channel"=>$nav['id'],"orderby"=>"weigh","orderway"=>"desc","flag"=>"top","row"=>"20"]); if(is_array($__bMBeGhj0un__) || $__bMBeGhj0un__ instanceof \think\Collection || $__bMBeGhj0un__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__bMBeGhj0un__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navshow): $mod = ($i % 2 );++$i;?>
                <li><a href="<?php echo $navshow['url']; ?>" title="<?php echo $navshow['title']; ?>"><?php echo $navshow['title']; ?></a></li>
                <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__bMBeGhj0un__; ?>
            </ul>

            <?php endif; ?>
        </li>
    <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__ctdINDnYJl__; ?>
    </ul>





    <?php if(in_array(($site['sousuo']), explode(',',"1"))): ?>
    <div class="sousuonr">
          <form action="/s.html" method="post">
                <input autocomplete = "off" class="form-control" name="q" data-suggestion-url="/addons/cms/search/suggestion.html" type="text" value="" placeholder="Key words">
                <button class="ico icon-icon-test"></button>
            </form>
	</div>
	<?php endif; ?>


</div>
<!-- wapNav -->-->
<!--<div class="lanmubanner qc">-->
<!--    <img src="<?php echo $__CHANNEL__['image']; ?>" alt="<?php echo $__CHANNEL__['name']; ?>">-->
<!-- 	<div class="lanmubannerTxt">-->
<!--		 	<div class="box">-->
<!--		 		<h2><?php echo $__CHANNEL__['name']; ?></h2>-->
<!--		 		    -->
<!--                  -->
<!--                        <div class="Breadcrumbs">-->
<!--							<span class="glyphicon glyphicon-home"></span>-->
<!--                        <?php $__OYe9A3Hhwg__ = \addons\cms\model\Channel::getBreadcrumb($__CHANNEL__??[], $__ARCHIVES__??[], $__TAGS__??[], $__PAGE__??[], $__DIYFORM__??[]); if(is_array($__OYe9A3Hhwg__) || $__OYe9A3Hhwg__ instanceof \think\Collection || $__OYe9A3Hhwg__ instanceof \think\Paginator): $k = 0; $__LIST__ = $__OYe9A3Hhwg__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($k % 2 );++$k;?>-->
<!--							<?php if($k>1): ?>» <?php endif; ?><a title="<?php echo $item['name']; ?>" href="<?php echo $item['url']; ?>"><?php echo $item['name']; ?></a>-->
<!--        				<?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__OYe9A3Hhwg__; ?>-->
<!--        				</div>-->
<!--                 -->
<!--                    -->
<!--		 	</div>-->
<!--	</div>-->
<!--</div>-->

<div id="header-banner" class="product-header" style="background: url(<?php echo $__CHANNEL__['image']; ?>)">
	<div class="container relative" style="height: 100%;">
		<div class="product-header-content">
			<p class="title font-bold">PRODUCT CENTER</p>
			<div>
				<span class="glyphicon glyphicon-home"></span>
				<?php $__1fGb8S5iql__ = \addons\cms\model\Channel::getBreadcrumb($__CHANNEL__??[], $__ARCHIVES__??[], $__TAGS__??[], $__PAGE__??[], $__DIYFORM__??[]); if(is_array($__1fGb8S5iql__) || $__1fGb8S5iql__ instanceof \think\Collection || $__1fGb8S5iql__ instanceof \think\Paginator): $k = 0; $__LIST__ = $__1fGb8S5iql__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($k % 2 );++$k;if($k>1): ?>» <?php endif; ?><span><a title="<?php echo $item['name']; ?>" href="<?php echo $item['url']; ?>" style="color: #ffffff"><?php echo $item['name']; ?></a></span>
				<?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__1fGb8S5iql__; ?>
			</div>
		</div>
	</div>
</div>

 

 <div class="About box">
    <?php $__MGJyS3F9VU__ = \addons\cms\model\Block::getBlockList(["id"=>"block","name"=>"about","orderby"=>"weigh","orderway"=>"desc"]); if(is_array($__MGJyS3F9VU__) || $__MGJyS3F9VU__ instanceof \think\Collection || $__MGJyS3F9VU__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__MGJyS3F9VU__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$block): $mod = ($i % 2 );++$i;?> 
 	<div class="box">
 	  	<div class="BJQ">
 	  	    <?php if(!(empty($block['image']) || (($block['image'] instanceof \think\Collection || $block['image'] instanceof \think\Paginator ) && $block['image']->isEmpty()))): ?><div class="AboutImg" ><img src="<?php echo $block['image']; ?>"></div><?php endif; ?> 
 	  	    <div class="<?php if(empty($block['image']) || (($block['image'] instanceof \think\Collection || $block['image'] instanceof \think\Paginator ) && $block['image']->isEmpty())): ?>AboutTxt100<?php else: ?>AboutTxt<?php endif; ?>">
 	  	        <?php echo $block['content']; ?>
	 	    </div>
	 	   
	 	</div>
 	</div>
 	<?php if(!(empty($block['images']) || (($block['images'] instanceof \think\Collection || $block['images'] instanceof \think\Paginator ) && $block['images']->isEmpty()))): ?>
 	<ul>
 	  <?php if(is_array(explode(',',$block['images'])) || explode(',',$block['images']) instanceof \think\Collection || explode(',',$block['images']) instanceof \think\Paginator): $i = 0; $__LIST__ = explode(',',$block['images']);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$image): $mod = ($i % 2 );++$i;?>
        <li>
            <img src="<?php echo cdnurl($image); ?>">
            <div>
               <?php if(!(empty($block['intro'][$key]['info']) || (($block['intro'][$key]['info'] instanceof \think\Collection || $block['intro'][$key]['info'] instanceof \think\Paginator ) && $block['intro'][$key]['info']->isEmpty()))): ?><h3><?php echo $block['intro'][$key]['info']; ?></h3><?php endif; if(!(empty($block['intro'][$key]['txt']) || (($block['intro'][$key]['txt'] instanceof \think\Collection || $block['intro'][$key]['txt'] instanceof \think\Paginator ) && $block['intro'][$key]['txt']->isEmpty()))): ?><p><?php echo $block['intro'][$key]['txt']; ?></p><?php endif; ?>
            </div>
        </li> 
      <?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
    <?php endif; endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__MGJyS3F9VU__; ?>  
 	 
 
 	<div class="aboutListBox">
 	    	<?php $__jAtSslGVM0__ = \addons\cms\model\Block::getBlockList(["id"=>"block","name"=>"ab","orderby"=>"weigh","orderway"=>"desc"]); if(is_array($__jAtSslGVM0__) || $__jAtSslGVM0__ instanceof \think\Collection || $__jAtSslGVM0__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__jAtSslGVM0__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$block): $mod = ($i % 2 );++$i;?> 
 	    <div class="aboutList">
 	        <div class="aboutListImg"><img src="<?php echo $block['image']; ?>"></div>
 	        <div class="aboutListTxt">
 	            <h3><?php echo $block['title']; ?></h3>
 	            <?php echo $block['content']; ?>
 	        </div>
 	    </div>
 	    	<?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__jAtSslGVM0__; ?>
 	</div>
 
 	
 </div>

 
<div class="footA"<?php if(!(empty($site['footimg']) || (($site['footimg'] instanceof \think\Collection || $site['footimg'] instanceof \think\Paginator ) && $site['footimg']->isEmpty()))): ?>style="background-image: url(<?php echo $site['footimg']; ?>);"<?php endif; ?>>
       <div class="footHead">
		<div class="footHeadNr box">
			<em>BE IN TOUCH WITH US:</em>
		    <form id="form"  onsubmit="return $('.formPoint').show();" method="POST" action="/d/customer/post.html">
            <input type="hidden" name="__diyname__" value="customer">
            <?php echo token(); ?>
				<input placeholder="Enter your e-mail">
				<button>JOIN US</button>
			</form>

		</div>
	</div>
          <div class="box">
             <div class="footBNr">
                <!--公司介绍 -->
                 <div class="footAA">
                    <h4>About us</h4>
                    <p><?php echo $site['description']; ?></p>
            	 </div>


            	 <div class="footAB">

                <h4>Quick link</h4>

        	    <?php $__TpCZLfJINK__ = \addons\cms\model\Channel::getChannelList(["id"=>"channel","type"=>"son","condition"=>"1=isnav"]); if(is_array($__TpCZLfJINK__) || $__TpCZLfJINK__ instanceof \think\Collection || $__TpCZLfJINK__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__TpCZLfJINK__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$channel): $mod = ($i % 2 );++$i;?>
                <a href="<?php echo $channel['url']; ?>" title="<?php echo $channel['name']; ?>"><?php echo $channel['name']; ?></a>
                <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__TpCZLfJINK__; ?>
              	</div>


        	    <!--菜单-->
        	    <div class="footAB">

                <h4>Services</h4>
        	    <?php $__KRGnUd7ZQD__ = \addons\cms\model\Archives::getArchivesList(["id"=>"navshow","channel"=>"38","orderby"=>"weigh","orderway"=>"desc","flag"=>"index"]); if(is_array($__KRGnUd7ZQD__) || $__KRGnUd7ZQD__ instanceof \think\Collection || $__KRGnUd7ZQD__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__KRGnUd7ZQD__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navshow): $mod = ($i % 2 );++$i;?>
                      <a href="<?php echo $navshow['url']; ?>" title="<?php echo $navshow['title']; ?>"><?php echo $navshow['title']; ?></a>
                <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__KRGnUd7ZQD__; ?>

        	    <div class="footABNr hide">
                <?php $__X4JPKyVtj6__ = \addons\cms\model\Archives::getArchivesList(["id"=>"navshow","channel"=>"51","orderby"=>"weigh","orderway"=>"desc","flag"=>"index"]); if(is_array($__X4JPKyVtj6__) || $__X4JPKyVtj6__ instanceof \think\Collection || $__X4JPKyVtj6__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__X4JPKyVtj6__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navshow): $mod = ($i % 2 );++$i;?>
                      <a href="<?php echo $navshow['url']; ?>" title="<?php echo $navshow['title']; ?>"><img src="<?php echo $navshow['image']; ?>"><h3><?php echo $navshow['title']; ?></h3></a>
                <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__X4JPKyVtj6__; ?>
        		</div>
        		</div>

        	    <!--联系方式-->
            	<div class="footAC">
                    <h4>Contact Us</h4>
                    <ul>
                    <?php $__9YZxUfTyqc__ = \addons\cms\model\Block::getBlockList(["id"=>"block","name"=>"contact","orderby"=>"weigh","orderway"=>"desc","condition"=>"1=sf"]); if(is_array($__9YZxUfTyqc__) || $__9YZxUfTyqc__ instanceof \think\Collection || $__9YZxUfTyqc__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__9YZxUfTyqc__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$block): $mod = ($i % 2 );++$i;?>
                    <li><span><i class="ico <?php echo $block['image']; ?>"></i></span><p><a href="<?php echo $block['url']; ?>" title=""><?php echo $block['title']; ?> : <?php echo str_replace(["<p>","</p>"], "", $block['content']); ?></a></p></li>
                    <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__9YZxUfTyqc__; ?>

                     </ul>
                </div>
            </div>
          </div>

          <!--版权-->
          <div class="copyright">
            <div class="box">
               <?php $__LSDVXnfjmY__ = \addons\cms\model\Block::getBlockList(["id"=>"block","name"=>"zf","orderby"=>"weigh","orderway"=>"desc"]); if(is_array($__LSDVXnfjmY__) || $__LSDVXnfjmY__ instanceof \think\Collection || $__LSDVXnfjmY__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__LSDVXnfjmY__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$block): $mod = ($i % 2 );++$i;?>
              <div class="copyrightRight">

                    <?php if(is_array(explode(',',$block['images'])) || explode(',',$block['images']) instanceof \think\Collection || explode(',',$block['images']) instanceof \think\Paginator): $i = 0; $__LIST__ = explode(',',$block['images']);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$image): $mod = ($i % 2 );++$i;?>
                     <a><img src="<?php echo cdnurl($image); ?>"></a>
                    <?php endforeach; endif; else: echo "" ;endif; ?>

              </div>
              <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__LSDVXnfjmY__; ?>

              <div class="copyrightLeft">
                <a href=""><?php echo $site['beian']; ?></a>
              </div>

              <div class="shemei">
			    <?php $__FTOGzP2pQe__ = \addons\cms\model\Block::getBlockList(["id"=>"block","name"=>"sm","orderby"=>"weigh","orderway"=>"desc"]); if(is_array($__FTOGzP2pQe__) || $__FTOGzP2pQe__ instanceof \think\Collection || $__FTOGzP2pQe__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__FTOGzP2pQe__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$block): $mod = ($i % 2 );++$i;?>
				<a href="<?php echo $block['url']; ?>" title="<?php echo $block['title']; ?>" target="_blank"><i class="ico <?php echo $block['image']; ?>"></i></a>
			    <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__FTOGzP2pQe__; ?>
			</div>
            </div>
          </div>
    </div>


 <script type="text/javascript">
          $('body').append('<div class="formPoint"><div id="loading1"><div class="demo1"></div><div class="demo1"></div><div class="demo1"></div><div class="demo1"></div><div class="demo1"></div></div></div>')
</script>


<script type="text/javascript" src="/template/default1/js/common.js?v=<?php echo $site['version']; ?>"></script>
</body>
</html>
 