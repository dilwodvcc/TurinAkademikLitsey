<?php

declare(strict_types=1);

namespace App\MoonShine\Layouts;

use MoonShine\Laravel\Layouts\AppLayout;
use MoonShine\ColorManager\ColorManager;
use MoonShine\Contracts\ColorManager\ColorManagerContract;
use MoonShine\Laravel\Components\Layout\{Locales, Notifications, Profile, Search};
use MoonShine\UI\Components\{Breadcrumbs,
    Components,
    Layout\Flash,
    Layout\Div,
    Layout\Body,
    Layout\Burger,
    Layout\Content,
    Layout\Footer,
    Layout\Head,
    Layout\Favicon,
    Layout\Assets,
    Layout\Meta,
    Layout\Header,
    Layout\Html,
    Layout\Layout,
    Layout\Logo,
    Layout\Menu,
    Layout\Sidebar,
    Layout\ThemeSwitcher,
    Layout\TopBar,
    Layout\Wrapper,
    When};
use App\MoonShine\Resources\SliderResource;
use MoonShine\MenuManager\MenuItem;
use App\MoonShine\Resources\VideoResource;
use App\MoonShine\Resources\PhotoCardResource;
use App\MoonShine\Resources\GroupResource;
use App\MoonShine\Resources\TeacherResource;
use App\MoonShine\Resources\HomeSliderResource;

final class MoonShineLayout extends AppLayout
{
    protected function assets(): array
    {
        return [
            ...parent::assets(),
        ];
    }

    protected function menu(): array
    {
        return [
            ...parent::menu(),
            MenuItem::make('Sliders', SliderResource::class),
            MenuItem::make('Videos', VideoResource::class),
            MenuItem::make('PhotoCards', PhotoCardResource::class),
            MenuItem::make('Groups', GroupResource::class),
            MenuItem::make('Teachers', TeacherResource::class),
            MenuItem::make('HomeSliders', HomeSliderResource::class),
        ];
    }

    /**
     * @param ColorManager $colorManager
     */
    protected function colors(ColorManagerContract $colorManager): void
    {
        parent::colors($colorManager);

        // $colorManager->primary('#00000');
    }

}
