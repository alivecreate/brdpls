<!-- Delete Confirmation Popup -->
<div class="hidden lg:p-20 uk- open" id="send-business-inquiry-popup" uk-modal>
    <div
        class="uk-modal-dialog tt relative overflow-hidden mx-auto bg-white shadow-xl rounded-lg md:w-[520px] w-full dark:bg-dark2">
        <div class="text-center py-4 border-b mb-0 dark:border-slate-700 px-6">
            <h2 class="text-sm heading-h2 font-medium text-black text-left mb-0 text-uppercase">Send inquiry</h2>
            <button type="button" class="button-icon absolute top-0 right-0 m-2.5 uk-modal-close" uk-close>
            </button>
        </div>
        <div>

            <div class="w-3/5 bg-white p-4">
                <div class="w-full row flex mx-4">

                    <div class="col-half">
                        @if(count($businessDetail->gallery)>0)
                            <img class="mb-2 img-thumb-review" src="https://imagedelivery.net/zfs38w7w3E1dJVvB3mVs9g/{{$businessDetail->gallery(1)->get()[0]['image']}}/sm"
                            alt="">
                        @endif
                    </div>
                
                    <div class="col-half ml-4">
                        <h2 class="heading-2">{{$businessDetail->name}}</h2>
                        <h3 class="heading-4">
                            @if($businessDetail->building){{$businessDetail->building}}, @endif
                            @if($businessDetail->street) {{$businessDetail->street}}, @endif{{$businessDetail->city}},
                            @if($businessDetail->pincode){{$businessDetail->pincode}}. @endif </h3>

                    </div>                
                </div>

                <form  id='demo-form' class="needs-validation data-form" action="{{route('businessInquiryStore')}}"
                    method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="business_id" value="{{ $businessDetail->id }}">
                    <div class="space-y-4">
                        <div class="md:flex items-center">
                            <div class="flex-1 mt-4">

                            
                            
                          
                              <input required type="text" name="name" placeholder="Your Full Name" class="w-full mb-3"
                                data-gtm-form-interact-field-id="0" 
                                value="@if(getUserData() && isset(getUserData()['first_name']) && isset(getUserData()['last_name'])){{ getUserData()['first_name'] }} {{ getUserData()['last_name'] }}@endif">


                              <input required type="number" id="checkPhone" name="phone" placeholder="Your Phone number" class="w-full mb-3"
                                data-gtm-form-interact-field-id="0"  
                                value="@if(getUserData() && isset(getUserData()['phone'])){{ getUserData()['phone'] }}@endif"
                                @if(getUserData() && isset(getUserData()['phone'])) disabled @endif>


                                <input type="email" name="email" placeholder="Your Email Id" class="w-full mb-3"
                                    data-gtm-form-interact-field-id="0"  
                                    value="@if(getUserData() && isset(getUserData()['email'])){{ getUserData()['email'] }}@endif">


                            <input type="text" name="title" placeholder="Title" class="w-full mb-3"
                              data-gtm-form-interact-field-id="0">

                                <textarea type="text" rows="7"
                                  name="message" placeholder="Write Message Here (Max Length 1500)" 
                                 class="w-full" maxlength="1500"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-center text-center mt-5 mb-7">
                            <button class="g-recaptcha button text-lg lg:px-10 bg-primary text-white max-md:flex-1" 
                        data-sitekey="6LcZtY0qAAAAAF-uN530l6CkANJXFKx2kOD3Wa7F" 
                        data-callback='onSubmit' 
                        data-action='submit'> Send Inquiry
                        <span class="ripple-overlay"></span></button>
                    </div> 
                          
                </form>
            </div>

        </div>
    </div>
</div>