<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Mockery\Exception;
use phpDocumentor\Reflection\Types\Void_;
use App\Models\Ideas;

class IdeasController extends Controller
{
    // OpenAI GPT-3 Engine
    // Davinci is the most capable model family and can perform any task the other models can perform and often with less instruction.
    private array $engine = [
        'davinci' => 'text-davinci-002'
    ];

    public function index()
    {
        $prompt = [
            "Brainstorm some ideas for fighting climate change",
            "Brainstorm some ideas for fighting desertification",
            "Brainstorm some ideas for fighting drought",
            "Suggest ideas for fighting climate change",
            "Suggest ideas for fighting climate desertification",
            "Suggest ideas for fighting climate drought",
        ];

        // Random select prompt from the array to cover wide range of possible ideas
        $selectedPrompt = $prompt[array_rand($prompt)];

        // Maximum token you want to use as an output, One token is roughly 4 characters for normal English text.
        // Best practises is to set token length to 256.
        $maxTokens = 256;

        // OpenAI API Key
        $APIKey = env('openai_api_token');

        // Engine
        $engine = $this->engine['davinci'];

        try {
            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
                'Authorization' => "Bearer $APIKey"
            ])->post("https://api.openai.com/v1/engines/$engine/completions", [
                'prompt' => $selectedPrompt,
                "temperature" => 0.9,
                "max_tokens" => $maxTokens,
                "top_p" => 1,
                "frequency_penalty" => 0,
                "presence_penalty" => 0,
            ]);
            //OpenAI API result
//            return $response['choices'][0]['text'];
            $newIdea = new Ideas;
            $newIdea->idea = $response['choices'][0]['text'];
            $newIdea->save();

        } catch (Exception $e) {
            echo 'Caught Exception:' . $e->getMessage();
        }
        return null;
    }
}
