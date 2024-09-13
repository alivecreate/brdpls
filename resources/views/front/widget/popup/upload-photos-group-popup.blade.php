 <!-- create status -->
 <div class="hidden lg:p-20 uk- open" id="create-photo-group" uk-modal="">
   
   <div class="uk-modal-dialog tt relative overflow-hidden mx-auto bg-white shadow-xl rounded-lg md:w-[520px] w-full dark:bg-dark2">

       <div class="text-center py-4 border-b mb-0 dark:border-slate-700">
           <h2 class="text-sm font-medium text-black">Write Caption </h2>

           <!-- close button -->
           <button type="button" class="button-icon absolute top-0 right-0 m-2.5 uk-modal-close">
               <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                   <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
               </svg>
           </button>

       </div>
       <form class="needs-validation data-form" action="{{ route('posts.store') }}" 
       method="POST" enctype="multipart/form-data">
        @csrf
        <div class="space-y-5 mt-3 p-2">
            <textarea class="w-full !text-black placeholder:!text-black !bg-white !border-transparent focus:!border-transparent focus:!ring-transparent !font-normal !text-xl   dark:!text-white dark:placeholder:!text-white dark:!bg-slate-800" name="description" id=""  rows="6" placeholder="What do you have in mind?"></textarea>
        </div>

        <div class="flex items-center gap-2 text-sm py-2 px-4 font-medium flex-wrap">           

                <input type="file"  onchange="previewImage2(event)" multiple
                    name="gallery[]" id="imageUploadInput" accept="image/jpeg, image/png, image/webp" >
                    
                <button
                    class="button text-lg bg-primary text-white flex-1/2">
                    <ion-icon name="thumbs-up-outline"></ion-icon> Upload Post
                </button>
        
                </div>
                
        

        <img id="image-preview"/>


       </form>
   
   </div>

</div>