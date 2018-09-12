<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>NIKON</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="/common/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/common/css/site.css" rel="stylesheet" />
    <link href="/common/css/question.css" rel="stylesheet" />
    <style>
        body{
            background-image: url(/common/images/quiz-img/quiz-page2-banner.png);
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
            <div class="one-minute-right">
                    <img src="/common/images/quiz-img/quiz-nik-mob-logo.png" class="visible-xs" />
                    <!-- <img src="/common/images/luxor-black.png" class="visible-xs"/> -->
            </div>
            <div class="left-pen-div">
                <img src="/common/images/quiz-img/quiz-nik-inner-logo.png" class="img-responsive" />
            </div>
        </div>

        <!-- <div class="timer-div">
            <div class="timer-inner-div">
               <span class="span-time">59</span>
                <span class="span-sec-txt">sec</span>
            </div>
        </div> -->
        <div class="nik-quiz-start">
            <div class="question-main-div">
                <!-- <div class="question-count-div">
                    <span class="count-ques">1</span>/8
                </div> -->

                <div class="question1-main answer-div quiz-nik-side-div">
                    <div class="quiz-nik-para">
                        <p>It's time to sharpen your memory skills and bring out the wizard in you with <span>Nikon I AM A WIZ context.</span> Memorize 
                        the D-SLR amazing features and answer the 10 questions correctly before the times runs out. If you are fast & lucky, you win exclusive Nikon 
                    goodies. So why wait, become the new Nikon D-SLR Champ!</p>
                    </div>
                    <div class="quiz-nik-participatn">
                        <h4>How To Participate</h4>
                        <ul>
                            <li><span>1</span> Choose the D-SLR to play the quiz.</li>
                            <li><span>2</span> Browse through the features and memorize them.</li>
                            <li><span>3</span> Answer the 6 questions within 1 minute.</li>
                        </ul> 
                    </div>     
                
                </div>


                <div class="next-div">
                
                <a href="{{url('test-staging/choose-your-camera')}}"><img src="/common/images/quiz-img/quiz-start-img.png" alt="start-quiz" class="img-responsive">
                </div></a>


                <div class="luxor-left">
                
                <!-- <img class="hidden-lg hidden-md hidden-sm" src="/common/images/luxor-black.png" />-->
                </div>
                <!-- <div class="tnc-right">
                            <a href="tnc.html" target="_blank" style="color:black !important;text-decoration:none !important">T&C applied</a>
                </div> -->
            </div>
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
