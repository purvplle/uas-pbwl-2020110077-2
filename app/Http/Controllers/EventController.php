<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('admin.event.index', compact('events'));
    }

    public function create()
    {
        return view('admin.event.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_event' => 'required|string|max:255',
            'deskripsi' => 'required',
        ]);

        Event::create([
            'nama_event' => $request->input('nama_event'),
            'deskripsi' => $request->input('deskripsi'),
        ]);

        return redirect()->route('event.index')->with('success', 'Event berhasil ditambahkan');
    }

    public function show(Event $event)
    {
        return view('admin.event.show', compact('event'));
    }

    public function edit(Event $event)
    {
        return view('admin.event.edit', compact('event'));
    }

    public function update(Request $request, Event $event)
    {
        $request->validate([
            'nama_event' => 'required|string|max:255',
            'deskripsi' => 'required',
        ]);

        $event->update([
            'nama_event' => $request->input('nama_event'),
            'deskripsi' => $request->input('deskripsi'),
        ]);

        return redirect()->route('event.index')->with('success', 'Event berhasil diperbarui');
    }

    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->route('event.index')->with('success', 'Event berhasil dihapus');
    }
}
