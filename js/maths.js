let n1 = Math.floor(Math.random()*30+1);
let n2 = Math.floor(Math.random()*30+1);

document.getElementById("intext").value = n1;
document.getElementById("intext1").value = n2;

let adds = n1 + n2;

function MGame()
{
    var user = document.getElementById("intext2").value;

    if (user == adds)
    {
        document.getElementById("ans").innerHTML = "Good Job!!! Your Answer Is Correct 🌟🌟🌟🌟🌟";
    }
    else
    {
        document.getElementById("ans").innerHTML = "The Correct Answer Is " + adds + ". You can Try Again 😊😊😊";
    }

    var user = document.getElementById("intext2").value = "";

n1 = Math.floor(Math.random()*30+1);
n2 = Math.floor(Math.random()*30+1);

document.getElementById("intext").value = n1;
document.getElementById("intext1").value = n2;

adds = n1 + n2;
}

