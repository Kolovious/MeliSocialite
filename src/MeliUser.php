<?php

namespace Kolovious\MeliSocialite;

use Laravel\Socialite\Two\User;

class MeliUser extends User
{
    public $refresh_token;
    public $expires_at;
    protected $expired_in;

    /**
     * Set the token on the user.
     *
     * @param string $refresh_token
     * @return $this
     */
    public function setRefreshToken($refresh_token)
    {
        $this->refresh_token = $refresh_token;

        return $this;
    }

    /**
     * Set the token on the user.
     *
     * @param string $expires_in
     * @return $this
     */
    public function setExpiresIn($expires_in)
    {
        $this->expired_in = $expires_in;
        $this->expires_at = time() + $expires_in;

        return $this;
    }
}
