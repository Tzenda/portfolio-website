const winsAgainst = {
  1: 3, // rock
  2: 2, // paper
  3: 1, // scissors
};

let playerScore = 0
let computerScore = 0
let tieScore = 0;

function game(n, resultsTracker) {
  repeatGame(n);

  let winner = "";
  if (playerScore === computerScore) {winner = "No one"}
  else if (playerScore > computerScore) {winner = "Player"} 
  else {winner = "Computer"}
  
  resultsTracker(`player score is: ${playerScore}, computer score is ${computerScore}. Both players tied ${tieScore} time(s). ${winner} is the winner!`);
}

const repeatGame = (n) => {
  for (let i = 0; i < n; i++) {

    let computerSelection = Math.ceil(Math.random() * 3);
    let playerSelection = prompt("Choose your weapon").toLocaleLowerCase().trim();

    switch (playerSelection) {
      case "rock":
        playerSelection = 1;
        break;
      case "paper":
        playerSelection = 2;
        break;
      case "scissors":
        playerSelection = 3;
        break;
    }
    playRound(playerSelection, computerSelection);
  }
};

function playRound(playerSelection, computerSelection) {
  console.log(playerSelection);
  console.log(computerSelection);

  if (playerSelection === computerSelection) {
    return tieScore++
  }

  if (winsAgainst[playerSelection] === computerSelection) {
    playerScore++
  } else {
    computerScore++
  }
}

function reset() {
  playerScore = 0
  computerScore = 0
  tieScore = 0; 
}
