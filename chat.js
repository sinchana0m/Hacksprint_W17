document.addEventListener("DOMContentLoaded", function () {
    welcomeMessage();
});

function welcomeMessage() {
    addMessage("Welcome! How can I assist you today?");
}

function sendMessage() {
    var userInput = document.getElementById("userInput").value;
    if (userInput.trim() !== "") {
        addMessage("User: " + userInput);
        processUserInput(userInput.toLowerCase());
        document.getElementById("userInput").value = "";
    }
}

function addMessage(message) {
    var chatbox = document.getElementById("chatbox");
    var newMessage = document.createElement("div");
    newMessage.className = "message";
    newMessage.textContent = message;
    chatbox.appendChild(newMessage);
    chatbox.scrollTop = chatbox.scrollHeight; 
}

function processUserInput(userInput) {
    if (userInput.includes("home")) {
        addMessage("Navigating to the Home page...");
        window.location.href="home.html"
    } else if (userInput.includes("about")) {
        addMessage("Navigating to the About Us page...");
        window.location.href="about.html"
    } else if (userInput.includes("events")) {
        addMessage("Navigating to the Events page...");
        window.location.href="EVENT.HTML"
    } else if (userInput.includes("gallery")) {
        addMessage("Navigating to the gallery page...");
        window.location.href="gallery.html"}
        else if (userInput.includes("notification")) {
            addMessage("Navigating to the gallery page...");
            window.location.href="notification.html"}
    else if (userInput.includes("help")) {
        showHelp();
    } else {
        addMessage("My apologies.  Please type 'help' for assistance.");
    }
}

function showHelp() {
    addMessage("You can navigate by typing keywords like 'home', 'about', 'events', etc.");
    addMessage("Feel free to ask for help anytime!");
}