@props(['active'])

<div x-data="{
tabs: [],
activeTab: '{{ $active }}',
tabHeadings : [],
toggleTabs() {

this.tabs.forEach(tab => tab.__x.$data.showIfActive(this.activeTab));

} }" x-init="() => {
tabs = [...$refs.tabs.children];
    tabHeadings = tabs.map(tab => tab.__x.$data.name);

    toggleTabs();
}">

    <div class="mb-3">
        <template x-for="(tab, index) in tabHeadings" :key="index">
            <button
                class="px-4 py-1 text-sm rounded hover:bg-blue-500 hover:text-white"
                x-text="tab"
                @click="activeTab = tab; toggleTabs()"
                :aria-selected="tab === activeTab"
            :class="tab === activeTab ? 'bg-blue-500 text-white' : ''"></button>
        </template>
    </div>

    <div x-ref="tabs">
        {{ $slot }}
    </div>
</div>
