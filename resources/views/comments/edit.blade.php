<x-layout>
    <x-section>
        <x-form method="PATH" action="/comments/{{ $comment->id }}" class="">
            <div class="mb-6">

                @error('body')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4">Submit</button>
            </div>

        </x-form>

        <x-form-button method="DELETE" action="/comments/{{$comment->id}}" class="bg-blue-400 text-white rounded py-2 px-4">
            DELETE
        </x-form-button>

    </x-section>
</x-layout>
