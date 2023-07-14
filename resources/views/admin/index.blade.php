<x-admin.index-layout>
    @if (session()->has('error'))
        <x-extra.messages>{{ sesion()->get('error') }}</x-extra.messages>
    @endif
    <form action="/mainPage" method="post" enctype="multipart/form-data">
        @csrf
        <label for="title" class="form-label">Xabar mavzusi <small class="text-warning">30ta xarfdan oshmasligi tasiya qilinadi</small></label>
        <input type="text" name="title" id="title" placeholder="Xabar mavzusi" required autocomplete="off" class="form-control">

        <label for="bg" class="form-label mt-5">Xabar foni rasmi</label>
        <input type="file" name="file" id="bg" required class="form-control">
        <button class="btn btn-primary rounded mt-5">Joylash</button>
    </form>
</x-admin.index-layout>
