<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	  <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>NIKON</title>
    <meta property="og:url" content="https://www.luxorpilot.in" />
    <meta property="og:site_name" content="Pilot Pen">
    <meta property="og:title" content="Pilot Pen" />
    <meta property="og:description" content="PILOT QUIZ FOR THE WIZ CONTEST" />
    <meta property="og:image" itemprop="image" content="https://www.luxorpilot.in/content/images/homepage-main-img.png">
    <meta property="og:type" content="website" />
    <link href="/common/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/common/fonts/fonts_stylesheet.css" rel="stylesheet" />
    <link href="/common/css/home.css" rel="stylesheet" />
    <style>
        body {
            background-image: url(/common/images/quiz-img/quiz-home-bnr.jpg);
            /* background-image: url(/common/images/quiz-img/quiz-bnr1.jpg); */
            height: 100%;
            width: 100%;
            background-position: center center;
            background-size: cover;
            overflow: hidden;
        }
    </style>
    
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-100052804-1', 'auto');
  ga('send', 'pageview');

</script>

<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '111645222856682');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=111645222856682&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->


</head>
<body>
    <div class="quiz-nik-bannerImg">
        <div class="quiz-logo-left visible-xs">
            <div class="logo-left">
                <img src="/common/images/quiz-img/nik-logo1.png" />
            </div>
        </div>
        <div class="main-left-div main-left-camera">
                        <div class="contest-main-img visible-xs">
                            <img src="/common/images/quiz-img/contest-logo.png" class="img-responsive" />
                        </div>
            <div class="main-left-inner-div visible-xs">
                <div class="main-left-img1">
                    <img src="/common/images/quiz-img/quiz-d750-img.png" alt="">
                </div>
                <div class="main-left-img2">
                    <img src="/common/images/quiz-img/quiz-d5600-cam-img.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="one-minute-right">
            <img src="/common/images/quiz-img/play-nik-contest.png" class="visible-xs" alt="" />
    </div> -->
    <div class="home-main-div" style="display:flex;flex-wrap:wrap;height:100%;">

        <div class="main-right-div" style="width:50%;float:left">
            <div class="quiz-nik-logo hidden-xs">
                <div class="logo-left">
                    <img src="/common/images/quiz-img/nik-logo1.png" />
                </div>
            </div>
            <div class="yellow-cont">
                <div class="diplay-table">
                    <div class="diplay-tablecell">
                        <div class="contest-main-img hidden-xs">
                            <img src="/common/images/quiz-img/play-contest-img.png" class="img-responsive" />
                        </div>
                        <div class="form-div">
                        
                            <form action="{{url('test-staging/quiz')}}" method="post">
                                {{ csrf_field() }}
                                <input type="text" id="name" name="name"  placeholder="Name" required />
                                <select id="gender" name="gender">
                                    <option value="">Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female" >Female</option>
                                </select>
                                <input type="email" id="email" name="email"  placeholder="Email-ID" required/>
                            
                                <button type="submit" name="submit" value="submit" id="submit" onclick="return validation();">Enter Now</button>
                            </form> 
                            
                            <div class="fb-login" style="margin-top: 0px;">
                                <div class="or-text">
                                    or
                                </div>
                                <a href="{{url('auth/facebook')}}">
                                    <img src="/common/images/fb-login.png" />
                                </a>
                            </div>
                            
                                        
                        </div>
                    </div>
                </div>
        
            </div>
        </div>

        <div class="main-left-div main-left-camera">
                        
            <div class="main-left-inner-div hidden-xs">
                <div class="main-left-img1">
                    <img src="/common/images/quiz-img/quiz-d750-img.png" alt="">
                </div>
                <div class="main-left-img2">
                    <img src="/common/images/quiz-img/quiz-d5600-cam-img.png" alt="">
                </div>
            </div>
        </div>
    </div>
    
    <script src="/common/js/jquery.min.js"></script>
    <script>
        function validation(){
            var name = $('#name').val();
            var email = $('#email').val();
            var gender = $('#gender').val();
            //  var city = $('#city').val();
            // var age = $('#age').val();
            var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            if(name ==''){
                alert('Kindly enter your name');
                return false;
            }
            else if(gender==''){
                alert('Kindly select a gender');
                 return false;
            }
            else if(email==''){
                alert('Kindly enter your email id');
                 return false;
            }
            else if(!emailReg.test(email)){
                alert('Kindly enter correct email id');
                 return false;
            }
            
        }
    </script>
</body>
</html>
