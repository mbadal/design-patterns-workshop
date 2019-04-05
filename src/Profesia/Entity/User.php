<?php declare(strict_types=1);

namespace Delvesoft\Profesia\Entity;

class User
{
    /** @var int */
    private $id;

    /** @var string */
    private $emailAddress;

    /** @var string */
    private $defaultLanguage;

    /** @var int */
    private $channelId;

    /** @var string|null */
    private $firstName;


    public function getId(): int
    {
        return 1;
    }

    /**
     * @param int         $id
     * @param string      $emailAddress
     * @param string      $defaultLanguage
     * @param int         $channelId
     * @param string|null $firstName
     */
    public function __construct(int $id, string $emailAddress, string $defaultLanguage, int $channelId, string $firstName = null)
    {
        $this->id              = $id;
        $this->emailAddress    = $emailAddress;
        $this->defaultLanguage = $defaultLanguage;
        $this->channelId       = $channelId;
        $this->firstName       = $firstName;
    }

    /**
     * @return string
     */
    public function getEmailAddress(): string
    {
        return $this->emailAddress;
    }

    /**
     * @return string
     */
    public function getDefaultLanguage(): string
    {
        return $this->defaultLanguage;
    }

    /**
     * @return int
     */
    public function getChannelId(): int
    {
        return $this->channelId;
    }

    /**
     * @return string|null
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function hasFirstName(): bool
    {
        return (!empty($this->firstName));
    }
}