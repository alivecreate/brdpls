@extends('front.layout.blank-layout')

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
  
  <div class="sm:flex login-page-wrapper">
      
      <div class="relative lg:w-[580px] md:w-96 w-full p-10 min-h-screen bg-white shadow-xl flex items-center pt-10 dark:bg-slate-900 z-10">
  
        <div class="w-full lg:max-w-sm mx-auto space-y-10 m-responsive" uk-scrollspy="target: > *; cls: uk-animation-scale-up; delay: 100 ;repeat: true">
  
          <div>
            
                            
          <p class="text-md font-semibold mt-6 mb-4">ગણેશ સ્પર્ધામાં ભાગ લેવા અને વોટિંગ કરવા અકાઉંટ બનાવવું ફરજિયાત છે.</p>
          <h2 class="text-2xl font-semibold mb-1.5"> Sign up to get started </h2>
            <p class="text-sm text-gray-700 font-normal">If you already have an account, <a href="{{route('login')}}" class="text-blue-700">Login here!</a></p>
          </div>
   
  
          @if ($errors->any())
          <div class="custom-alert">
              <ul class="custom-list">
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
          @endif
      
          <!-- form -->
            <form class="needs-validation data-form" action="{{route('users.store')}}" method="POST" enctype="multipart/form-data">
              @csrf
              
            <div class="grid grid-cols-2 gap-4 gap-y-7">
                   
    <div class="col-span-2">
                  <label for="email" class=""><span class='text-danger'>*</span>First name</label>
                  <div class="mt-2.5">
                      <input id="text" name="first_name" type="text"  autofocus=""
                        value="{{old('first_name')}}"
                       placeholder="First name" required="" class="!w-full !rounded-lg !bg-transparent !shadow-sm !border-slate-200 dark:!border-slate-800 dark:!bg-white/5"> 
                  </div>
              </div>
              
              <div class="col-span-2">
                  <label for="email" class=""><span class='text-danger'>*</span>Last name</label>
                  <div class="mt-2.5">
                      <input id="text" name="last_name" type="text"
                        value="{{old('last_name')}}"
                       placeholder="Last name" required="" class="!w-full !rounded-lg !bg-transparent !shadow-sm !border-slate-200 dark:!border-slate-800 dark:!bg-white/5"> 
                  </div>
              </div>

              <div>
                  <label for="email" class=""><span class='text-danger'>*</span>Gender</label>
                  <div class="mt-2.5 flex">
                    <input required class="ml-2 mr-2" type="radio" name="gender" value="male">Male
                    <input required class="ml-2 mr-2" type="radio" name="gender" value="female">Female
                    <input required class="ml-2 mr-2" type="radio" name="gender" value="other">Other
                  </div>
              </div>

            
    <div class="col-span-2">
    <label for="phone" class=""><span class='text-danger'>*</span>Phone Number</label>
    <div class="mt-2.5 flex items-center">
        <span class="px-3 py-2 mr-1 border border-slate-200 dark:border-slate-800 bg-slate-100 dark:bg-white/5 rounded-l-lg text-slate-600 dark:text-slate-300">
            +91
        </span>
        <input required id="phone" name="phone" type="text"
        style="
          border-bottom-left-radius: 0px;
          border-top-left-radius: 0px;
      "
        placeholder="your mobile number" class="w-full !rounded-l-none !rounded-r-lg !bg-transparent !shadow-sm !border-slate-200 dark:!border-slate-800 dark:!bg-white/5">
    </div>
    <p id="error-message" class="text-red-500 mt-1 text-sm"></p> <!-- Error message container -->
</div>

  
              <!-- password -->
              <div class="col-span-2">
                <label for="email" class=""><span class='text-danger'>*</span>Password</label>
                <div class="mt-2.5">
                    <input id="password" name="password" type="password" placeholder="******"  class="w-full !rounded-lg !bg-transparent !shadow-sm !border-slate-200 dark:!border-slate-800 dark:!bg-white/5">  
                </div>
              </div>
  

<script>
document.getElementById('phone').addEventListener('input', function() {
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


  
              <div class="col-span-2">
                <button type="submit" class="button bg-primary text-white w-full">Get Started</button>
              </div>
  
            </div>
            
          </form>
  
  
        </div>
  
      </div>
  
      <div class="flex-1 relative max-md:hidden"  style="background: #6e0e1a;">
  
  
        <div class="relative w-full h-full" tabindex="-1" uk-slideshow="animation: slide; autoplay: true">
      
          <ul class="uk-slideshow-items w-full h-full">
              <li class="w-full">
                  <img src="{{asset('front')}}/images/web/login-image.webp"  alt="" class="w-full h-full uk-transform-origin-center-left"
                  style="object-fit: contain;">
                  
                  <div class="w-full h-96 absolute bottom-0 left-0"></div>
              </li>
          </ul>
   

          <div class="flex justify-center">
              <ul class="inline-flex flex-wrap justify-center  absolute bottom-8 gap-1.5 uk-dotnav uk-slideshow-nav"> </ul>
          </div>
        
          
      </div>
    
  
      </div>
    
    </div>
    
     
      <!-- Uikit js you can use cdn  https://getuikit.com/docs/installation  or fine the latest  https://getuikit.com/docs/installation -->
      <script src="assets/js/uikit.min.js"></script>
      <script src="assets/js/script.js"></script>
  
      <!-- Ion icon -->
      <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  
        <!-- Dark mode -->
        <script>
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
      </script>
  
  
  
@endsection



