<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\OpenAIService;

class GPTController extends Controller
{
    protected $openAIService;

    public function __construct(OpenAIService $openAIService)
    {
        $this->openAIService = $openAIService;
    }

    public function generate(Request $request)
    {
        $prompt = $request->input('prompt');
        $model = $request->input('model', 'gpt-3.5-turbo');
        $maxTokens = $request->input('max_tokens', 150);

        if ($request->filled('prompt')){
            $response = $this->openAIService->generateText($prompt, $model, $maxTokens);
        } else {
            $response = "Hello, I'm Preston! How can I assist you today?";
        }
        return view('gpt.form', ['response' => $response]);
    }
}