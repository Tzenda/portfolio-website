const getInput = parseInt(prompt("Please enter your desired number: "))

function Fizzbuzz(a) {
    for (let i = 1; i <= a; i++) {
        let answer ='';
        if (i % 3 === 0) { answer += "Fizz"; console.log(answer); }
        if (i % 5 === 0) { answer += "Buzz"; console.log(answer); } 
        console.log(answer || i)
    }
}

Fizzbuzz(getInput)