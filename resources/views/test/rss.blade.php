{{-- resources/views/news/index.blade.php --}}
<!DOCTYPE html>
<html>
<head>
    <title>GNS News</title>
</head>
<body>

<h1>GNS News</h1>


@foreach($items as $item)
    <div class="news-item">
        <h2>{!! $item['title'] !!}</h2>
        <p><a href="{{ $item['link'] }}" target="_blank">Read More</a></p>
        
        @php
            // Convert description to string if it is an array
            $description = is_array($item['description']) ? implode(' ', $item['description']) : $item['description'];
        @endphp

        
        <p>Published on: {{ date('d M Y, H:i', strtotime($item['pubDate'])) }}</p>

        @if(isset($item['media:content']['@attributes']['url']))
            <img src="{{ $item['media:content']['@attributes']['url'] }}" alt="Image">
        @endif
    </div>
    <hr>
@endforeach

</body>
</html>
