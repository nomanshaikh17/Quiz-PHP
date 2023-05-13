<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/pace/1.2.4/themes/blue/pace-theme-minimal.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Quiz</title>


</head>

<body>
    <div class="main-container">
        <div class="row">
            <div class="col-md-12">
                <div id="progress-container">
                    <div id="progress-bar"></div>
                </div>
            </div>
        </div>
        <div class="top_row row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-5 quiz-type">
                        EnterTainement: Board Games
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10 question_no">
                        Question 1 Of 20
                    </div>
                    <div class="col-md-2 timer_box">
                        <div class="row">
                            <div class="col-md-1 timer_icon_div"><i class="fas fa-clock"></i></div>
                            <div class="col-md-6">
                                <div class="timer">05:00</div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 ratings">
                        <span class="fa fa-star unchecked easy"></span>
                        <span class="fa fa-star unchecked medium"></span>
                        <span class="fa fa-star unchecked hard"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="question_row row">
            <div class="col-md-12">
                <div id="question">
                    At The Start of the Standard Game of the monopoly, If you throw a double six which square would you
                    land
                    on ?
                </div>

            </div>
        </div>
        <div class="options_row row">
            <div class="quiz-container">
            </div>
        </div>
        <div class="suggestion_row row">
            <div class="col-md-12 is_correct">
            </div>
        </div>
        <div class="next_row row">
            <div class="col-md-12">
                <button id="next-button">Next Question</button>
                <button id="check-result-button" style="display: none;">Check Result</button>
                
            </div>
        </div>
        <div class="score_row row">
            <div class="col-md-12">Score suggestion bar here</div>

        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>
<script src="jquery-custom.js"></script>



</html>