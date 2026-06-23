<?php

namespace App\Filament\Widgets;

use App\Models\User;
use Filament\Widgets\Widget;

class LoginInfoWidget extends Widget
{
    protected string $view = 'filament.widgets.login-info';

    protected int | string | array $columnSpan = 'full';

    public static function canView(): bool
    {
        return auth()->user()?->email === 'admin@falanesolutions.com';
    }

    public function getUsers()
    {
        return User::all(['id', 'name', 'email']);
    }
}
