<?php
include(dirname(__DIR__).'/entities/User.php');
include(dirname(__DIR__).'/connection.php');

class UserRepository
{
    public function add(User $user){}
    public function get(User $user){}
    public function remove(User $user){}
    public function update(User $user){}
}