<?php

namespace Hillel\UserAgent\DonatjParser;

use donatj\UserAgent\UserAgent;
use donatj\UserAgent\UserAgentParser;
use Hillel\UserAgent\ParserInterface\UserAgentParserInterface;

class DonatjService implements UserAgentParserInterface
{
    /** @var UserAgent */
    protected $_data;

    /**
     * @param string|null $user_agent
     *
     * @return void
     */
    public function parse(?string $user_agent = null): void
    {
        $parser      = new UserAgentParser();
        $this->_data = $parser->parse($user_agent);
    }

    /**
     * @return string
     */
    public function getBrowser(): string
    {
        return $this->_data->browser();
    }

    /**
     * @return string
     */
    public function getOS(): string
    {
        return $this->_data->platform();
    }
}
