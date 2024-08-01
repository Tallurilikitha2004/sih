const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');
let inpass = [];

// Define an object to store image hash values
const imageHashes = {
    image01: "b9453f7a6fef391fae69229e369f3c3fdfbb8fd296b19d93dc01b8bec6af3e40",
    image02: "38d85b38fca1c2d25c07ced31e1cda4931712bfaed0300fa1798678a0d92f2a8",
    image03: "f5c1982df80135428f40db03d0eb13229b34654fb0a44c6126d9750d10f2d163",
    image04: "78f509beaacbf1fe7797ce50398b6f90531f91a535c61052733ca17366a7aed3",
    image05: "3360bbf373243f1dc5c5c95bf8e69ddf9bc63efcd07402ba832686ebd7a5aa04",
    image06: "9a46d9655604179f2f481be342447aa6fcd70292c6e0673f858ad7d3d7025849",
    image07: "0f6db36c2b15e4ff705cd1da1fdbf01ed76b08c530631b2a10cabc4f93e2edd9",
    image08: "4aa4b6012415eaa65576986731c1c1dcc7054b1401ca0d2fe20a7a0a0590a8b1",
    image09: "4c55a5ef015b5a0b03fa391d52739267cbb7af804367ba5dadadec96479e70d8",
    image10: "b1014ad0b75a6acd46af98c483272d12f05e5141730da8b73f85c27bd218118f",
    image11: "fca3dc6ff2ca98631cef395fd13e3df918bc7f42064f7e511bb0d29387839fab",
    image12: "c9fb0e81b61d4c0370d689b1aaee4580d39fe9e38ff61f4fced0b5ca3f3a1aa9",
    image13: "f21cce54c67f40c7a6fcecbc27a18ad0450e267c9c1ee8dcae04222963799e67",
    image14: "81e2c343c89f5e5baa5c37fd096a7378790ad91b265885c83783f3c6b16fca04",
    image15: "33080a5e3d7085cc1b4864df04f3ec5db6e5bdb8936085e725df1b601a9ef410"
    // Add hash values for other images here
};

signUpButton.addEventListener('click', () => {
    container.classList.add('right-panel-active');
});

signInButton.addEventListener('click', () => {
    container.classList.remove('right-panel-active');
});

function inimg(element) {
    var Image = element.querySelector('img');
    if (Image) {
        if (Image.classList.contains('clicked')) {
            Image.classList.remove('clicked');
            inpass.splice(inpass.indexOf(element.id), 1);
        } else {
            Image.classList.add('clicked');
            inpass.push(element.id);
        }
    }
}

function signin() {
    // Calculate hash values of the selected images
    const selectedHashes = inpass.map(imageId => imageHashes[imageId]);

    // Set the hash values in the hidden input field
    document.getElementById('selected_images').value = selectedHashes.join(',');

    // Submit the form
    document.getElementById('loginForm').submit();
}
