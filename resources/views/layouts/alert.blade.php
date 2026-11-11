@if (session('success'))
    <div class="alert alert--success" role="status" aria-live="polite">
        <p>{{ session('success') }}</p>
        <button class="alert__close" type="button" aria-label="Dismiss notification" data-dismiss-alert>&times;</button>
    </div>
@endif

@if ($errors->any())
    <div class="alert alert--error" role="alert" aria-live="assertive">
        <div>
            <p class="alert__title">Please check the following:</p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <button class="alert__close" type="button" aria-label="Dismiss notification" data-dismiss-alert>&times;</button>
    </div>
@endif
