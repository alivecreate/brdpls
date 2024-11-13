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
function filterGroups() {
    const input = document.getElementById('searchGroup').value.toUpperCase();
    const groupCards = document.querySelectorAll('.group-card');

    groupCards.forEach(card => {
        const groupName = card.querySelector('.group-name').textContent.toUpperCase();
        if (groupName.includes(input)) {
            card.style.display = ""; // Show card
        } else {
            card.style.display = "none"; // Hide card
        }
    });
}
</script>




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

                        toastr.success('Logo Updated Successfully!');

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




// Image BG Color
</script>



<script>
document.getElementById('checkPhone').addEventListener('input', function() {
    let phoneNumber = this.value;
    // Remove all non-digit characters, including spaces
    phoneNumber = phoneNumber.replace(/\D/g, '');
    // Update the input field value with the cleaned number
    this.value = phoneNumber;
    const errorMessage = document.getElementById('error-message');
    // Simple validation to check if the input is a valid number and has exactly 10 digits
    const isValid = /^\d{10}$/.test(phoneNumber);

    if (!isValid) {
        errorMessage.textContent = 'Please enter a valid 10-digit phone number.';
    } else {
        errorMessage.textContent = ''; // Clear the error message if valid
    }
});
</script>

<script>
$(document).ready(function() {

    $('#rating-stars li').hover(function() {
        // On hover
        var rating = $(this).data('star');
        $('#rating-stars li').each(function(index) {
            if (index < rating) {
                $(this).find('ion-icon').attr('name', 'star'); // Filled star
                $(this).find('ion-icon').css('color', 'white'); // Filled star color
                $(this).css('background', 'red'); // Background color red
            } else {
                $(this).find('ion-icon').attr('name', 'star-outline'); // Unfilled star
                $(this).find('ion-icon').css('color', ''); // Default color
                $(this).css('background', ''); // Default background color
            }
        });
    }, function() {
        // On mouse leave
        $('#rating-stars li').each(function() {
            $(this).find('ion-icon').attr('name', 'star-outline'); // Revert to unfilled star
            $(this).find('ion-icon').css('color', ''); // Default star color
            $(this).css('background', ''); // Default background color
        });
    });


    // $('#rating-stars li').hover(function() {

    //     var rating = $(this).data('star');
    //     $('#rating-stars li').each(function(index) {

    //         if (index < rating) {
    //             $(this).find('ion-icon').attr('name', 'star'); // Filled star
    //             $(this).find('ion-icon').css('color', 'white'); // Filled star
    //             $(this).css('background', 'red');   // Color red
    //         } else {


    //             $(this).find('ion-icon').attr('name', 'star-outline'); // Unfilled star
    //             $(this).find('ion-icon').css('color', ''); // Filled star

    //             $(this).css('color', '');   // Default color
    //             $(this).css('background', '');   // Color red

    //         }
    //     });
    // });

    $('#rating-stars li').on('click', function() {
        var rating = $(this).data('star');

        // Change star colors
        $('#rating-stars li').each(function(index) {
            if (index < rating) {
                $(this).find('ion-icon').attr('name', 'star'); // Filled star
                $(this).find('ion-icon').css('color', 'white'); // Filled star
                $(this).css('background', 'red'); // Color red
            } else {

                $(this).find('ion-icon').attr('name', 'star-outline'); // Unfilled star
                $(this).find('ion-icon').css('color', ''); // Filled star

                $(this).css('color', ''); // Default color
                $(this).css('background', ''); // Color red

            }
        });

        // Send AJAX request to Laravel
        // $.ajax({
        //     url: '/rate', // Laravel route for inserting the rating
        //     type: 'POST',
        //     data: {
        //         _token: '{{ csrf_token() }}', // Add CSRF token for security
        //         rating: rating
        //     },
        //     success: function(response) {
        //         alert('Rating submitted successfully');
        //     },
        //     error: function(xhr, status, error) {
        //         console.error(xhr.responseText);
        //     }
        // });
    });
});


function copyLink() {
    var currentUrl = window.location.href; // Get the current URL

    navigator.clipboard.writeText(currentUrl).then(function() {
        toastr.success('Link copied!');

        // alert('Link copied to clipboard!');
    }).catch(function(err) {
        console.error('Error copying text: ', err);
    });
}
</script>



