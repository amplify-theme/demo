<x-amplify.error-page :$pageTitle>
    <div class="container-fluid padding-top-2x padding-bottom-2x">
        <img class="d-block m-auto" src="{{ theme_asset("images/errors/{$error_number}.png") }}"
             style="width: 100%; max-width: 550px;" alt="{{ $error_number }}">
        <div class="padding-top-1x mt-2 text-center">
            <h3>{{ $error_number . '-' . $pageTitle }}</h3>
            <p class="text-dark mt-3">@yield('description')</p>
            <button type="button" class="btn btn-outline-primary" onclick="window.history.back()">Back To
                Previous Page
            </button>
        </div>
    </div>
</x-amplify.error-page>
