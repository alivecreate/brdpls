 <div class="bg-white shadow lg:rounded-b-2xl lg:-mt-10 dark:bg-dark2">
            <div class="relative overflow-hidden w-full timeline-cover">
                @if(optional($group)->cover)
                <img src="https://imagedelivery.net/zfs38w7w3E1dJVvB3mVs9g/{{$group->cover}}/lg" alt="{{$group->name}}"
                    class="absolute w-full h-full inset-0 rounded-md object-cover shadow-sm">
                @else
                <img src="https://imagedelivery.net/zfs38w7w3E1dJVvB3mVs9g/59e4502a-977e-45f7-c153-522a80d42300/lg"
                    alt="{{$group->name}}" class="absolute w-full h-full inset-0 rounded-md object-cover shadow-sm">
                @endif


                <div class="w-full bottom-0 absolute left-0 bg-gradient-to-t from -black/60 pt-10 z-10"></div>

                <div class="absolute bottom-0 right-0 m-4 z-20">
                    <div class="flex items-center gap-3">

                        @if(Auth::check() && Auth::id() == $group->user_id)
                        <button uk-toggle="target: #upload-cover-popup"
                            class="button bg-black/10 text-white flex items-center gap-2 backdrop-blur-small">
                            <ion-icon name="camera-outline" class="text-lg"></ion-icon> Change Photo
                        </button>
                        @endif

                    </div>
                </div>
            </div>

            <div class="lg:px-10 md:p-5 p-3">
                <div class="flex flex-col justify-center">
                    <div class="flex lg:items-center justify-between max-md:flex-col">
                        <div class="flex-1">
                            <h3 class="md:text-2xl text-base font-bold text-black dark:text-white text-capitalize">
                                {{$group->name}} </h3>
                            <p class=" font-md text-gray-500 mt-2 flex gap-2 flex-wrap dark:text-white/80">
                                <span class="text-capitalize"> {{$group->address}} </span>
                                <span class="max-lg:hidden"> • </span>
                                <span> <b class="font-medium text-black dark:text-white">
                                        {{countGroupMembers($group->id)}}</b> @if(countGroupMembers($group->id) >1
                                    )Followers @else Follower @endif </span>
                            </p>
                        </div>

                        <div>
                            <div class="flex items-center gap-2 mt-1">


                                @if(checkIsGroupJoin($group->id))

                                <form action="{{route('group-member.store')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="group_id" value="{{$group->id}}">
                                    <button
                                        class="button bg-primary flex items-center gap-1 py-2 px-3.5 text-white shadow ml-auto">
                                        <ion-icon name="remove-circle-outline" class="text-xl"></ion-icon>
                                        <span class="text-sm"> Unfollow </span>
                                    </button>
                                </form>

                                @elseif(Auth::id())

                                <form action="{{route('group-member.store')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="group_id" value="{{$group->id}}">
                                    <button class="button bg-primary flex items-center gap-1 text-white shadow ml-auto">
                                        <ion-icon name="add-outline" class="text-xl"></ion-icon>
                                        <span class="text-sm"> Follow </span>
                                    </button>
                                </form>
                                @endif

                                <div>


                                    <a href="#" id="share-button"
                                        class="rounded-lg bg-secondery flex px-2.5 py-2 dark:bg-dark2  font-semibold">
                                        <ion-icon class="text-xl font-semibold mr-2" name="share-outline"></ion-icon>
                                        Share
                                    </a>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            
            <div class="flex-space-between  border-t border-gray-100 px-2 dark:border-slate-700 sm-d-block ">
                <nav
                    class="flex gap-0.5 rounded-xl overflow-hidden -mb-px text-gray-500 font-medium text-sm overflow-x-auto dark:text-white">
                    <a href="{{route('ganeshFestivalGroup.show', $group->slug)}}"
                        class="inline-block py-3 leading-8 px-3.5 border-b-2  tab-home">Discussion</a>
                        
                    <a href="{{route('ganeshFestivalPhotos', $group->slug )}}"
                        class="inline-block py-3 leading-8 px-3.5 border-b-2 tab-photos">Photos</a>

                        <a href="{{route('ganeshFestivalVideos', $group->slug )}}"
                        class="inline-block py-3 leading-8 px-3.5 border-b-2 tab-videos">Videos</a>

                        @if($group->user_id ==  Auth::id())                  
                            <a href="{{route('ganeshFestivalSettings', $group->slug )}}"
                                class="inline-block py-3 leading-8 px-3.5 border-b-2 tab-settings">Settings</a>
                        @endif

                </nav>

                <div class="flex items-center gap-4" 
                style="margin-right: 90px;"> 

                @if(isset($years))
                    <select name="year" id="yearSelect"  onchange="goToYear()" 
                        class="bg-white shadow focus:!border-transparent focus:!ring-transparent md:w-40 dark:bg-dark2">
                        <option value="">Select Year</option>
                        
                        @foreach($years as $year)
                            <option value="{{ $year }}" @if($year == $selectedYear) selected @endif>{{ $year }}</option>
                        @endforeach
        
                    </select>
                @endif
                <script>
                        function goToYear() {
                            var year = document.getElementById("yearSelect").value; // Get selected year
                            var currentUrl = window.location.href.split('?')[0];    // Remove query params from URL

                            // Redirect to the new URL with the selected year in query string
                            window.location.href = currentUrl + "?year=" + year;
                        }
                        </script>
            </div>

            </div>

            

        </div>
