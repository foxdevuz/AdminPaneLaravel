<x-admin.index-layout>
    @foreach ($all as $item)
    <div class="card" style="width: 19rem; display:inline-block; margin: 0 1.2rem 1rem 1.2rem;">
        <img class="card-img-top" src="/storage/images/{{ $item->file }}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">{{ $item->name }}</h5>
            <h5 class="card-body">{{ $item->desc }}</h5>
            <a href="/news/delete?id={{ $item->id }}" class="btn btn-danger rounded">O'chirib tashlash</a>
        </div>
    </div>
    @endforeach
</x-admin.index-layout>
