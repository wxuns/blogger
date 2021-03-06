<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* index\index.twig */
class __TwigTemplate_0304801f1a2b47dd77e0cf1fbf57f811b1149ee49eeee98c6199df4679780257 extends \Twig_Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!doctype html>
<html>
<head>
    <meta charset=\"gbk\">
    <title>文讯个人博客 - 一个站在web前端设计之路的女技术员个人博客网站</title>
    <meta name=\"keywords\" content=\"个人博客,杨青个人博客,个人博客模板,杨青\" />
    <meta name=\"description\" content=\"杨青个人博客，是一个站在web前端设计之路的女程序员个人网站，提供个人博客模板免费资源下载的个人原创网站。\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link href=\"css/base.css\" rel=\"stylesheet\">
    <link href=\"css/index.css\" rel=\"stylesheet\">
    <link href=\"https://cdn.bootcss.com/weui/1.1.3/style/weui.min.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"//at.alicdn.com/t/font_1137992_id64ix04yo8.css\">
    <link href=\"https://lib.baomitu.com/Swiper/4.5.0/css/swiper.min.css\" rel=\"stylesheet\">
    <script src=\"https://lib.baomitu.com/Swiper/4.5.0/js/swiper.min.js\"></script>
    <script src=\"js/hc-sticky.js\"></script>
    <script src=\"https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js\"></script>
    <script src=\"https://cdn.bootcss.com/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js\"></script>
    <!--[if lt IE 9]>
    <script src=\"js/modernizr.js\"></script>
    <![endif]-->
</head>
<body>
<header>
    <div class=\"toolbar\">
        <div class=\"clearfix toolbar-inner\">
            <div class=\"quicklink\">
                <ul id=\"chinaz_website_links\" class=\"accesslink\">
                    <li><a href=\"http://www.chinaz.com\"><span>站长之家</span></a></li>
                    <li><a href=\"http://down.chinaz.com\" target=\"_blank\"><span>源码下载</span></a></li>
                    <li><a href=\"http://bbs.chinaz.com\" target=\"_blank\"><span>站长论坛</span></a></li>

                </ul>

            </div>
            <div id=\"chinaz_topbar\"><div class=\"userbar\">
                    <span>快捷登录：</span>
                    <a href=\"#\" target=\"_top\" title=\"QQ登录\"><i class=\"iconfont icon-qq\"></i></a>
                    <a href=\"#\" target=\"_top\" title=\"微博登录\"><i class=\"iconfont icon-xinlangweibo\"></i></a>
                    <a href=\"#\" target=\"_top\" title=\"Github登录\"><i class=\"iconfont icon-github\"></i></a>
                    <a href=\"#\" target=\"_top\" title=\"微信登录\"><i class=\"iconfont icon-weixin\"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class=\"logo\">
        <img src=\"images/logo.png\" alt=\"\">
    </div>
    <div class=\"toolbar\"></div>
    <nav id=\"nav\">
        <ul id=\"starlist\">
            <li><a href=\"index.html\">网站首页</a></li>
            <li><a href=\"share.html\">我的相册</a></li>
            <li><a href=\"list.html\">我的日记</a></li>
            <li><a href=\"about.html\">关于我</a></li>
            <li><a href=\"gbook.html\">留言</a></li>
        </ul>
    </nav>
    <script>
        window.onload = function ()
        {
            var obj=null;
            var As=document.getElementById('nav').getElementsByTagName('a');
            obj = As[0];
            for(i=1;i<As.length;i++){if(window.location.href.indexOf(As[i].href)>=0)
                obj=As[i];}
            obj.id='selected'
        }
    </script>
