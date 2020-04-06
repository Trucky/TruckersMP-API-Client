<?php

namespace TruckersMP\APIClient\Models;

class Social
{
    /**
     * @var string|null
     */
    protected $twitter;

    /**
     * @var string|null
     */
    protected $facebook;

    /**
     * @var string|null
     */
    protected $twitch;

    /**
     * @var string|null
     */
    protected $discord;

    /**
     * @var string|null
     */
    protected $youtube;

    /**
     * Create a new Social instance.
     *
     * @param  string|null  $twitter
     * @param  string|null  $facebook
     * @param  string|null  $twitch
     * @param  string|null  $discord
     * @param  string|null  $youtube
     * @return void
     */
    public function __construct(
        ?string $twitter = null,
        ?string $facebook = null,
        ?string $twitch = null,
        ?string $discord = null,
        ?string $youtube = null
    ) {
        $this->twitter = $twitter;
        $this->facebook = $facebook;
        $this->twitch = $twitch;
        $this->discord = $discord;
        $this->youtube = $youtube;
    }

    /**
     * Get the Twitter URL.
     *
     * @return string|null
     */
    public function getTwitter(): ?string
    {
        return $this->twitter;
    }

    /**
     * Get the Facebook URL.
     *
     * @return string|null
     */
    public function getFacebook(): ?string
    {
        return $this->facebook;
    }

    /**
     * Get the Twitch URL.
     *
     * @return string|null
     */
    public function getTwitch(): ?string
    {
        return $this->twitch;
    }

    /**
     * Get the Discord URL.
     *
     * @return string|null
     */
    public function getDiscord(): ?string
    {
        return $this->discord;
    }

    /**
     * Get the YouTube URL.
     *
     * @return string|null
     */
    public function getYouTube(): ?string
    {
        return $this->youtube;
    }
}
