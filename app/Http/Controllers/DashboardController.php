<?php

namespace App\Http\Controllers;

use App\Models\User;

class DashboardController extends Controller
{
    public function __invoke(): mixed
    {
        /** @var User $user */
        $user = auth()->user();

        return view('dashboard', [
            'links' => $user->links()->orderBy('order')->get(),
        ]);
    }
}
