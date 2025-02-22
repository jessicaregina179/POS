<div class="card">
    <div class="card-header">
        {{ $header }}
    </div>
    <div class="card-body">
        {{ $slot }}
    </div>
</div>

@component('components.card')
    @slot('header')
      Component & Slot
    @endslot
​
    <p>Ini adalah card yang telah menggunakan blade component</p>
@endcomponent