<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Sale;
use App\Models\Subscription;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    //Free User
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'found_at' => ['required'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'is_paid' => 0,
            'found_at' => $request->found_at,
        ]);

        // Sale::create([
        //     'user_id' => null,
        //     'order_id' => null,
        //     'invoice_id' => null,
        // ]);

        //Send User email and name to Mailerlite
        $groupsApi = (new \MailerLiteApi\MailerLite("11d4cc05bf573576eb98b05cda9d7746"))->groups();
        $subscriber = [
            'email' => $request->email,
            'fields' => [
                'name' => $request->name
            ]
        ];
        $response = $groupsApi->addSubscriber(112296102, $subscriber);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
        // return redirect(route('select-plan'));
    }


    
}
