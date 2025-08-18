<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class TextToSpeechController extends Controller
{
    private $polly;

    public function __construct() {
        $this->polly = new \Aws\Polly\PollyClient([
            'version' => 'latest',
            'region' => env("AWS_DEFAULT_REGION"),
            'credentials' => [
                'key' => env("AWS_ACCESS_KEY_ID"),
                'secret' => env("AWS_SECRET_ACCESS_KEY"),
            ],
        ]);
    }

    public function convert(Request $request)
    {
        $text = $request->input('text');
        $result = $this->polly->synthesizeSpeech([
            'OutputFormat' => 'mp3',
            'Text' => $text,
            'VoiceId' => 'Camila',
            'LanguageCode' => 'pt-BR'
        ]);

        $audioStream = $result->get('AudioStream');
        $audioBase64 = base64_encode($audioStream);

        return view('home', compact('audioBase64'));
    }
}
