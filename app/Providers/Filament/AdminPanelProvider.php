<?php

namespace App\Providers\Filament;

use Filament\Pages;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Facades\Filament;
use Filament\Navigation\MenuItem;
use Filament\Support\Colors\Color;
use Illuminate\Support\Facades\Auth;
use Filament\Navigation\NavigationGroup;
use Filament\Http\Middleware\Authenticate;
use App\Filament\Widgets\CreateEarningWidget;
use App\Filament\Widgets\CreateExpenseWidget;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use App\Filament\Resources\UserResource\Pages\CustomEditProfile;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('app')
            //            ->passwordReset() // enable when you need. do not forget to set up email
            //            ->emailVerification() // enable when you need. do not forget to set up email
            ->login()
            ->colors([
                'primary' => '#15803d',
                'gray' => '#334155',
                'danger' => Color::Rose,
                'info' => Color::Blue,
                'success' => Color::Emerald,
                'warning' => Color::Orange,
            ])
            ->registration()
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->userMenuItems([
                'profile' => MenuItem::make()->url(fn(): string => CustomEditProfile::getUrl(['record' => Auth::id()])),
            ])
            ->pages([
                Pages\Dashboard::class,
            ])
            ->sidebarCollapsibleOnDesktop()
            ->globalSearch()
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->widgets([
                CreateExpenseWidget::class,
                CreateEarningWidget::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->sidebarCollapsibleOnDesktop()
            ->databaseNotifications()
            ->globalSearch()
            ->viteTheme('resources/css/filament/app/theme.css')
            ->authMiddleware([
                Authenticate::class,
            ]);
    }

    public function boot(): void
    {
        Filament::serving(function () {
            Filament::registerNavigationGroups([
                'Expenses' => NavigationGroup::make()
                    ->label(__('main.expenses'))
                    ->icon('tabler-shopping-bag'),
                'Earnings' => NavigationGroup::make()
                    ->label(__('main.earnings'))
                    ->icon('tabler-wallet'),
                'Reports' => NavigationGroup::make()
                    ->label(__('main.reports'))
                    ->icon('tabler-report-analytics'),
                'System' => NavigationGroup::make()
                    ->label(__('main.settings'))
                    ->icon('tabler-settings'),
            ]);
        });
    }
}
