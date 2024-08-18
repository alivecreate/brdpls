<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Registration Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
    body {
    font-family: Arial, sans-serif;
    background: url('https://img.lovepik.com/background/20211022/large/lovepik-black-business-background-image_401948352.jpg') no-repeat center center fixed;
    background-size: cover;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    overflow: hidden; /* Prevents body scrolling */
}

.form-container {
    background: rgba(255, 255, 255, 0.8);
    padding: 20px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
    border-radius: 8px;
    width: 800px;
    max-width: 650px;
    max-height: 550px; /* Limits the height of the form */
    overflow-y: auto; /* Enables vertical scrolling */
    backdrop-filter: blur(10px);
}

h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
}

label {
    display: block;
    margin-bottom: 8px;
    color: #555;
}

input, textarea, select {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ddd;
    border-radius: 4px;
}

textarea {
    height: 80px;
    resize: vertical;
}

button {
    width: 100%;
    padding: 10px;
    background: #007bff;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background: #0056b3;
}

.owner-name {
    display: flex;
    justify-content: space-between;
}

.owner-name {
    display: flex;
    gap: 10px; /* Adds space between the first name and last name fields */
}

.owner-name input {
    flex: 1; /* Ensures the input fields take equal space */
}

.hidden {
    display: none;
}

</style>
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

    <div class="form-container">

        <form id="business-registration-form" form class="needs-validation data-form" action="{{ route('business.update', $business) }}" method="POST" enctype="multipart/form-data">
        @csrf 
        @method('PUT')
            <h2>Business Registration</h2>
            
            <label for="owner-first-name">Business Owner</label>
            <div class="owner-name">
                <input type="text" id="owner-first-name" name="first_name" placeholder="First Name" value="@if(old('first_name')){{old('first_name')}}@else{{$business->first_name}}@endif" required>
                <input type="text" id="owner-last-name" name="last_name" placeholder="Last Name" value="@if(old('last_name')){{old('last_name')}}@else{{$business->last_name}}@endif" required>
            </div>

            <label for="business-name">Business Name</label>
            <input type="text" id="business-name" name="business_name" placeholder="Business Name"   value="@if(old('business_name')){{old('business_name')}}@else{{$business->business_name}}@endif" required>

            <label for="description">Description</label>
            <textarea id="description" name="description" placeholder="Description" value="@if(old('description')){{old('description')}}@else{{$business->description}}@endif" required></textarea>

            <label for="business-type">Type of Business</label>
            <select id="business-type" name="business_type"  value="@if(old('business_type')){{old('business_type')}}@else{{$business->business_type}}@endif" required>
                <option value="">Select Category</option>
                <option value="retail">Retail</option>
                <option value="store">store</option>
                <option value="service">Service</option>
                <option value="industry">Industry</option>
                <option value="manufacturing">Manufacturing</option>
                <option value="others">Others</option>
            </select>

            <label for="other-type" id="other-type-label" class="hidden">Please specify</label>
            <input type="text" id="other-type" name="other_type" class="hidden"  value="@if(old('other_type')){{old('other_type')}}@else{{$business->other_type}}@endif" placeholder="Specify other type">

            <label for="email">E-mail ID</label>
            <input type="email" id="email" name="email" placeholder="E-mail ID"  value="@if(old('email')){{old('email')}}@else{{$business->email}}@endif" required>

            <label for="phone-number">Phone Number</label>
            <input type="tel" id="phone-number" name="phone_number" placeholder="Phone Number"  value="@if(old('phone_number')){{old('phone_number')}}@else{{$business->phone_number}}@endif" required>

            <label for="address">Address</label>
            <textarea id="street-address" name="street_address" placeholder="Street Address"  value="@if(old('street_address')){{old('street_address')}}@else{{$business->street_address}}@endif" required></textarea>
            <input type="text" id="city" name="city" placeholder="City" value="@if(old('city')){{old('city')}}@else{{$business->city}}@endif" required>
            <input type="text" id="state" name="state" placeholder="State"  value="@if(old('state')){{old('state')}}@else{{$business->state}}@endif" required>
            <input type="text" id="zipcode" name="zipcode" placeholder="Zip Code" value="@if(old('zipcode')){{old('zipcode')}}@else{{$business->zipcode}}@endif" required>
            <input type="text" id="country" name="country" placeholder="Country"  value="@if(old('country')){{old('country')}}@else{{$business->country}}@endif" required>

            <label for="establishment-year">Establishment Year</label>
            <input type="date" id="establishment-year" name="establishment_year" placeholder="Year"  value="@if(old('establishment_year')){{old('establishment_year')}}@else{{$business->establishment_year}}@endif" required>

            <button type="submit">Submit</button>
        </form>
    </div>

    <script src="scripts.js"></script>
    <script>
        document.getElementById('business-type').addEventListener('change', function() {
    const otherTypeInput = document.getElementById('other-type');
    const otherTypeLabel = document.getElementById('other-type-label');
    if (this.value === 'others') {
        otherTypeInput.classList.remove('hidden');
        otherTypeLabel.classList.remove('hidden');
    } else {
        otherTypeInput.classList.add('hidden');
        otherTypeLabel.classList.add('hidden');
    }
});

    </script>
</body>
</html>