</header>
";
        // line 71
        echo "    ";
        // line 72
        echo "        ";
        // line 73
        echo "        ";
        // line 74
        echo "            ";
        // line 75
        echo "            ";
        // line 76
        echo "            ";
        // line 77
        echo "            ";
        // line 78
        echo "            ";
        // line 79
        echo "            ";
        // line 80
        echo "            ";
        // line 81
        echo "        ";
        // line 82
        echo "    ";
        // line 84
        echo "<article>
    <aside class=\"l_box\">
        <div class=\"search\">
            <form action=\"/e/search/index.php\" method=\"post\" name=\"searchform\" id=\"searchform\">
                <input name=\"keyboard\" id=\"keyboard\" class=\"input_text\" value=\"请输入关键字词\" style=\"color: rgb(153, 153, 153);\" onfocus=\"if(value=='请输入关键字词'){this.style.color='#000';value=''}\" onblur=\"if(value==''){this.style.color='#999';value='请输入关键字词'}\" type=\"text\">
                <input name=\"show\" value=\"title\" type=\"hidden\">
                <input name=\"tempid\" value=\"1\" type=\"hidden\">
                <input name=\"tbname\" value=\"news\" type=\"hidden\">
                <input name=\"Submit\" class=\"input_submit\" value=\"搜索\" type=\"submit\">
            </form>
        </div>
        <div class=\"about_me\">
            <h2>关于我</h2>
            <ul>
                <i><img src=\"images/4.jpg\"></i>
                <p><b>杨青</b>，一个80后草根女站长！09年入行。一直潜心研究web前端技术，一边工作一边积累经验，分享一些个人博客模板，以及SEO优化等心得。</p>
            </ul>
        </div>
        <div class=\"remen\">
            <h2>点击排行</h2>
            <ul>
                <li>
                    <em class=\"no1\">1</em>
                    <a href=\"/web/58424.html\" title=\"iframe标签用法详解(属性、透明、自适应高度)\" target=\"_blank\">iframe标签用法详解(属性、透明、自适应高度)</a></li><li><em class=\"no2\">2</em><a href=\"/web/19216.html\" title=\"16进制颜色代码（完全）\" target=\"_blank\">16进制颜色代码（完全）</a>
                </li>
                <li>
                    <em class=\"no3\">3</em>
                    <a href=\"/web/20182.html\" title=\"40多个漂亮的网页表单设计实例\" target=\"_blank\">40多个漂亮的网页表单设计实例</a>
                </li>
                <li>
                    <em class=\"no4\">4</em>
                    <a href=\"/css/44250.html\" title=\"css控制UL LI 的样式详解(推荐)\" target=\"_blank\">css控制UL LI 的样式详解(推荐)</a>
                </li>
                <li>
                    <em class=\"no5\">5</em>
                    <a href=\"/web/39559.html\" title=\"定义input type=file 样式的方法\" target=\"_blank\">定义input type=file 样式的方法</a>
                </li>
                <li>
                    <em class=\"no6\">6</em>
                    <a href=\"/css/33920.html\" title=\"HTML设置超链接字体颜色和点击后的字体颜色\" target=\"_blank\">HTML设置超链接字体颜色和点击后的字体颜色</a>
                </li>
                <li>
                    <em class=\"no7\">7</em>
                    <a href=\"/web/62128.html\" title=\"HTML中让表单input等文本框为只读不可编辑的方法\" target=\"_blank\">HTML中让表单input等文本框为只读不可编辑的方法</a>
                </li>
                <li>
                    <em class=\"no8\">8</em>
                    <a href=\"/css/28259.html\" title=\"div水平垂直居中的完美解决方案\" target=\"_blank\">div水平垂直居中的完美解决方案</a>
                </li>
                <li>
                    <em class=\"no9\">9</em>
                    <a href=\"/css/163448.html\" title=\"css设置各种中文字体如雅黑、黑体、宋体、楷体等等\" target=\"_blank\">css设置各种中文字体如雅黑、黑体、宋体、楷体等等</a>
                </li>
                <li>
                    <em class=\"no10\">10</em>
                    <a href=\"/css/241589.html\" title=\"CSS 文本字体颜色设置方法(CSS color)\" target=\"_blank\">CSS 文本字体颜色设置方法(CSS color)</a>
                </li>
            </ul>
        </div>
        <div class=\"wdxc\">
            <h2>我的相册</h2>
            <ul>
                <li><a href=\"/\"><img src=\"images/7.jpg\"></a></li>
                <li><a href=\"/\"><img src=\"images/8.jpg\"></a></li>
                <li><a href=\"/\"><img src=\"images/9.jpg\"></a></li>
                <li><a href=\"/\"><img src=\"images/10.jpg\"></a></li>
                <li><a href=\"/\"><img src=\"images/11.jpg\"></a></li>
                <li><a href=\"/\"><img src=\"images/12.jpg\"></a></li>
            </ul>
        </div>
        <div class=\"links\">
            <h2>友情链接</h2>
            <ul>
                <a href=\"http://www.yangqq.com\">杨青个人博客</a> <a href=\"http://www.yangqq.com\">杨青博客</a>
            </ul>
        </div>
        <div class=\"guanzhu\">
            <h2>关注我 么么哒</h2>
            <ul>
                <img src=\"images/wx.jpg\">
            </ul>
        </div>
    </aside>
    <main class=\"r_box\">
        <li style=\"padding: 0\">
            <div class=\"swiper-container swiper-container-initialized swiper-container-horizontal\">
                <div class=\"swiper-wrapper\">
                    <div class=\"swiper-slide\"><img src=\"http://sc.chinaz.com/Files/pic/indexpic/hdpic2.jpg\" alt=\"\"></div>
                    <div class=\"swiper-slide\"><img src=\"http://sc.chinaz.com/Files/pic/indexpic/hdpic1.jpg\" alt=\"\"></div>
                    <div class=\"swiper-slide\"><img src=\"http://sc.chinaz.com/Files/pic/indexpic/hdpic3.jpg\" alt=\"\"></div>
                </div>
                <!-- 如果需要分页器 -->
                <div class=\"swiper-pagination\"></div>

                <!-- 如果需要导航按钮 -->
                <div class=\"swiper-button-prev swiper-button-white hide\"></div>
                <div class=\"swiper-button-next swiper-button-white hide\"></div>
            </div>
        </li>
        ";
        // line 183
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 184
            echo "        <li>
            ";
            // line 185
            if (($context["i"] % 6)) {
                // line 186
                echo "            <i><a href=\"/\"><img src=\"images/";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo ".jpg\"></a></i>
            ";
            }
            // line 188
            echo "            <h3><a href=\"/\">你是什么人便会遇上什么人</a></h3>
            <p>有时就为了一句狠话，像心头一口毒钉，永远麻痺着亲密感情交流。恶言，真要慎出，平日多誠心爱语，乃最简易之佈施。有时就为了一句狠话，像心头一口毒钉，永远麻痺着亲密感情交流。恶言，真要慎出，平日多誠心爱语，乃最简易之佈施。</p>
            <div class=\"weui-flex\">
                <div class=\"weui-flex__item\">
                    <div class=\"placeholder\">
                        <a href=\"javascript:;\" class=\"weui-btn wx-btn_mini weui-btn_mini weui-btn_default\">
                            <span class=\"iconfont icon-shang\"></span>99
                        </a>
                        <a href=\"javascript:;\" class=\"weui-btn wx-btn_mini weui-btn_mini weui-btn_default\">
                            <span class=\"iconfont icon-xia\"></span>22
                        </a>
                    </div>
                </div>
                <div class=\"weui-flex__item contentim\">
                    <div class=\"placeholder\">
                        <span class=\"iconfont icon-shijian\"></span> 2019-2-10
                    </div>
                </div>
                <div class=\"weui-flex__item contentim\">
                    <div class=\"placeholder\">
                        <span class=\"iconfont icon-weibiaoti--\"></span> 666
                    </div>
                </div>
                <div class=\"weui-flex__item contentim\">
                    <div class=\"placeholder\">
                        <span class=\"iconfont icon-nav\"></span>
                        <a href=\"#\" style=\"color: #797b7c\">【PHP技术】</a>
                    </div>
                </div>
            </div>
        </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 220
        echo "    </main>
