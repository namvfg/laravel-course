@props(["imgSrc" => ""])

<button class="btn btn-default flex justify-center items-center gap-1">
    <img src="{{ $imgSrc }}" alt="" style="width: 20px" />
    {{ $slot }}
</button>