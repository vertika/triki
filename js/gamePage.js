var gameCountdownTime = 5;
var paused = false;
/*------ Init Page -----*/


//Get Categories
function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
        results = regex.exec(location.search);
    return results == null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}

var cat1 = getParameterByName('Category1');
var cat2 = getParameterByName('Category2');
var cat3 = getParameterByName('Category3');
var cat4 = getParameterByName('Category4');
var cat5 = getParameterByName('Category5');
var cat6 = getParameterByName('Category6');

//Open Modal Countdown Window
$(function() {
  $('#numQuestionsGenerated').text("0/30 Questions Generated");
  $('#countdown-modal').modal({
    backdrop: 'static'
  });
});

/*----- Generate Questions and Place In Gameboard ------*/
var cats = ["Category:"+cat1,
            "Category:"+cat2,
            "Category:"+cat3,
            "Category:"+cat4,
            "Category:"+cat5,
            "Category:"+cat6];
generateQuestions(cats);
function generateQuestions(categories){
  categories.forEach(function(category){
    var trav = new WikiTraverser();
    trav.category = category;
    trav.collectForCategory(category, trav);
  });
}

/*----- Do Timer and Countdown Business -----*/
initialTimer = window.setInterval(startCountDownToGame, 1000);

function startCountDownToGame(){
  gameCountdownTime -= 1;
  $('#gameCountdown').text(gameCountdownTime);

  $('#numQuestionsGenerated').text(WikiTraverser.prototype.numQuestionsGeneratedSoFar + "/30 Questions Generated");

  if(gameCountdownTime === 0){
    //Stop Clock
    clearInterval(initialTimer);

    //Dismiss Modal
    $('#countdown-modal').modal('hide');

    //If not enough questions reload and try again
    if(WikiTraverser.prototype.numQuestionsGeneratedSoFar != 30){
      location.reload();
    }

    //Start Game

    var c = WikiTraverser.prototype.qAndAs;

    console.log(c[0][0].category);
    console.log(c[1][0].category);
    console.log(c[2][0].category);
    console.log(c[3][0].category);
    console.log(c[4][0].category);
    console.log(c[5][0].category);


    //Set Category Labels
    $("#categoryLabel1").text(c[0][0].category.split(":")[1]);
    $("#categoryLabel2").text(c[1][0].category.split(":")[1]);
    $("#categoryLabel3").text(c[2][0].category.split(":")[1]);
    $("#categoryLabel4").text(c[3][0].category.split(":")[1]);
    $("#categoryLabel5").text(c[4][0].category.split(":")[1]);
    $("#categoryLabel6").text(c[5][0].category.split(":")[1]);

    //Set Score Label
    $("#scoreLabel").text("0/30");

    //Set Game Time
    $('#timeRemainingLabel').text("4:00");

    gameTimer = window.setInterval(updateGameTime, 1000);
  }
}

//Handle Pause
function togglePause(){
  if(gameCountdownTime != 0){
    if(!paused){
      paused = true;
      clearInterval(initialTimer);
    }else{
      paused = false;
      initialTimer = window.setInterval(startCountDownToGame, 1000);
    }
  }
}

/*----- Game -----*/
var minutes = 4;
var timeLimit = 60 * minutes;
var timeRemaining = timeLimit;
var totalQuestions = 30;
var numCorrect = 0;

function updateGameTime(){
  timeRemaining -= 1;

  if(timeRemaining === 0){
    //redirect to results page

    //Close any pages open
    $('#question-modal').modal('hide');

    giveUpPressed();



  }else{

    var seconds = (timeRemaining % 60);
    if(seconds < 10){
      seconds = "0"+seconds;
    }

    var timeStr = Math.floor((timeRemaining / 60)) + ":" + seconds;
    $('#timeRemainingLabel').text(timeStr);
  }
}



var qanda;
var questionSelectedId;

function questionSelected(questionNumber, qId){
  questionSelectedId = "#"+qId;

  qanda = WikiTraverser.prototype.qAndAs[Math.floor(questionNumber / 5)][questionNumber % 5];

  //check if question has already been answered
  if(!qanda.answered){
    //open modal window
    $("#question-modal").modal({
      backdrop: 'static'
    });

    //set question text
    $("#questionText").text(qanda.question);

    var positions = [1, 2, 3, 4];
    var randomPositions = [];

    for(var i = 0; i < 4; i++){
      var index = Math.ceil(Math.random() * positions.length) - 1;
      randomPositions.push(positions[index]);
      positions.splice(index, 1);
    }

    var id1 = "#option"+randomPositions[0];
    var id2 = "#option"+randomPositions[1];
    var id3 = "#option"+randomPositions[2];
    var id4 = "#option"+randomPositions[3];

    $(id1).text(qanda.correctAnswer);
    $(id2).text(qanda.incorrect1);
    $(id3).text(qanda.incorrect2);
    $(id4).text(qanda.incorrect3);

  }
}

