<?php

/*
 * This file is part of the gilbertsoft/saferpay-json-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace Gilbertsoft\SaferpayJsonApi\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class PaymentMeans
{
    /**
     * @var Gilbertsoft\SaferpayJsonApi\Container\Brand
     * @SerializedName("Brand")
     * @Type("Gilbertsoft\SaferpayJsonApi\Container\Brand")
     */
    protected $brand;

    /**
     * @var string
     * @SerializedName("DisplayText")
     * @Type("string")
     */
    protected $displayText;

    /**
     * @var string
     * @SerializedName("Wallet")
     * @Type("string")
     */
    protected $wallet;

    /**
     * @var Gilbertsoft\SaferpayJsonApi\Container\Card
     * @SerializedName("Card")
     * @Type("Gilbertsoft\SaferpayJsonApi\Container\Card")
     */
    protected $card;

    /**
     * @var Gilbertsoft\SaferpayJsonApi\Container\BankAccount
     * @SerializedName("BankAccount")
     * @Type("Gilbertsoft\SaferpayJsonApi\Container\BankAccount")
     */
    protected $bankAccount;

    /**
     * @return Gilbertsoft\SaferpayJsonApi\Container\Brand
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @param Gilbertsoft\SaferpayJsonApi\Container\Brand $brand
     * @return PaymentMeans
     */
    public function setBrand(Brand $brand)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * @return string
     */
    public function getDisplayText()
    {
        return $this->displayText;
    }

    /**
     * @param string
     * @return PaymentMeans
     */
    public function setDisplayText($displayText)
    {
        $this->displayText = $displayText;

        return $this;
    }

    /**
     * @return string
     */
    public function getWallet()
    {
        return $this->wallet;
    }

    /**
     * @param string $wallet
     * @return PaymentMeans
     */
    public function setWallet($wallet)
    {
        $this->wallet = $wallet;

        return $this;
    }

    /**
     * @return Gilbertsoft\SaferpayJsonApi\Container\Card
     */
    public function getCard()
    {
        return $this->card;
    }

    /**
     * @param Gilbertsoft\SaferpayJsonApi\Container\Card $card
     * @return PaymentMeans
     */
    public function setCard(Card $card)
    {
        $this->card = $card;

        return $this;
    }

    /**
     * @return Gilbertsoft\SaferpayJsonApi\Container\BankAccount
     */
    public function getBankAccount()
    {
        return $this->bankAccount;
    }

    /**
     * @param Gilbertsoft\SaferpayJsonApi\Container\BankAccount $bankAccount
     * @return PaymentMeans
     */
    public function setBankAccount(BankAccount $bankAccount)
    {
        $this->bankAccount = $bankAccount;

        return $this;
    }
}
