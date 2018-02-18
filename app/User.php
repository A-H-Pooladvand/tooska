<?php

namespace App;

use App\Notifications\MailResetPasswordToken;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laratrust\Traits\LaratrustUserTrait;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes, LaratrustUserTrait;

    protected $casts = [
        'is_active' => 'boolean'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'family', 'username', 'mobile', 'phone', 'avatar', 'verifyToken'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    /**
     * Returns user's full name
     *
     * @return string
     */
    public function fullName()
    {
        return $this->name . ' ' . $this->family;
    }

    /**
     * bcrypt User's Password whenever it wants to save.
     * @param $password
     */

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }

    public function getCreatedAtAttribute()
    {
        return jdate($this->attributes['created_at'])->format('Y/m/d');
    }

    public function getUpdatedAtAttribute()
    {
        return jdate($this->attributes['updated_at'])->format('Y/m/d');
    }

    public function getDeletedAtAttribute()
    {
        switch ($this->attributes['deleted_at']) {
            case ! null:
                return jdate($this->attributes['deleted_at'])->format('Y/m/d');
                break;
            default:
                return null;
        }
    }

    public function getDeletedAtStatusAttribute()
    {
        switch ($this->attributes['deleted_at']) {
            case null:
                return 'فعال';
                break;
            default:
                return 'غیر فعال';
        }
    }

    /**
     * Send a password reset email to the user
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new MailResetPasswordToken($token));
    }

    // Tooska
    public function why_choose_us()
    {
        return $this->hasMany(WhyChooseUs::class, 'user_id');
    }

    public function plans()
    {
        return $this->hasMany(Plan::class, 'user_id');
    }
}
