<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>NIKON</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="/common/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/common/css/site.css" rel="stylesheet" />
    <link href="/common/css/quiz.css" rel="stylesheet" />
    <style>
        body{
            background-image: url(/common/images/quiz-img/nik-quiz-d750-bnrpage.png);
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
          <!-- <div class="one-minute-right">
              <img src="/common/images/quiz-img/quiz-nik-mob-logo.png" class="visible-xs" alt="">
          </div> -->
            <div class="left-pen-div quiz-d750-nik-left">
                <img src="/common/images/quiz-img/quiz-nik-d5600-cam-main.png" />
            </div>

            <div class="timer-div hidden-xs">
                <div class="timer-inner-div">
                <span class="span-time">59</span>
                    <span class="span-sec-txt">sec</span>
                </div>
            </div>
        </div>
        <div class="nik-upper-quiz-div">
            <div class="question-main-div">
                <div class="question-count-div">Question - 
                    <span class="count-ques">01</span>/07
                </div>
                    <div class="timer-div visible-xs">
                        <div class="timer-inner-div">
                            <span class="span-time">59</span>
                            <span class="span-sec-txt">sec</span>
                        </div>
                    </div>
                <input type="hidden" name="user_id" value="{{$user_id or ''}}">
                @if(isset($questions))
                @foreach($questions as $key=>$question)
                <div class="question{{$key+1}}-main answer-div" @if($key > 0)style="display:none;"@endif>
                    <div class="question-div">
                        <div class="question1">
                           {{$question->question or ''}}
                        </div>
                    </div>
                    <div class="answer1 answer">
                        
                        <div class="answer-row-top">
                            @foreach ($question->quizchoices as $x => $value)
                            @if($x < 2)
                            <div>
                                <input type="radio" class="answer{{$key+1}}-option" data-ng-options="{{$value['id'] or ''}}" data-ng-question = "{{$question->id}}"/> 
                                {{$value['choice'] or ''}}
                            </div>
                            @endif
                            @endforeach
                        </div>
                       
                        <div class="answer-row-bottom">
                            @foreach ($question->quizchoices as $x => $value)
                            @if($x > 1)
                            <div>
                                <input type="radio" class="answer{{$key+1}}-option" data-ng-options="{{$value['id'] or ''}}" data-ng-question = "{{$question->id}}"/> 
                                {{$value['choice'] or ''}}
                            </div>
                            @endif
                            @endforeach
                           
                        </div>
                       
                    </div>
                </div>
                @endforeach
                @endif
               <!--  <div class="question1-main answer-div">
                    <div class="question-div">
                        <div class="question1">
                        Nikon D5600 can record ________ movie.

                        </div>
                    </div>
                    <div class="answer1 answer">
                        <div class="answer-row-top">
                            <div>
                                <input type="radio" class="answer1-option" data-ng-options="a"/> 
                                60 P Full HD Movie
                            </div>
                            <div>
                                <input type="radio" class="answer1-option" data-ng-options="b" />
                                50 P Full HD Movie 

                            </div>
                        </div>
                        <div class="answer-row-bottom">
                            <div>
                                <input type="radio" class="answer1-option" data-ng-options="c" />
                                30 P Full HD Movie 
                            </div>
                            <div>
                                <input type="radio" class="answer1-option" data-ng-options="d"   />
                                24 P Full HD Movie
                            </div>
                        </div>
                    </div>
                </div>

                <div class="question2-main answer-div" style="display:none">
                    <div class="question-div">
                        <div class="question1">
                        What is the maximum native ISO supported in  D5600 ?
                        </div>
                    </div>
                    <div class="answer1 answer">
                        <div class="answer-row-top">
                            <div>
                                <input type="radio" class="answer2-option" data-ng-options="a" />
                                12800

                            </div>
                            <div>
                                <input type="radio" class="answer2-option" data-ng-options="b" />
                                25600

                            </div>
                        </div>
                        <div class="answer-row-bottom">
                            <div>
                                <input type="radio" class="answer2-option" data-ng-options="c" />
                                6400
                            </div>
                            <div>
                                <input type="radio" class="answer2-option" data-ng-options="d" />
                                None of the above

                            </div>
                        </div>
                    </div>
                </div>

                <div class="question3-main answer-div" style="display:none">
                    <div class="question-div">
                        <div class="question1">
                        How many AF Points does D5600 have ?

                        </div>
                    </div>
                    <div class="answer1 answer">
                        <div class="answer-row-top">
                            <div>
                                <input type="radio" class="answer3-option" data-ng-options="a" />
                                51
                            </div>
                            <div>
                                <input type="radio" class="answer3-option" data-ng-options="b" />
                                39
                            </div>
                        </div>
                        <div class="answer-row-bottom">
                            <div>
                                <input type="radio" class="answer3-option" data-ng-options="c" />
                            11
                            </div>
                            <div>
                                <input type="radio" class="answer3-option" data-ng-options="d" />
                                53
                            </div>
                        </div>
                    </div>
                </div>

                <div class="question4-main answer-div" style="display:none">
                    <div class="question-div">
                        <div class="question1">
                        D5600 has how many megapixels ?

                        </div>
                    </div>
                    <div class="answer1 answer">
                        <div class="answer-row-top">
                            <div>
                                <input type="radio" class="answer4-option" data-ng-options="a" />
                                24.2
                            </div>
                            <div>
                                <input type="radio" class="answer4-option" data-ng-options="b" />
                                24
                            </div>
                        </div>
                        <div class="answer-row-bottom">
                            <div>
                                <input type="radio" class="answer4-option" data-ng-options="c" />
                                20.9
                            </div>
                            <div>
                                <input type="radio" class="answer4-option" data-ng-options="d" />
                                None of the above
                            </div>
                        </div>
                    </div>
                </div>

                <div class="question5-main answer-div" style="display:none">
                    <div class="question-div">
                        <div class="question1">
                        Nikon D5600 supports ________ in continuous shooting mode.

                        </div>
                    </div>
                    <div class="answer1 answer">
                        <div class="answer-row-top">
                            <div>
                                <input type="radio" class="answer5-option" data-ng-options="a" />
                                3 FPS
                            </div>
                            <div>
                                <input type="radio" class="answer5-option" data-ng-options="b" />
                                4.5 FPS
                            </div>
                        </div>
                        <div class="answer-row-bottom">
                            <div>
                                <input type="radio" class="answer5-option" data-ng-options="c" />
                                5 FPS
                            </div>
                            <div>
                                <input type="radio" class="answer5-option" data-ng-options="d" />
                                2 FPS
                            </div>
                        </div>
                    </div>
                </div>

                <div class="question6-main answer-div" style="display:none">
                    <div class="question-div">
                        <div class="question1">
                        What is the battery life of Nikon D5600 ?
                        </div>
                    </div>
                    <div class="answer1 answer">
                        <div class="answer-row-top">
                            <div>
                                <input type="radio" class="answer6-option" data-ng-options="a" />
                                400 shots
                            </div>
                            <div>
                                <input type="radio" class="answer6-option" data-ng-options="b" />
                                600 shots
                            </div>
                        </div>
                        <div class="answer-row-bottom">
                            <div>
                                <input type="radio" class="answer6-option" data-ng-options="c" />
                                800 shots
                            </div>
                            <div>
                                <input type="radio" class="answer6-option" data-ng-options="d" />
                                820 shots
                            </div>
                        </div>
                    </div>
                </div>

                <div class="question7-main answer-div" style="display:none">
                    <div class="question-div">
                        <div class="question1">
                        Nikon D5600 supports:
                        </div>
                    </div>
                    <div class="answer1 answer">
                        <div class="answer-row-top">
                            <div>
                                <input type="radio" class="answer7-option" data-ng-options="a" />
                                Bluetooth
                            </div>
                            <div>
                                <input type="radio" class="answer7-option" data-ng-options="b" />
                                Wi-Fi
                            </div>
                        </div>
                        <div class="answer-row-bottom">
                            <div>
                                <input type="radio" class="answer7-option" data-ng-options="c" />
                               NFC
                            </div>
                            <div>
                                <input type="radio" class="answer7-option" data-ng-options="d" />
                                All of the above

                            </div>
                        </div>
                    </div>
                </div> -->

                <!-- <div class="question8-main answer-div" style="display:none">
                    <div class="question-div">
                        <div class="question1">
                            Pilot uses the patented _____ System for instant start every time.
                        </div>
                    </div>
                    <div class="answer1 answer">
                        <div class="answer-row-top">
                            <div>
                                <input type="radio" class="answer8-option" data-ng-options="a" />
                                TIP
                            </div>
                            <div>
                                <input type="radio" class="answer8-option" data-ng-options="b" />
                                ATT
                            </div>
                        </div>
                        <div class="answer-row-bottom">
                            <div>
                                <input type="radio" class="answer8-option" data-ng-options="c" />
                                MTT
                            </div>
                            <div>
                                <input type="radio" class="answer8-option" data-ng-options="d" />
                                VAT
                            </div>
                        </div>
                    </div>
                </div> -->



                <div class="d750-quiz-ques">
                    <div class="next-div">
                        <!-- <div class="alert-text" style=" color: red; font-family: 'Corbel'; display: none; ">Choose an option to proceed!</div> -->
                            <a class="next-a-back">Back</a>
                    </div>
                    
                    
                    <div class="next-div d750-next-btn">
                        <div class="alert-text" style=" color: red; font-family: 'Corbel'; display: none; ">Choose an option to proceed!</div>
                            <a class="next-a">Next</a>
                        </div>
                    </div> 
                </div>     
                
            </div> 
            
           
        </div>
           

        <!-- <div class="luxor-left">
          
           <img class="hidden-lg hidden-md hidden-sm" src="/common/images/luxor-black.png" />
        </div>
        <div class="tnc-right">
                    <a href="tnc.html" target="_blank" style="color:black !important;text-decoration:none !important">T&C applied</a>
        </div> -->
    </div>
    <script src="/common/js/jquery.min.js"></script>
    <script src="/common/js/bootstrap.min.js"></script>
    <script>
	var count = 1;
        var selection = {};
        $(".next-a").click(function () {

            if (count <= 7) {

                $(".answer" + count + "-option").each(function () {
                    var $this = $(this);

                    if ($this.is(":checked")) {
                        var question = $(this).data("ng-question");
                        var selectedans = $(this).data("ng-options");
                       /* selection.push(selectedans);*/
                        selection[question] = selectedans
                        console.log('selection:');
                        console.log(selection);

                        count = count + 1;                      
                        if (count <= 7) {
                           
                            $(".answer-div").css("display", "none");
                            $(".count-ques").html(count)
                            $(".question" + count + "-main").css("display", "block");
                            console.log(selection);
           
                        }
                        else {
                        console.log('abc')
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


            var my_url = "https://www.iamnikon.co.in/test-staging/user_answers";
            var jsonString = JSON.stringify(selection);
            var user_id =  $('input[name=user_id]').val();
            var time = $(".span-time").html();
            //alert(user_id);
            $.ajax({
                type: "POST",
                url: my_url,
                data: { "data": jsonString,"_token": "{{ csrf_token() }}",'user_id':user_id,'time':time},
                cache: false,
                success: function (response) {
                    window.location.href = 'https://www.iamnikon.co.in/test-staging/d5600-thankyou'
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

    
        var counttime=0;
        
            var counter=setInterval(timer,1000);
       
        function timer(){
            counttime=counttime+1;
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
