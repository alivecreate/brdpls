

<div class="flex justify-between mb-5">
            <nav class="flex mb-6" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                    <li class="inline-flex items-center">
                        <a href="#"
                            class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                            <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                            </svg>
                            Home
                        </a>
                    </li>

                    <li class="inline-flex items-center">
                        <a href="{{route('myBusiness')}}"
                            class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                            <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            My Business
                        </a>
                    </li>

                    <li class="inline-flex items-center">
                        <a href="#"
                            class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                            <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            {{$myBusiness->name}}
                        </a>
                    </li>
                </ol>
            </nav>

            <nav>
                <ol>
                    <li class="inline-flex items-center">
                    <a class="button bg-black text-white flex items-center gap-1 text-white py-2 px-3.5 shadow ml-auto"
                        target="_blank"
                        href="{{route('businessDetail', ['city' => $myBusiness->city, 'slug' => $myBusiness->slug])}}">
                        <ion-icon class="text-xl" name="eye-outline"></ion-icon> Preview
                    </a></li>

                    @if(isset($breadcrumbType))
                        <li class="inline-flex items-center">
                            <a class="button bg-primary flex items-center gap-1 text-white py-2 px-3.5 shadow ml-auto"
                                data-cid="{{$myBusiness->cid}}" data-name="{{$myBusiness->name}}"
                                uk-toggle="target: #add-product-popup">
                                <ion-icon class="text-xl" name="add-outline"></ion-icon> Add New Product
                            </a>
                        </li>
                    @endif

                </ol>
            </nav>

        </div>