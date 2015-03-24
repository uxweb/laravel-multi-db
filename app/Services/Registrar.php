<?php namespace App\Services;

use App\User;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Storage;
use Validator;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;

class Registrar implements RegistrarContract {

	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	public function validator(array $data)
	{
		return Validator::make($data, [
			'name' => 'required|max:255',
			'email' => 'required|email|max:255|unique:users',
			'password' => 'required|confirmed|min:6',
		]);
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return User
	 */
	public function create(array $data)
	{
		$user = User::create([
			'name' => $data['name'],
			'email' => $data['email'],
            'database' => $data['name'] . '.sqlite',
			'password' => bcrypt($data['password']),
		]);

        // Create the new user sqlite database
        Storage::put($user->database, '');

        // Set the tenant connection to the users own database
        Config::set('database.connections.tenantdb.database', storage_path().$user->database);

        // Run migrations for the new db
        Artisan::call('migrate', ['--database' => 'tenantdb', 'path' => 'database/migrations/tenant']);

        return $user;
	}

}
