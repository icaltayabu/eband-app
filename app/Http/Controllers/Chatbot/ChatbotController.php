<?php

namespace App\Http\Controllers\Chatbot;

use App\Http\Controllers\Controller;
use App\Models\Chat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ChatbotController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.chatbot.index');
    }

    public function chat(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'message' => 'required|string|max:255',
            ]);

            $message = htmlspecialchars($request->input('message'));

            if (empty($message)) {
                return response()->json(['response' => "Sorry, the message cannot be empty."], 400);
            }

            $response = $this->generateResponse($message);

            Chat::create([
                'pertanyaan' => $message,
                'jawaban' => $response,
            ]);

            return response()->json(['response' => $response]);
        } catch (\Exception $e) {
            Log::error('Chat Error: ' . $e->getMessage(), ['request' => $request->all()]);
            return response()->json(['response' => 'An unexpected error occurred. Please try again.'], 500);
        }
    }



    private function generateResponse($message)
    {
        $responses = [
            'hi' => 'Hello!',
            'how are you' => 'I am good, thank you!',
            'bye' => 'Goodbye!',
        ];

        $messageLower = strtolower($message);
        return $responses[$messageLower] ?? "Sorry, I don't understand that.";
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
