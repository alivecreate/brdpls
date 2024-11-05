<!-- Delete Confirmation Popup -->
<div class="hidden lg:p-20 uk- open" id="confirm-delete-popup" uk-modal>
    <div class="uk-modal-dialog tt relative overflow-hidden mx-auto bg-white shadow-xl rounded-lg md:w-[520px] w-full dark:bg-dark2">
        <div class="text-center py-4 border-b mb-0 dark:border-slate-700">
            <h2 class="text-sm font-medium text-black delete-title">Delete</h2>
            <button type="button" class="button-icon absolute top-0 right-0 m-2.5 uk-modal-close" uk-close>
                <!-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg> -->
            </button>
        </div>
        <form class="needs-validation data-form delete-form" action="" method="POST" enctype="multipart/form-data">
            @csrf
            @method('DELETE')
            <div class="space-y-5 mt-3 p-2">
                <input type="hidden" name="id" value="">
                <div class="flex justify-center items-center">
                    <strong class="data-name"></strong>
                </div>

                <div class="flex justify-center items-center">
                    <p class="text-center">Are you sure you want to delete this Item?</p>
                </div>              
              </div>
            
            <div class="p-5 flex justify-center items-center">
                <div class="flex items-center gap-2">
                    <button type="button" class="button bg-blue-500 text-white py-2 px-12 text-[14px] uk-modal-close">Cancel</button>
                    <button type="submit" class="button bg-red-600 text-white py-2 px-12 text-[14px]">Confirm</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Include UIkit JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.6.16/js/uikit.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.6.16/js/uikit-icons.min.js"></script>
