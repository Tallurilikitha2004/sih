const correctPasswordSequence = [];

// Function to handle image click
function inimg(element) {
    element.classList.toggle("clicked");
}

// Function to shuffle an array
function shuffleArray(array) {
    const parent = array[0].parentNode;

    for (let i = array.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));
        parent.insertBefore(array[j], array[i]);
    }
}

// Function to handle file upload
document.getElementById("imageUpload").addEventListener("change", function (event) {
    const passwordContainer = document.getElementById("passwordContainer");
    passwordContainer.innerHTML = ''; // Clear existing password images

    const files = event.target.files;

    for (let i = 0; i < files.length; i++) {
        const file = files[i];
        const imgElement = document.createElement("div");
        imgElement.classList.add("passimg");
        imgElement.style.width = "60px";
        imgElement.style.height = "60px";

        const img = document.createElement("img");
        img.src = URL.createObjectURL(file);
        img.alt = "";
        img.classList.add("patimg");

        imgElement.appendChild(img);
        imgElement.addEventListener("click", function () {
            inimg(this);
        });

        passwordContainer.appendChild(imgElement);
        correctPasswordSequence.push(imgElement.id);
    }
});

// Function to handle login button click
document.getElementById("signUp").addEventListener("click", function () {
    const clickedImages = document.querySelectorAll(".passimg.clicked");

    // Get the sequence of clicked images
    const clickedSequence = Array.from(clickedImages).map(img => img.id);

    // Check if the clicked sequence matches the correct password sequence
    const isCorrectPassword = JSON.stringify(clickedSequence) === JSON.stringify(correctPasswordSequence);

    if (isCorrectPassword) {
        // Change the order of the images
        correctPasswordSequence.forEach((id, index) => {
            const element = document.getElementById(id);
            element.style.order = index + 1;
        });

        // Perform any other actions you want when the password is correct
        alert("Password is correct! Images order changed.");
    } else {
        // Shuffle the order of the images if the password is incorrect
        const allImages = document.querySelectorAll(".passimg");
        shuffleArray(Array.from(allImages));

        // Perform any actions you want when the password is incorrect
        alert("Password is incorrect. Images order shuffled.");
    }

    // Reset clicked state for all images
    document.querySelectorAll(".passimg").forEach(img => img.classList.remove("clicked"));
});

// Shuffle the order of images when the page is loaded
window.addEventListener("load", function () {
    const allImages = document.querySelectorAll(".passimg");
    shuffleArray(Array.from(allImages));
});
