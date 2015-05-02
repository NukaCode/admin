<div class="row">
    @foreach ($config->notifications as $notification)
        @include('layouts.admin.notification', (array)$notification)
    @endforeach
</div>
<div class="row">
    <div class="col-md-6">
        <div class="panel panel-inverse">
            <div class="panel-heading">Site Details</div>
            <table class="table table-condensed table-striped table-hover">
                <tbody>
                    <tr>
                        <td>Url</td>
                        <td>{{ Config::get('app.url') }}</td>
                    </tr>
                    <tr>
                        <td>Auth Driver</td>
                        <td>{{ Config::get('auth.driver') }}</td>
                    </tr>
                    <tr>
                        <td>Auth Model</td>
                        <td>{{ Config::get('auth.model') }}</td>
                    </tr>
                    <tr>
                        <td>Database</td>
                        <td>{{ Config::get('database.default') }}</td>
                    </tr>
                    <tr>
                        <td>Cache Driver</td>
                        <td>{{ Config::get('cache.default') }}</td>
                    </tr>
                    <tr>
                        <td>Cache Prefix</td>
                        <td>{{ Config::get('cache.prefix') }}</td>
                    </tr>
                    <tr>
                        <td>Filesystem</td>
                        <td>{{ Config::get('filesystems.default') }}</td>
                    </tr>
                    <tr>
                        <td>Mail Driver</td>
                        <td>{{ Config::get('mail.driver') }}</td>
                    </tr>
                    <tr>
                        <td>Mail Host</td>
                        <td>{{ Config::get('mail.host') }}</td>
                    </tr>
                    <tr>
                        <td>Queue Driver</td>
                        <td>{{ Config::get('queue.default') }}</td>
                    </tr>
                    <tr>
                        <td>Session Driver</td>
                        <td>{{ Config::get('session.driver') }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-md-6">
        <div class="panel panel-inverse">
            <div class="panel-heading">Laravel Details</div>
            <table class="table table-condensed table-striped table-hover">
                <tbody>
                    <tr>
                        <td>Laravel</td>
                        <td style="width: 20%;">{{ $laravelVersion }}</td>
                        <td style="width: 20%;" class="text-right">{{ bHTML::link('http://packagist.org/packages/laravel/framework#'. $laravelVersion, 'View', ['target' => '_blank']) }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="panel panel-inverse">
            <div class="panel-heading">Nuka Code Package Versions</div>
            <table class="table table-condensed table-striped table-hover">
                <tbody>
                    @foreach ($packages as $package => $details)
                        <tr>
                            <td>{{ Str::title($package) }}</td>
                            <td style="width: 20%;">{{ $details['version'] }}</td>
                            <td style="width: 20%;" class="text-right">
                                {{ bHTML::link('http://packagist.org/packages/nukacode/'. $package .'#'. $details['version'], 'View', ['target' => '_blank']) }}
                                &nbsp;|&nbsp;
                                {{ bHTML::link('http://'. $details['docs'] .'.rtfd.org', 'Docs', ['target' => '_blank']) }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>