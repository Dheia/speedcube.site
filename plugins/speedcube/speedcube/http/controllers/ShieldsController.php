<?php

namespace Speedcube\Speedcube\Http\Controllers;

// {
//   "schemaVersion": 1,
//   "label": "hello",
//   "message": "sweet world",
//   "color": "orange"
// }

use Speedcube\Speedcube\Classes\ApiController;
use Speedcube\Speedcube\Models\Solve;
use Speedcube\Speedcube\Classes\Utils;

class ShieldsController extends ApiController
{
    /**
     * Redirect to replay page so badges can link to solves
     */
    public function replay($puzzle)
    {
        $solve = Solve::completed()
            ->fastest()
            ->puzzle($puzzle)
            ->firstOrFail();

        return redirect("/replay/{$solve->id}");
    }

    /**
     * Fetch JSON data for use with shields.io
     */
    public function puzzle($puzzle)
    {
        $solve = Solve::completed()
            ->fastest()
            ->puzzle($puzzle)
            ->firstOrFail();

        return [
            'color' => 'orange',
            'label' => $puzzle,
            'message' => Utils::formatShortTime($solve->time),
            'schemaVersion' => 1,
        ];
    }
}