<!DOCTYPE html>
<html lang="Zh">
    <head>
        <!--====== Required meta tags ======-->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="Pragma" content="no-cache" />
        <!--====== Title ======-->
        <title>文章</title>
    <style>
        body {
            text-align: center;
            background-color: burlywood;
        }
        .signform {
            font-family: 微软雅黑;
            position: fixed;
            background-color:lightblue;
            top: 20%;
            left: 30%;
            width: 500px;
            height: 400px;
            border-radius: 1em;
            text-align: center;
            z-index: 999;
        }
        #registerform {
            height: 450px;
        }
        .signclose {
            cursor: pointer;
            float: right;
            overflow: hidden;
            text-align: center;
            position: relative;
            height: 35px;
            width: 35px;
            margin-top: 10px;
            margin-right: 10px;
        }
        #registerloading{
            position: absolute;
            width: 25px;
            height: 25px;
            left: 410px;
            top: 90px;
        }
        .signinput {
            border-radius: 0.2em;
            width: 280px;
            height: 200px;
            border: none;
            background-color:#f2f2f2;
            font-size: 14px;
        }
        .userdiv {
            position: relative;
            margin-top: 80px;
        }
        .pwddiv {
            position: relative;
            margin-top: 20px;
        }
        .postdiv {
            position: relative;
            margin-top: 20px;
        }
        .postdiv input {
            cursor: pointer;
            color: white;
            font-size: 26px;
            border: none;
            border-radius: 0.4em;
            width: 280px;
            height: 45px;
            background-color:#4CAF50;
        }
    </style>
        <!--====== Favicon Icon ======-->
        <link rel="stylesheet" type="text/css" href="assets/css/ourself(artical).css">

        <link rel="shortcut icon" href="assets/images/logo/logo-1.png" type="image/png">
        <!--====== Bootstrap css ======-->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!--====== Fontawesome css ======-->
        <link rel="stylesheet" href="assets/fonts/fontawesome/css/all.min.css">
        <!--====== Fontawesome css ======-->
        <link rel="stylesheet" href="assets/fonts/flaticon/flaticon.css">
        <!--====== Magnific Popup css ======-->
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <!--====== Slick css ======-->
        <link rel="stylesheet" href="assets/css/slick.css">
        <!--====== Default css ======-->
        <link rel="stylesheet" href="assets/css/default.css">
        <!--====== Style css ======-->
        <link rel="stylesheet" href="assets/css/style.css"> 
        
    </head>
    <body>
        <!--====== Start Header ======-->
        <div class="preloader">
            <div class="lds-ellipsis">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <!--====== End Header ======-->
        <!--====== Search From ======-->
        <div class="modal fade" id="search-modal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <form>
                        <div class="form_group">
                            <input type="text" class="form_control" placeholder="Search here...">
                        </div>
                    </form>
                </div>
            </div>
        </div><!--====== Search From ======-->
        <!--====== Start Header ======-->
        <header class="header-area header-area-v1" style="background-color:#1b3255" >

            <div class="header-navigation" >
                <div class="container" >
                    <div class="nav-container d-flex align-items-center justify-content-between">
                        <!-- site logo -->

                        <div class="nav-menu">
                            <!-- Navbar Close Icon -->
                            <div class="navbar-close">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
                            <!-- nav-menu -->
                            <nav class="main-menu">
                                <ul>
                                    <li class="menu-item" ><a href="index.html"style="color: #FFFFFF">主页</a></li>

                                    <li class="menu-item "><a href="contact.html"style="color: #FFFFFF">有问必答</a>
                                       
                                    </li>
                                    <li class="menu-item"><a href="about.html" style="color: #FFFFFF">关于我们</a></li>
                                    <li class="menu-item menu-item-has-children"><a style="color: #FFFFFF">登录</a>
                                            <ul class="sub-menu">
                                            <li><a href="denglu.html" style="color:black">登录</a></li>
                                            <li><a href="zhuce.html" style="color:black">注册</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item"><a href="contact.html"style="color: #FFFFFF">联系我们</a></li>
                                </ul>
                            </nav>
                            <!-- nav pushed item -->
                            <div class="nav-pushed-item">
                                <div class="navbar-btn">
                                    <a href="contact.html" class="main-btn">Get A Quote</a>
                                </div>
                            </div>
                        </div>
                        <!-- nav push item -->
                        <div class="nav-push-item">
                            <div class="navbar-btn">
                                <button class="main-btn" id="displaysign"  onclick="start()">提问</button>
                            </div>
                        </div>

                </div>
            </div>
        </header>
    <form class="signform" id="signform" style="display: none" method="post" action="http://localhost/secondzhihu/put question.php">
    <div class="signclose">
        <img src="image/signclose.ico" width="35px" height="35px" onclick="signclose()">
    </div>
    <div class="userdiv">
    <input type="hidden" id="invisible" name="queser">
    <textarea id="user" class="signinput" type="text" name="main" ></textarea>
    </div>
    <div class="postdiv">
    <input type="submit" value="提交问题" >
    </div>
