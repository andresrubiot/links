<div class="links">
    @foreach ($links as $link)
        <a href="{{ $link->url }}">{{ $link->title }}</a>
    @endforeach
 </div>
