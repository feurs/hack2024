<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tatra banka</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA_Compatible" content="ie=edge" />

    <!-- Style sheets -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/card.css" />
    <link rel="stylesheet" href="css/background.css" />
    <link rel="stylesheet" href="css/animations.css" />
    <link rel="stylesheet" href="css/selection.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="logo/logo.css">
</head>
<script src="script.js"></script>
<body>



<section class="background1" id="beginning">

    <section class="feed">
        <div class="navbar">
            <img src="https://www.nextech.sk/files/photo/2019-11/67618/b39eb1/tb-logo-black-jpg-72dpi-rgb-235-jpg_872.jpg">
            <a href="#" class="hvr-sweep-to-bottom" >Home</a>
            <a href="#bottom" class="hvr-sweep-to-bottom">To End</a>

            <a href="about.html" class="hvr-sweep-to-bottom hvr-sweep-to-bottom-right">My account</a>
        </div>

        <div class="hvr-grow-rotate">
            <div class="header">

                </a>
            </div>
        </div>

        <div class="feedContent">
            <img src="assets/reklama.png" style="max-width:100%; height:auto;>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Financial Literacy Test</title>
            </head>
            <body>

            <h2 id="question-title">Financial Literacy Test</h2>
            <form id="quiz-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div id="question-container" class="quiz">
                    <!-- Question 1 -->
                    <div class="question" id="question1">
                        <p>1. What do you think about cryptocurrencies?</p>
                        <input type="radio" name="question1" value="3"> a) Invested in all the meme coins myself<br>
                        <input type="radio" name="question1" value="0"> b) I keep money only at home and drive a Skoda estate<br>
                        <input type="radio" name="question1" value="1"> c) Investing can only be done in Bitcoin<br>
                        <input type="radio" name="question1" value="2"> d) Sometimes altcoins deserve attention<br><br>
                    </div>

                    <!-- Question 2 -->
                    <div class="question" id="question2" style="display: none;">
                        <p>2. How do you prefer to store your savings?</p>
                        <input type="radio" name="question2" value="1"> a) Under the mattress, under shoes, and in sheets<br>
                        <input type="radio" name="question2" value="2"> b) In a bank, but on an old sofa<br>
                        <input type="radio" name="question2" value="0"> c) In a piggy bank buried in the backyard<br>
                        <input type="radio" name="question2" value="3"> d) On an investment account, let the banks worship<br><br>
                    </div>

                    <!-- Question 3 -->
                    <div class="question" id="question3" style="display: none;">
                        <p>3. How do you react to the phrase "portfolio diversification"?</p>
                        <input type="radio" name="question3" value="2"> a) It's when I have stocks in one hand and bitcoins in the other<br>
                        <input type="radio" name="question3" value="0"> b) Diversification? I thought it was the name of a new coffee blend<br>
                        <input type="radio" name="question3" value="1"> c) Portfolio, is that where photographs are stored, right?<br>
                        <input type="radio" name="question3" value="3"> d) I think it's a good way to reduce risks in investments<br><br>
                    </div>

                    <!-- Question 4 -->
                    <div class="question" id="question4" style="display: none;">
                        <p>4. How do you feel about the idea of an "emerging fund"?</p>
                        <input type="radio" name="question4" value="1"> a) It's when funds emerge from the water, like whales<br>
                        <input type="radio" name="question4" value="0"> b) I thought it was a new genre of music<br>
                        <input type="radio" name="question4" value="2"> c) Emerging funds - it's quite a risky path<br>
                        <input type="radio" name="question4" value="3"> d) Understand that such funds can bring high returns, but they should be considered carefully<br><br>
                    </div>

                    <!-- Question 5 -->
                    <div class="question" id="question5" style="display: none;">
                        <p>5. How do you rate your investment knowledge?</p>
                        <input type="radio" name="question5" value="3"> a) I know everything! I'm Jordan Belfort 2.0!<br>
                        <input type="radio" name="question5" value="0"> b) I don't know what investments are, but I have gnomes in the garden<br>
                        <input type="radio" name="question5" value="2"> c) I think I know enough not to lose all my money at once<br>
                        <input type="radio" name="question5" value="1"> d) I have basic knowledge, but I'm always ready to learn and improve<br><br>
                    </div>
                </div>

                <input type="submit" id="submit-btn" value="Submit" style="display: none;">
            </form>

            <script>
                const questions = document.querySelectorAll('.question');
                let currentQuestion = 0;

                function showNextQuestion() {
                    questions[currentQuestion].style.display = 'none';
                    currentQuestion++;

                    if (currentQuestion < questions.length) {
                        questions[currentQuestion].style.display = 'block';
                    } else {
                        document.getElementById('submit-btn').style.display = 'block';
                    }
                }

                document.addEventListener('DOMContentLoaded', function () {
                    questions[currentQuestion].style.display = 'block';

                    const radioBtns = document.querySelectorAll('input[type="radio"]');
                    radioBtns.forEach(function (btn) {
                        btn.addEventListener('click', function () {
                            showNextQuestion();
                        });
                    });
                });
            </script>
            </body>
            </html>

        </div>

        <div id="bottom" class="footer">
            <a href="#beginning">
                <h2>To Top</h2>
            </a>
        </div>
    </section>

</section>

</body>
</html>


