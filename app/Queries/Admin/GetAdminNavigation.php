<?php

namespace App\Queries\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class GetAdminNavigation
{
    public function __construct(private readonly Request $request)
    {
    }

    /** @return array<int, array{label: string, items: array<int, array<string, mixed>>}> */
    public function __invoke(User $user): array
    {
        return collect(config('admin-navigation'))
            ->map(function (array $group) use ($user): array {
                $group['items'] = collect($group['items'])
                    ->filter(fn (array $item): bool => in_array($user->role->value, $item['roles'], true))
                    ->map(function (array $item): array {
                        $routeName = $item['route'];
                        $item['available'] = $routeName !== null && Route::has($routeName);
                        $item['url'] = $item['available'] ? route($routeName) : null;
                        $item['current'] = isset($item['active']) && $this->request->routeIs($item['active']);

                        unset($item['roles'], $item['route'], $item['active']);

                        return $item;
                    })
                    ->values()
                    ->all();

                return $group;
            })
            ->filter(fn (array $group): bool => $group['items'] !== [])
            ->values()
            ->all();
    }
}
