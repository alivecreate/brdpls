<div class="page-heading">
    <nav class="nav__underline">
        <ul class="group detail-tab">

            <li class='home'> <a class="text-lg"
                    href="{{route('businessDetail', ['city' => $businessDetail->city, 'slug' => $businessDetail->slug])}}">
                    Overview </a> </li>
            <li class='product'> <a class="text-lg"
                    href="{{route('businessDetail', ['city' => $businessDetail->city, 'slug' => $businessDetail->slug])}}?p=true">
                    Products </a> </li>

            <li class='review'> <a class="text-lg"
                    href="{{route('businessDetail', ['city' => $businessDetail->city, 'slug' => $businessDetail->slug])}}?review=true">
                    Reviews </a> </li>

            <li class='service'> <a class="text-lg" href="#"> Services </a> </li>
        </ul>
    </nav>
</div>