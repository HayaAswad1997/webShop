<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lobi.nl</title>
    <meta name="author" content="BankFido">
    <meta name="description" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @livewireStyles
    <link rel="stylesheet" href="{{ asset('css/colors.css') }}?v=0.2"/>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}?v=0.2"/>
    <link rel="stylesheet" href="{{ asset('css/iconpack.css') }}"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">


    @if(env('APP_ENV') == 'local')
        <meta name="env" content="true">
    @endif
</head>
