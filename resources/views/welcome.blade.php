@extends('layouts.default')

@section('content')
<div class = "container">
    <h1>{{ Lang::get('messages.greeting') }}</h1>
    <div class = "row">
        <div class = "lead">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nec ante vitae lectus cursus
            condimentum ac quis nulla. Phasellus nec arcu vitae dui mollis finibus. Aenean eget justo ante. Ut a leo
            libero. Integer ullamcorper ultricies lacus in porttitor. Ut venenatis, erat nec hendrerit pharetra, dui
            sapien euismod lectus, ut mattis est ipsum ut diam. Donec scelerisque scelerisque leo sed volutpat.
            Pellentesque porttitor nisl tincidunt ultrices sodales. Ut dictum non urna sit amet varius. Phasellus
            vel velit condimentum, aliquam nibh non, consectetur libero. Phasellus pulvinar, mauris eu semper
            volutpat, turpis dui efficitur est, sit amet suscipit magna leo vel sem. Etiam facilisis a libero sit
            amet cursus. Fusce tempus pellentesque eros vitae scelerisque. Donec enim nulla, commodo nec tortor
            eget, dictum tristique massa. Pellentesque finibus quam vel arcu fringilla tempor.
        </div>
        <p>
            Curabitur sit amet vehicula nisi. In hendrerit ligula ut lorem aliquet, a sagittis lorem pellentesque.
            Vestibulum tincidunt ac neque nec suscipit. Donec vulputate, urna vel pretium pulvinar, ex elit pulvinar
            mauris, a mollis enim urna vitae eros. Integer id aliquam nunc. Pellentesque sit amet ipsum lobortis,
            pellentesque velit id, venenatis velit. Vivamus dictum mi eget lacus elementum ullamcorper. Curabitur
            sagittis ullamcorper dui quis venenatis. Suspendisse in dui aliquet, convallis mauris rutrum, euismod
            tortor.
        </p>
    </div>
</div>
@endsection