</article>

<script src=\"js/comm.js\"></script>
<script>
    var mySwiper = new Swiper ('.swiper-container', {
        loop: true, // 循环模式选项
        autoplay:true,
        slidesPerView : 'auto',
        effect : 'cube',
        centeredSlides: true,
        // 如果需要分页器
        pagination: {
            el: '.swiper-pagination',
            type: 'fraction',
        },

        // 如果需要前进后退按钮
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        }
    });
    mySwiper.el.onmouseover=function(){
        mySwiper.navigation.\$nextEl.removeClass('hide');
        mySwiper.navigation.\$prevEl.removeClass('hide');
    };
    mySwiper.el.onmouseout=function(){
        mySwiper.navigation.\$nextEl.addClass('hide');
        mySwiper.navigation.\$prevEl.addClass('hide');
    };
</script>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "index\\index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 220,  246 => 188,  240 => 186,  238 => 185,  235 => 184,  231 => 183,  130 => 84,  128 => 82,  126 => 81,  124 => 80,  122 => 79,  120 => 78,  118 => 77,  116 => 76,  114 => 75,  112 => 74,  110 => 73,  108 => 72,  106 => 71,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html>
<head>
    <meta charset=\"gbk\">
    <title>文讯个人博客 - 一个站在web前端设计之路的女技术员个人博客网站</title>
    <meta name=\"keywords\" content=\"个人博客,杨青个人博客,个人博客模板,杨青\" />
    <meta name=\"description\" content=\"杨青个人博客，是一个站在web前端设计之路的女程序员个人网站，提供个人博客模板免费资源下载的个人原创网站。\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link href=\"css/base.css\" rel=\"stylesheet\">
    <link href=\"css/index.css\" rel=\"stylesheet\">
    <link href=\"https://cdn.bootcss.com/weui/1.1.3/style/weui.min.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"//at.alicdn.com/t/font_1137992_id64ix04yo8.css\">
    <link href=\"https://lib.baomitu.com/Swiper/4.5.0/css/swiper.min.css\" rel=\"stylesheet\">
    <script src=\"https://lib.baomitu.com/Swiper/4.5.0/js/swiper.min.js\"></script>
    <script src=\"js/hc-sticky.js\"></script>
    <script src=\"https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js\"></script>
    <script src=\"https://cdn.bootcss.com/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js\"></script>
    <!--[if lt IE 9]>
    <script src=\"js/modernizr.js\"></script>
    <![endif]-->
