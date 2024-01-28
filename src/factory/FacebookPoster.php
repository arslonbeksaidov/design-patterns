<?php
namespace src\factory;

class FacebookPoster extends SocialNetworkPoster
{
    private string $password;
    private string $login;

    public function __construct(string $login, string $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function getSocialNetwork(): FacebookConnector
    {
        return new FacebookConnector($this->login, $this->password);
    }
}