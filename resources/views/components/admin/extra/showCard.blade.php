@props(['image', 'title', 'id'])
<div class="card" style="width: 19rem; display:inline-block; margin: 0 1.2rem 1rem 1.2rem;">
    <img class="card-img-top" src="/storage/images/{{ $image }}" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title">{{ $title }}</h5>
        <a href="/mainpagenews/delete?id={{ $id }}" class="btn btn-danger rounded">O'chirib tashlash</a>
    </div>
</div>
