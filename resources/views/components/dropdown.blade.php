<div>

    <div @click="open = !open">
        {{ $trigger }}
    </div>

    <div class="absolute z-20 bg-white rounded shadow-md py-2 mt-1" v-show="open">
        {{ $slot }}
    </div>
</div>
