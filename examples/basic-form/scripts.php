<?php
class Data
{
    public string $firstName = '';
    public string $lastName = '';
    public string $address = 'data.txt';

    public function getDataFromForm($firstName, $lastName): void
    {
        $this->firstName = $firstName !== null ? $firstName : '';
        $this->lastName = $lastName !== null ? $lastName : '';
    }

    public function serializeDataFromForm(): void
    {
        $data = array(
            'firstName' => $this->firstName,
            'lastName' => $this->lastName,
        );

        $serializedData = serialize($data);
        file_put_contents($this->address, $serializedData . PHP_EOL, FILE_APPEND);

    }
}
?>
