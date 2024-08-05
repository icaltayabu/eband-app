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
        $request->validate([
            'pertanyaan' => 'required|string|max:255',
            'jawaban' => 'required|string',
        ]);

        $chat = new Chat;
        $chat->pertanyaan = $request->input('pertanyaan');
        $chat->jawaban = $request->input('jawaban');
        $chat->save();

        return redirect()->route('chatbot.index')->with('success', 'Data chat berhasil disimpan');
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

    public function chat(Request $request)
    {
        $pertanyaan = $request->input('pertanyaan');
        $chat = Chat::where('pertanyaan', 'like', '%' . $pertanyaan . '%')->first();

        if (!$chat) {
            return response()->json(['jawaban' => 'Maaf, saya tidak mengerti pertanyaan Anda.']);
        }

        return response()->json(['jawaban' => $chat->jawaban]);
    }
}