<script>
$(document).ready(function() {



    $('.btn-edit').on('click', function() {
        // alert('test')

        let dataName = $(this).data('name'); // Retrieves the value of data-id
        let dataType = $(this).data('type'); // Retrieves the value of data-id
        let dataId = $(this).data('id'); // Retrieves the value of data-id
        let dataAction = $(this).data('action'); // Retrieves the value of data-action

        // alert($(this).data('product-category'));

        $('#edit-product-popup .product-category').val($(this).data('product-category'));

        $('#edit-product-popup  #name').val($(this).data('name'));
        $('#edit-product-popup  #price').val($(this).data('price'));
        $('#edit-product-popup  #items').val($(this).data('items'));
        $('#edit-product-popup  #unit').val($(this).data('unit'));
        $('#edit-product-popup  #id').val($(this).data('id'));

        $('#edit-product-popup .description').html($(this).data('description'));

        $('#edit-product-popup .edit-form').attr('action', dataAction);
        $('#edit-product-popup .delete-title').text('Delete ' + dataType);
        $('#edit-product-popup .data-name').text(dataType + ': ' + dataName);
    });




    $('.btn-delete').on('click', function() {
        // alert('test')

        let dataName = $(this).data('name'); // Retrieves the value of data-id
        let dataType = $(this).data('type'); // Retrieves the value of data-id
        let dataId = $(this).data('id'); // Retrieves the value of data-id
        let dataAction = $(this).data('action'); // Retrieves the value of data-action

        // alert($(this).data('product-category'));

        $('#confirm-delete-popup .product-category').val($(this).data('product-category'));

        $('#confirm-delete-popup  #name').val($(this).data('name'));
        $('#confirm-delete-popup  #price').val($(this).data('price'));
        $('#confirm-delete-popup  #items').val($(this).data('items'));
        $('#confirm-delete-popup  #unit').val($(this).data('unit'));
        $('#confirm-delete-popup  #id').val($(this).data('id'));

        $('#confirm-delete-popup .description').html($(this).data('description'));

        $('#confirm-delete-popup .delete-form').attr('action', dataAction);
        $('#confirm-delete-popup .delete-title').text('Delete ' + dataType);
        $('#confirm-delete-popup .data-name').text(dataType + ': ' + dataName);
    });


});
</script>

<!-- Share Page -->
<script>
function shareData(data) {
    if (navigator.share) {
        navigator.share(data)
            .then(() => console.log('Data shared successfully'))
            .catch((error) => console.error('Error sharing:', error));
    } else {
        
        alert(data);

        console.log('Browser does not support navigator.share');
        UIkit.modal('#share-popup').show(); // Fallback modal for unsupported browsers
        
    }
}

// Adding event listeners to buttons with the 'shareBtn' class
document.querySelectorAll('.shareBtn').forEach(function(button) {

    button.addEventListener('click', function() {
        // alert('test');
        
        
        const dataUrl = this.getAttribute('data-url');

        var message = window.location.href + "\n\nCheck out this product on Barodaplus! Discover more details and shop now:\n\n";


        const data = {
            title: 'My Awesome Website',
            url: dataUrl  // Current page URL
            // url: window.location.href+'nCheck out this product on Barodaplus! Discover more details and shop now:\n{$url}' // Current page URL
        };

        // Call shareData function
        shareData(data);
    });
});
</script>


<script>
function shareData(data = null) {
    
    
    if (navigator.share) {
        navigator.share(data)
            .then(() => console.log('Data shared successfully'))
            .catch((error) => console.error('Error sharing:', error));
    } else {
        console.log('Browser does not support navigator.share');
        UIkit.modal('#share-popup').show();

        alert(data.url);
        $('.whatsapp-link').attr('href', 'https://api.whatsapp.com/send?text=' + data.url);

        alert(data.url);
    }
}

// Adding event listener to the button
// document.getElementById('shareBtn').addEventListener('click', function() {
//     const data = {
//         title: 'My Awesome Website',
//         text: 'Check out this awesome website!',
//         url: window.location.href // Current page URL
//     };
//     alert('test');

//     // Call shareData function
//     shareData(data);
// });

</script>


<script>
document.getElementById('edit-editor').addEventListener('input', function() {
    const editorContent = document.getElementById('edit-editor').innerHTML;
    document.getElementById('editTextArea').value = editorContent;
    console.log(editorContent);
});
</script>

<script>
document.getElementById('add-editor').addEventListener('input', function() {
    const editorContent = document.getElementById('add-editor').innerHTML;
    document.getElementById('addTextArea').value = editorContent;
    console.log(editorContent);
});
</script>