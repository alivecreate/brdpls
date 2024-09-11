<a href="https://chat.whatsapp.com/JjCoTMCPKy4AiaJLcIedO3" target="_blank">
    <img src="https://imagedelivery.net/zfs38w7w3E1dJVvB3mVs9g/bb4df606-909e-4884-343d-0cbea8007300/md" 
        style="width: 100px;height: auto;position: fixed;right: 0;top: 172px;z-index: 9999;" />
</a>

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
const setDefaultTimesButton = document.getElementById('set-default-times');

if (setDefaultTimesButton) {
    setDefaultTimesButton.addEventListener('click', function() {




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
} else {
    console.log("Element with ID 'set-default-times' not found.");
}
          </script>



          <script>
document.addEventListener('DOMContentLoaded', function() {

    const deleteButtons = document.querySelectorAll('.delete-biz-button');
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
});
          </script>

          <!-- Custom Image Uploading With Preview -->
          <script>
document.addEventListener("DOMContentLoaded", function() {

    const uploadButton = document.getElementById('uploadButton');
    const imageUpload = document.getElementById('imageUpload');

    if (uploadButton && imageUpload) {

        uploadButton.addEventListener('click', function() {
            imageUpload.click();
        });

        imageUpload.addEventListener('change', function() {
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
            } else {
                console.error("Upload button or image input not found.");
            }

        });

    }

    const deleteButton = document.getElementById('deleteButton');
    const previewImg = document.getElementById('previewImg');
    const imageUploadDelete = document.getElementById('imageUploadDelete');

    if (deleteButton && previewImg && imageUploadDelete) {
        deleteButton.addEventListener('click', function() {
            previewImg.setAttribute('src', '');
            previewImg.style.display = 'none';
            this.style.display = 'none';

            imageUploadDelete.value = '';
        });
    } else {
        console.log("One or more elements not found");
    }



});
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

    const toggleOtpVisibility = document.getElementById('toggleOtpVisibility');

    if (toggleOtpVisibility) {

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

    // Resend OTP button action
    
    const toggleOtpVisibility = document.getElementById('toggleOtpVisibility');
    if (toggleOtpVisibility) {
    document.getElementById('resendOtp').addEventListener('click', function() {
        // Logic for resending OTP goes here
        
        toastr.success('OTP has been resent!');
    });
    }

});


$('#btnUpload').on('click', function() {
    $(this).prop('disabled', true).text('Uploading...'); // Disable the button and change the text
});




</script>
