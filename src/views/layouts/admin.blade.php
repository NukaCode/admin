<!doctype html>
<html>
<head>
    <?php
    $config = json_decode(File::get(base_path() . '/admin.json'))
    ?>
	@include('layouts.admin.header')
</head>
<body class="fixed-navigation">
    <div id="wrapper">
		@include('layouts.admin.menu')
		<div id="page-wrapper" class="gray-bg sidebar-content">
            <div class="row">
                <div class="wrapper" id="ajaxContent">
                    @if (isset($content))
                        {{ $content }}
                    @else
                        @yield('content')
                    @endif
                </div>
            </div>
        </div>
    </div>

	@include('layouts.partials.modals')

	@include('layouts.admin.javascript')

</body>
</html>