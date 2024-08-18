   <!-- create product modal -->
   <div class="hidden lg:p-20 max-lg:!items-start" id="create_product" uk-modal="">
        
        <div class="uk-modal-dialog tt relative mx-auto bg-white shadow-xl rounded-lg max-lg:w-full dark:bg-dark2">

            <!-- header card -->
            <div class="border-b px-3 py-3 text-center relative dark:border-slate-700/60">

                <h4 class="text-sm text-black dark:text-white"> Create new post</h4>
 
                <!-- close button -->
                <button type="button" class="button__ico absolute top-0 right-0 m-2.5 uk-modal-close">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>

            </div>
          
            <div class="lg:w-[600px] w-full">  

                <div class="relative" tabindex="-1" uk-slideshow="finite: true;animation: Fade;  min-height: 460;animation:fade">

                    <ul class="uk-slideshow-items"> 
                        
                        <!-- Intro -->
                        <li class="w-full">
                            
                            <div  class="flex justify-center items-center flex-col gap-4 h-full" uk-scrollspy="target: > div; cls: uk-animation-scale-up; delay: 300;repeat:true">
                                
                                <div>
                                    <svg class="text-gray-600 dark:text-white" color="#262626" fill="#262626" height="77" role="img" viewBox="0 0 97.6 77.3" width="96"><path d="M16.3 24h.3c2.8-.2 4.9-2.6 4.8-5.4-.2-2.8-2.6-4.9-5.4-4.8s-4.9 2.6-4.8 5.4c.1 2.7 2.4 4.8 5.1 4.8zm-2.4-7.2c.5-.6 1.3-1 2.1-1h.2c1.7 0 3.1 1.4 3.1 3.1 0 1.7-1.4 3.1-3.1 3.1-1.7 0-3.1-1.4-3.1-3.1 0-.8.3-1.5.8-2.1z" fill="currentColor"></path><path d="M84.7 18.4 58 16.9l-.2-3c-.3-5.7-5.2-10.1-11-9.8L12.9 6c-5.7.3-10.1 5.3-9.8 11L5 51v.8c.7 5.2 5.1 9.1 10.3 9.1h.6l21.7-1.2v.6c-.3 5.7 4 10.7 9.8 11l34 2h.6c5.5 0 10.1-4.3 10.4-9.8l2-34c.4-5.8-4-10.7-9.7-11.1zM7.2 10.8C8.7 9.1 10.8 8.1 13 8l34-1.9c4.6-.3 8.6 3.3 8.9 7.9l.2 2.8-5.3-.3c-5.7-.3-10.7 4-11 9.8l-.6 9.5-9.5 10.7c-.2.3-.6.4-1 .5-.4 0-.7-.1-1-.4l-7.8-7c-1.4-1.3-3.5-1.1-4.8.3L7 49 5.2 17c-.2-2.3.6-4.5 2-6.2zm8.7 48c-4.3.2-8.1-2.8-8.8-7.1l9.4-10.5c.2-.3.6-.4 1-.5.4 0 .7.1 1 .4l7.8 7c.7.6 1.6.9 2.5.9.9 0 1.7-.5 2.3-1.1l7.8-8.8-1.1 18.6-21.9 1.1zm76.5-29.5-2 34c-.3 4.6-4.3 8.2-8.9 7.9l-34-2c-4.6-.3-8.2-4.3-7.9-8.9l2-34c.3-4.4 3.9-7.9 8.4-7.9h.5l34 2c4.7.3 8.2 4.3 7.9 8.9z" fill="currentColor"></path><path d="M78.2 41.6 61.3 30.5c-2.1-1.4-4.9-.8-6.2 1.3-.4.7-.7 1.4-.7 2.2l-1.2 20.1c-.1 2.5 1.7 4.6 4.2 4.8h.3c.7 0 1.4-.2 2-.5l18-9c2.2-1.1 3.1-3.8 2-6-.4-.7-.9-1.3-1.5-1.8zm-1.4 6-18 9c-.4.2-.8.3-1.3.3-.4 0-.9-.2-1.2-.4-.7-.5-1.2-1.3-1.1-2.2l1.2-20.1c.1-.9.6-1.7 1.4-2.1.8-.4 1.7-.3 2.5.1L77 43.3c1.2.8 1.5 2.3.7 3.4-.2.4-.5.7-.9.9z" fill="currentColor"></path></svg>
                                </div>
                                <div  uk-scrollspy-class="uk-animation-slide-bottom-small">
                                    <h3 class="text-black font-semibold text-xl dark:text-white"> Sell Premium Photes</h3>
                                </div>
                                <div  uk-scrollspy-class="uk-animation-slide-bottom-small">
                                    <p class="text-sm text-center max-w-sm">You can earn money by selling high-quality photos and share them with your friends who are interested</p>
                                </div>
                                <div uk-scrollspy-class="uk-animation-slide-top-small">
                                    <button type="button" class="bg-primary text-white rounded-lg py-1.5 px-4 text-sm mt-2 dark:bg-slate-700" uk-slideshow-item="next"> Start selling </button>
                                </div>

                            </div>

                        </li>

                        
                        <!-- about -->
                        <li class="w-full">

                            <div>

                                <div class="p-8 space-y-4 font-normal text-sm">
    
                                    <div class="md:flex items-center gap-16 justify-between">
                                        <label class="md:w-32"> Title </label>
                                        <div class="flex-1 max-md:mt-4">
                                            <input type="text" placeholder="name" class=" w-full">
                                        </div>
                                    </div>
                                    <div class="md:flex items-start gap-16 justify-between">
                                        <label class="md:w-32"> Description </label>
                                        <div class="flex-1 max-md:mt-4">
                                            <textarea class="w-full" rows="4" placeholder="Product Description.."></textarea>
                                        </div>
                                    </div>
                                    <div class="md:flex items-center gap-16 justify-between">
                                        <label class="md:w-32"> Price </label>
                                        <div class="flex-1 max-md:mt-4">
                                            <input type="number" placeholder="$12" class=" w-full">
                                        </div>
                                    </div>
                                    <div class="md:flex items-center gap-16 justify-between">
                                        <label class="md:w-32"> Category </label>
                                        <div class="flex-1 max-md:mt-4">
                                            <select class="w-full !border-0 !rounded-md">
                                                <option value="1">Everyone</option>
                                                <option value="2">People I Follow</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="md:flex items-center gap-16 justify-between">
                                        <label class="md:w-32"> Tags </label>
                                        <div class="flex-1 max-md:mt-4">
                                            <input type="text" placeholder="Landscape,Arts" class=" w-full">
                                        </div>
                                    </div>
                                    
                                </div>

                            </div>

                        </li>

                        <!-- add image -->
                        <li class="w-full">

                            <div class="p-8" uk-scrollspy="target: > div; cls: uk-animation-scale-up; delay: 300;repeat:true">

                                <div class="relative w-full h-[395px] border1 rounded-lg overflow-hidden bg-[url('../images/ad_pattern.png')] bg-repeat">
                                
                                    <label for="createProductUrl" class="flex flex-col justify-center items-center absolute -translate-x-1/2 left-1/2 bottom-0 z-10 w-full pb-6 pt-10 cursor-pointer bg-gradient-to-t from-gray-700/60">
                                        <input id="createProductUrl" type="file" class="hidden" />
                                        <ion-icon name="image" class="text-3xl text-teal-600"></ion-icon>
                                        <span class="text-white mt-2">Upload image </span>
                                    </label>
            
                                    <img id="createProductImage" src="#" alt="Uploaded Image" accept="image/png, image/jpeg" style="display:none;" class="w-full h-full absolute object-cover">
            
                                </div> 

                            </div>

                        </li> 

                        <!-- settings -->
                        <li class="w-full !relative">
                           
                            <div  class="lg:!h-[460px] overflow-y-auto">

                                <div uk-scrollspy="target: > * >; cls: uk-animation-slide-bottom-small; delay: 100">
                
                                    <div class="p-6">
  

                                        <ul class="divide-y divide-gray-100 font-normal text-sm dark:divide-slate-700/60" uk-nav="multiple: true">
                                            <li class="uk-parent uk-open py-3">

                                                <a href="#" class="flex items-center justify-between py-2 px-3.5 group" aria-expanded="true"> 
                                                    <h4 class="font-semibold text-base text-black dark:text-white">Settings</h4>
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 group-aria-expanded:rotate-180 duration-200">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
                                                    </svg>
                                                </a>

                                                <ul class="m-4 space-y-3">
                                                    <li>
                                                        <div class="md:flex items-center gap-16 justify-between">
                                                            <label class="md:w-48"> Who can Buy ? </label>
                                                            <div class="flex-1 max-md:mt-4">
                                                                <select class="w-full !border-0 !rounded-md">
                                                                    <option value="1">Everyone</option>
                                                                    <option value="2">People I Follow</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="md:flex items-center gap-16 justify-between">
                                                            <label class="md:w-48"> Who can Comment ? </label>
                                                            <div class="flex-1 max-md:mt-4">
                                                                <select class="w-full !border-0 !rounded-md">
                                                                    <option value="1">Everyone</option>
                                                                    <option value="2">People I Follow</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>

                                            </li>
                                            
                                            <li class="uk-parent uk-open py-3"> 

                                                <a href="#" class="flex items-center justify-between py-2 px-3.5 group " aria-expanded="true"> 
                                                    <h4 class="font-semibold text-base text-black dark:text-white"> Advanced settings</h4>
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 group-aria-expanded:rotate-180 duration-200">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
                                                    </svg>
                                                </a>

                                                <ul class="divide-y bg-secondery rounded-md dark:divide-slate-700/60"> 
                                                    <li>
                                                        <div class="p-4 py-2">
                                                            <label class="switch flex justify-between items-center gap-4 cursor-pointer min-h-[30px]">
                                                                <div>
                                                                    <h4> Generate license keys</h4>
                                                                </div>
                                                                <input type="checkbox" checked><span class="switch-button !relative shrink-0"></span> 
                                                            </label> 
                                                        </div> 
                                                    </li>
                                                    <li>
                                                        <div class="p-4 py-2">
                                                            <label class="switch flex justify-between items-center gap-4 cursor-pointer min-h-[30px]">
                                                                <div>
                                                                    <h4> Redirect customers after purchase?</h4>
                                                                </div>
                                                                <input type="checkbox"><span class="switch-button !relative shrink-0"></span> 
                                                            </label> 
                                                        </div> 
                                                    </li>
                                                    <li>
                                                        <div class="p-4 py-2">
                                                            <label class="switch flex justify-between items-center gap-4 cursor-pointer min-h-[30px]">
                                                                <div>
                                                                    <h4> Turn off commenting </h4>
                                                                </div>
                                                                <input type="checkbox" checked><span class="switch-button !relative shrink-0"></span> 
                                                            </label> 
                                                        </div>  
                                                    </li>
                                                </ul>
                                                
                                            </li>
                                            
                                        </ul>
     
                                        <div class="flex justify-center p-6 pt-0 hidden">
                                            <button type="button" class="button bg-blue-600 text-white px-10"> Share </button> 
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                
                            </div>

                        </li>
                             
                        <!-- final steop -->
                        <li class="w-full">
                            
                            <div  class="flex justify-center items-center flex-col gap-6 h-full" uk-scrollspy="target: > div; cls: uk-animation-scale-up; delay: 300;repeat:true">

                                <div class="text-center">
                                    <ion-icon name="sparkles-sharp" class="text-5xl mb-6 text-blue-600 opacity-60 rotate-12"></ion-icon>
                                    <h3 class="text-black font-semibold text-xl dark:text-white"> Almost Done </h3>
                                </div>
                                
                                <div class="font-medium text-sm">
                                    <div>
                                        <label class="flex justify-center max-w-sm mx-auto text-center">
                                          <input class="rounded mt-1" type="checkbox" checked name="checkbox1" value="3" />
                                          <span class="ml-3"> I agree this product is mine and i take resposibilty of this product for selling </span>
                                        </label>
                                    </div>
                                </div>

                                <div class="flex justify-center p-6 pt-0">
                                    <button type="button" class="button bg-blue-600 text-white px-10"> Share </button> 
                                </div>

                            </div>

                        </li> 


                    </ul>

                    <div class="flex  justify-center py-1.5 border-t relative dark:border-slate-700/60">

                        <button type="button" uk-slideshow-item="previous" class="bg-secondery font-semibold py-1.5 px-3.5 rounded-full text-sm absolute left-4 bottom-3 leading-6 uk-animation-slide-left-small">Previews</button>

                        <ul class="inline-flex flex-wrap justify-center my-5 uk-dotnav uk-slideshow-nav gap-2.5"></ul>

                        <button type="button" uk-slideshow-item="next" class="bg-secondery font-semibold py-1.5 px-3.5 rounded-full text-sm absolute right-4 bottom-3 leading-6 uk-animation-slide-right-small">Next</button>

                    </div> 

                </div>

            </div>
   
        </div>
        
    </div>
