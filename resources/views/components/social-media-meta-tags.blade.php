@props(['card' => 'summary_large_image','title','description','image' => false])

<meta property="twitter:card" content="{{ $card }}" />
<meta property="twitter:site" content="@games" />
<meta property="og:title" content="{{$title}}" />
<meta property="og:description" content="{{$description}}" />

@if($image)
    <meta property="og:image" content="{{$image}}" /> <!--image absolute path -->
@endif
<meta property="og:url" content="{{ url()->current() }}" /> <!-- url absolute path -->
