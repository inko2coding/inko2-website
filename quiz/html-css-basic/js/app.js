const questionNumber = document.querySelector('.question-number');
const questionText = document.querySelector('.question-text');
const optionContainer = document.querySelector('.option-container');
const answersIndicatorContainer = document.querySelector('.answers-indicator');
const homeBox = document.querySelector('.home-box');
const quizBox = document.querySelector('.quiz-box');
const resultBox = document.querySelector('.result-box');
const answerM = document.querySelector('.answer-txt');
const footer = document.querySelector('footer');

let questionCounter = 0;
let currentQuestion;
let availableQuestions = [];
let availableOptions = [];
let correctAnswers = 0;
let attempt = 0;

// push the questions into availableQuestions array
function setAvailableQuestions() {
    const totalQuestion = quiz.length;
    for (let i = 0; i < totalQuestion; i++) {
        availableQuestions.push(quiz[i])
    }
}

// set question number and question and options
function getNewQuestion() {
    // set question number
    questionNumber.innerHTML = `Question ${questionCounter + 1} of ${quiz.length}`;

    // set question 

    // set random question
    const questionIndex = availableQuestions[Math.floor(Math.random() * availableQuestions.length)];
    currentQuestion = questionIndex;
    questionText.innerText = currentQuestion.q;
    // get the indexOf questionIndex from the availableQuestions array
    const index1 = availableQuestions.indexOf(questionIndex);
    // Remove the questionIndex from the availableQuestions Array so that the question does not repeat
    availableQuestions.splice(index1, 1);

    // set the options
    // get the length of the options
    const optionLen = currentQuestion.options.length;
    // push options in availableOptions array
    for (let i = 0; i < optionLen; i++) {
        availableOptions.push(i)
    }

    optionContainer.innerHTML = '';
    let animationDelay = 0.15;
    // create options in html
    for (let i = 0; i < optionLen; i++) {
        // random option
        const optionIndex = availableOptions[Math.floor(Math.random() * availableOptions.length)];
        // Get the position of option Index from the availableOptions array
        const index2 = availableOptions.indexOf(optionIndex);
        // Remove the optionIndex rom the availableOptions array so that the options do not repeat
        availableOptions.splice(index2, 1);
        const option = document.createElement("div");
        option.innerText = currentQuestion.options[optionIndex];
        option.id = optionIndex;
        option.style.animationDelay = animationDelay + 's';
        animationDelay = animationDelay + 0.15;
        option.className = "option";
        optionContainer.appendChild(option);
        option.setAttribute("onclick", "getResult(this)");
    }

    questionCounter++;
}

// get the result of the current attempted question

function getResult(element) {
    const id = parseInt(element.id);
    // get the answer by comparing the id of the chosen option with the id entered in question.js
    if (id === currentQuestion.answer) {
        // set the green color to the correct option
        element.classList.add("correct");
        // add the indicator to correct mark
        updateanswersIndicator("correct");
        correctAnswers++;
        // answerMessage();
        let answerMess;
        const answerRandomNum = Math.floor(Math.random() * 2);
        if (answerRandomNum === 0) {
            answerMess = 'Good Job! &#128077';
        } else {
            answerMess = 'Kudos! &#128079';
        }
        answerM.classList.add('answered');
        answerM.innerHTML = answerMess;
    } else {
        // set the red color to the incorrect option
        element.classList.add("wrong");
        // add the indicator to wrong mark
        updateanswersIndicator("wrong");


        // if the answer is incorrect show the correct option by adding green color to the correct option
        const optionLen = optionContainer.children.length;
        for (let i = 0; i < optionLen; i++) {
            if (parseInt(optionContainer.children[i].id) === currentQuestion.answer) {
                optionContainer.children[i].classList.add("correct");
            }
        }
    }
    attempt++;
    unclickableOptions();
}

// make all the options unclickable once the user select a option (RESTRICT THE USER TO CHANGE THEIR OPTION)
function unclickableOptions() {
    const optionLen = optionContainer.children.length;
    for (let i = 0; i < optionLen; i++) {
        optionContainer.children[i].classList.add("already-answered");

    }
}

function answersIndicator() {
    answersIndicatorContainer.innerHTML = '';
    const totalQuestion = quiz.length;
    for (let i = 0; i < totalQuestion; i++) {
        const indincator = document.createElement("div")
        answersIndicatorContainer.appendChild(indincator);
    }
}

function updateanswersIndicator(markType) {

    answersIndicatorContainer.children[questionCounter - 1].classList.add(markType);
}

function next() {
    if (questionCounter === quiz.length) {
        answerM.classList.remove('answered');
        quizOver();
    } else {
        getNewQuestion();
        // to remove the message from answereing the previous question
        answerM.classList.remove('answered');
    }
}

function quizOver() {
    // hide quiz quizBox
    quizBox.classList.add("hide");
    // show results box
    resultBox.classList.remove("hide");
    quizResults();
    answerM.classList.remove('answered');

}

// Get the quiz results
function quizResults() {
    resultBox.querySelector(".total-question").innerHTML = quiz.length;
    resultBox.querySelector(".total-attempt").innerHTML = attempt;
    resultBox.querySelector(".total-correct").innerHTML = correctAnswers;
    resultBox.querySelector(".total-wrong").innerHTML = attempt - correctAnswers;
    const percentage = correctAnswers / quiz.length * 100;
    resultBox.querySelector(".percentage").innerHTML = percentage.toFixed(2) + '%';
    resultBox.querySelector(".total-score").innerHTML = correctAnswers + ' / ' + quiz.length;
    if (percentage < 100) {
        document.querySelector('.cheatsheet').classList.add('fail');
    } else {
        document.querySelector('.cheatsheet').classList.remove('fail');
    }
}

function resetQuiz() {
    questionCounter = 0;
    correctAnswers = 0;
    attempt = 0;
    answerM.classList.remove('answered');
}

function tryAgainQuiz() {
    // hide the resultBox
    resultBox.classList.add("hide");
    // show the quizBox
    quizBox.classList.remove("hide");
    footer.classList.add('hide');
    resetQuiz();
    startQuiz();
    answerM.classList.remove('answered');
}

function goToHome() {
    // hide results box
    resultBox.classList.add("hide");
    // show home box
    homeBox.classList.remove("hide");
    footer.classList.remove('hide');
    resetQuiz();
    footer.classList.remove('hide');
}
// ### STARTING POINT ### 

function startQuiz() {

    // hide homeBox
    homeBox.classList.add("hide");
    // show quiz box
    quizBox.classList.remove("hide");
    footer.classList.add("hide");
    // First we will set all questions in available questions array
    setAvailableQuestions();
    // then we will call getNewQuestion() function 
    getNewQuestion();
    // to creat the indicators of answers
    answersIndicator();
}

window.onload = function() {
    homeBox.querySelector(".total-question").innerHTML = quiz.length;
}