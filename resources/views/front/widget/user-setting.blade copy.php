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

@if ($errors->any())
<div class="custom-alert">
    <ul class="custom-list">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif


    <!-- main contents -->

<main id="site__main" class="p-2.5 h-[calc(100vh-var(--m-top))] mt-[--m-top]">

    <div class="max-w-3xl mx-auto lg:mt-20">

        <div class="box relative rounded-lg shadow-md">

            <form method="post" enctype="multipart/form-data"
             action="{{route('updateProfilePic')}}" class="flex md:gap-8 gap-4 items-center md:p-8 p-6 md:pb-4">
            @csrf

            

                <div class="relative md:w-20 md:h-20 w-12 h-12 shrink-0"> 
                    <label for="file" class="cursor-pointer">
                       
                        @if(getUserData()['image'])
                        
                        <img id="img"
                            class="object-cover w-full h-full rounded-full"
                            src="https://imagedelivery.net/zfs38w7w3E1dJVvB3mVs9g/{{getUserData()['image']}}/xs"
                                    alt="{{getUserData()['name']}}" />
                        @else
                        <img id="img" src="{{asset('front')}}/images/avatars/avatar-3.jpg"
                                    alt="Profile Picture" />
                        @endif
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="md:w-4 md:h-4 w-3 h-3 fill-white">
                            <path d="M12 9a3.75 3.75 0 100 7.5A3.75 3.75 0 0012 9z"></path>
                            <path fill-rule="evenodd" d="M9.344 3.071a49.52 49.52 0 015.312 0c.967.052 1.83.585 2.332 1.39l.821 1.317c.24.383.645.643 1.11.71.386.054.77.113 1.152.177 1.432.239 2.429 1.493 2.429 2.909V18a3 3 0 01-3 3h-15a3 3 0 01-3-3V9.574c0-1.416.997-2.67 2.429-2.909.382-.064.766-.123 1.151-.178a1.56 1.56 0 001.11-.71l.822-1.315a2.942 2.942 0 012.332-1.39zM6.75 12.75a5.25 5.25 0 1110.5 0 5.25 5.25 0 01-10.5 0zm12-1.5a.75.75 0 100-1.5.75.75 0 000 1.5z" clip-rule="evenodd"></path>
                        </svg>
                        
                        <input type="file" id="file" name='image'
                         accept=".png, .webp, .jpg, .jpeg" />
                    </label>
                </div>

                <div class="flex-1">
                    
                </div>

                <button type="submit" class="inline-flex items-center gap-1 py-1 pl-2.5 pr-3 rounded-full bg-slate-50 border-2 border-slate-100 dark:text-white dark:bg-slate-700" type="button" aria-haspopup="true" aria-expanded="false"> 
                    
                <ion-icon onClick=disableButton(event) id="btnUpload" name="flash-outline" class="text-base duration-500 group-aria-expanded:rotate-180 md hydrated" role="img" aria-label="chevron down outline"></ion-icon> 
                    <span class="font-medium text-sm" > Save Profile  </span> 
                </button>
                
                </form>

            <!-- nav tabs -->
            <div class="relative border-b" tabindex="-1" uk-slider="finite: true">

                <nav class="uk-slider-container overflow-hidden nav__underline px-6 p-0 border-transparent -mb-px">

                    <ul class="uk-slider-items w-[calc(100%+10px)] !overflow-hidden" 
                        uk-switcher="connect: #setting_tab ; animation: uk-animation-slide-right-medium, uk-animation-slide-left-medium"> 
                        
                        <li class="w-auto pr-2.5"> <a href="#"> Profile </a> </li>
                        <li class="w-auto pr-2.5"> <a href="#"> social Links</a> </li>
                        
                    </ul>
                
                </nav>
                        
                <a class="absolute -translate-y-1/2 top-1/2 left-0 flex items-center w-20 h-full p-2 py-1 justify-start bg-gradient-to-r from-white via-white dark:from-slate-800 dark:via-slate-800" href="#" uk-slider-item="previous"> <ion-icon name="chevron-back" class="text-2xl ml-1"></ion-icon> </a>
                <a class="absolute right-0 -translate-y-1/2 top-1/2 flex items-center w-20 h-full p-2 py-1 justify-end bg-gradient-to-l from-white via-white dark:from-slate-800 dark:via-slate-800" href="#" uk-slider-item="next">  <ion-icon name="chevron-forward" class="text-2xl mr-1"></ion-icon> </a>
        
              
            </div>


            <div id="setting_tab" class="uk-switcher md:py-12 md:px-20 p-6 overflow-hidden text-black text-sm"> 
                

                <!-- tab user basic info -->
                <div>

                    <div>
                     @php
                        $userId = getUserData()['id'];
                        @endphp
                     <form class="needs-validation data-form dark:text-white" action="{{ route('users.update', $userId) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="space-y-6">

                        <div class="md:flex items-center gap-10">
                                <label class="md:w-32"> First Name </label>
                                <div class="flex-1 max-md:mt-4">
                                    <input type="text" name="first_name" placeholder="Your First Name" class="w-full"
                                    value="{{ old('first_name') ?: getUserData()['first_name'] }}" >
                                </div>
                            </div>

                            <div class="md:flex items-center gap-10">
                                <label class="md:w-32"> Last Name </label>
                                <div class="flex-1 max-md:mt-4">
                                    <input type="text" name="last_name" placeholder="Your Last Name" class="w-full" 
                                    value="{{ old('last_name') ?: getUserData()['last_name'] }}">
                                </div>
                            </div>
                        
                        <div class="md:flex items-center gap-10">
                            <label class="md:w-32"> Email </label>
                            <div class="flex-1 max-md:mt-4">
                                <input type="email" name="email" placeholder="Your email id" class="w-full"
                                    value="{{ old('email') ?: getUserData()['email'] }}"
                                >
                            </div>
                        </div> 

                        
                        <div class="md:flex items-center gap-10">
                                <label class="md:w-32"> Phone </label>
                                <div class="flex-1 max-md:mt-4">
                                    <input type="text" placeholder="Your phone id" class="w-full not-allowed" disabled
                                        value="{{ old('phone') ?: getUserData()['phone'] }}"
                                    >
                                </div>
                            </div> 

                            <div class="md:flex items-start gap-10">
                                <label class="md:w-32"> Bio </label>
                                <div class="flex-1 max-md:mt-4">
                                    <textarea class="w-full" name="bio" rows="5" value="{{old('bio')}}" 
                                    placeholder="Inter your Bio">{{ old('bio') ?: getUserData()['bio'] }}</textarea>
                                    
                                </div>
                            </div> 

                            <div class="md:flex items-center gap-10">
                                <label class="md:w-32"> Gender </label>
                                <div class="flex-1 max-md:mt-4">
                                    <select class="!border-0 !rounded-md lg:w-1/2 w-full" name="gender" value="{{old('gender')}}">
                                    <option value="male" @if(old('gender', getUserData()['gender']) == 'male') selected @endif>Male</option>
                                    <option value="female" @if(old('gender', getUserData()['gender']) == 'female') selected @endif>Female</option>

                                    </select>
                                </div>
                            </div>
                            
                            <div class="md:flex items-center gap-10">
                                <label class="md:w-32"> Relationship </label>
                                <div class="flex-1 max-md:mt-4">
                                    <select class="!border-0 !rounded-md lg:w-1/2 w-full" name="relationship" value="{{old('relationship')}}">
                                        <option value="none" @if(old('relationship', getUserData()['relationship']) == null) selected @endif>None</option>
                                        <option value="single" @if(old('relationship', getUserData()['relationship']) == 'single') selected @endif>Single</option>
                                        <option value="relationship" @if(old('relationship', getUserData()['relationship']) == 'relationship') selected @endif>In a relationship</option>
                                        <option value="married"  @if(old('relationship', getUserData()['relationship']) == 'married') selected @endif>Married</option>
                                        <option value="engaged"  @if(old('relationship', getUserData()['relationship']) == 'engaged') selected @endif>Engaged</option>
                                    </select>
                                </div>
                            </div>
                            

                        </div>

                        <div class="flex items-center gap-4 mt-16 lg:pl-[10.5rem]">
                            <button type="submit" class="button lg:px-10 bg-primary text-white max-md:flex-1"> Save User Profile <span class="ripple-overlay"></span></button>
                        </div>
                    </form>
                    
                    </div> 

                    @if ($errors->any())
                        <div class="custom-alert mt-4">
                            <ul class="custom-list">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>

                <!-- tab socialinks -->   
                <div>

                    <div class="max-w-md mx-auto">

                        <div class="font-normal text-gray-400">
                        
                            <div>
                                <h4 class="text-xl font-medium text-black dark:text-white"> Social Links </h4>
                                <p class="mt-3 font-normal text-gray-600 dark:text-white">Save your private social media accounts.</p>
                            </div>
                          
                            
                            <form class="needs-validation data-form"
                                    action="{{ isset($social_links) ? route('social_links.update', $social_links->id) : route('social_links.update', 'null') }}" 
                                    method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('put')

                                <div class="space-y-6 mt-8">

                                    <div class="flex items-center gap-3">
                                        <div class="bg-blue-50 rounded-full p-2 flex ">
                                            <ion-icon name="logo-facebook" class="text-2xl text-blue-600"></ion-icon> 
                                        </div>
                                        <div class="flex-1">
                                            <input type="text" name="facebook" class="w-full" value="{{ $social_links->facebook ?? ''}}" placeholder="http://www.facebook.com/myname">
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <div class="bg-pink-50 rounded-full p-2 flex ">
                                            <ion-icon name="logo-instagram" class="text-2xl text-pink-600"></ion-icon> 
                                        </div>
                                        <div class="flex-1">
                                            <input type="text" name="instagram" class="w-full"  value="{{ $social_links->instagram ?? '' }}" placeholder="http://www.instagram.com/myname">
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <div class="bg-sky-50 rounded-full p-2 flex ">
                                            <ion-icon name="logo-twitter" class="text-2xl text-sky-600"></ion-icon> 
                                        </div>
                                        <div class="flex-1">
                                            <input type="text" name="twitter" class="w-full"  value="{{ $social_links->twitter ?? ''}}" placeholder="http://www.twitter.com/myname">
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <div class="bg-red-50 rounded-full p-2 flex ">
                                            <ion-icon name="logo-youtube" class="text-2xl text-red-600"></ion-icon> 
                                        </div>
                                        <div class="flex-1">
                                            <input type="text" name="youtube" class="w-full"  value="{{ $social_links->youtube ?? '' }}" placeholder="http://www.youtube.com/myname">
                                        </div>
                                    </div>
                                </div>                         
                        </div> 
                        
                            <div class="flex items-center justify-center gap-4 mt-16">
                                <button type="submit" class="button lg:px-10 bg-primary text-white max-md:flex-1"> Save Social Links</button>
                            </div>

                        </form>

                    </div>

                    

                </div>
      


            </div>
            
        
        </div>

        
    </div>

</main>

</div>
