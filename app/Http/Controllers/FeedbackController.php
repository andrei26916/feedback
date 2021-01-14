<?php

namespace App\Http\Controllers;

use App\Services\FeedbackService;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public $feedbackServices;

    /**
     * FeedbackController constructor.
     */
    public function __construct()
    {
        $this->feedbackServices = new FeedbackService();
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function get(Request $request)
    {
        return $this->feedbackServices->show($request->size, $request->orderByField, $request->orderByEnding);
    }

    /**
     * @param Request $request
     * @return array|bool[]
     */
    public function create(Request $request)
    {
        return $this->feedbackServices->add([
            'text' => $request->text
        ]);
    }

    /**
     * @param Request $request
     */
    public function update(Request $request)
    {
        return $this->feedbackServices->edit([
            'id' => $request->id,
            'text' => $request->text
        ]);
    }


    /**
     * @param Request $request
     * @return array|bool[]
     */
    public function delete(Request $request)
    {
        return $this->feedbackServices->delete([
            'id' => $request->id
        ]);
    }
}
