<div x-data="{
    items: {},
    init () {
        $wire.fetchItems()
        $wire.$on('itemsFetched', (items) => {
            this.items = [...items.items]
        })
    },
}">
    <template x-for="item in items" :key="item.id">
        <div x-html="item.html"></div>
    </template>
</div>
