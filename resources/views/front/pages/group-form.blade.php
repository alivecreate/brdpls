<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group Form</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Basic styling for the form */
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        .container {
            max-width: 650px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form {
            display: flex;
            flex-direction: column;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .form-control {
            margin-bottom: 15px;
        }

        label {
            font-weight: bold;
            color: #666;
        }

        input[type="text"],
        textarea,
        select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;        
        }

        textarea {
            resize: vertical; 
        }

        input[type="file"] {
            font-size: 14px;
            margin-top: 5px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            margin-top: 20px;
            cursor: pointer;
            border-radius: 4px;
            font-size: 14px;
        }

        button:hover {
            background-color: #45a049;
        }

        /* Responsive adjustments */
        @media screen and (max-width: 600px) {
            .container {
                padding: 10px;
            }
            button {
                padding: 8px 16px;
            }
        }

    </style>
</head>
<body>

    @if ($errors->any())
    <div class="custom-alert">
        <ul class="custom-list">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

<div class="container">
    {{-- @php
    $group = getUserData()['id'];
    @endphp
    
    <form class="needs-validation data-form" action="{{ route('group.update', $group) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')--}}
    <form class="needs-validation data-form" action="{{ route('group.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
        <h2>Create a New Group</h2>
        <div class="form-control">
            <label for="group-name">Group Name</label>
            <input type="text" id="group-name" name="group_name" value="{{old('group_name')}}" required>
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
            <input type="text" id="members" name="members" value="{{old('members')}}" required>
        </div>
        <div class="form-control">
            <label for="city">City</label>
            <input type="text" id="city" name="city" value="{{old('city')}}" >
        </div>
        <div class="form-control">
            <label for="location">Location</label>
            <input type="text" id="location" name="location" value="{{old('location')}}">
        </div>
        <div class="form-control">
            <label for="establishment-year">Establishment Year</label>
            <input type="date" id="establishment-year" name="year" value="{{old('year')}}" required>
        </div>
        <!-- <div class="form-control">
            <label for="group-logo">Group Banner</label>
            <input type="file" id="group-logo" name="cover" value="{{old('cover')}}" accept="image/*">
        </div> -->
        <div class="form-control">
            <button type="submit">Create Group</button>
        </div>
    </form>
</div>
</body>
</html>