</head>
<body>
<header>
    <div class=\"toolbar\">
        <div class=\"clearfix toolbar-inner\">
            <div class=\"quicklink\">
                <ul id=\"chinaz_website_links\" class=\"accesslink\">
                    <li><a href=\"http://www.chinaz.com\"><span>站长之家</span></a></li>
                    <li><a href=\"http://down.chinaz.com\" target=\"_blank\"><span>源码下载</span></a></li>
                    <li><a href=\"http://bbs.chinaz.com\" target=\"_blank\"><span>站长论坛</span></a></li>

                </ul>

            </div>
            <div id=\"chinaz_topbar\"><div class=\"userbar\">
                    <span>快捷登录：</span>
                    <a href=\"#\" target=\"_top\" title=\"QQ登录\"><i class=\"iconfont icon-qq\"></i></a>
                    <a href=\"#\" target=\"_top\" title=\"微博登录\"><i class=\"iconfont icon-xinlangweibo\"></i></a>
                    <a href=\"#\" target=\"_top\" title=\"Github登录\"><i class=\"iconfont icon-github\"></i></a>
                    <a href=\"#\" target=\"_top\" title=\"微信登录\"><i class=\"iconfont icon-weixin\"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class=\"logo\">
        <img src=\"images/logo.png\" alt=\"\">
    </div>
    <div class=\"toolbar\"></div>
    <nav id=\"nav\">
        <ul id=\"starlist\">
            <li><a href=\"index.html\">网站首页</a></li>
            <li><a href=\"share.html\">我的相册</a></li>
            <li><a href=\"list.html\">我的日记</a></li>
            <li><a href=\"about.html\">关于我</a></li>
            <li><a href=\"gbook.html\">留言</a></li>
        </ul>
    </nav>
    <script>
        window.onload = function ()
        {
            var obj=null;
            var As=document.getElementById('nav').getElementsByTagName('a');
            obj = As[0];
            for(i=1;i<As.length;i++){if(window.location.href.indexOf(As[i].href)>=0)
                obj=As[i];}
            obj.id='selected'
        }
    </script>
