<?php

namespace Pterodactyl\Http\Requests\Server\Database;

use Pterodactyl\Http\Requests\Server\ServerFormRequest;

class DeleteServerDatabaseRequest extends ServerFormRequest
{
    /**
     * @return bool
     */
    public function authorize()
    {
        if (! parent::authorize()) {
            return false;
        }

        return config('pterodactyl.client_features.databases.enabled');
    }

    /**
     * Return the user permission to validate this request aganist.
     *
     * @return string
     */
    protected function permission(): string
    {
        return 'delete-database';
    }

    /**
     * Rules to validate this request aganist.
     *
     * @return array
     */
    public function rules()
    {
        return [];
    }
}
