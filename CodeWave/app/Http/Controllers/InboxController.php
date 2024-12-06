<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;

class InboxController extends Controller
{
    public function index()
    {
        $notifications = Notification::where('user_id', auth()->id())
            ->orderBy('created_at', 'desc') // Or adjust based on your preference
            ->get();

        return view('inbox.index', compact('notifications'));
    }


    public function markAsRead($id)
    {
        // Find the notification by ID
        $notification = Notification::findOrFail($id);

        // Mark the notification as read
        $notification->update(['is_read' => true]);

        // Redirect back to inbox with success message
        return redirect()->route('inbox.index')->with('success', 'Notification marked as read.');
    }
}
