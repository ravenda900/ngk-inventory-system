@extends('layouts.app')

@section('content')
    <login></login>
@endsection

@section('scripts')
    <script type="text/javascript">
        $(function() {
            demo.checkFullPageBackgroundImage();

            setTimeout(function() {
                // after 1000 ms we add the class animated to the login/register card
                $('.card').removeClass('card-hidden');
            }, 700);
        });
    </script>
@endsection