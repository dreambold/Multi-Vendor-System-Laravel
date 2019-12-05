
@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            Josh Admin
        @endcomponent
    @endslot

    {{-- Body --}}
# Hello  {!! $user->user_name !!},<br>

Welcome to SiteNameHere! Please click on the following link to confirm your SiteNameHere account:<br />
@component('mail::button', ['url' =>  $user->activationUrl  ])
    Activate Account
@endcomponent


    Thanks,

    {{-- Footer --}}
    @slot('footer')
    @component('mail::footer')
    &copy; 2017 All Copy right received
@endcomponent
@endslot
@endcomponent