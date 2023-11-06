<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    public function store(Request $request)
    {
        $feedback = new Feedback();
        $feedback->name = $request->name;
        $feedback->country = $request->country;
        $feedback->message = $request->message;
        $feedback->show = $request->show;
        $feedback->save();
        return back()
            ->with('success', 'Phản hồi thành công');
    }

    public function list()
    {
        $queryBuilder = Feedback::query();
        $data = $queryBuilder->orderBy('created_at','DESC')->paginate(10);
        return view('admin.feedbacks.table', [
            'feedbacks' => $data,
        ]);

    }

    public function edit($id)
    {
        $feedback = Feedback::find($id);
        return view('admin.feedbacks.form', ['data' => $feedback]);
    }

    public function save(Request $request, $id)
    {
        $feedback = Feedback::find($id);
        $feedback->name = $request->name;
        $feedback->country = $request->country;
        $feedback->message = $request->message;
        $feedback->show = $request->show;
        $feedback->update();
        return redirect()->route('listFeedback')->with('success', 'Update thành công.');
    }

    public function delete($id)
    {
        $feedback = Feedback::find($id);
        $feedback->delete();
        return redirect()->route('listFeedback')
            ->with('success', 'Xoá thành công.');
    }
}