function selectedOption(selection){
  var buttonId = "#"+selection;

  if($(buttonId).text() === qanda.correctAnswer){
    //correct

    qanda.answeredCorrectly = 1;

    //change button image to answered correct
    $(questionSelectedId).removeClass("btn btn-primary pull");
    $(questionSelectedId).addClass("btn btn-success");

    //update score
    numCorrect++;
    var scoreString = numCorrect + "/" + totalQuestions;
    $('#scoreLabel').text(scoreString);


  }else{
    //change button image to answered incorrect
    $(questionSelectedId).removeClass("btn btn-primary pull");
    $(questionSelectedId).addClass("btn btn-danger");
  }

  //don't allow this to be opened again
  qanda.answered = 1;
  $('#question-modal').modal('hide');

}

/* ----- after -----*/

function giveUpPressed(){
  //Stop time
  clearInterval(gameTimer);

  //Push To DB
  prepareToPush();

  //Format Panel
  formatResultPanel();

  //Hide
  $("#gamePanel").hide();

  //Display Panel
  $("#navBar").show();
  $("#resultsPanel").show();
}

function prepareToPush(){
  //Create form things

  var gamesplayed = prepareInput("gamesplayed", 1);
  $("#resultsForm").append(gamesplayed);

  var numcorrect = prepareInput("numcorrect", numCorrect);
  $("#resultsForm").append(numcorrect);

  var submitCat1 = prepareInput("cat1", cat1);
  $("#resultsForm").append(submitCat1);

  var submitCat2 = prepareInput("cat2", cat2);
  $("#resultsForm").append(submitCat2);

  var submitCat3 = prepareInput("cat3", cat3);
  $("#resultsForm").append(submitCat3);

  var submitCat4 = prepareInput("cat4", cat4);
  $("#resultsForm").append(submitCat4);

  var submitCat5 = prepareInput("cat5", cat5);
  $("#resultsForm").append(submitCat5);

  var submitCat6 = prepareInput("cat6", cat6);
  $("#resultsForm").append(submitCat6);

  $("#resultsForm").submit();
}

function prepareInput(name, value){
  return "<input type=\"hidden\" name=\""+ name + "\" value=\"" + value + "\">";
}

function formatResultPanel(){

  //Header
  var resultPanelTitle = "Congrats, you got " + numCorrect + "/" + totalQuestions + " correct!";
  $("#resultsPanelHeader").text(resultPanelTitle);

  //For Panel
  generateResults();

}

function generateResults(){
    var incorrect = [];

    for(var cat = 0; cat < 6; cat++){
      var numWrong = 0;
      for(var q = 0; q < 5; q++){
        var qa = WikiTraverser.prototype.qAndAs[cat][q];

        if(qa.answeredCorrectly == 0){
          console.log(qa.answeredCorrectly);

          var domQuest = "#resultPanel-body-category" + cat;
          var wrongMsg = "<li>Read up on " + qa.correctAnswer + " at <a href=\"" + qa.url + "\" target=\"_blank\">" + qa.url + "</a> </li>";
          $(domQuest).append(wrongMsg);
          numWrong++;
        }

      }

      //set color of titles
      var domCatColorAttr = "#resultPanel-title-color-category" + cat;
      console.log(domCatColorAttr);
      if(numWrong < 2){
        $(domCatColorAttr).removeClass("panel panel-default");
        $(domCatColorAttr).addClass("panel panel-success");

      }else if((numWrong >= 2) && (numWrong < 4)){
        $(domCatColorAttr).removeClass("panel panel-default");
        $(domCatColorAttr).addClass("panel panel-warning");

      }else{
        $(domCatColorAttr).removeClass("panel panel-default");
        $(domCatColorAttr).addClass("panel panel-danger");

      }

      var domCat = "#resultPanel-title-category" + cat;
      var titleCategory = WikiTraverser.prototype.qAndAs[cat][0].category.split(":")[1] + ", [" + (5-numWrong) + "/5]";
      $(domCat).text(titleCategory);
    }

}

function rePlayPressed(){
  location.reload();
}

//Whole business with opening up dialog
//Determine if correct answer selected

//Do GAME Timer and Countdown business
//If time runs out -> link to results page


//If hit end button -> link to results page
