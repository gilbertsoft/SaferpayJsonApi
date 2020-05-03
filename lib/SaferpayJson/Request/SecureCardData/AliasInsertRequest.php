<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\SecureCardData;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Ticketpark\SaferpayJson\Container\CardForm;
use Ticketpark\SaferpayJson\Container\Check;
use Ticketpark\SaferpayJson\Container\PaymentMeans;
use Ticketpark\SaferpayJson\Container\RegisterAlias;
use Ticketpark\SaferpayJson\Container\ReturnUrls;
use Ticketpark\SaferpayJson\Container\Styling;
use Ticketpark\SaferpayJson\Request\Request;
use Ticketpark\SaferpayJson\Request\RequestCommonsTrait;
use Ticketpark\SaferpayJson\Request\RequestConfig;
use Ticketpark\SaferpayJson\Response\SecureCardData\AliasInsertResponse;

class AliasInsertRequest extends Request
{
    const API_PATH = '/Payment/v1/Alias/Insert';
    const RESPONSE_CLASS = AliasInsertResponse::class;

    const PAYMENT_METHOD_AMEX = "AMEX";
    const PAYMENT_METHOD_BANCONTACT = "BANCONTACT";
    const PAYMENT_METHOD_BONUS = "BONUS";
    const PAYMENT_METHOD_DINERS = "DINERS";
    const PAYMENT_METHOD_DIRECTDEBIT = "DIRECTDEBIT";
    const PAYMENT_METHOD_JCB = "JCB";
    const PAYMENT_METHOD_MAESTRO = "MAESTRO";
    const PAYMENT_METHOD_MASTERCARD = "MASTERCARD";
    const PAYMENT_METHOD_MYONE = "MYONE";
    const PAYMENT_METHOD_SAFERPAYTEST = "SAFERPAYTEST";
    const PAYMENT_METHOD_UNIONPAY = "UNIONPAY";
    const PAYMENT_METHOD_VISA = "VISA";
    const PAYMENT_METHOD_VPAY = "VPAY";

    const TYPE_CARD = 'CARD';
    const TYPE_BANK_ACCOUNT = 'BANK_ACCOUNT';
    const TYPE_POSTFINANCE = 'POSTFINANCE';
    const TYPE_TWINT = 'TWINT';

    use RequestCommonsTrait;

    /**
     * @var RegisterAlias
     * @SerializedName("RegisterAlias")
     */
    protected $registerAlias;

    /**
     * @var string
     * @SerializedName("Type")
     * @Type("string")
     */
    protected $type;

    /**
     * @var ReturnUrls
     * @SerializedName("ReturnUrls")
     */
    protected $returnUrls;

    /**
     * @var Styling
     * @SerializedName("Styling")
     */
    protected $styling;

    /**
     * @var string
     * @SerializedName("LanguageCode")
     * @Type("string")
     */
    protected $languageCode;

    /**
     * @var Check
     * @SerializedName("Check")
     */
    protected $check;

    /**
     * @var array<string>
     * @SerializedName("PaymentMethods")
     */
    protected $paymentMethods;

    /**
     * @var CardForm
     * @SerializedName("CardForm")
     */
    protected $cardForm;

    /**
     * @var PaymentMeans
     * @SerializedName("PaymentMeans")
     */
    protected $paymentMeans;

    public function __construct(
        RequestConfig $requestConfig,
        RegisterAlias $registerAlias,
        string $type,
        ReturnUrls $returnUrls
    )
    {
        $this->registerAlias = $registerAlias;
        $this->type = $type;
        $this->returnUrls = $returnUrls;

        parent::__construct($requestConfig);
    }

    public function getRegisterAlias(): RegisterAlias
    {
        return $this->registerAlias;
    }

    public function setRegisterAlias(RegisterAlias $registerAlias): self
    {
        $this->registerAlias = $registerAlias;

        return $this;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getReturnUrls(): ReturnUrls
    {
        return $this->returnUrls;
    }

    public function setReturnUrls(ReturnUrls $returnUrls): self
    {
        $this->returnUrls = $returnUrls;

        return $this;
    }

    public function getStyling(): ?Styling
    {
        return $this->styling;
    }

    public function setStyling(Styling $styling): self
    {
        $this->styling = $styling;

        return $this;
    }

    public function getCheck(): ?Check
    {
        return $this->check;
    }

    public function setCheck(Check $check): self
    {
        $this->check = $check;

        return $this;
    }

    public function getLanguageCode(): ?string
    {
        return $this->languageCode;
    }

    public function setLanguageCode(string $languageCode): self
    {
        $this->languageCode = $languageCode;

        return $this;
    }

    public function getPaymentMethods(): ?array
    {
        return $this->paymentMethods;
    }

    public function setPaymentMethods(array $paymentMethods): self
    {
        $this->paymentMethods = $paymentMethods;

        return $this;
    }

    public function getCardForm(): ?CardForm
    {
        return $this->cardForm;
    }

    public function setCardForm(CardForm $cardForm): self
    {
        $this->cardForm = $cardForm;

        return $this;
    }

    public function getPaymentMeans(): ?PaymentMeans
    {
        return $this->paymentMeans;
    }

    public function setPaymentMeans(PaymentMeans $paymentMeans): self
    {
        $this->paymentMeans = $paymentMeans;

        return $this;
    }
}
