/* =========================
   1. VARIABLES
========================= */

const websiteName = "Smart City Portal";
let visitorCount = 1;

console.log("Website:", websiteName);
console.log("Visitor Count:", visitorCount);

window.addEventListener("DOMContentLoaded", function () {

    // Display variables in DOM
    let infoDiv = document.createElement("div");
    infoDiv.innerHTML = `
        <h3 id="siteName"></h3>
        <p id="visitor"></p>
    `;
    document.body.appendChild(infoDiv);

    document.getElementById("siteName").innerText = websiteName;
    document.getElementById("visitor").innerText = "Visitors: " + visitorCount;

    visitorCount += 1;
   console.log("Updated Visitor Count:", visitorCount);

    try {
        websiteName = "New Portal";
    } catch (e) {
        console.log("Const cannot be reassigned");
    }

    /* =========================
       2. FUNCTIONS
    ========================= */

    function showMessage() {
        document.getElementById("msg").innerText = "Welcome to Smart City Portal!";
    }

    let changeTitle = function(newTitle) {
        document.title = newTitle;
    }

    let addVisitors = (count) => {
        return count + 5;
    }

    function getTotalVisitors(count) {
        return count + 10;
    }

    function updateVisitors() {
        visitorCount = addVisitors(visitorCount);
        document.getElementById("visitor").innerText = "Visitors: " + visitorCount;
    }

    let btn = document.createElement("button");
    btn.innerText = "Click Me";
    document.body.appendChild(btn);

    let msg = document.createElement("p");
    msg.id = "msg";
    document.body.appendChild(msg);

    btn.addEventListener("click", showMessage);

    /* =========================
       3. OBJECTS
    ========================= */

    let city = {
        name: "Bhubaneswar",
        population: 1000000,
        type: "Smart City"
    };

    console.log(city.name);
    console.log(city["population"]);

    let objDiv = document.createElement("div");
    objDiv.innerHTML = `
        <h3>City Info</h3>
        <p id="cityInfo"></p>
    `;
    document.body.appendChild(objDiv);

    document.getElementById("cityInfo").innerText =
        city.name + " - " + city.population + " - " + city.type;

    city.population = 1200000;
    console.log("Updated Object:", city);

    /* =========================
       4. METHODS
    ========================= */

    let user = {
        name: "Guest",
        visits: 1,

        greet: function() {
            return "Hello " + this.name;
        },

        increaseVisits: function() {
            this.visits++;
            return this.visits;
        }
    };

    let methodDiv = document.createElement("div");
    methodDiv.innerHTML = `<p id="userMsg"></p>`;
    document.body.appendChild(methodDiv);

    document.getElementById("userMsg").innerText = user.greet();

    document.body.addEventListener("click", function() {
        let v = user.increaseVisits();
        console.log("Visits:", v);
    });

    /* =========================
       5. POP-UP BOXES
    ========================= */

    alert("Welcome to Smart City Website!");

    let confirmUser = confirm("Do you want to continue?");
    console.log(confirmUser);

    let userName = prompt("Enter your name:");
    if (userName) {
        user.name = userName;
        document.getElementById("userMsg").innerText = user.greet();
    }

    /* =========================
       6. EVENTS
    ========================= */

    let eventBtn = document.createElement("button");
    eventBtn.innerText = "Change Background";
    document.body.appendChild(eventBtn);

    eventBtn.addEventListener("click", function() {
        document.body.style.backgroundColor = "#d1f0ff";
    });

    eventBtn.addEventListener("mouseover", function() {
        eventBtn.innerText = "Click to Change Color!";
    });

    let inputBox = document.createElement("input");
    inputBox.placeholder = "Type something...";
    document.body.appendChild(inputBox);

    let liveText = document.createElement("p");
    document.body.appendChild(liveText);

    inputBox.addEventListener("input", function() {
        liveText.innerText = "You typed: " + inputBox.value;
    });

});