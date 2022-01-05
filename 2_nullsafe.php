<?php

// Ref - https://php.watch/versions/8.0/null-safe-operator

class Customer {
    private ?Address $address = null;

    public function getAddress(): ?Address {
      return $this->address;
    }
}

class Address {
    public function getCountry(): string {}
}

$customer = new Customer();
// It will throw error
// $country = $customer->getAddress()->getCountry();

$country = $customer->getAddress()?->getCountry();

var_dump($country);

// Output NULL
