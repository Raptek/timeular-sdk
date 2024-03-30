<?php

declare(strict_types=1);

namespace Timeular\Api;

use Timeular\Http\HttpClient;
use Timeular\Model\UserProfile\Me;

class TimeularApi
{
    public function __construct(
        private HttpClient $httpClient,
    ) {
    }

    /**
     * @see https://developers.timeular.com/#bbf459e2-ff90-4aeb-b064-7febaa4eba70
     */
    public function me(): Me
    {
        $response = $this->httpClient->request(
            'GET',
            'me',
        );

        return Me::fromArray($response['data']);
    }
}
