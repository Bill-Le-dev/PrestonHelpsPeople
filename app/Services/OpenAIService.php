<?php

namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class OpenAIService
{
    protected $client;
    protected $apiKey;

    public function __construct()
    {
        // Get the API key from the environment
        $this->apiKey = config('services.openai.api_key');
        $this->client = new Client([
            'base_uri' => 'https://api.openai.com',
        ]);
    }

    public function generateText($prompt, $model = 'gpt-3.5-turbo', $maxTokens = 150)
    {
        try {
            $response = $this->client->post('/v1/chat/completions', [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->apiKey,
                    'Content-Type' => 'application/json',
                ],
                'json' => [
                    'model' => $model,
                    'messages' => [
                        [
                            'role' => 'system',
                            'content' => 'You are a helpful assistant.'
                        ],
                        [
                            'role' => 'user',
                            'content' => $prompt
                        ]
                    ],
                    'max_tokens' => $maxTokens,
                    'temperature' => 0.7,
                    'n' => 1,
                    'stop' => null,
                ],
            ]);

            $responseBody = json_decode($response->getBody()->getContents(), true);

            return $responseBody['choices'][0]['message']['content'] ?? 'No response';
        } catch (RequestException $e) {
            // Log the exception or handle it according to your application's needs
            return 'An error occurred: ' . $e->getMessage();
        }
    }
}