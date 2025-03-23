// let ham = document.getElementById('ham');
// let nav = document.getElementById("nav");
// let cancel = document.getElementById("cancel");

// ham.addEventListener('click', function(e) {
//     e.preventDefault();
//     nav.classList.add("show");
//     cancel.style.display = "contents";
//     ham.style.display = "none";
// })
// cancel.addEventListener('click', function(e) {
//     e.preventDefault();
//     nav.classList.remove("show");
//     cancel.style.display = "none";
//     ham.style.display = "contents";

// });

const text = "Is your mental health affecting your school life?";
let index = 0;
function typeText(){
    if(index < text.length){
        document.getElementById("text").innerHTML += text.charAt(index);
        index++;
        setTimeout(typeText, 100);
    }
}

typeText();

//  QUIZ

// function submitQuiz() {

//     let score = 0;
//     const answers = document.querySelectorAll('input[name="q1"]');
//     console.log(answers);
//     const result = document.getElementById("result");
//     let findSelected = () => {
//         let selected = document.querySelector("input[name='q1']:checked").value;
//         console.log(selected);
//     }
//     if (answers.length < 10) {
//         result.textContent = "Please answer all questions before submitting.";
//         // return;
//     }
    
//     answers.forEach(answer => {
//         // score += parseInt(answer.value);
//         answers.addEventListener("change", findSelected);
//     });
    
//     if (score <= 15) {
//         result.textContent = "You're doing okay, but always remember to check in with yourself.";
//     }else if(score <= 30) {
//         result.textContent = "Mild signs of anxiety or stress detected. Practice self-care and talk to someone if you feel overwhelmed.";
//     } else if (score <= 40) {
//         result.textContent = "You might be experiencing depression or anxiety. It's okay to seek help â€” talk to a trusted person.";
//     } else {  
//         result.textContent = "High signs of mental health challenges detected. Please consider reaching out for professional help. You are not alone.";
//     }
    
    
//     result.innerHTML += "<br><br><em>Always remember: Asking for help is a sign of strength, not weakness.</em>";
    
//     }