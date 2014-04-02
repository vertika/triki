var gameCountdownTime = 5;
var paused = false;
/*------ Init Page -----*/

//Open Modal Countdown Window
$(function() {
  $('#countdown-modal').modal({
    backdrop: 'static'
  });
});

//Do Timer and Countdown Business
initialTimer = window.setInterval(startCountDownToGame, 1000);

function startCountDownToGame(){
  gameCountdownTime -= 1;
  $('#gameCountdown').text(gameCountdownTime);

  if(gameCountdownTime === 0){
    clearInterval(initialTimer);

    //start game
    $('#countdown-modal').modal('hide');

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

//Whole business with opening up dialog
//Determine if correct answer selected

//Do GAME Timer and Countdown business
//If time runs out -> link to results page


//If hit end button -> link to results page
