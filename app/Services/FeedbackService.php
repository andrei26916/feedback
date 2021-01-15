<?php

namespace App\Services;

use App\Models\Feedback;
use Illuminate\Support\Facades\Auth;

class FeedbackService
{
    protected $userId;

    /**
     * FeedbackService constructor.
     */
    public function __construct()
    {
        $this->userId = Auth::id();
    }

    /**
     *
     * @param int $size
     * @param $orderByField
     * @param $orderByEnding
     * @return mixed
     */
    public function show($size = 15, $orderByField, $orderByEnding)
    {
        return Feedback::select()
            ->withCount('likes')
            ->when(
                $orderByField && $orderByEnding,
                function ($query) use ($orderByField, $orderByEnding) {
                    $query->orderBy($orderByField, $orderByEnding);
                }
            )
            ->paginate($size);
    }


    /**
     * Добавление
     * @param $array
     * @return array|bool[]
     */
    public function add($array)
    {
        try {
            Feedback::create(
                [
                    'user_id' => $this->userId,
                    'text' => $array['text']
                ]
            );
            return ['status' => true];
        } catch (\Exception $exception) {
            return ['status' => false, 'error' => $exception];
        }
    }

    /**
     * Редактирование
     * @param $array
     * @return array|bool[]
     */
    public function edit($array)
    {
        try {
            Feedback::where([['id', $array['id']], ['user_id', $this->userId]])->update(
                [
                    'user_id' => $this->userId,
                    'text' => $array['text']
                ]
            );
            return ['status' => true];
        } catch (\Exception $exception) {
            return ['status' => false, 'error' => $exception];
        }
    }

    /**
     * Удаление
     * @param $array
     * @return array|bool[]
     */
    public function delete($array)
    {
        try {
            Feedback::where([['id', $array['id']], ['user_id', $this->userId]])->delete();
            return ['status' => true];
        } catch (\Exception $exception) {
            return ['status' => false, 'error' => $exception];
        }
    }
}
