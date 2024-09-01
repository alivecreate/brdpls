@extends('front.layout.ganesh-festival-layout')

@section('content')

<!-- main contents -->
    <main id="site__main" class="2xl:ml-[--w-side]  xl:ml-[--w-side-sm] 2xl:ml-[--w-side]  xl:ml-[--w-side-sm] h-[calc(100vh-var(--m-top))] mt-[--m-top] p-6">

            
<div class="box 2xl:max-w-[1020px] max-w-[1065px] mt-10 px-10 py-10">


    <div class="page-heading">
        <h1 class="page-title">Edit Festival Groups </h1>
    </div>

        <form class="needs-validation data-form" action="{{route('group.update', $group->group_code)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')

            <div class="container mx-auto p-4">
                <div class="space-y-6">
                    <!-- Group Name -->
                    <div class="md:flex md:items-center md:gap-4">
                        <label class="md:w-32 block md:inline-block">Group Name <span class="text-danger">*</span></label>
                        <div class="flex-1 md:mt-0">
                            <input class="w-full border rounded-md p-2" type="text" id="group-name" name="name" value="{{ old('name', $group->name ?? '') }}" required>
                        </div>
                    </div>

                    <!-- Description -->
                    <div class="md:flex md:items-center md:gap-4">
                        <label class="md:w-32 block md:inline-block">Description <span class="text-danger">*</span></label>
                        <div class="flex-1 md:mt-0">
                            <textarea class="w-full border rounded-md p-2" id="description" name="description" rows="4" required>{{old('description', $group->description ?? '') }}</textarea>
                        </div>
                    </div>

                    <!-- Category and Group Privacy -->
                    <div class="md:flex md:items-center md:gap-4">
                        <label class="md:w-32 block md:inline-block" for="category">Category <span class="text-danger">*</span></label>
                        <div class="flex-1 md:mt-0">
                            <select id="category" class="w-full border rounded-md p-2" name="category" value="{{old('category', $group->category ?? '') }}" required>
                                <option value="">Select a category</option>
                                <option value="technology">Technology</option>
                                <option value="sports">Sports</option>
                                <option value="music">Music</option>
                                <option value="food">Food</option>
                                <option value="festival">Festival</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <label class="md:w-32 block md:inline-block md-ml-4  mt-2-sm" for="privacy">Group Privacy</label>
                        <div class="flex-1 md:mt-0">
                            <select class="w-full border rounded-md p-2" id="privacy" name="privacy" value="{{old('privacy', $group->privacy ?? '') }}" required>
                                <option value="public">Public</option>
                                <option value="private">Private</option>
                            </select>
                        </div>
                    </div>

                    <!-- Address -->
                    <div class="md:flex md:items-center md:gap-4">
                        <label class="md:w-32 block md:inline-block">Address</label>
                        <div class="flex-1 md:mt-0">
                            <textarea class="w-full border rounded-md p-2 h-10" id="address" name="address" rows="4" value="{{old('address', $group->address ?? '') }}" required></textarea>
                        </div>
                    </div>

                    <!-- City -->
                    <div class="md:flex md:items-center md:gap-4">
                        <label class="md:w-32 block md:inline-block">City <span class="text-danger">*</span></label>
                        <div class="flex-1 md:mt-0">
                            <select class="w-full border rounded-md p-2" name="city" value="{{old('city', $group->city ?? '') }}">
                                <option value="">Please Select City</option>
                                    @foreach(getGujaratCities() as $city)
                                        <option value="{{$city->name}}" @if($city->name == 'Vadodara (Baroda)') selected @endif>{{$city->name}}</option>
                                    @endforeach
                            </select>
                        </div>
                    </div>

                    <!-- Establishment Year -->
                    <div class="md:flex md:items-center md:gap-4">
                        <label class="md:w-32 block md:inline-block">Establishment Year</label>
                        <div class="flex-1 md:mt-0">
                            <select class="w-full border rounded-md p-2" name="year">
                                <option value="">Select Year</option>
                                @for($i = date('Y'); $i >= 1931; $i--)
                                    <option value="{{ $i }}"> {{$i}}</option>
                                @endfor
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex items-center gap-4 mt-16 lg:pl-[10.5rem]">
                <button type="submit" class="button lg:px-6 bg-secondery max-md:flex-1"> Cancle</button>
                <button type="submit" class="button lg:px-10 bg-primary text-white max-md:flex-1"> Save <span class="ripple-overlay"></span></button>
            </div>
        </form>
    
        <div class="flex justify-center my-6">
            <button type="button" class="bg-white py-2 px-5 rounded-full shadow-md font-semibold text-sm dark:bg-dark2">Load more...</button>
        </div>

    
</div>


</main>

</div>



@endsection
