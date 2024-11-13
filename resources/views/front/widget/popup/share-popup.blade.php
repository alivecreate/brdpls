<!-- Delete Confirmation Popup -->
<div class="hidden lg:p-20 uk- open" id="share-popup" uk-modal>
    <div
        class="uk-modal-dialog tt relative overflow-hidden mx-auto bg-white shadow-xl rounded-lg md:w-[520px] w-full dark:bg-dark2">
        <div class="text-center py-4 border-b mb-0 dark:border-slate-700 px-6">
            <h2 class="text-sm heading-h2 font-medium text-black text-left mb-0">Share with Friends:</h2>
            <button type="button" class="button-icon absolute top-0 right-0 m-2.5 uk-modal-close" uk-close>
                <!-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg> -->
            </button>

            <p class="text-sm heading-h3 font-medium text-left mt-1">Select the platform to share.</p>
        </div>

        <div>

            <div
                class="grid lg:grid-cols-6  md:grid-cols-4  grid-cols-3 gap-1 text-center text-sm mt-4 mb-2 rounded-lg overflow-hidden">
                <!-- Facebook Share -->
                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" target="_blank"
                    class="p-2 text-center">
                    <ion-icon name="logo-facebook" class="lg:text-5xl md:text-4xl text-3xl text-blue-600"></ion-icon>
                    <p>Facebook</p>
                </a>

                <!-- Instagram (No direct share link, so users will need to copy the link) -->
                <a href="https://www.instagram.com/" target="_blank" class="p-2 text-center">
                    <ion-icon name="logo-instagram" class="lg:text-5xl md:text-4xl text-3xl text-pink-600"></ion-icon>
                    <p>Instagram</p>
                </a>

                <!-- Twitter Share -->
                <a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}" target="_blank"
                    class="p-2 text-center">
                    <ion-icon name="logo-twitter" class="lg:text-5xl md:text-4xl text-3xl text-blue-500"></ion-icon>
                    <p>Twitter</p>
                </a>

                <!-- LinkedIn Share -->
                <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(url()->current()) }}"
                    target="_blank" class="p-2 text-center">
                    <ion-icon name="logo-linkedin" class="lg:text-5xl md:text-4xl text-3xl text-blue-700"></ion-icon>
                    <p>LinkedIn</p>
                </a>

                <!-- WhatsApp Share -->
                <a href="" target="_blank"
                    class="p-2 text-center whatsapp-link">
                    <ion-icon name="logo-whatsapp" class="lg:text-5xl md:text-4xl text-3xl text-green-600"></ion-icon>
                    <p>WhatsApp</p>
                </a>

                <!-- Email Share -->
                <a href="mailto:?subject=Check this out!&body={{ urlencode(url()->current()) }}"
                    class="p-2 text-center">
                    <ion-icon name="mail-outline" class="lg:text-5xl md:text-4xl text-3xl text-black-600"></ion-icon>
                    <p>Mail</p>
                </a>

                <!-- Copy Link (Handled with JavaScript) -->
                <a href="javascript:void(0)" onclick="copyLink()" class="p-2 text-center">
                    <ion-icon name="link" class="lg:text-5xl md:text-4xl text-3xl text-black-600"></ion-icon>
                    <p>Copy Link</p>
                </a>
            </div>


        </div>
    </div>
</div>