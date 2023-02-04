<?php

class User
{

    public $id;
    public $username;
    public $password;
    public $email;
    public $role;
    public $status;
    public $created_at;
    public $updated_at;

    public function __construct()
    {
        $this->id         = 0;
        $this->username   = '';
        $this->password   = '';
        $this->email      = '';
        $this->role       = 0;
        $this->status     = 0;
        $this->created_at = '';
        $this->updated_at = '';
    }

    public function get_id()
    {
        return $this->id;
    }

    public function get_username()
    {
        return $this->username;
    }

    public function get_password()
    {
        return $this->password;
    }

    public function get_email()
    {
        return $this->email;
    }

    public function get_role()
    {
        return $this->role;
    }

    public function get_status()
    {
        return $this->status;
    }

    public function get_created_at()
    {
        return $this->created_at;
    }

    public function get_updated_at()
    {
        return $this->updated_at;
    }

    public function set_id($id)
    {
        $this->id = $id;
    }

    public function set_username($username)
    {
        $this->username = $username;
    }

    public function set_password($password)
    {
        $this->password = $password;
    }

    public function set_email($email)
    {
        $this->email = $email;
    }

    public function set_role($role)
    {
        $this->role = $role;
    }

    public function set_status($status)
    {
        $this->status = $status;
    }

    public function set_created_at($created_at)
    {
        $this->created_at = $created_at;
    }

    public function set_updated_at($updated_at)
    {
        $this->updated_at = $updated_at;
    }

}
