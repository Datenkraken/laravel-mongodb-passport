<?php

namespace DesignMyNight\Mongodb;

use Illuminate\Support\ServiceProvider;
use Laravel\Passport\Passport;

use DesignMyNight\Mongodb\Passport\AuthCode;
use DesignMyNight\Mongodb\Passport\Client;
use DesignMyNight\Mongodb\Passport\PersonalAccessClient;
use DesignMyNight\Mongodb\Passport\Token;

class MongodbPassportServiceProvider extends ServiceProvider
{

    /**
     * @return void
     */
    public function register()
    {
        Passport::useTokenModel(Token::class);
        Passport::useClientModel(Client::class);
        Passport::useAuthCodeModel(AuthCode::class);
        Passport::usePersonalAccessClientModel(PersonalAccessClient::class);

    }
}
