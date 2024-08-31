          <!-- Javascript  -->
          <script src="{{asset('front')}}/js/uikit.min.js"></script>
          <script src="{{asset('front')}}/js/simplebar.js"></script>
          <script src="{{asset('front')}}/js/script.js"></script>
          <script src="{{asset('front')}}/js/custom.js"></script>


          <!-- Ion icon -->
          <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
          <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


          <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


          <link rel="stylesheet" href="{{asset('front/js')}}/toastr.min.css">
          <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

          <!-- <script>
        // Ensure jQuery is loaded
        $(document).ready(function() {
            $('.business_hours').change(function (e) { 
                  var isSet = $('#set-default-times').val();

                alert(isSet);

            });
        });
    </script> -->


          <script>
document.addEventListener('DOMContentLoaded', function() {

    const checkDefaulTtimes = document.getElementById('set-default-times');
    if (checkDefaulTtimes) {

    document.getElementById('set-default-times').addEventListener('click', function() {
        // alert('test');

        var openTimeSelects = document.querySelectorAll('select[name*="[open]"]');
        var closeTimeSelects = document.querySelectorAll('select[name*="[close]"]');


        if (openTimeSelects.length > 0) {
            var firstOpenTimeValue = openTimeSelects[0].value;
            var defaultOpenTime = openTimeSelects[0].value; // Set your desired default open time
            var defaultCloseTime = closeTimeSelects[0].value; // Set your desired default close time


            console.log('first time - ',
                firstOpenTimeValue); // Logs the value of the first open time select element
        } else {
            console.log('No open time selects found');
        }


        openTimeSelects.forEach(function(select) {
            select.value = defaultOpenTime;
        });

        closeTimeSelects.forEach(function(select) {
            select.value = defaultCloseTime;
        });
    });
}
});
          </script>

          <script>
            
document.addEventListener('DOMContentLoaded', function() {
    
    const deleteButtons = document.querySelectorAll('.delete-biz-button');
    if (deleteButtons) {

    const confirmDeleteForm = document.getElementById('confirm-delete-form');
    const dispName = document.querySelector('.disp-name');

    const deleteBaseUrl = `{{ route('deleteMyBusiness', '') }}`;

    deleteButtons.forEach(button => {
        button.addEventListener('click', function() {
            const businessCode = this.getAttribute('data-cid');
            const name = this.getAttribute('data-name');

            dispName.textContent = name;

            const deleteUrl = `${deleteBaseUrl}/${businessCode}`;
            confirmDeleteForm.setAttribute('action', deleteUrl);

        });
    });
}
});
          </script>

          <!-- Custom Image Uploading With Preview -->
          <script>
document.addEventListener('DOMContentLoaded', function() {

    const checkUploadButton = document.getElementById('uploadButton');
    if (checkUploadButton) {

        document.getElementById('uploadButton').addEventListener('click', function() {
            document.getElementById('imageUpload').click();
        });

        document.getElementById('imageUpload').addEventListener('change', function() {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(event) {
                    const previewImg = document.getElementById('previewImg');
                    previewImg.setAttribute('src', event.target.result);
                    previewImg.style.display = 'block';

                    const deleteButton = document.getElementById('deleteButton');
                    deleteButton.style.display = 'block';
                    document.getElementById('deleteButton').onclick = function() {
                        deletevideo();
                    };
                };
                reader.readAsDataURL(file);
            }



            // Automatically submit the form when a file is selected
            if (this.files && this.files[0]) {
                let formData = new FormData();
                formData.append('image', this.files[0]);
                formData.append('business_id', document.querySelector('meta[name="business-id"]')
                    .getAttribute(
                        'content'));
                formData.append('user_id', document.querySelector('meta[name="user-id"]').getAttribute(
                    'content'));

                fetch('http://localhost:8000/api/image-upload', {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')
                                .getAttribute(
                                    'content')
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        console.log('Success:', data.image_id);

                        document.getElementById('deleteButton').setAttribute('onclick',
                            `deleteImage('${data.image_id}')`);



                        // Handle the response as needed
                    })
                    .catch((error) => {
                        console.error('Error:', error);
                        // Handle any errors
                    });
            }





        });
    }
});


