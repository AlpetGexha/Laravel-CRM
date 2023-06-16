<?php

namespace App\Providers;

use App\Models\Company;
use App\Models\Contact;
use App\Models\Interaction;
use App\Models\JobTitle;
use App\Policies\CompanyPolicy;
use App\Policies\ContactPolicy;
use App\Policies\InteractionPolicy;
use App\Policies\JobTitlePolicy;
use App\Policies\UserPolicy;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        User::class => UserPolicy::class,
        Contact::class => ContactPolicy::class,
        Interaction::class => InteractionPolicy::class,
        Company::class => CompanyPolicy::class,
        JobTitle::class => JobTitlePolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        ResetPassword::createUrlUsing(function (object $notifiable, string $token) {
            return config('app.frontend_url')."/password-reset/{$token}?email={$notifiable->getEmailForPasswordReset()}";
        });

        //
    }
}
