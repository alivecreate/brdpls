
<div class="p-3 uk-slider-container mt-6 nav-mobile-menu lg:hidden">
            
        <ul class="w-[calc(100%+10px)] capitalize text-sm font-medium" >

        
        @if(isGroupExists()  && !isHomeCompetitionExists())
        <a href="{{route('ganeshCompetitionPaymentCreate', ['type' => 'group'])}}" 
            class="mb-2 flex-inline p-3 px-4 rounded-lg bg-teal-100/60 text-teal-600 font-semibold dark:text-white dark:bg-dark4">
                                    <ion-icon name="people" class="text-2xl drop-shadow-md md hydrated mr-2" role="img"
                                    aria-label="book"></ion-icon> ગણેશ સ્પર્ધા રજિસ્ટ્રેશન</a>
        @else
        <a href="{{route('ganeshFestivalCompetition.create')}}" 
            class="mb-2 flex-inline p-3 px-4 rounded-lg bg-teal-100/60 text-teal-600 font-semibold dark:text-white dark:bg-dark4"> 
                                    <ion-icon name="people" class="text-2xl drop-shadow-md md hydrated mr-2" role="img"
                                    aria-label="book"></ion-icon> ગણેશ મંડળનું રજીસ્ટ્રેશન</a>
       
        @endif
        
        
        @if(!isGroupExists() && !isHomeCompetitionExists())
                        
            <a href="{{route('ganeshFestivalCompetition.create')}}" 
            class="mb-2 flex-inline p-3 px-4 rounded-lg bg-purple-100/60 text-purple-600 font-semibold dark:text-white dark:bg-dark4">
            <ion-icon name="trophy" class="text-2xl drop-shadow-md md hydrated mr-2" role="img"
                                    aria-label="trophy"></ion-icon> ગણેશ સ્પર્ધા રજિસ્ટ્રેશન</a>
        @endif

        <a href="{{route('GaneshFestivalCompetitionRules')}}" 
            class="mb-2 flex-inline p-3 px-4 rounded-lg bg-purple-100/60 text-purple-600 font-semibold dark:text-white dark:bg-dark4">
            <ion-icon name="newspaper-outline" class="text-2xl drop-shadow-md md hydrated mr-2"
                                    role="img" aria-label="videocam"></ion-icon> સ્પર્ધાના નિયમો</a>
          </ul>

        
</div>
        