</form>
    <div style="padding-top:45px;height:1000px; background-color:#F6F6F6; ">
        <div style="display:inline;width:12%;float:left;color:white;height:100%">&nbsp</div>
        <div class="mainbody">
            <div class="body2-1">
                <div>
                    <div class="body2-1-front" onclick="index();">推荐</div>
                    <div class="body2-1-front" onclick="window.open('')">关注</div>
                    <div class="body2-1-front" onclick="hotpoint();">热榜</div>
                </div>

                <?php 
                    $connect=mysqli_connect("localhost","root","","question");
                    if(!$connect){
                    die('Could not connect: ' . mysqli_error($connect));
                     }
                    $sql="SELECT * FROM comment WHERE cid=".$_GET["cid"];
                    $comment=mysqli_query($connect,$sql);
                    $row=mysqli_fetch_assoc($comment);
                            $content=$row["content"];
                            $likes=$row["likes"];
                            $commenter=$row["commenter"];
                            $qid=$row["qid"];
                            $cid=$_GET["cid"];
                     $sql="SELECT * FROM question WHERE qid=$qid";
                      $question=mysqli_query($connect,$sql);
                      $row=mysqli_fetch_assoc($question);
                      $main=$row["main"];
                      $qlikes=$row["likes"];
                            
                  

                echo '<div class="biaoti">
                <p class="huanhang">'.$main.'</p>   <p class="haowenti">'.$qlikes.'人觉得很赞</p><br/>
                
                <button class="guanzhuwenti">关注问题</button>
            </div>
            <div class="body2-1">

            <div class="body2-1-title" >
                    <div class="jianju">
                        <div>
                            <img class="touxinag"  src="./assets/images/blog/thumb-1.jpg">
                            <p class="yhm">'.$commenter.'</p>
                        </div>
                        
                        <div style="height:500px;width:400px;overflow:scrolling">'.$content.'</div>
                    </div>
                    <span class="for" onclick="zt(this)" id='.$cid.'>▲喜欢</span>
                    <span class="for" onclick="c(this)">▼踩</span>
                   
            </div>
            <button class="guanzhuwenti" onclick="next(this)" id='.$cid.'>下一篇</button>
            <button class="xiehuida" onclick="pre(this)" id='.$cid.'>上一篇</button>
            </div>' ?> 
                 
            </div>
                   <div>
                <ul class="body2-2">
                    <li class="lan">
                        <a href="#" class="link">
                            <img class="tu" src="./assets/images/blog/回答问题.png"><br/>
                            <p>回答问题</p>
                        </a>
                    </li>
                    <li class="lan">
                        <a href="#" class="link">
                            <img class="tu" src="./assets/images/blog/写文章.png"><br/>
                            <p>写文章</p>
                        </a>
                    </li>
                    <li class="lan">
                        <a href="#" class="link">
                            <img class="tu" src="./assets/images/blog/写想法.png"><br/>
                            <p>写想法</p>
                        </a>
                    </li>
                    <li class="lan">
                        <a href="https://baike.baidu.com/" class="link">
                            <img class="tu" src="./assets/images/blog/百科.png"><br/>
                            <p>百科</p>
                        </a>
                    </li>
                </ul>
                
            </div>

        </div>
    </div>

      <footer class="footer-area">
            <div class="footer-top pt-40 pb-40">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-4">
                            <div class="brand-logo">
                                <a href="#"><img src="assets/images/logo/logo-2.png" class="img-fluid" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="social-box">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-skype"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-widget-area pt-110 pb-110">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="widget contact-info-widget">
                                <h4 class="widget-title">联系我</h4>
                                <div class="info-box mb-20">
                                    <p><i class="fab fa-qq"></i><a href="qq:3387902891">3387903981</a></p>
                                </div>
                                <div class="info-box">
                                    <h5 class="mb-20">所在地址</h5>
                                    <p><i class="fas fa-map-marker-alt"></i>上海市 奉贤区<br>海思路999号</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="widget quick-link-widget">
                                <h4 class="widget-title">快速链接</h4>
                                <ul class="widget-link">
                                  <li><a href="index.html"><i class="fa fa-angle-right" aria-hidden="true"></i> 主页</a></li>
                                    <li><a href="contact.html"><i class="fa fa-angle-right" aria-hidden="true"></i> 联系我们</a></li>
                                      <li><a href="https://www.bilibili.com/"><i class="fa fa-angle-right" aria-hidden="true"></i> 哔哩哔哩</a></li>
                        <li><a href="https://jwc.ecust.edu.cn/"><i class="fa fa-angle-right" aria-hidden="true"></i> 华东理工大学教务处 </a></li>
                        <li><a href="https://sso.ecust.edu.cn/authserver/login"><i class="fa fa-angle-right" aria-hidden="true"></i> 华东理工大学信息门户</a></li>
                        <li><a href="https://www.icourse163.org/"><i class="fa fa-angle-right" aria-hidden="true"></i> 中国大学慕课网</a></li>
                     </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="widget opening-hours-widget">
                                <h4 class="widget-title">工作时间</h4>
                                <div class="info-box">
                                    <p>周一- 周五</p>
                                    <p>8:00 AM - 9:00 PM</p>
                                </div>
                                <div class="info-box">
                                    <p>Monday - Friday</p>
                                    <p>10:00 AM - 6:00 PM</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="widget newsletters-widget">
                                <h4 class="widget-title">加入我们</h4>
                                <p>欢迎加入我们Second-ZhiHu团队 请留下您宝贵的邮箱以便我们联系您</p>
                                <form class="newsletters-form">
                                    <div class="form_group">
                                        <input type="text" class="form_control" placeholder="Enter Your Email" name="email" required>
                                        <button class="icon"><i class="fas fa-long-arrow-alt-right"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bootom-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="copyright-text">
                                <p>版权所有©华东理工大学<a target="_blank" href="https://www.ecust.edu.cn/">华东理工大学官网</a></p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="footer-nav">
                                <ul>
                                    <li><a href="index.html">主页</a></li>
                                    <li><a href="login.html">登录</a></li>
                                    <li><a href="about.html">关于我们</a></li>
                                    <li><a href="contact.html">联系我们</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer><!--====== End Footer ======-->
        <!--====== back-to-top ======-->
        <a href="#" class="back-to-top" ><i class="fas fa-angle-up"></i></a>
        <!--====== Jquery js ======-->
        <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
        <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
        <!--====== Bootstrap js ======-->
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <!--====== Slick js ======-->
        <script src="assets/js/slick.min.js"></script>
        <!--====== Counterup js ======-->
        <script src="assets/js/jquery.counterup.min.js"></script>
        <!--====== Waypoints js ======-->
        <script src="assets/js/waypoints.min.js"></script>
        <!--====== Magnific Popup js ======-->
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <!--====== Isotope js ======-->
        <script src="assets/js/isotope.pkgd.min.js"></script>
        <!--====== Imagesloaded js ======-->
        <script src="assets/js/imagesloaded.pkgd.min.js"></script>
        <!--====== WoW js ======-->
        <script src="assets/js/wow.min.js"></script>
        <!--====== Main js ======-->
        <script src="assets/js/main.js"></script>
        <script src="tanchuang/signformchange.js"></script>
        <script src="变色.js"></script>
        <script>
        
        </script>
    </body>
</html>
