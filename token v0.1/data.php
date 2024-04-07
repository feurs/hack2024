<?php

class Data
{
    public string $login = '';
    public string $password = '';
    public string $dateOfRegistration;
    public string $address = 'userDatas.txt';
    public float $moneyOnDeposit = 0;
    public array $financialAssets = [
        'BTCUSDT' => 0,
        'ETHUSDT' => 0,
        'BNBUSDT' => 0,
        'ADAUSDT' => 0,
        'XRPUSDT' => 0,
        'SOLUSDT' => 0,
        'DOTUSDT' => 0,
        'DOGEUSDT' => 0,
        'LUNAUSDT' => 0,
        'AVAXUSDT' => 0,
        'TATRA' => 0,
    ];

    public function test(): void
    {
        echo 'im working';
    }

    public function __construct(string $login, string $password)
    {
        $this->login = $login;
        $this->password = $password;
        $this->dateOfRegistration = date('Y-m-d H:i:s');
    }

    public function serializeDataFromForm(): void
    {
        $data = array(
            'login' => $this->login,
            'password' => $this->password,
        );

        $serializedData = serialize($data);
        file_put_contents($this->address, $serializedData . PHP_EOL, FILE_APPEND);

    }

    /**
     * @param string $pairName
     * @param float $price
     * @param float $quantity
     * @return bool
     */
    public function buyCryptocurrency(string $pairName, float $price, float $quantity): bool
    {
        if ($quantity * $price > $this->moneyOnDeposit) return 0;
        $this->moneyOnDeposit -= $quantity * $price;
        $this->financialAssets[$pairName] += $quantity;
        return 1;
    }

    /**
     * @param string $pairName
     * @param float $price
     * @param float $quantity
     * @return int
     */
    public function sellCryptocurrency(string $pairName, float $price, float $quantity)
    {
        if ($quantity > $this->financialAssets[$pairName]) return 0;
        $this->financialAssets[$pairName] -= $quantity;
        $this->moneyOnDeposit += ($price * $quantity);
        return 1;
    }
}

?>
