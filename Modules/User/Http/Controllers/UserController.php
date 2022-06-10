<?php

namespace Modules\User\Http\Controllers;

use Modules\User\Entities\User;
use CisFoundation\CisTableBuilder\Facades\CisTable;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Routing\Controller;
use Modules\User\Http\Requests\StoreBaseRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $table = CisTable::table('users');
        $table->setData(User::class)
            ->setFields([
                'username' => 'Benutzername',
                'firstname' => 'Vorname',
                'lastname' => 'Nachname',
            ])
            ->addAction('ändern','user::edit.base',['user' => 'row_id'])
            ->withPagination()
            ->withSearch(['firstname','lastname']);

        return view('user::index');
    }

    public function editBase(User $user) {
        return view("user::edit.base",[
            'user' => $user,
        ]);
    }

    public function storeBase(StoreBaseRequest $request, User $user) {
        $user = User::find($request->row_id);
        $user->fill($request->only([
            'firstname',
            'lastname',
            'email',
            'username',
        ]))
        ->save();
        session()->flash('success');
        return redirect()->back();
    }
}
