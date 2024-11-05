<!-- Delete Confirmation Popup -->
<div class="hidden lg:p-20 uk- open" id="edit-product-popup" uk-modal>
    <div
        class="uk-modal-dialog tt relative overflow-hidden mx-auto bg-white shadow-xl rounded-lg md:w-[520px] w-full dark:bg-dark2">
        <div class="text-center py-4 border-b mb-0 dark:border-slate-700 px-6">
            <h2 class="text-sm heading-h2 font-medium text-black text-left mb-0">Edit New Product:</h2>
            <button type="button" class="button-icon absolute top-0 right-0 m-2.5 uk-modal-close" uk-close>

            </button>
        </div>

        <div>

            <div class="w-3/5 bg-white p-4">
                <form class="needs-validation data-form edit-form" action=""
                    method="POST" enctype="multipart/form-data">
                    @csrf
                     @method('PUT')
                    <input type="hidden" id="id"  name="id" value="{{ $myBusiness->id }}">

                    <div class="space-y-4">

                        <div class="md:flex items-center">
                            <div class="flex-1 max-md:mt-2">
                                <input required list="categories" id="product-category"  type="text" 
                                    name="product_category" 
                                    placeholder="Choose category" class="w-full text-capitalize product-category">

                                <datalist id="categories" class='text-capitalize'>
                                    @foreach($productCategories as $productCategory)
                                        <option value="{{$productCategory->name}}">{{$productCategory->name}}</option>
                                    @endforeach
                                </datalist>

                            </div>
                        </div>
                        <div class="md:flex items-center">
                            <div class="flex-1 max-md:mt-2">
                                <input type="text" required id="name" name="name" placeholder="Product Name" class="w-full">
                            </div>
                        </div>

                        <div class="md:flex items-center">
                            <div class="flex-1 max-md:mt-2">
                                <input type="text" required id="price" name="price" placeholder="Price in INR (₹)" class="w-full">
                            </div>
                        </div>

                        <div class="flex md:flex items-center">
                            <div class="flex mr-2">
                                <input type="text" id="items" name="items" placeholder="1 Pcs, 1 Kg, 100 Gm etc" class="w-full" min="1"
                                    
                                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0+(\d)/, '$1')">

                                </div>

                            <div class="flex">
                                <select class="flex !rounded-md" id="unit" name="unit" value="">
                                    <option value="pcs">Pcs</option>
                                    <option value="kg">Kg</option>
                                    <option value="g">Gram</option>
                                    <option value="liter">Liter</option>
                                    <option value="ml">Milliliter</option>
                                    <option value="dozen">Dozen</option>
                                    <option value="box">Box</option>
                                    <option value="pack">Pack</option>
                                </select>
                            </div>
                        </div>


                            <div class="editor-toolbar items-center">
                                <button type="button" class='mr-2' onclick="format('bold')"><strong>B</strong></button>
                                <button type="button" class='mr-2' onclick="format('italic')"><em>I</em></button>
                                <button type="button" class='mr-2 items-center'
                                    onclick="format('underline')"><u>U</u></button>

                                <button type="button" class='mr-2 flex items-center'
                                    onclick="format('insertUnorderedList')">
                                    <ion-icon class='text-lg' name="list"></ion-icon>
                                </button>
                                <button type="button" class='mr-2 flex items-center'
                                    onclick="format('insertOrderedList')">
                                    <ion-icon class='text-lg' name="list"></ion-icon>
                                </button>
                            </div>

                            

                            <div id="edit-editor" class="editor description" contenteditable="true"></div>

                            <textarea id="editTextArea" placeholder='product description' name="description" class="description"
                            style="display:none;"></textarea>


                        <div class="md:flex items-center">
                            <div class="flex-1 max-md:mt-2">
                                <strong class='lable' for="">choose product images (max 10)</strong>
                                <input type="file" id="image" multiple name="image[]" class="w-full mt-4"
                                    accept="image/*">

                                <p id="fileError" style="color:red; display:none;">You can only upload up to 10 images.
                                </p>

                            </div>
                        </div>

                        <script>
                        const fileInput = document.getElementById('image');
                        const errorMsg = document.getElementById('fileError');

                        fileInput.addEventListener('change', function() {
                            const files = Array.from(fileInput.files);
                            if (files.length > 10) {
                                errorMsg.style.display = 'block'; // Show error message
                                fileInput.value = ''; // Reset the file input to prevent selection
                            } else {
                                errorMsg.style.display = 'none'; // Hide error message
                            }
                        });
                        </script>

                        <div class="md:flex items-start gap-10 " hidden="">
                            <div class="flex-1 flex items-center gap-5 max-md:mt-4">
                                <img src="http://localhost:8000/front/images/avatars/avatar-3.jpg" alt="" name="image"
                                    class="w-10 h-10 rounded-full">
                                <button type="submit"
                                    class="px-4 py-1 rounded-full bg-slate-100/60 border dark:bg-slate-700 dark:border-slate-600 dark:text-white">
                                    Change</button>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center gap-4 mt-16 lg:pl-[10.5rem]">
                        <button type="submit" class="button lg:px-10 bg-primary text-white max-md:flex-1"> Save Product
                            <span class="ripple-overlay"></span></button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>