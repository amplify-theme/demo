@extends(template_view('index'))

@section('page-content')
    <div class="container padding-bottom-2x">
        <div class="row">
            <div class="col-12">
                <img class="d-block m-auto"
                     src="{{ assets_image(template_asset("images/errors/{$error_number}.svg")) }}"
                     style="width: 100%; max-width: 550px;" alt="{{$error_number}}">
                <div class="padding-top-1x text-center">
                    <h3>{{ $error_number ."-".$pageTitle }}</h3>
                    <p class="text-muted mt-3">@yield('description')</p>
                </div>
            </div>
        </div>
    </div>
@endsection
