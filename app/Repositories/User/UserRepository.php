<?php

namespace App\Repositories\User;

use App\Enums\UserRole;
use App\Enums\UserStatus;
use App\Helpers\Data;
use App\Helpers\UserHelper;
use App\Models\User;
use App\Models\UserDetail;
use App\Repositories\BaseRepository;
use Exception;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    /**
     * get model
     *
     * @return \App\Models\User
     */
    public function getModel()
    {
        return \App\Models\User::class;
    }

    /**
     * update profile
     *
     * @param  array $data
     * @return bool
     */
    public function updateProfile($data)
    {
        $me = Auth::user();
        DB::beginTransaction();
        try {
            $user_data = [
                'first_name' => $data['firstname'],
                'last_name' => $data['lastname'],
                'updated_by' => $me->id,
            ];
            User::where('id', $data['id'])->update($user_data);
            DB::commit();
            return true;
        } catch (Exception $ex) {
            DB::rollBack();
            Log::error('Update Profile: ' . $ex);
            return false;
        }
    }

    /**
     * create user
     *
     * @param  array $data
     * @return bool
     */
    public function createUser($data)
    {
        DB::beginTransaction();
        try {
            $me = Auth::user();
            $user = User::create(
                [
                    'email' => $data['email'],
                    'password' => Str::random(64),
                    'status' => UserStatus::DEACTIVATE,
                    'role_id' => $data['role_id'],
                    'first_name' => $data['firstname'],
                    'last_name' => $data['lastname'],
                    'company_id' => $data['company_id'],
                    'created_by' => $me->id,
                    'updated_by' => $me->id,
                ]
            );
            DB::commit();
            //dispatch event - send email active account
            event(new Registered($user));
            return true;
        } catch (Exception $ex) {
            DB::rollBack();
            Log::error('Create User: ' . $ex);
            return false;
        }
    }

    /**
     * update user
     *
     * @param  array $data
     * @return bool
     */
    public function updateUser($data)
    {
        DB::beginTransaction();
        try {
            $me = Auth::user();
            $user = User::where('id', $data['id'])->update(
                [
                    'first_name' => $data['firstname'],
                    'last_name' => $data['lastname'],
                    'role_id' => $data['role_id'],
                    'company_id' => $data['company_id'],
                    'updated_by' => $me->id,
                ]
            );
            DB::commit();
            return true;
        } catch (Exception $ex) {
            DB::rollBack();
            Log::error('Update User: ' . $ex);
            return false;
        }
    }

    /**
     * get all users
     *
     * @return array
     */
    public function getUsers()
    {
        $users = User::all();

        foreach ($users as $user) {
            $user->created_by = UserHelper::compose_human_by($user->created_by);
            $user->updated_by = UserHelper::compose_human_by($user->updated_by);
        }

        return $users;
    }
}
