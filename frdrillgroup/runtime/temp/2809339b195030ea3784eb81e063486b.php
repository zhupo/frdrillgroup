<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:85:"/Users/panliu/Documents/project/qianzhi/addons/cms/view/default1/channel_contact.html";i:1654527571;s:81:"/Users/panliu/Documents/project/qianzhi/addons/cms/view/default1/common/meta.html";i:1654271884;s:83:"/Users/panliu/Documents/project/qianzhi/addons/cms/view/default1/common/header.html";i:1654618749;s:83:"/Users/panliu/Documents/project/qianzhi/addons/cms/view/default1/common/footer.html";i:1654524000;s:83:"/Users/panliu/Documents/project/qianzhi/addons/cms/view/default1/common/script.html";i:1654003873;}*/ ?>
<!DOCTYPE html>
<html>

<head>
    

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo htmlentities($site['name']); ?></title>
    <link rel="shortcut icon" href="/assets/img/favicon.ico" />
    <!-- Bootstrap Core CSS -->
    <link href="/assets/libs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/frontend.min.css">
    <link rel="stylesheet" href="/assets/qianzhi/frontend/common/common.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://cdn.staticfile.org/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="/assets/qianzhi/frontend/contactUs/contactUs.css">
</head>

<body class="contact-us-wrap">
<link rel="stylesheet" href="/assets/qianzhi/frontend/common/header/header.css">

<nav id="page-navbar" class="navbar">
  <div class="container-fluid container-flex">
      <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
              data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </button>
          <div class="logo-wrap d-flex">
              <img src="/assets/img/png/logo.png" alt="logo">
          </div>
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

          <ul class="nav navbar-nav navbar-right">
              <li class="px-4">
                  <?php if(in_array(($site['sousuo']), explode(',',"1"))): ?>
                  <form class="navbar-form navbar-left" id="js-search-from" action="/s.html" method="post">
                      <div class="form-group">
                          <input type="text" class="form-control search-input" id="js-search-input"
                                 data-suggestion-url="/addons/cms/search/suggestion.html" placeholder="Search" />
                      </div>
                      <button class="glyphicon glyphicon-search media-middle cursor-pointer" id="js-search-btn"
                          aria-label="search button" aria-hidden="true">
                      </button>
                  </form>
                  <?php endif; ?>
<!--                  <form class="navbar-form navbar-left" id="js-search-from">-->
<!--                      <div class="form-group">-->
<!--                          <input type="text" class="form-control search-input" id="js-search-input"-->
<!--                                 placeholder="Search" />-->
<!--                      </div>-->
<!--                      <span class="glyphicon glyphicon-search media-middle cursor-pointer" id="js-search-btn"-->
<!--                            aria-label="search button" aria-hidden="true">-->
<!--                      </span>-->
<!--                  </form>-->
<!--                  <?php if(in_array(($site['sousuo']), explode(',',"1"))): ?>-->
<!--                  <div class="sousuonr">-->
<!--                      <form action="/s.html" method="post">-->
<!--                          <input autocomplete = "off" class="form-control" name="q" data-suggestion-url="/addons/cms/search/suggestion.html" type="text" value="" placeholder="Key words">-->
<!--                          <button class="ico icon-icon-test"></button>-->
<!--                      </form>-->
<!--                  </div>-->
<!--                  <?php endif; ?>-->
              </li>
              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                      aria-haspopup="true" aria-expanded="false">
                      <span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
                      English
                      <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu">
                      <li><a href="#">China</a></li>
                      <li><a href="#">English</a></li>
                  </ul>
              </li>
          </ul>

          <ul class="nav navbar-nav pull-right menu-list">
              <?php $__kYP0U9OKS4__ = \addons\cms\model\Channel::getChannelList(["id"=>"nav","type"=>"top","cache"=>"0","condition"=>"1=isnav","row"=>"20"]); if(is_array($__kYP0U9OKS4__) || $__kYP0U9OKS4__ instanceof \think\Collection || $__kYP0U9OKS4__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__kYP0U9OKS4__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav): $mod = ($i % 2 );++$i;?>
              <li>
                  <a class="<?php if($nav->is_active): ?>active<?php endif; ?>" <?php if($nav['href'] == 0): ?>href="<?php echo $nav['url']; ?>"<?php endif; if($nav['target'] == 1): ?>target="_blank"<?php endif; ?>><?php echo $nav['name']; ?></a>
              </li>
              <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__kYP0U9OKS4__; ?>
