<?php

namespace Speedcube\Speedcube\Http\Controllers;

use Auth;
use Speedcube\Speedcube\Classes\ApiController;
use Speedcube\Speedcube\Models\Config;

/**
 * Configs
 */
class ConfigsController extends ApiController
{
    /**
     * Create a new config.
     */
    public function create()
    {
        $data = post();

        $user = Auth::getUser();

        $model = $user->configs()->create([
            'data' => $data['data'],
            'puzzle_id' => $data['puzzle_id'],
        ]);
        
        return $this->success([
            'model' => $model,
        ]);
    }

    /**
     * Fetch a user's configs.
     */
    public function index()
    {
        $user = Auth::getUser();

        return $this->success([
            'configs' => $user->configs,
        ]);
    }
}
