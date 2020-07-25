@props([
    'type' => 'success',
    'colors' => [
        'success' => 'bg-green-400 border-green-500',
        'error' => 'bg-red-400 border-red-500',
        'warning' => 'bg-orange-400 border-orange-500',
        'info' => 'bg-blue-400 border-blue-500',
    ]
])


<section {{ $attributes->merge(['class' => "{$colors[$type]} border p-4 mb-4"]) }}">
    <div class="flex justify-between">
        <p>
            {{ $slot }}
        </p>

        <button>&times;</button>
    </div>
</section>