<!--              <li class="active"><a href="<?php echo url('index/index/index'); ?>">HOME</a></li>-->
<!--              <li><a href="{<?php echo url('index/about/index'); ?>}">ABOUT US</a></li>-->
<!--              <li><a href="<?php echo url('index/product/list'); ?>">PRODUCT</a></li>-->
<!--              <li><a href="<?php echo url('index/news/index'); ?>">NEWS</a></li>-->
<!--              <li><a href="<?php echo url('index/contact/index'); ?>">CONTACT US</a></li>-->
          </ul>
      </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<script>
    (function() {
        setTimeout(() => {
            var $banner = document.querySelector('#header-banner')
            var $navbar = document.querySelector('#page-navbar')
            var height = $banner.clientHeight
            var timeStamp = 0
            updateBackgroundColor()

            window.onscroll = function(e) {
                if (e.timeStamp - timeStamp >= 200) {
                    timeStamp = e.timeStamp
                    updateBackgroundColor()
                }
            }

            function updateBackgroundColor() {
                var isOver = document.documentElement.scrollTop > height
                $navbar.classList[isOver ? 'add' : 'remove']('is-over')
            }
        }, 2000)

    })()
</script>
<div id="header-banner" class="contact-us-header">
    <div class="container relative" style="height: 100%;">
        <div class="contact-us-header-content">
            <p class="title font-bold">CONTACT US</p>
            <div>
                <span class="glyphicon glyphicon-home"></span>
                <span>Home</span>
                »
                <span>Contact us</span>
            </div>
        </div>
    </div>
</div>


<main id="contact-us-body">
    <div class="container">
        <div class="row d-flex contact-us-box">
            <div class="col-md-4">
                <div class="box-item left">
                    <div class="title f22">
                        Get in touch with us.
                    </div>

                    <form id="form"  onsubmit="return $('.formPoint').show();" method="POST" action="/d/customer/post.html">
                        <input type="hidden" name="__diyname__" value="customer">
                        <?php echo token(); ?>
                        <div>
                            <div class="form-group">
                                <label for="firstName"><sup>*</sup> Your name</label>
                                <input name="row[username]" type="text" class="form-control" id="firstName">
                            </div>
                            <div class="form-group">
                                <label for="email"><sup>*</sup> Your email address</label>
                                <input name="row[email]" type="email" class="form-control" id="email">
                            </div>
                            <div class="form-group">
                                <label for="phone"><sup>*</sup> Your phone</label>
                                <input name="row[telephone]" type="text" class="form-control" id="phone">
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea name="row[content]" class="form-control" id="message" rows="5"></textarea>
                            </div>
                            <button type="submit" class="btn btn-info">SEND MESSAGE</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-8">
                <div class="box-item right">
                    <?php if(!(empty($site['map']) || (($site['map'] instanceof \think\Collection || $site['map'] instanceof \think\Paginator ) && $site['map']->isEmpty()))): ?>
                    <div  class="map">
                        <?php echo $site['map']; ?>
                    </div>
                    <?php endif; ?>
                    <div class="company-info">
                        <?php $__wxTSF29MRN__ = \addons\cms\model\Block::getBlockList(["id"=>"block","name"=>"contact-qianzhi","orderby"=>"id","orderway"=>"asc"]); if(is_array($__wxTSF29MRN__) || $__wxTSF29MRN__ instanceof \think\Collection || $__wxTSF29MRN__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__wxTSF29MRN__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$block): $mod = ($i % 2 );++$i;?>
                        <p class="zh-list">
                            <span class="icon glyphicon glyphicon-<?php echo $block['image']; ?>"></span>
                            <span><?php echo str_replace(["<p>","</p>"], "", $block['content']); ?></span>
                        </p>
                        <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__wxTSF29MRN__; ?>
                    </div>
                    <div class="other-communication text-right">
                        <?php $__Yj3amTPnOG__ = \addons\cms\model\Block::getBlockList(["id"=>"block","name"=>"mt","orderby"=>"weigh","orderway"=>"asc"]); if(is_array($__Yj3amTPnOG__) || $__Yj3amTPnOG__ instanceof \think\Collection || $__Yj3amTPnOG__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__Yj3amTPnOG__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$block): $mod = ($i % 2 );++$i;?>
                        <a href="<?php echo $block['url']; ?>" title="<?php echo $block['title']; ?>" target="_blank">
                            <img src="<?php echo $block['image']; ?>" alt="logo">
                        </a>
                        <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__Yj3amTPnOG__; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<link rel="stylesheet" href="/assets/qianzhi/frontend/common/footer/footer.css">

