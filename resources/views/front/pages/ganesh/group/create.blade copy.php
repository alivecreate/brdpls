@extends('front.layout.main-layout')

@section('content')
<main id="site__main" class="2xl:ml-[--w-side]  xl:ml-[--w-side-sm] 2xl:ml-[--w-side]  xl:ml-[--w-side-sm] h-[calc(100vh-var(--m-top))] mt-[--m-top] p-6">
<div class="2xl:max-w-[1220px] max-w-[1065px] mx-auto lg:mt-2 mt-6">

    @if ($errors->any())
    <div class="custom-alert">
        <ul class="custom-list">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div>

<div>
 @php
    $userId = getUserData()['id'];
    @endphp
 <form class="needs-validation data-form" action="{{ route('users.update', $userId) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="space-y-6">

        <div class="md:flex items-center gap-10">
            <label class="md:w-32 text-right"> Username </label>
            <div class="flex-1 max-md:mt-4">
                <input type="text" name="username" value="{{getUserData()['first_name']}}" placeholder="" class="lg:w-1/2 w-full" value="{{old('username')}}">
            </div>
        </div>
    
        <div class="md:flex items-center gap-10">
            <label class="md:w-32 text-right"> Email </label>
            <div class="flex-1 max-md:mt-4">
                <input type="text" name="email" placeholder="info@mydomain.com" class="w-full" value="{{old('email')}}">
            </div>
        </div> 

        <div class="md:flex items-start gap-10">
            <label class="md:w-32 text-right"> Bio </label>
            <div class="flex-1 max-md:mt-4">
                <textarea class="w-full" name="bio" rows="5" value="{{old('bio')}}" placeholder="Inter your Bio"></textarea>
            </div>
        </div> 

        <div class="md:flex items-center gap-10">
            <label class="md:w-32 text-right"> Gender </label>
            <div class="flex-1 max-md:mt-4">
                <select class="!border-0 !rounded-md lg:w-1/2 w-full" name="gender" value="{{old('gender')}}">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
        </div>
        
        <div class="md:flex items-center gap-10">
            <label class="md:w-32 text-right"> Relationship </label>
            <div class="flex-1 max-md:mt-4">
                <select class="!border-0 !rounded-md lg:w-1/2 w-full" name="relationship" value="{{old('relationship')}}">
                    <option value="None">None</option>
                    <option value="Single"  >Single</option>
                    <option value="In a relationship"  >In a relationship</option>
                    <option value="Married"  >Married</option>
                    <option value="Engaged"  >Engaged</option>
                </select>
            </div>
        </div>
        
        <div class="md:flex items-start gap-10 " hidden>
            <label class="md:w-32 text-right"> Avatar </label>
            <div class="flex-1 flex items-center gap-5 max-md:mt-4">
                <img src="{{asset('front')}}/images/avatars/avatar-3.jpg" alt="" name="image" class="w-10 h-10 rounded-full">
                <button type="submit" class="px-4 py-1 rounded-full bg-slate-100/60 border dark:bg-slate-700 dark:border-slate-600 dark:text-white"> Change</button>
            </div>
        </div>

    </div>

    <div class="flex items-center gap-4 mt-16 lg:pl-[10.5rem]">
        <button type="submit" class="button lg:px-6 bg-secondery max-md:flex-1"> Cancle</button>
        <button type="submit" class="button lg:px-10 bg-primary text-white max-md:flex-1"> Save <span class="ripple-overlay"></span></button>
    </div>
</form>
    
</div> 

</div>


<div class="container">
    
    {{$group = getUserData()['id']}}
    
 
    <form class="needs-validation data-form" action="{{ route('group.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <h2>Create a New Group</h2>
        <div class="form-control">
            <label for="group-name">Group Name</label>
            <input class="form-control" type="text" id="group-name" name="group_name" value="{{old('group_name')}}" required>
        </div>
        <div class="form-control">
            <label for="description">Description</label>
            <textarea id="description" name="description" rows="4" value="{{old('description')}}" required></textarea>
        </div>
        <div class="form-control">
            <label for="category">Category</label>
            <select id="category" name="category" value="{{old('category')}}" required>
                <option value="">Select a category</option>
                <option value="technology">Technology</option>
                <option value="sports">Sports</option>
                <option value="music">Music</option>
                <option value="food">Food</option>
                <option value="festival">Festival</option>
                <option value="other">Other</option>
            </select>
        </div>

        <div class="form-control">
            <label for="privacy">Privacy</label>
            <select id="privacy" name="privacy" value="{{old('privacy')}}" required>
                <option value="">Select privacy option</option>
                <option value="public">Public</option>
                <option value="private">Private</option>
            </select>
        </div>

        <div class="form-control">
            <label for="members">Members (comma-separated emails)</label>
            <input class="form-control" type="text" id="members" name="members" value="{{old('members')}}" required>
        </div>

        <div class="form-control">
            <label for="occupation">Occupation</label>
            <input class="form-control" type="text" id="occupation" name="occupation" value="{{old('occupation')}}" >
        </div>
        
        <div class="form-control">
            <label for="city">City</label>
            <input class="form-control" type="text" id="city" name="city" value="{{old('city')}}" >
        </div>

        <div class="form-control">
            <label for="location">Location</label>
            <input class="form-control" type="text" id="location" name="location" value="{{old('location')}}">
        </div>

        <div class="form-control">
            <label for="establishment-year">Establishment Year</label>
            <input class="form-control" type="date" id="establishment-year" name="year" value="{{old('year')}}" required>
        </div>
        
        <!-- <div class="form-control">
            <label for="group-logo">Group Banner</label>
            <input class="form-control" type="file" id="group-logo" name="cover" value="{{old('cover')}}" accept="image/*">
        </div> -->
        <div class="form-control">
            <button type="submit">Create Group</button>
        </div>
    </form>
</div>
</div>
</div>

@include('front.widget.chat-box')

@endsection
