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
        .main-div {
            background-image: url(/common/images/quiz-img/nik-quiz-d750-bnrpage.png);
            height: 100%;
            width: 100%;
            background-position: center center;
            background-size: cover;
            background-attachment: fixed;
            background-repeat: no-repeat;
        }
        .score-heading {
             text-align: center;
             margin-top:30px
        }
        .score-heading .score-main-span {
    padding-left: 0px;
}
        .back-btn a {
    display: inline-block;
    padding-left: 20px;
    padding-right: 20px;
    width:100% !important
        }
        .back-btn {
    display: inline-block;
}

@media screen and (max-width:767px){
    .main-div{
        background-image: none !important;
    }
}
    </style>
</head>
<body>
    <div class="main-div">
        <div class="quiz-inner-mob-banner">
            <div class="main-logo">
                <img src="/common/images/quiz-img/nik-logo1.png" />
            </div>
            <div class="one-minute-right">
                <img src="/common/images/quiz-img/quiz-nik-mob-logo.png" class="visible-xs" alt="">
            </div>
            <div class="left-pen-div congrats-icon-d750">
                <img src="/common/images/quiz-img/quiz-nik-d5600-cam-main.png" />
            </div>
        </div>

        <div class="nik-upper-quiz-div">
            <div class="thankyou-main-div ">
                <div class="trophy-heading">
                    <img src="/common/images/trophy.png" />
                </div>
                <div class="congratulations-text">
                    <img src="/common/images/congrats.png" />
                </div>

                <div class="score-heading">
                    You got
                    <span class="score-main-span">
                        <span>{{$correct_answers}}</span>/7
                    </span>
                    answers right in <span class="ques-solve-time">{{$time or ''}}  seconds</span>.
                </div>
                <div class="winner-declaration">
                    The winners will be declared on our Facebook page through a lucky draw.<br />
                    So, keep your fingers crossed and keep following us!
                </div>
                <div class="btns-div">
                    <div class="back-btn fb-share">
                        <a href="#">Share your score on Facebook</a>
                    </div>
                    <div class="back-btn check-answers">
                        <a href="{{url('test-staging/check-answers-d5600')}}">Check Answers</a>
                    </div>
                </div>
                <div class="btns-div congrats-btn-div2">
                        <div class="back-btn fb-share">
                            <a href="{{url('test-staging/quiz')}}">Play for Nikon D750</a>
                        </div>
                        <div class="back-btn check-answers">
                            <a href="{{url('test-staging')}}">Go to Home Page</a>
                        </div>
                </div>
                
            </div>
        </div>    

        <!-- <div class="luxor-left">
            <img src="/common/images/luxor_logo.png" />
        </div>
        <div class="tnc-right">
            T&C applied
        </div> -->
    </div>
</body>
</html>
