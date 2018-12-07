<?php

namespace Speedcube\Speedcube\Tests;

use Auth;
use Faker;
use Model;
use RainLab\User\Models\User;
use Speedcube\Speedcube\Models\Scramble;
use Speedcube\Speedcube\Models\Solve;

class Factory
{
    /**
     * Create a model and save it to the database.
     *
     * @param  Model    $model  Model to create
     * @param  array    $omit   Data to fill model with
     * @return Model
     */
    public static function create(Model $model, array $data = [], array $omit = [])
    {
        if (get_class($model) === 'RainLab\User\Models\User') {
            return self::registerUser($data);
        }

        $model = self::fill($model, $data, $omit);
        
        $model->save();

        return $model;
    }

    /**
     * Create a model and fill it with data.
     *
     * @param  Model    $model  Model to fill
     * @param  array    $data   Data to fill the model with
     * @return Model
     */
    public static function fill(Model $model, array $data = [], array $omit = [])
    {
        $seed = [];

        switch (get_class($model)) {
            case 'RainLab\User\Models\User': $seed = self::user($data); break;
            case 'Speedcube\Speedcube\Models\Scramble': $seed = self::scramble($data); break;
            case 'Speedcube\Speedcube\Models\Solve': $seed = self::solve($data); break;
        }
        
        $mergedData = array_merge($seed, $data);

        foreach ($mergedData as $key => $value) {
            $model->$key = $value;
        }

        foreach ($omit as $key) {
            unset($model->attributes[$key]);
        }

        return $model;
    }

    /**
     * Speedcube\Speedcube\Models\Solve
     *
     * @param  array $data
     * @return array
     */
    public static function getSolveData(array $data = [])
    {
        $faker = Faker\Factory::create();

        return [
            
        ];
    }

    /**
     * Register a user
     * 
     * @return \RainLab\User\Models\User
     */
    public static function registerUser(array $data = [], $autoActivate = true)
    {
        return Auth::register(self::getUserData($data), $autoActivate);
    }

    /**
     * User
     */
    public static function user(array $data = [])
    {
        $faker = Faker\Factory::create();

        return [
            'email' => $faker->email,
            'name' => $faker->name,
            'password' => 'foobar',
            'password_confirmation' => 'foobar',
        ];
    }

    /**
     * Scramble
     */
    public static function scramble(array $data = [])
    {
        return [
            'cube_size' => 3,
        ];
    }

    /**
     * Solve
     */
    public static function solve(array $data = [])
    {
        return [
            // ...
        ];
    }
}