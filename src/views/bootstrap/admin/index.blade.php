<div class="row">
    @foreach ($config->notifications as $notification)
        @include('layouts.admin.notification', (array)$notification)
    @endforeach
</div>