<!-- Delete Confirmation Popup -->
<div class="hidden lg:p-20 uk- open" id="home-upload-cover-popup" uk-modal>
    <div class="uk-modal-dialog tt relative overflow-hidden mx-auto bg-white shadow-xl rounded-lg md:w-[520px] w-full dark:bg-dark2">
        <div class="text-center py-4 border-b mb-0 dark:border-slate-700">
            <h2 class="text-sm font-medium text-black">Change Cover Photo</h2>
            <button type="button" class="button-icon absolute top-0 right-0 m-2.5 uk-modal-close" uk-close>
                <!-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg> -->
            </button>
        </div>
        
        <form class="" action="{{route('updateHomeGaneshCoverPic')}}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="space-y-5 mt-3 p-2 space-around">

            <input type="hidden" name="id" value="{{$homeGanesh->id}}">
                
                <div class="flex justify-between items-center p-4 h-full">
                    <div>
                        @if($homeGanesh->image)
                        
                        <img id="img"
                            class="object-cover h-full h-30 w-30 cover-preview"
                            src="https://imagedelivery.net/zfs38w7w3E1dJVvB3mVs9g/{{$homeGanesh->image}}/sm"
                                    alt="{{$homeGanesh->image}}" />
                        @else
                        <img src="{{asset('front')}}/images/avatars/avatar-3.jpg" alt="" class="border-2 border-white dark:border-slate-800">
                               
                        @endif
                    </div>

                        
                <div class="relative md:w-20 md:h-20 w-12 h-12 shrink-0"> 
                    <label for="file" class="cursor-pointer btn-choose-file">
                       
                         
                <input type="file" name='image' 
                         accept=".png, .webp, .jpg, .jpeg" style="max-width: 106px;"/>
                         
                    </label>
                </div>

                </div>              
              </div>
            
            <div class="p-5 flex justify-center items-center">
                <div class="flex items-center gap-2">
                    <button type="cancel" class="button bg-blue-500 text-white py-2 px-12 text-[14px] uk-modal-close">Cancel</button>
                    <button type="submit" class="button bg-red-600 text-white py-2 px-12 text-[14px]">Confirm</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Include UIkit JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.6.16/js/uikit.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.6.16/js/uikit-icons.min.js"></script>
