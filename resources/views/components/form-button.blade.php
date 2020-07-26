<x-form method="{{$method}}" action="{{$action}}" class="">
    <div>
        <button type="submit" class="{{ $attributes->get('class') }}">
            {{ $slot }}
        </button>
    </div>

</x-form>
