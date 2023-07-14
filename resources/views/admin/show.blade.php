<x-admin.index-layout>
    @foreach ($all as $item)
        <x-admin.extra.showCard :image="$item->file" :title="$item->title" :id="$item->id"/>
    @endforeach
</x-admin.index-layout>