<footer>
  <div class="contact-us">
    <div class="container">
      <div class="row">
        <div class="col-md-8 f28">
          YOUR ARE WELCOME TO CONTACT US
        </div>
        <div class="col-md-4 text-right">
          <button class="btn"><a href="/ABOUTUS.html">CONTACT US</a></button>
        </div>
      </div>
    </div>
  </div>
  <div class="page-footer">
    <div class="footer-info">
      <div class="container">
        <div class="row d-flex" style="flex-wrap: wrap;">
          <div class="col-md-3 col-sm-6 col-xs-12">
            <span class="title">Contact Information</span>
            <?php $__7CHG2NlwcX__ = \addons\cms\model\Block::getBlockList(["id"=>"block","name"=>"contact-qianzhi","orderby"=>"id","orderway"=>"asc"]); if(is_array($__7CHG2NlwcX__) || $__7CHG2NlwcX__ instanceof \think\Collection || $__7CHG2NlwcX__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__7CHG2NlwcX__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$block): $mod = ($i % 2 );++$i;if($block['id'] != 54): ?>
            <p class="zh-list">
              <span class="icon glyphicon glyphicon-<?php echo $block['image']; ?>"></span>
              <span><?php echo str_replace(["<p>","</p>"], "", $block['content']); ?></span>
            </p>
            <?php endif; endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__7CHG2NlwcX__; ?>

          </div>
          <div class="col-md-2 col-sm-6 col-xs-12">
            <span class="title">Product</span>
            <?php $__5UzS9uctb3__ = \addons\cms\model\Channel::getChannelList(["id"=>"channel","type"=>"son","typeid"=>"44","condition"=>"1=cpindex","orderby"=>"weigh","orderway"=>"asc"]); if(is_array($__5UzS9uctb3__) || $__5UzS9uctb3__ instanceof \think\Collection || $__5UzS9uctb3__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__5UzS9uctb3__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$channel): $mod = ($i % 2 );++$i;?>
              <p><?php echo $channel['name']; ?></p>
            <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__5UzS9uctb3__; ?>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <span class="title">Recent post</span>
            <?php $__y4oOeR2jYJ__ = \addons\cms\model\Archives::getArchivesList(["id"=>"item","flag"=>"index","model"=>"10","row"=>"10","orderby"=>"updatetime","addon"=>"content"]); if(is_array($__y4oOeR2jYJ__) || $__y4oOeR2jYJ__ instanceof \think\Collection || $__y4oOeR2jYJ__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__y4oOeR2jYJ__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
              <p>
              <div class="media">
                <div class="media-left">
                  <di>
                    <img src="<?php echo $item['image']; ?>" alt="<?php echo $item['title']; ?>">
                  </di>
                </div>
                <div class="media-body">
                  <span class="media-heading"><?php echo $item['title']; ?></span>
                  <span class="date"><?php echo date('Y-m-d', $item['publishtime']); ?></span>
                </div>
              </div>
              </p>
            <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__y4oOeR2jYJ__; ?>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <span class="title">Contact Form</span>
            <form class="contact-from">
              <div class="form-group">
                <label class="sr-only" for="name">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Name">
              </div>
              <div class="form-group">
                <label class="sr-only" for="country">Country</label>
                <input type="text" class="form-control" id="country" placeholder="Country">
              </div>
              <div class="form-group">
                <label class="sr-only" for="email"></label>
                <input type="email" class="form-control" id="email" placeholder="Email">
              </div>
              <div class="form-group">
                <label class="sr-only" for="message"></label>
                <textarea class="form-control" id="message" placeholder="Message"></textarea>
              </div>
              <button type="submit" class="btn btn-info full-width">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
        <div class="row">
          <div class="col-md-7 col-sm-6">
            <img style="vertical-align: bottom;" src="/assets/qianzhi/frontend/common/footer/icon-footer-logo.png" alt="logo">
            Copyright: Huan Qianzhi Robot Technology Development Co,. Ltd
          </div>
          <div class="col-md-5 col-sm-6 text-right communications">
            <?php $__DklgN31u6e__ = \addons\cms\model\Block::getBlockList(["id"=>"block","name"=>"mt","orderby"=>"weigh","orderway"=>"asc"]); if(is_array($__DklgN31u6e__) || $__DklgN31u6e__ instanceof \think\Collection || $__DklgN31u6e__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__DklgN31u6e__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$block): $mod = ($i % 2 );++$i;?>
            <a href="<?php echo $block['url']; ?>" title="<?php echo $block['title']; ?>" target="_blank">
              <img src="<?php echo $block['image']; ?>" alt="logo">
<!--              <i class="ico <?php echo $block['image']; ?>"></i>-->
            </a>
            <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__DklgN31u6e__; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

<script src="/assets/libs/jquery/dist/jquery.min.js"></script>
<script src="/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>

<script data-main="/assets/qianzhi/frontend/contactUs/contactUs.js" src="/assets/qianzhi/require.min.js">
</script>

</body>

</html>