document.addEventListener('DOMContentLoaded', function() {

    const checkDeleteButton = document.getElementById('deleteButton');
    if (checkDeleteButton) {
        document.getElementById('deleteButton').addEventListener('click', function() {
            const previewImg = document.getElementById('previewImg');
            previewImg.setAttribute('src', '');
            previewImg.style.display = 'none';
            this.style.display = 'none';

            document.getElementById('imageUpload').value = '';
        });
    }
});
          </script>



          <!-- Grp img Upload With Preview -->
          <script>
document.addEventListener('DOMContentLoaded', function() {

    const checkGrpImageUploadButton = document.getElementById('grpCoverUploadButton');
    if (checkGrpImageUploadButton) {

        document.getElementById('grpCoverUploadButton').addEventListener('click', function() {
            // alert(grpImageUploadButton);
            document.getElementById('groupImageUpload').click();
        });

        document.getElementById('groupImageUpload').addEventListener('change', function() {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(event) {
                    const previewImg = document.getElementById('previewImg');
                    previewImg.setAttribute('src', event.target.result);
                    previewImg.style.display = 'block';

                    const deleteButton = document.getElementById('deleteButton');
                    deleteButton.style.display = 'block';
                    document.getElementById('deleteButton').onclick = function() {
                        deletevideo();
                    };
                };
                reader.readAsDataURL(file);
            }


            if (this.files && this.files[0]) {
            alert(file);

                let formData = new FormData();
                formData.append('image', this.files[0]);
         

                fetch('http://localhost:8000/api/image-upload', {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        console.log('Success:', data.image_id);

                        document.getElementById('deleteButton').setAttribute('onclick',
                            `deleteImage('${data.image_id}')`);
                    })
                    .catch((error) => {
                        console.error('Error:', error);
                    });
            }


        });
    }
});

document.addEventListener('DOMContentLoaded', function() {

    const checkDeleteButton = document.getElementById('deleteButton');
    if (checkDeleteButton) {

        document.getElementById('deleteButton').addEventListener('click', function() {
            const previewImg = document.getElementById('previewImg');
            previewImg.setAttribute('src', '');
            previewImg.style.display = 'none';
            this.style.display = 'none';

            document.getElementById('imageUpload').value = '';
        });
    }
});
          </script>




          <script>
// document.getElementById('uploadButton').addEventListener('click', function() {
//     const imageInput = document.getElementById('imageInput');
//     const uploadStatus = document.getElementById('uploadStatus');

//     // Clear previous status
//     uploadStatus.textContent = '';

//     // Validate if a file is selected
//     if (!imageInput.files || !imageInput.files[0]) {
//         uploadStatus.textContent = 'Please select an image to upload.';
//         return;
//     }

//     const file = imageInput.files[0];

//     // Validate file size (20MB max)
//     if (file.size > 20 * 1024 * 1024) {
//         uploadStatus.textContent = 'File is too large. Max size is 20 MB.';
//         return;
//     }

//     // Create FormData object to send the file
//     const formData = new FormData();
//     formData.append('image', file);

//     formData.append('business_id', document.querySelector('meta[name="business-id"]').getAttribute('content'));
//     formData.append('user_id', document.querySelector('meta[name="user-id"]').getAttribute('content'));

//     // Make the API call to upload the image
//     fetch('http://localhost:8000/api/image-upload', {
//         method: 'POST',
//         body: formData,
//         headers: {
//             'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
//         }
//     })
//     .then(response => response.json())
//     .then(data => {
//         if (data.success) {
//             uploadStatus.textContent = 'Image uploaded successfully!';
//             console.log('Uploaded image ID:', data.image_id); // Use this ID to display the image later
//         } else {
//             uploadStatus.textContent = 'Failed to upload image: ' + data.message;
//         }
//     })
//     .catch(error => {
//         uploadStatus.textContent = 'Error uploading image: ' + error.message;
//     });
// });
          </script>

          <script>
