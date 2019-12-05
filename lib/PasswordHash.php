<?php
class PasswordHash extends Db
{
    private $hash;
    
    public function sethash($password)
    {
        $this->hash=password_hash($password, PASSWORD_DEFAULT);
    }
    public function is_valid($password, $hash)
    {
        return password_verify($password, $hash);
        
    }
    public function getHash()
    {
       return $this->hash;
    }
    
}
?>