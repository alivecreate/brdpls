

function previewImages() {
    var preview = document.getElementById('images-preview');
    preview.innerHTML = '';

    var files = document.getElementById('images').files;
    console.log(files)

    for (var i = 0; i < files.length; i++) {
        var file = files[i];
        var reader = new FileReader();

        reader.onload = function (e) {
            var img = document.createElement('img');
            img.src = e.target.result;
            img.style.width = '100px'; // Set the thumbnail width
            img.style.height = '100px'; // Set the thumbnail height
            preview.appendChild(img);
        }

        reader.readAsDataURL(file);
    }
}

document.addEventListener('DOMContentLoaded', function() {
    const deleteButtons = document.querySelectorAll('.delete-button');
    const confirmDeleteLink = document.getElementById('confirm-delete-link');

    deleteButtons.forEach(button => {
        button.addEventListener('click', function() {
            const businessCode = this.getAttribute('data-cid');
            const deleteUrl = `/delete-business/${businessCode}`; // Replace with your delete URL pattern
            confirmDeleteLink.setAttribute('href', deleteUrl);
        });
    });
});



function previewImageThumb(event) {
    const image = document.getElementById('img');
    const file = event.target.files[0];

    if (file) {
        const reader = new FileReader();

        reader.onload = function (e) {
            image.src = e.target.result;
        };

        reader.readAsDataURL(file);
    }
}

function disableButton(button) {
    button.disabled = true; // Disable the button
    button.textContent = 'Uploading...'; // Change the text
}