<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>PILOT</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="/common/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/common/css/site.css" rel="stylesheet" />
    <link href="/common/fonts/fonts_stylesheet.css" rel="stylesheet" />
    <link href="/common/css/question.css" rel="stylesheet" />
    <style>
        body{
            background-image: url(/common/images/quiz-img/quiz-camera-bnr.png);
            height: 100%;
            width: 100%;
            background-position: center center;
            background-size: cover;
              background-attachment:fixed;
              background-repeat: no-repeat;
              background-color: transparent !important; 
        }
            /* @media(max-width:767px) {
        body {
            background-image: url(content/images/backg-mobile-internal.jpg);
            height: 100% !important;
            width: 100%;
            background-position: center center;
            background-size: cover;
            background-attachment:fixed;
	  
              background-repeat: no-repeat;
              background-color: transparent !important; 
        } */
        }
		.next-a{
		cursor:pointer
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
    <div class="main-div">
        <div class="quiz-inner-mob-banner">
            <div class="main-logo">
                <img src="/common/images/quiz-img/nik-logo1.png" />
            </div>
            <div class="one-minute-right hidden-xs">
                    <img src="/common/images/quiz-img/play-nik-contest.png" />
                   
            </div>
            <!-- <div class="nik-center-img hidden-xs">
                    <img src="/common/images/quiz-img/nik-logo2.png"  />
                   
            </div> -->
            <div class="nik-mob-choose-cam">
                <h4>CHOOSE YOUR CAMERA</h4>
            </div>
            <div class="">
                <div class="left-pen-div quiz-camera750">
                    <a href="{{url('test-staging/d750-camera')}}"><img src="/common/images/quiz-img/d750-choose-cam-img.png" class="img-responsive" /></a>
                </div>
                <!-- <div class="choose-d750-img">
                    <a href="">
                        <img class="img-responsive" src="/common/images/quiz-img/choose-d750.png" alt="">
                    </a>
                </div> -->
            </div>    
        </div>

        <!-- <div class="timer-div">
            <div class="timer-inner-div">
               <span class="span-time">59</span>
                <span class="span-sec-txt">sec</span>
            </div>
        </div> -->
        <div class="nik-quiz-start">
            <div class="question-main-div quiz-nik-camera5600">
                <div class="question1-main answer-div quiz-nik-side-div">
                        <a href="{{url('test-staging/d5600-camera')}}"><img src="/common/images/quiz-img/d5600-choose-cam-img.png" class="img-responsive" /></a>
                
                </div>
                <!-- <div class="choose-d5600-img">
                    <a href="">
                        <img class="img-responsive" src="/common/images/quiz-img/choose-d5600.png" alt="">
                    </a>    
                </div> -->
                <div class="luxor-left">
                
                <!-- <img class="hidden-lg hidden-md hidden-sm" src="/common/images/luxor-black.png" />-->
                </div>
                <!-- <div class="tnc-right">
                            <a href="tnc.html" target="_blank" style="color:black !important;text-decoration:none !important">T&C applied</a>
                </div> -->
            </div>
            <!-- <div class="next-div nik-choose-img hidden-xs">
                    <div class="alert-text" style=" color: red; font-family: 'Corbel'; display: none; ">Choose an option to proceed!</div>
                        <a class="next-a">NEXT</a>
                    </div>
                    <img src="/nikon-questionnaire/content/images/quiz-img/choose-cam.png" alt="start-quiz" class="img-responsive">
            </div> -->
            
        </div> 
       
    </div>    
    <script src="/common/js/jquery.min.js"></script>
    <script src="/common/js/bootstrap.min.js"></script>
    <script>
	
        var count = 1;
        var selection = [];
        $(".next-a").click(function () {

            if (count <= 8) {

                $(".answer" + count + "-option").each(function () {
                    var $this = $(this);

                    if ($this.is(":checked")) {
                    
                        var selectedans = $(this).data("ng-options");
                        selection.push(selectedans);
                        count = count + 1;                      
                        if (count <= 8) {
                           
                            $(".answer-div").css("display", "none");
                            $(".count-ques").html(count)
                            $(".question" + count + "-main").css("display", "block");
                            console.log(selection);
           
                        }
                        else {
						console.log(selection)
                            //alert("quiz complete");
                            //console.log(dataString);
                            //var jsonString = dataString;
							$(".next-a").css("display","none")
						api();

                            return false;
                        }
                    }
                });                
            }
        })

        function api() {

            var my_url = "https://www.luxorpilot.in/submit_ajax.php";
            var jsonString = JSON.stringify(selection);
            $.ajax({
                type: "POST",
                url: my_url,
                data: { data: jsonString },
                cache: false,
                success: function (response) {
                    window.location.href = 'thank-you.php'
                    console.log(response);
                    // OnSuccess(formData.model_number)
                },
                complete: function (response) {
                    console.log(response);
                }
            });
        }

        $("input:radio").click(function () {
            var myclass = $(this).attr("class");
            $("input:radio").prop('checked', false);
            $(this).prop('checked', true);
        })

    
        var counttime=60;
        
            var counter=setInterval(timer,1000);
       
        function timer(){
            counttime=counttime-1;
            if(counttime>=0){
                $(".span-time").html(counttime);
            }
            else{
			api();
                clearInterval(counter);
                
            }
            return
        }
    </script>
</body>
</html>
