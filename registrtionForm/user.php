<?php
class Data
{
    public string $login = '';
    public string $password = '';
    public string $dateOfRegistration;
    public string $address = 'userDatas.txt';

    public function __construct(string $login, string $password)
    {
        $this->login = $login;
        $this->password = $password;
        $this->dateOfRegistration = date('Y-m-d H:i:s');
    }


//    public function getDataFromRegistration($login, $password): void
//    {
//        $this->login = $$login !== null ? $login : '';
//        $this->password = $password !== null ? $password : '';
//    }

    public function serializeDataFromForm(): void
    {
        $data = array(
            'login' => $this->login,
            'password' => $this->password,
        );

        $serializedData = serialize($data);
        file_put_contents($this->address, $serializedData . PHP_EOL, FILE_APPEND);

    }
}
?>
