<?php

namespace DesignMyNight\Mongodb\Passport;

use Jenssegers\Mongodb\Eloquent\Model;
use Laravel\Passport\Passport;

/**
 * This is the same as the original class in https://github.com/laravel/passport, except for
 * the model that got switched out for the Mongodb model.
 */
class PersonalAccessClient extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'oauth_personal_access_clients';

    /**
     * The guarded attributes on the model.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Get all of the authentication codes for the client.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function client()
    {
        return $this->belongsTo(Passport::clientModel());
    }

    /**
     * Get the current connection name for the model.
     *
     * @return string|null
     */
    public function getConnectionName()
    {
        return config('passport.storage.database.connection') ?? $this->connection;
    }
}
