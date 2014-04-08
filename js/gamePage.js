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

//Set Category Titles

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

function questionSelected(questionNumber){
  $("#question-modal").modal({
    backdrop: 'static'
  });

  var qanda = WikiTraverser.prototype.qAndAs[questionNumber];

  $("#questionText").text(qanda.question);

  //do random
  //Also make these buttons
  //Also ensure that the order is correct
  //Also add categories to the top
  $("#option1").text(qanda.correctAnswer);
  $("#option2").text(qanda.incorrect1);
  $("#option3").text(qanda.incorrect2);
  $("#option4").text(qanda.incorrect3);

}

//Whole business with opening up dialog
//Determine if correct answer selected

//Do GAME Timer and Countdown business
//If time runs out -> link to results page


//If hit end button -> link to results page
