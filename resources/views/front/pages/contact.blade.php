@extends('front.layout.ganesh-festival-layout')

@section('content')

<main id="site__main" class="2xl:ml-[--w-side]  xl:ml-[--w-side-sm] py-10 2xl:ml-[--w-side]  xl:ml-[--w-side-sm] py-10 p-2.5 h-[calc(100vh-var(--m-top))] mt-[--m-top]">

            
<div class="2xl:max-w-[1220px] max-w-[1065px] mx-auto mt-10">

    <div class="page-heading">
         <h1 class="page-title mb-2 text-underline">Contact Us</h1>
        
        <p>If you have any questions or need assistance, please feel free to reach out to us using the contact information below or by filling out the contact form.</p>
        
        <p class="mt-4 font-semibold">Phone:</p>
        <p class="subheading-h2 mt-0"><a href="tel:919137634193">9137634193</a></p>

        <p class="mt-4 font-semibold">Email:</p>
        <p class="subheading-h2 mt-0"><a href="mailto:info@barodaplus.com">info@barodaplus.com</a></p>
        <p class="subheading-h2 mt-0"><a href="mailto:support@barodaplus.com">support@barodaplus.com</a></p>

        
        <p class="mt-4 font-semibold">Address:</p>
        <p class="mt-0">24-Arom complex, Soma Talav Char Rasta, Vadodara - 390025</p>

        

        <form method="POST" action="{{route('checkAuth')}}"
                class="mt-6 contact-form  text-sm text-black font-medium dark:text-white lg:w-1/2 w-full px-4" 
                uk-scrollspy="target: > *; cls: uk-animation-scale-up; delay: 100 ;repeat: true"
                enctype="multipart/form-data">
                @csrf
                <div>
                    
                <h2 class="subheading-h2 text-lg mb-4 ">Contact Us</h2>

                <label for="email" class="mt-6">Full Name</label>
                    <div class="mt-2.5">
                        <input id="name" name="name" type="text" placeholder="Full Name" value="{{old('name')}}"
                            required
                            class="mb-4 w-full rounded-lg bg-white shadow-sm border border-slate-200 dark:border-slate-800 dark:bg-white/5 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>

                    <label for="phone" class="mt-6">Phone Number</label>
                    <div class="mt-2.5">
                        <input id="phone" name="phone" type="tel" placeholder="Phone No." value="{{old('phone')}}"
                            required
                            class="mb-4 w-full rounded-lg bg-white shadow-sm border border-slate-200 dark:border-slate-800 dark:bg-white/5 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>

                    <label for="message" class="mt-6">Message</label>
                    <div class="mt-2.5">
                        <textarea id="message" name="message" type="tel" placeholder="Write Message." value="{{old('message')}}"
                            required
                            class="mb-4 w-full rounded-lg bg-white shadow-sm border border-slate-200 dark:border-slate-800 dark:bg-white/5 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"></textarea>
                    </div>

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
                <div>
                    <button type="submit" class="mt-6 button bg-primary text-lg text-white w-full">Send Inquiry</button>
                </div>

            </form>

        
        <div class="footer mt-6">
            <p>&copy; 2024 BarodaPlus. All rights reserved.</p>
        </div>

    </div>
    </div>
</main>


@endsection