</header>
{#<header class=\"header-navigation\" id=\"header\">#}
    {#<nav>#}
        {#<h2 id=\"mnavh\"><span class=\"navicon\"></span></h2>#}
        {#<ul id=\"starlist\">#}
            {#<li><a href=\"index.html\">网站首页</a></li>#}
            {#<li><a href=\"share.html\">我的相册</a></li>#}
            {#<li><a href=\"list.html\">我的日记</a></li>#}
            {#<li><a href=\"about.html\">关于我</a></li>#}
            {#<li><a href=\"gbook.html\">留言</a></li>#}
            {#<li><a href=\"info.html\">内容页</a></li>#}
            {#<li><a href=\"infopic.html\">内容页</a></li>#}
        {#</ul>#}
    {#</nav>#}
{#</header>#}
<article>
    <aside class=\"l_box\">
        <div class=\"search\">
            <form action=\"/e/search/index.php\" method=\"post\" name=\"searchform\" id=\"searchform\">
                <input name=\"keyboard\" id=\"keyboard\" class=\"input_text\" value=\"请输入关键字词\" style=\"color: rgb(153, 153, 153);\" onfocus=\"if(value=='请输入关键字词'){this.style.color='#000';value=''}\" onblur=\"if(value==''){this.style.color='#999';value='请输入关键字词'}\" type=\"text\">
                <input name=\"show\" value=\"title\" type=\"hidden\">
                <input name=\"tempid\" value=\"1\" type=\"hidden\">
                <input name=\"tbname\" value=\"news\" type=\"hidden\">
                <input name=\"Submit\" class=\"input_submit\" value=\"搜索\" type=\"submit\">
            </form>
        </div>
        <div class=\"about_me\">
            <h2>关于我</h2>
            <ul>
                <i><img src=\"images/4.jpg\"></i>
                <p><b>杨青</b>，一个80后草根女站长！09年入行。一直潜心研究web前端技术，一边工作一边积累经验，分享一些个人博客模板，以及SEO优化等心得。</p>
            </ul>
        </div>
        <div class=\"remen\">
            <h2>点击排行</h2>
            <ul>
                <li>
                    <em class=\"no1\">1</em>
                    <a href=\"/web/58424.html\" title=\"iframe标签用法详解(属性、透明、自适应高度)\" target=\"_blank\">iframe标签用法详解(属性、透明、自适应高度)</a></li><li><em class=\"no2\">2</em><a href=\"/web/19216.html\" title=\"16进制颜色代码（完全）\" target=\"_blank\">16进制颜色代码（完全）</a>
                </li>
                <li>
                    <em class=\"no3\">3</em>
                    <a href=\"/web/20182.html\" title=\"40多个漂亮的网页表单设计实例\" target=\"_blank\">40多个漂亮的网页表单设计实例</a>
                </li>
                <li>
                    <em class=\"no4\">4</em>
                    <a href=\"/css/44250.html\" title=\"css控制UL LI 的样式详解(推荐)\" target=\"_blank\">css控制UL LI 的样式详解(推荐)</a>
                </li>
                <li>
                    <em class=\"no5\">5</em>
                    <a href=\"/web/39559.html\" title=\"定义input type=file 样式的方法\" target=\"_blank\">定义input type=file 样式的方法</a>
                </li>
                <li>
                    <em class=\"no6\">6</em>
                    <a href=\"/css/33920.html\" title=\"HTML设置超链接字体颜色和点击后的字体颜色\" target=\"_blank\">HTML设置超链接字体颜色和点击后的字体颜色</a>
                </li>
                <li>
                    <em class=\"no7\">7</em>
                    <a href=\"/web/62128.html\" title=\"HTML中让表单input等文本框为只读不可编辑的方法\" target=\"_blank\">HTML中让表单input等文本框为只读不可编辑的方法</a>
                </li>
                <li>
                    <em class=\"no8\">8</em>
                    <a href=\"/css/28259.html\" title=\"div水平垂直居中的完美解决方案\" target=\"_blank\">div水平垂直居中的完美解决方案</a>
                </li>
                <li>
                    <em class=\"no9\">9</em>
                    <a href=\"/css/163448.html\" title=\"css设置各种中文字体如雅黑、黑体、宋体、楷体等等\" target=\"_blank\">css设置各种中文字体如雅黑、黑体、宋体、楷体等等</a>
                </li>
                <li>
                    <em class=\"no10\">10</em>
                    <a href=\"/css/241589.html\" title=\"CSS 文本字体颜色设置方法(CSS color)\" target=\"_blank\">CSS 文本字体颜色设置方法(CSS color)</a>
                </li>
            </ul>
        </div>
        <div class=\"wdxc\">
            <h2>我的相册</h2>
            <ul>
                <li><a href=\"/\"><img src=\"images/7.jpg\"></a></li>
                <li><a href=\"/\"><img src=\"images/8.jpg\"></a></li>
                <li><a href=\"/\"><img src=\"images/9.jpg\"></a></li>
                <li><a href=\"/\"><img src=\"images/10.jpg\"></a></li>
                <li><a href=\"/\"><img src=\"images/11.jpg\"></a></li>
                <li><a href=\"/\"><img src=\"images/12.jpg\"></a></li>
            </ul>
        </div>
        <div class=\"links\">
            <h2>友情链接</h2>
            <ul>
                <a href=\"http://www.yangqq.com\">杨青个人博客</a> <a href=\"http://www.yangqq.com\">杨青博客</a>
            </ul>
        </div>
        <div class=\"guanzhu\">
            <h2>关注我 么么哒</h2>
            <ul>
                <img src=\"images/wx.jpg\">
            </ul>
        </div>
    </aside>
    <main class=\"r_box\">
        <li style=\"padding: 0\">
            <div class=\"swiper-container swiper-container-initialized swiper-container-horizontal\">
                <div class=\"swiper-wrapper\">
                    <div class=\"swiper-slide\"><img src=\"http://sc.chinaz.com/Files/pic/indexpic/hdpic2.jpg\" alt=\"\"></div>
                    <div class=\"swiper-slide\"><img src=\"http://sc.chinaz.com/Files/pic/indexpic/hdpic1.jpg\" alt=\"\"></div>
                    <div class=\"swiper-slide\"><img src=\"http://sc.chinaz.com/Files/pic/indexpic/hdpic3.jpg\" alt=\"\"></div>
                </div>
                <!-- 如果需要分页器 -->
                <div class=\"swiper-pagination\"></div>

                <!-- 如果需要导航按钮 -->
                <div class=\"swiper-button-prev swiper-button-white hide\"></div>
                <div class=\"swiper-button-next swiper-button-white hide\"></div>
            </div>
        </li>
        {% for i in 0..10 %}
        <li>
            {% if i%6 %}
            <i><a href=\"/\"><img src=\"images/{{ i }}.jpg\"></a></i>
            {% endif %}
            <h3><a href=\"/\">你是什么人便会遇上什么人</a></h3>
            <p>有时就为了一句狠话，像心头一口毒钉，永远麻痺着亲密感情交流。恶言，真要慎出，平日多誠心爱语，乃最简易之佈施。有时就为了一句狠话，像心头一口毒钉，永远麻痺着亲密感情交流。恶言，真要慎出，平日多誠心爱语，乃最简易之佈施。</p>
            <div class=\"weui-flex\">
                <div class=\"weui-flex__item\">
                    <div class=\"placeholder\">
                        <a href=\"javascript:;\" class=\"weui-btn wx-btn_mini weui-btn_mini weui-btn_default\">
                            <span class=\"iconfont icon-shang\"></span>99
                        </a>
                        <a href=\"javascript:;\" class=\"weui-btn wx-btn_mini weui-btn_mini weui-btn_default\">
                            <span class=\"iconfont icon-xia\"></span>22
                        </a>
                    </div>
                </div>
                <div class=\"weui-flex__item contentim\">
                    <div class=\"placeholder\">
                        <span class=\"iconfont icon-shijian\"></span> 2019-2-10
                    </div>
                </div>
                <div class=\"weui-flex__item contentim\">
                    <div class=\"placeholder\">
                        <span class=\"iconfont icon-weibiaoti--\"></span> 666
                    </div>
                </div>
                <div class=\"weui-flex__item contentim\">
                    <div class=\"placeholder\">
                        <span class=\"iconfont icon-nav\"></span>
                        <a href=\"#\" style=\"color: #797b7c\">【PHP技术】</a>
                    </div>
                </div>
            </div>
        </li>
        {% endfor %}
    </main>
</article>

<script src=\"js/comm.js\"></script>
<script>
    var mySwiper = new Swiper ('.swiper-container', {
        loop: true, // 循环模式选项
        autoplay:true,
        slidesPerView : 'auto',
        effect : 'cube',
        centeredSlides: true,
        // 如果需要分页器
        pagination: {
            el: '.swiper-pagination',
            type: 'fraction',
        },

        // 如果需要前进后退按钮
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        }
    });
    mySwiper.el.onmouseover=function(){
        mySwiper.navigation.\$nextEl.removeClass('hide');
        mySwiper.navigation.\$prevEl.removeClass('hide');
    };
    mySwiper.el.onmouseout=function(){
        mySwiper.navigation.\$nextEl.addClass('hide');
        mySwiper.navigation.\$prevEl.addClass('hide');
    };
</script>
</body>
</html>
", "index\\index.twig", "D:\\item\\blogger\\resources\\views\\index\\index.twig");
    }
}
