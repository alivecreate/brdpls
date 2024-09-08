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
                       
                       <p>Choose Image</p>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 mt-2 fill-white">
                            <path d="M12 9a3.75 3.75 0 100 7.5A3.75 3.75 0 0012 9z"></path>
                            <path fill-rule="evenodd" d="M9.344 3.071a49.52 49.52 0 015.312 0c.967.052 1.83.585 2.332 1.39l.821 1.317c.24.383.645.643 1.11.71.386.054.77.113 1.152.177 1.432.239 2.429 1.493 2.429 2.909V18a3 3 0 01-3 3h-15a3 3 0 01-3-3V9.574c0-1.416.997-2.67 2.429-2.909.382-.064.766-.123 1.151-.178a1.56 1.56 0 001.11-.71l.822-1.315a2.942 2.942 0 012.332-1.39zM6.75 12.75a5.25 5.25 0 1110.5 0 5.25 5.25 0 01-10.5 0zm12-1.5a.75.75 0 100-1.5.75.75 0 000 1.5z" clip-rule="evenodd"></path>
                        </svg>
                        
                        <input type="file"name='image'
                         accept=".png, .webp, .jpg, .jpeg" 
                         />
                         
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
