@if (session()->has('message'))
    <div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show" class="alert alert-primary" role="alert">
        <p class="text-black text-small">
            {{session('message')}}
        </p>
    </div>
@endif