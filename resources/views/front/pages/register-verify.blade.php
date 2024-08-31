@extends('front.layout.blank-layout')

@section('meta-content')


@endsection


@section('content')

<style>
.custom-alert {
    background-color: #f8d7da;
    color: #721c24;
    border: 1px solid #f5c6cb;
    padding: 10px;
    margin-bottom: 15px;
    border-radius: 4px;
}

.custom-alert .custom-list {
    list-style-type: disc;
    margin-left: 20px;
}
</style>

<div class="sm:flex">

    <div
        class="relative lg:w-[580px] md:w-96 w-full p-10 min-h-screen bg-white shadow-xl flex items-center pt-10 dark:bg-slate-900 z-10">

        <div class="w-full lg:max-w-sm mx-auto space-y-10"
            uk-scrollspy="target: > *; cls: uk-animation-scale-up; delay: 100 ;repeat: true">

            <div id="logo">
                    <a href="{{route('index')}}">
                        <img src="{{asset('front/images/web')}}/barodaplus-logo.png" alt=""
                            class="main-logo md:block hidden dark:!hidden">
                        <img src="{{asset('front/images/web')}}/barodaplus-logo.png" alt=""
                            class="main-logo dark:md:block hidden">
                        <img src="{{asset('front/images/web')}}/barodaplus-logo.png"
                            class="main-logo hidden max-md:block w-20 dark:!hidden" alt="">
                        <img src="{{asset('front/images/web')}}/barodaplus-logo.png"
                            class="main-logo hidden dark:max-md:block w-20" alt="">
                    </a>
                </div>

            <!-- title -->
            <div>
                <h2 class="text-2xl font-semibold mb-1.5"> Verify Your Account </h2>
            </div>


                <div class="grid grid-cols-2 gap-4 gap-y-7">
                    <div class="col-span-2">
                        <p>OTP has been successfully sent to your phone number {{maskPhoneNumber($user->phone)}}</p>
                    </div>


                    <div class="col-span-2">
                        <form action="{{route('checkUserVerification')}}" method='post' id="checkUserVerification">
                        @csrf
                            <div class="mt-2.5 relative">
                                <input id="otp" name="otp" type="text" placeholder="OTP"
                                    class="w-full !rounded-lg !bg-transparent !shadow-sm !border-slate-200 dark:!border-slate-800 dark:!bg-white/5">
                            <input name="cid" type="hidden" value='{{$user->cid}}' />
                              </div>


                            @if (session('error'))
                              <p class="text-danger">{{session('error')}}</p>
                            @endif

                            <div class="mt-2 flex-space-between">
                                <button type="button" id="resendOtp" class="text-blue-500 hover:underline">Resend
                                    OTP</button>
                            </div>
                            
                    <div class="col-span-2 mt-5">
                        <button type="submit" class="button text-sm bg-primary text-white w-full">Verify
                            Account</button>
                    </div>

                        </form>
                    </div>



                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                    <script>
                    $(document).ready(function() {
                        $('#resendOtp').click(function(event) {
                            // alert('resendOtp');
                            // event.preventDefault(); // Prevent the default form submission

                            var $this = $(this);
                            $this.prop('disabled', true); // Disable the button

                            // Perform the AJAX request
                            $.ajax({
                                url: '/api/resend-otp', // Replace with your API endpoint
                                type: 'POST',
                                data: JSON.stringify({
                                    phone: "{{ $user->phone }}", // Ensure the phone number is treated as a string
                                    cid: "{{ $user->cid }}"
                                    // Replace with the actual phone number or dynamic data
                                }),
                                contentType: 'application/json; charset=utf-8',
                                dataType: 'json',
                                success: function(response) {
                                    toastr.success('OTP has been sent!');

                                    let countdown = 60;
                                    let interval = setInterval(function() {
                                        countdown--;
                                        $this.text(`Resend OTP (${countdown}s)`);
                                        if (countdown <= 0) {
                                            clearInterval(interval);
                                            // $this.prop('disabled', false).text('Resend OTP');
                                        }
                                    }, 1000);

                                },
                                error: function(xhr, status, error) {
                                    // Handle error
                                    toastr.warning(
                                        'Somthing Went Wrong, Please Check Mobile No & try again.'
                                        );

                                    // console.log('Error in resending OTP: ' + JSON.stringify(error));
                                }
                            });
                        });
                    });
                    </script>





                </div>
        </div>
    </div>

    
    <div class="flex-1 relative bg-primary max-md:hidden">
        <div class="relative w-full h-full" tabindex="-1" uk-slideshow="animation: slide; autoplay: true">
          <ul class="uk-slideshow-items w-full h-full">
              <li class="w-full">
                  <img src="{{asset('front')}}/images/web/login-image.webp"  alt="" class="w-full h-full object-cover  uk-transform-origin-center-left">
                  
                  <div class="w-full h-96 absolute bottom-0 left-0"></div>
              </li>
          </ul>
   
          <div class="flex justify-center">
              <ul class="inline-flex flex-wrap justify-center  absolute bottom-8 gap-1.5 uk-dotnav uk-slideshow-nav"> </ul>
          </div>
        
      </div>

</div>


<!-- Uikit js you can use cdn  https://getuikit.com/docs/installation  or fine the latest  https://getuikit.com/docs/installation -->
<script src="assets/js/uikit.min.js"></script>
<script src="assets/js/script.js"></script>

<!-- Ion icon -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>



@endsection