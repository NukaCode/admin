<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>{{ $pageTitle }}</title>

<link rel="shortcut icon" href="{{ URL::to('/img/favicon.ico') }}" />

<!-- Local styles -->
{{ bHTML::style('http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700') }}
{{ bHTML::style('css/admin-all.css') }}

<!-- Css -->
@section('css')
@show
<!-- Css Form -->
@section('cssForm')
@show