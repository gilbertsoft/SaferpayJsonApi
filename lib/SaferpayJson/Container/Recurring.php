<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Container;

use JMS\Serializer\Annotation\SerializedName;

final class Recurring
{
    /**
     * @var bool
     * @SerializedName("Initial")
     */
    private $initial;

    public function __construct(bool $initial = true)
    {
        $this->initial = $initial;
    }

    public function isInitial(): bool
    {
        return $this->initial;
    }
}
