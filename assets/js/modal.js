const startJobButton = document.getElementById("startJobButton");
const confirmationModal = document.getElementById("confirmationModal");
const confirmStartButton = document.getElementById("confirmStartButton");
const cancelStartButton = document.getElementById("CancelStartButton");
const questionsModal = document.getElementById("questionsModal");

startJobButton.addEventListener("click", () => {
    confirmationModal.style.display = "block";
});

confirmStartButton.addEventListener("click", () => {
    confirmationModal.style.display = "none";
    questionsModal.style.display = "block";
});

cancelStartButton.addEventListener("click",()=>{
    confirmationModal.style.display = "none";
})


// Login Section

function openLoginModal() {
    document.getElementById("loginModal").style.display = "block";
}

function closLoginModal() {
    document.getElementById("loginModal").style.display = "none";
}

// Registration Section
function openRegistrationModal() {
    document.getElementById("RegistrationModal").style.display = "block";
}

function closeRegistrationModal() {
    document.getElementById("RegistrationModal").style.display = "none";
}