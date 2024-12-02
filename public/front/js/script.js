function previewImage2()
{ var preview = document.getElementById('images-preview');
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
// On page load or when changing themes, best to add inline in `head` to avoid FOUC
if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    document.documentElement.classList.add('dark')
    } else {
    document.documentElement.classList.remove('dark')
    }

// Whenever the user explicitly chooses light mode
localStorage.theme = 'light'

// Whenever the user explicitly chooses dark mode
localStorage.theme = 'dark'

// Whenever the user explicitly chooses to respect the OS preference
localStorage.removeItem('theme')



// add post upload image 
// document.getElementById('addPostUrl').addEventListener('change', function(){
// if (this.files[0] ) {
//     var picture = new FileReader();
//     picture.readAsDataURL(this.files[0]);
//     picture.addEventListener('load', function(event) {
//     document.getElementById('addPostImage').setAttribute('src', event.target.result);
//     document.getElementById('addPostImage').style.display = 'block';
//     });
// }
// });


// Create Status upload image 
// document.getElementById('createStatusUrl').addEventListener('change', function(){
// if (this.files[0] ) {
//     var picture = new FileReader();
//     picture.readAsDataURL(this.files[0]);
//     picture.addEventListener('load', function(event) {
//     document.getElementById('createStatusImage').setAttribute('src', event.target.result);
//     document.getElementById('createStatusImage').style.display = 'block';
//     });
// }
// });


// create product upload image

const createProductUrl = document.getElementById('createProductUrl');

if (createProductUrl) {

document.getElementById('createProductUrl').addEventListener('change', function(){
if (this.files[0] ) {
    var picture = new FileReader();
    picture.readAsDataURL(this.files[0]);
    picture.addEventListener('load', function(event) {
    document.getElementById('createProductImage').setAttribute('src', event.target.result);
    document.getElementById('createProductImage').style.display = 'block';
    });
}
});
}







    

function addHours(button) {
    const container = button.parentElement;
    const newTimeInput = document.createElement('div');
    newTimeInput.className = 'flex items-center mb-2';
    newTimeInput.innerHTML = `
        <span class=""></span>
        <input type="time" class="time-input p-2 border border-gray-300 rounded">
        <span class="mx-2">to</span>
        <input type="time" class="time-input p-2 border border-gray-300 rounded">
        <button class="ml-2 text-red-500 remove-hours" onclick="removeHours(this)">Remove</button>
    `;
    container.insertAdjacentElement('afterend', newTimeInput);
}

function removeHours(button) {
    button.parentElement.remove();
}

function saveBusinessHours() {
    const hours = [];
    const days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
    const containers = document.querySelectorAll('#business-hours > div');

    containers.forEach((container, index) => {
        const day = days[index];
        const timeInputs = container.querySelectorAll('input[type="time"]');
        timeInputs.forEach((input, i) => {
            if (i % 2 === 0) {
                hours.push({
                    day: day,
                    open: input.value,
                    close: timeInputs[i + 1].value
                });
            }
        });
    });

    console.log(hours);
    // Send the `hours` array to your server or handle it as needed
}

function deleteImage(imageId) {
    // alert('deleteImage');
    fetch(`/api/delete-image`, {
        method: 'DELETE',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({ id: imageId }),
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            
            alert('Image deleted successfully.');
        } else {
            alert('Failed to delete the image.');
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });
}


function format(command) {
    document.execCommand(command, false, null);
}

