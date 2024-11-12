
        
            <div class="relative border-b" tabindex="-1" uk-slider="finite: true">
                <nav class="uk-slider-container overflow-hidden nav__underline px-6 p-0 border-transparent -mb-px">
                    <ul class="uk-slider-items w-[calc(100%+10px)] !overflow-hidden">
                        <li class="w-auto pr-2.5 my-b-logo"> <a href="{{route('myBusiness.show', $myBusiness->slug)}}"> Logo & Photos</a> </li>
                        <li class="w-auto pr-2.5 my-b-profile"> <a class='' href="{{route('myBusiness.profile', $myBusiness->slug)}}"> Profile </a> </li>
                        <li class="w-auto pr-2.5 my-b-social"> <a href="{{route('myBusiness.social', $myBusiness->slug)}}"> Social Links</a> </li>
                        <li class="w-auto pr-2.5 my-b-category"> <a href="{{route('myBusiness.category', $myBusiness->slug)}}"> Category</a> </li>
                        <li class="w-auto pr-2.5 my-b-contact"> <a href="{{route('myBusiness.contact', $myBusiness->slug)}}"> Contact Detail</a> </li>
                        <li class="w-auto pr-2.5 my-b-product"> <a href="{{route('myBusiness.product', $myBusiness->slug)}}"> Products</a> </li>
                    </ul>
                </nav>

                <a class="absolute -translate-y-1/2 top-1/2 left-0 flex items-center w-20 h-full p-2 py-1 justify-start bg-gradient-to-r from-white via-white dark:from-slate-800 dark:via-slate-800"
                    href="#" uk-slider-item="previous">
                    <ion-icon name="chevron-back" class="text-2xl ml-1"></ion-icon>
                </a>
                <a class="absolute right-0 -translate-y-1/2 top-1/2 flex items-center w-20 h-full p-2 py-1 justify-end bg-gradient-to-l from-white via-white dark:from-slate-800 dark:via-slate-800"
                    href="#" uk-slider-item="next">
                    <ion-icon name="chevron-forward" class="text-2xl mr-1"></ion-icon>
                </a>

            </div>