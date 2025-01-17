<?php

class Block {
    public $index;
    public $timestamp;
    public $data;
    public $previousHash;
    public $hash;

    public function __construct($index, $timestamp, $data, $previousHash = '') {
        $this->index = $index;
        $this->timestamp = $timestamp;
        $this->data = $data;
        $this->previousHash = $previousHash;
        $this->hash = $this->calculateHash();
    }

    public function calculateHash() {
        return hash('sha256', $this->index . $this->timestamp . json_encode($this->data) . $this->previousHash);
    }
}

class Blockchain {
    public $chain;
    public $difficulty;

    public function __construct() {
        $this->chain = [$this->createGenesisBlock()];
        $this->difficulty = 2;
    }

    public function createGenesisBlock() {
        return new Block(0, date('Y-m-d H:i:s'), 'Genesis Block', '0');
    }
    public function getLatestBlock() {
        return $this->chain[count($this->chain) - 1];
    }

    public function addBlock($newBlock) {
        $newBlock->previousHash = $this->getLatestBlock()->hash;
        $newBlock->hash = $this->proofOfWork($newBlock);
        $this->chain[] = $newBlock;
    }

    public function isChainValid() {
        for ($i = 1; $i < count($this->chain); $i++) {
            $currentBlock = $this->chain[$i];
            $previousBlock = $this->chain[$i - 1];

            if ($currentBlock->hash !== $currentBlock->calculateHash()) {
                return false;
            }

            if ($currentBlock->previousHash !== $previousBlock->hash) {
                return false;
            }
        }
        return true;
    }

    private function proofOfWork($block) {
        $hash = $block->calculateHash();
        while (substr($hash, 0, $this->difficulty) !== str_repeat('0', $this->difficulty)) {
            $block->index++;
            $block->timestamp = date('Y-m-d H:i:s');
            $hash = $block->calculateHash();
        }
        return $hash;
    }
}

class Tatracoin {
    private $address;
    private $users;

    public function __construct($address) {
        $this->address = $address;
        $this->users = [];
        $this->loadUsers();
    }
    private function loadUsers() {
        if (file_exists($this->address)) {
            $usersData = file_get_contents($this->address);
            $this->users = unserialize($usersData);
        }
    }
    private function saveUsers() {
        file_put_contents($this->address, serialize($this->users));
    }
    public function transferCoin($from, $to, $amount) {
        if (!isset($this->users[$from]) || !isset($this->users[$to])) {
            return false;
        }

        if ($this->users[$from]->financialAssets['TATRA'] < $amount) {
            return false;
        }

        $this->users[$from]->financialAssets['TATRA'] -= $amount;
        $this->users[$to]->financialAssets['TATRA'] += $amount;
        $this->saveUsers();
        return true;
    }
    public function addUser($user) {
        $this->users[$user->login] = $user;
        $this->saveUsers();
    }

    public function getUser($login) {
        return isset($this->users[$login]) ? $this->users[$login] : null;
    }
}

?>