$(document).ready(function() {
    $('#selectImagesButton').on('click', function() {
        $('#images').click();
    });

    $('#images').on('change', function() {
        // $('#imageMultiplePreview').empty(); // Clear previous previews
        var files = this.files;

        for (var i = 0; i < files.length; i++) {
            (function(file) {
                // Create a new FileReader instance
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#imageMultiplePreview').prepend(


                        '<li class="lg:w-1/4 sm:w-1/3 w-1/2 p-4" tabindex="-1">' +
                        '<div class="card uk-transition-toggle">' +
                        '<div class="card-media sm:aspect-[2/1.9] h-40">' +
                        '<img src="' + e.target.result + '" alt="">' +
                        '<div class="card-overly"></div>' +
                        '</div>' +
                        '</div>' +
                        '</li>'
                    );
                };

                reader.readAsDataURL(file);

                // Create a new FormData object for each image
                var formData = new FormData();
                formData.append('image', file); // Append the individual file
                formData.append('business_id', document.querySelector('meta[name="business-id"]')
                    .getAttribute('content'));
                formData.append('user_id', document.querySelector('meta[name="user-id"]')
                    .getAttribute('content'));

                $.ajax({
                    type: 'POST',
                    url: '/api/image-uploads', // Update with your actual upload URL
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        console.log('File uploaded successfully:', response);

                        document.getElementById('deleteButton').setAttribute('onclick',
                            `deleteImage('${response.image_id}')`);
                    },
                    error: function(response) {
                        console.error('Image upload failed:', response);
                    }
                });

            })(files[i]);
        }
    });
});
          </script>

          <script>
function deleteImage(imageId) {
    var formData = new FormData();

    formData.append('image_id', imageId);

    var business_id = document.querySelector('meta[name="business-id"]').getAttribute('content');
    var user_id = document.querySelector('meta[name="user-id"]').getAttribute('content');

    // Send the delete request using AJAX
    fetch(`/api/delete-business-logo?image_id=${imageId}&business_id=${business_id}&user_id=${user_id}`, {
            method: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                    'content') // For Laravel CSRF protection
            },
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // alert('Image deleted successfully.');
                toastr.success('Logo Deleted Successfully!');
            } else {

                toastr.warning('Someting Went Wrong!');
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });

}
          </script>


          <script>
function deleteBusinessImage(button, imageId) {

    button.disabled = true;

    var formData = new FormData();
    formData.append('image_id', imageId);

    var business_id = document.querySelector('meta[name="business-id"]').getAttribute('content');
    var user_id = document.querySelector('meta[name="user-id"]').getAttribute('content');

    fetch(`/api/delete-business-image?image_id=${imageId}&business_id=${business_id}&user_id=${user_id}`, {
            method: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                    'content') // For Laravel CSRF protection
            },
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {

                var grandparentElement = button.parentElement.parentElement;

                // Remove the row div from the DOM
                if (grandparentElement) {
                    grandparentElement.remove();
                }
                toastr.success('Image Deleted Successfully!');
            } else {
                toastr.warning('Someting Went Wrong!');
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
}
          </script>


          <script>
document.addEventListener('DOMContentLoaded', function() {

    const checkToggleOtpVisibility = document.getElementById('toggleOtpVisibility');
    if (checkToggleOtpVisibility) {
        document.getElementById('toggleOtpVisibility').addEventListener('click', function() {
            const otpInput = document.getElementById('otp');
            const eyeIcon = document.getElementById('eyeIcon');
            if (otpInput.type === 'password') {
                otpInput.type = 'text';
                eyeIcon.setAttribute('d',
                    'M15 12c0 1.656-1.344 3-3 3s-3-1.344-3-3 1.344-3 3-3 3 1.344 3 3zM12 4.5c4.418 0 8 3.582 8 8s-3.582 8-8 8-8-3.582-8-8 3.582-8 8-8z'
                );
            } else {
                otpInput.type = 'password';
                eyeIcon.setAttribute('d',
                    'M15 12c0 1.656-1.344 3-3 3s-3-1.344-3-3 1.344-3 3-3 3 1.344 3 3zM12 4.5c4.418 0 8 3.582 8 8s-3.582 8-8 8-8-3.582-8-8 3.582-8 8-8z'
                );
            }
        });
    }
});

// Resend OTP button action
document.addEventListener('DOMContentLoaded', function() {

    const checkResendOtp = document.getElementById('resendOtp');
    if (checkResendOtp) {
        document.getElementById('resendOtp').addEventListener('click', function() {
            // Logic for resending OTP goes here
            alert('OTP has been resent!'); // Example action

        });
    }
});
          </script>