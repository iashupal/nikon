<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>NIKON</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="/common/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/common/fonts/fonts_stylesheet.css" rel="stylesheet" />
    <link href="/common/css/site.css" rel="stylesheet" />
    <link href="/common/css/question.css" rel="stylesheet" />
    <style>
        .main-div {
            background-image: url(/common/images/quiz-img/nik-quiz-d750-bnrpage.png);
            height: 100%;
            width: 100%;
            background-position: center center;
            background-size: cover;
              background-attachment:fixed;
              background-repeat: no-repeat;
        }
.quiz-inner-mob-banner{
    display: inline-block;
   
}
                @media(max-width:767px) {
        .main-div {
            background-image: none !important;
            /* height: 100%;
            width: 100%;
            background-position: center center;
            background-size: cover;
            background-attachment:fixed */
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
                    <img src="/common/images/quiz-img/play-nik-contest.png" class="visible-xs" alt="" />
                </div>
                <div class="left-pen-div congrats-icon-d750">
                    <img src="/common/images/quiz-img/quiz-nik-d5600-cam-main.png" />
                </div>
            </div>

        <div class="nik-upper-quiz-div">
            <div class="question-main-div nik-answer-main-div">
                <div class="score-main-div nik-anwr-score">
                    <div  class="score-heading score-answer-heading">
                        <span class="span-text">You got</span>
                        <span class="score-main-span">
                            <span>{{$correct_answers or ''}}</span>/7
                        </span>
                        <span class="span-text">answers right in <span class="ques-solve-time">{{$time or ''}} seconds</span>.</span> 
                    </div>
                    <div class="answer-txt">
                        Answers
                    </div>
                    <div class="answers-main-div">
                        @if(isset($answers))
                        @foreach($answers as $answer)
                        @if($answer->is_correct == 1)
                        <div class="answers-div">
                            <span><img src="/common/images/right-icon.png" /></span><span>1.</span><span> {{$answer->choice_name or ''}}</span> -<span>Correct Answer</span>
                        </div>
                        @else
                        <div class="answers-div">
                            <span><img src="/common/images/wrong-icon.png" /></span><span>2.</span><span>{{$answer->choice_name or ''}}</span> -<span>Incorrect Answer</span>
                        </div>
                        @endif
                        @endforeach
                        @endif
                        <!-- <div class="answers-div">
                            <span><img src="/common/images/right-icon.png" /></span><span>1.</span><span> 60 P Full HD Movie</span> -<span>Correct Answer</span>
                        </div>
                        <div class="answers-div">
                            <span><img src="/common/images/wrong-icon.png" /></span><span>2.</span><span>12800</span> -<span>Incorrect Answer</span>
                        </div>
                        <div class="answers-div">
                            <span><img src="/common/images/right-icon.png" /></span><span>3.</span><span>51</span> -<span>Incorrect Answer</span>
                        </div>
                        <div class="answers-div">
                            <span><img src="/common/images/right-icon.png" /></span><span>4.</span><span>24.2</span> -<span>Correct Answer</span>
                        </div>
                        <div class="answers-div">
                            <span><img src="/common/images/right-icon.png" /></span><span>5.</span><span> 5 FPS</span> -<span>Correct Answer</span>
                        </div>
                        <div class="answers-div">
                            <span><img src="/common/images/wrong-icon.png" /></span><span>6.</span><span>820 shots</span> -<span>Correct Answer</span>
                        </div>
                        <div class="answers-div">
                            <span><img src="/common/images/wrong-icon.png" /></span><span>7.</span><span>NFC</span> -<span>Wrong Answer</span>
                        </div> -->
                        <!-- <div class="answers-div">
                            <span><img src="/common/images/right-icon.png" /></span><span>8.</span><span>50</span> -<span>Correct Answer</span>
                        </div>
                        <div class="answers-div">
                            <span><img src="/common/images/wrong-icon.png" /></span><span>9.</span><span>Solid and Non-toxic</span> -<span>Wrong Answer</span>
                        </div>
                        <div class="answers-div">
                            <span><img src="/common/images/right-icon.png" /></span><span>9.</span><span>ATT</span> -<span>Correct Answer</span>
                        </div> -->
                    </div>
                    <div class="back-btn answer-back-btn">
                        <a href="thank-you-d750.html">Back</a>
                    </div>
                </div>
            </div>
        </div>


        <!-- <div class="luxor-left">
            <img src="/common/images/luxor-black.png" />
        </div> -->
        <!--<div class="tnc-right">
            T&C applied
        </div>-->
    </div>
</body>
</html>
