<?php

/**
 * Created by PhpStorm.
 * @Author: baiyinliang@styd.cn
 * @CreateTime 2019-10-23 16:21
 */

declare(strict_types=1);

namespace App\Model;

/**
 * @property int $id
 * @property string $username
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property int $status
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $verification_token
 */
class Info extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'info';
}