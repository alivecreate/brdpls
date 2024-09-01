@extends('front.layout.ganesh-festival-layout')

@section('content')

@section('custom-script')
  @if (session('error'))
  
      <script>
          toastr.error('{{ session('error') }}');
        </script>
  @endif

  @if (session('success'))
      <script>
          toastr.success('{{ session('success') }}');
        </script>
  @endif

@endsection


<!-- main contents -->
 
<main id="site__main" class="2xl:ml-[--w-side]  xl:ml-[--w-side-sm] 2xl:ml-[--w-side]  xl:ml-[--w-side-sm] h-[calc(100vh-var(--m-top))] mt-[--m-top] p-6">
<div class="2xl:max-w-[1220px] max-w-[1065px] mx-auto lg:mt-2 mt-6">
    
@include('front.ext.nav-mobile-menu')
        <div class="px-6">

            <div class="w-1/2">
                <div class="w-full bg-gray-200 rounded-full h-1 dark:bg-gray-700">
                    <div class="bg-blue-600 h-1 rounded-full" style="width: 10%"></div>
                </div>


                <p class='heading-h1 font-semibold text-black font-semibold text-black mb-0'>ગણેશ સ્પર્ધા રજિસ્ટ્રેશન
                </p>
                <p class="mb-3 subheading-h2">Ganesh Competiton Registration</p>
                <div class="space-y-5">
                    <div class="flex-1 max-md:mt-4">
                        <select class="!rounded-md w-full text-capitalize" id="competitionType">
                            <option value="">Select Competition Category</option>
                            @if($group)
                                <option value="1-2">શ્રેષ્ઠ મૂર્તિ / શ્રેષ્ઠ ડેકોરેશન</option>
                            @else
                                <option value="0">ગણેશ મંડળનું રજિસ્ટ્રેશન</option>
                            <option value="2">ઘરની બેસ્ટ મૂર્તિ</option>
                            @endif
                        </select>
                    </div>
                    
  @if (session('error'))
    <p class="text-danger">{{session('error')}}</p>
  @endif


                    <div id="type1-2Form" class="competition-form" style="display: none;">
                    
                    @if($group)
                        <div class="flex md:items-center space-x-4 p-4 rounded-md box">
                            <div class="sm:w-20 w-14 sm:h-20 h-14 flex-shrink-0 rounded-lg relative">
                                @if(optional($group)->cover)
                                    <img src="https://imagedelivery.net/zfs38w7w3E1dJVvB3mVs9g/{{$group->cover}}/sm" alt="{{$group->name}}"
                                    class="absolute w-full h-full inset-0 rounded-md object-cover shadow-sm"
                                    >
                                @else 
                                    <img src="{{asset('front/images/product/product-1.jpg')}}" alt="{{$group->name}}"
                                    class="absolute w-full h-full inset-0 rounded-md object-cover shadow-sm">
                                @endif

                            </div>
                            <div class="flex-1">
                                <a
                                    class="md:text-lg text-base font-semibold capitalize text-black dark:text-white">{{$group->name}}</a>

                                <div class="flex space-x-2 items-center text-sm font-normal flex-icon">
                                    <div>
                                        <ion-icon class='text-xl' name="location-outline"></ion-icon>
                                        {{$group->address}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                           
                    <form action="{{route('ganeshFestivalCompetition.store')}}" method="post">
                        @csrf
                        <input type="hidden" name="group_id" value="{{$group->id}}"/>
                        <input type="hidden" name="participant_type" value="1-2"/>
                        <div class="flex w-full items-center gap-4 mt-6">
                            <button type="submit" class="btn-md button lg:px-10 bg-primary text-white text-24 w-full"> Save
                                &amp;22 Continue <span class="ripple-overlay"></span></button>
                        </div>
                    </form>

                    @endif
                    </div>

                    <!-- Div for "2" Option -->
                    <div id="type2Form" class="competition-form" style="display: none;">
                        <h1>Home Ganesh Competition</h1>

                        
                <div class="flex w-full items-center gap-4 mt-6">
                    <button type="submit" class="btn-md button lg:px-10 bg-primary text-white text-24 w-full"> Save
                        &amp; Continue <span class="ripple-overlay"></span></button>
                </div>
                    </div>

                    <script>
                    document.getElementById('competitionType').addEventListener('change', function() {
                        var selectedValue = this.value;

                        // Hide all forms initially
                        document.querySelectorAll('.competition-form').forEach(function(form) {
                            form.style.display = 'none';
                        });

                        // Show the form based on the selected value
                        if (selectedValue === '0') {
                            window.location.href = "{{route('ganeshFestivalGroup.create')}}";
                        }
                        if (selectedValue === '1-2') {
                            document.getElementById('type1-2Form').style.display = 'block';
                        } else if (selectedValue === '2') {
                            document.getElementById('type2Form').style.display = 'block';
                        }
                    });
                    </script>

                </div>

            </div>
        </div>


    </div>
    </div>
</main>
</div>



@include('front.widget.product-modal-block')


@endsection