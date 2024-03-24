<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Models\User;
use App\Models\Userlog;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Password;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $users = User::select(sprintf('%s.*', (new User)->getTable()))->withCount('userlogs');

            return DataTables::of($users)
                ->only([
                    'id',
                    'name',
                    'email',
                    'is_developer',
                    'userlogs_count',
                ])
                ->addColumn('DT_RowId', function ($row) {
                    return $row->id;
                })
                ->toJson();
        }

        return view('back.users.index');
    }

    public function create()
    {
        return view('back.users.create');
    }

    public function store(Request $request)
    {
        User::create($request->all());

        Password::sendResetLink($request->only(['email']));

        $notification = [
            'type' => 'success',
            'title' => 'Add ...',
            'message' => 'Item added.',
        ];

        return redirect()->route('back.users.index')->with('notification', $notification);
    }

    public function edit(User $user)
    {
        return view('back.users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        
            $user->update($request->except(['token']));

            $notification = [
                'type' => 'success',
                'title' => 'Edit ...',
                'message' => 'Item updated.',
            ];
       

        return redirect()->route('back.users.index')->with('notification', $notification);
    }

    public function massDestroy(Request $request)
    {
        User::where('id', '>', 2)->whereIn('id', $request->ids)->delete();

        return response()->noContent();
    }

    public function getUserlogs(Request $request)
    {
        $userlogs_by_date = Userlog::where('user_id', $request->id)
            ->select('userlogs.created_at')
            ->where('created_at', '>=', carbon::now()->startOfMonth()->subMonths(3))
            ->orderBy('created_at', 'desc')
            ->get()
            ->groupBy('date');

        return view('back.users.get-userlogs', compact('userlogs_by_date'))->render();
    }
}
