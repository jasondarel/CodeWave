<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        return redirect()->route('inbox')->with('success', 'Notification marked as read.');
    }

    public function createNewNotification($message, $title){

        Notification::create([
            'user_id' => Auth::user()->id,
            'title' => $title,
            'content' => $message,
        ]);

        return;
    }

    public function mainInboxView()
    {
        // Ambil notifikasi dengan paginasi 5 item per halaman
        $notifications = Notification::where("user_id", Auth::user()->id)
            ->orderBy('created_at', 'desc')
            ->paginate(5);
    
        return view('inbox', ["notifications" => $notifications]);
    }

    public function notificationView($id){
        

        $notifications = Notification::where(['id' => $id, 'user_id' => Auth::user()->id])->first();
        return response()->view('inbox.inboxmessage', [
            'notification' => $notifications,
        ]);
    }
}
