 <!-- create status -->
 <div class="hidden lg:p-20 uk- open" id="confirm-popup" uk-modal="">
   
   <div class="uk-modal-dialog tt relative overflow-hidden mx-auto bg-white shadow-xl rounded-lg md:w-[520px] w-full dark:bg-dark2">

       <div class="text-center py-4 border-b mb-0 dark:border-slate-700">
           <h2 class="text-sm font-medium text-black">Delete Group </h2>
           
           <button type="button" class="button-icon absolute top-0 right-0 m-2.5 uk-modal-close">
               <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                   <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
               </svg>
           </button>
       </div>
       <form class="needs-validation data-form" action="{{ route('group-member.update', $group->id)  }} " method="POST" enctype="multipart/form-data">
         @csrf
         @method('PUT')
        <div class="space-y-5 mt-3 p-2"> 
            <input type="hidden" name="group_id" value="{{$group->id}}">
            <div class="mb-4">
                <label for="leave_reason" class="block text-gray-700 text-sm font-bold mb-2">Reason for Leaving</label>
                <select name="leave_reason" id="leave_reason" class="block shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                    <option value="" disabled selected>Select a reason</option>
                    <option value="no_longer_interested">No longer interested</option>
                    <option value="too_many_notifications">Too many notifications</option>
                    <option value="content_not_relevant">Content is not relevant</option>
                    <option value="found_another_group">Found another group</option>
                    <option value="privacy_concerns">Privacy concerns</option>
                    <option value="other">Other</option>
                </select>
            </div>

            <textarea class="w-full !text-black placeholder:!text-black  focus:!ring-transparent !font-normal !text-xl   dark:!text-white dark:placeholder:!text-white dark:!bg-slate-800" name="description" id=""  rows="6" placeholder="What do you have in mind?"></textarea>
        </div>


        <div class="p-5 flex justify-between items-center">
            <div class="flex items-center gap-2"> 
                <button type="submit" class="button bg-blue-500 text-white py-2 px-12 text-[14px] uk-modal-close"> Cancel</button>
                <button type="submit" class="button bg-red-600 text-white py-2 px-12 text-[14px]"> Confirm</button>
            </div>

        </div>
       </form>
   
   </div>

</div>