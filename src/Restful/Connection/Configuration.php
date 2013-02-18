<?php


namespace Restful\Connection;

/**
 * Creates a Configuration Instance
 */
class Configuration
{
    /**
     * @var string
     */
    private $api_key;

    /**
     * @var string
     */
    private $uri;

    /**
     * Constructs a new Configuration instance
     *
     * @param string $api_key API Key as required by site setup
     * @param string $uri     URI to send requests to for error handling
     */
    public function __construct($api_key, $uri)
    {
        $this->api_key = $api_key;
        $this->uri = $uri;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return $uri;
    }

    /**
     * @return string
     */
    public function getApiKey()
    {
        return $api_key;
    }

}
