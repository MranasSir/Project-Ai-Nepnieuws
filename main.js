const quiz = [
    {
        vraag: "Wat is nepnieuws?",
        antwoorden: [
            "Nieuws dat expres misleidende informatie verspreidt",
            "Nieuws uit de krant",
            "Een officieel persbericht",
            "Een wetenschappelijk artikel"
        ],
        goed: 0
    },
    {
        vraag: "Waar staat AI voor?",
        antwoorden: [
            "Artificial Intelligence",
            "Automatic Internet",
            "Advanced Information",
            "Artificial Internet"
        ],
        goed: 0
    },
    {
        vraag: "Wat is een deepfake?",
        antwoorden: [
            "Een door AI gemaakte nepvideo of afbeelding",
            "Een zoekmachine",
            "Een browser",
            "Een antivirusprogramma"
        ],
        goed: 0
    },
    {
        vraag: "Hoe herken je nepnieuws?",
        antwoorden: [
            "Controleer de bron",
            "Lees alleen de titel",
            "Deel het direct",
            "Kijk alleen naar de afbeelding"
        ],
        goed: 0
    },
    {
        vraag: "Waarom is AI-nepnieuws gevaarlijk?",
        antwoorden: [
            "Mensen kunnen verkeerde informatie geloven",
            "Internet wordt sneller",
            "Computers worden trager",
            "Websites verdwijnen"
        ],
        goed: 0
    }
];

let huidigeVraag = 0;
let score = 0;
let gekozen = false;

const vraag = document.querySelector(".question");
const opties = document.querySelectorAll(".option");
const progress = document.querySelector(".progress");
const next = document.querySelector(".next");
const prev = document.querySelector(".prev");

const total = document.getElementById("total");
const answered = document.getElementById("answered");
const remaining = document.getElementById("remaining");

function updateStats() {
    total.textContent = quiz.length;
    answered.textContent = huidigeVraag;
    remaining.textContent = quiz.length - huidigeVraag;
}

function toonVraag() {
    gekozen = false;
    vraag.textContent = quiz[huidigeVraag].vraag;
    progress.style.width = ((huidigeVraag + 1) / quiz.length) * 100 + "%";
    updateStats();

    opties.forEach((optie, index) => {
        optie.textContent = quiz[huidigeVraag].antwoorden[index];
        optie.style.background = "white";
        optie.style.pointerEvents = "auto";

        optie.onclick = function () {
            if (gekozen) return;
            gekozen = true;

            if (index === quiz[huidigeVraag].goed) {
                optie.style.background = "#b6f5b6";
                score++;
            } else {
                optie.style.background = "#ffb3b3";
                opties[quiz[huidigeVraag].goed].style.background = "#b6f5b6";
            }

            opties.forEach(o => o.style.pointerEvents = "none");
        };
    });
}

next.onclick = function () {
    if (!gekozen) {
        alert("Kies eerst een antwoord.");
        return;
    }

    huidigeVraag++;

    if (huidigeVraag < quiz.length) {
        toonVraag();
    } else {
        answered.textContent = quiz.length;
        remaining.textContent = 0;
        progress.style.width = "100%";

        let bericht = "";
        if (score === 5) {
            bericht = "Perfect! Jij bent een expert in het herkennen van nepnieuws.";
        } else if (score >= 3) {
            bericht = "Goed gedaan! Je kunt nepnieuws goed herkennen.";
        } else {
            bericht = "Blijf oefenen met het herkennen van nepnieuws.";
        }

        document.getElementById("quiz-card-container").innerHTML = `
            <h2>🎉 Quiz afgerond!</h2>
            <h3>Je score: ${score} van ${quiz.length}</h3>
            <p>${bericht}</p>
            <button onclick="location.reload()" style="padding: 10px 20px; cursor: pointer; margin-top: 15px;">Opnieuw spelen</button>
        `;

        document.querySelector(".buttons").style.display = "none";
    }
};

prev.onclick = function () {
    if (huidigeVraag > 0) {
        huidigeVraag--;
        toonVraag();
    }
};

// Start de quiz direct
toonVraag();