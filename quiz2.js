const quiz = [
    {
        vraag: "Wat is phishing?",
        antwoorden: [
            "Een poging om persoonlijke gegevens te stelen",
            "Een soort antivirus",
            "Een zoekmachine",
            "Een socialmedia-app"
        ],
        goed: 0
    },
    {
        vraag: "Welke informatie deel je beter niet online?",
        antwoorden: [
            "Je wachtwoorden en bankgegevens",
            "Je favoriete kleur",
            "Je hobby's",
            "Je favoriete eten"
        ],
        goed: 0
    },
    {
        vraag: "Wat kun je doen als je een verdacht bericht ontvangt?",
        antwoorden: [
            "De afzender controleren en niet direct klikken",
            "Direct antwoorden",
            "Het meteen doorsturen naar vrienden",
            "Altijd op de link klikken"
        ],
        goed: 0
    },
    {
        vraag: "Waarom is een sterk wachtwoord belangrijk?",
        antwoorden: [
            "Omdat het moeilijker te raden of te kraken is",
            "Omdat je internet sneller wordt",
            "Omdat je computer dan sneller werkt",
            "Omdat je meer opslagruimte krijgt"
        ],
        goed: 0
    },
    {
        vraag: "Wat is tweestapsverificatie (2FA)?",
        antwoorden: [
            "Een extra beveiligingslaag bij het inloggen",
            "Een manier om foto's te delen",
            "Een soort antivirusprogramma",
            "Een zoekfunctie op internet"
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

        document.querySelector(".card:nth-of-type(3)").innerHTML = `
            <h2>🎉 Quiz afgerond!</h2>
            <h3>Je score: ${score} van ${quiz.length}</h3>
            <p>${bericht}</p>
            <button onclick="location.reload()">Opnieuw spelen</button>
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

toonVraag();