<?php

namespace DesignMyNight\Mongodb;

use Illuminate\Support\ServiceProvider;

use DesignMyNight\Mongodb\Passport\AuthCode;
use DesignMyNight\Mongodb\Passport\Client;
use DesignMyNight\Mongodb\Passport\PersonalAccessClient;
use DesignMyNight\Mongodb\Passport\RefreshToken;
use DesignMyNight\Mongodb\Passport\Token;

class MongodbPassportServiceProvider extends ServiceProvider
{

    /**
     * @return void
     */
    public function register()
    {
        if (class_exists('Illuminate\Foundation\AliasLoader')) {
            $loader = \Illuminate\Foundation\AliasLoader::getInstance();

            $loader->alias('Laravel\Passport\AuthCode', AuthCode::class);
            $loader->alias('Laravel\Passport\Client', Client::class);
            $loader->alias('Laravel\Passport\PersonalAccessClient', PersonalAccessClient::class);
            $loader->alias('Laravel\Passport\Token', Token::class);
            $loader->alias('Laravel\Passport\RefreshToken', RefreshToken::class);
        } else {
            class_alias('Laravel\Passport\AuthCode', AuthCode::class);
            class_alias('Laravel\Passport\Client', Client::class);
            class_alias('Laravel\Passport\PersonalAccessClient', PersonalAccessClient::class);
            class_alias('Laravel\Passport\Token', Token::class);
            class_alias('Laravel\Passport\RefreshToken', RefreshToken::class);
        }
    }
}
