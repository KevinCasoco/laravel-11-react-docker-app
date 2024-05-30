<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TaskApiController extends Controller
{
    protected $todoModel;

    function __construct()
    {
        $this->todoModel = new Task();
    }

    public function saveTask(Request $request) {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:25',
            'description' => 'required|string'
        ]);

        if ($validator->fails()) {
            return response()->json(['error', $validator->errors()], 422);
        }

        $this->todoModel->createTask([
            'title' => $request->title,
            'description' => $request->description
        ]);

        return response()->json([
            'message' => 'Task Added'
        ], 200);
    }

    public function getAllTask()
    {
        return response()->json(['data' => $this->todoModel->getTaskList()], 200);
    }

    public function markAsDone($taskId)
    {
        $isUpdated = $this->todoModel->markAsDone($taskId);
        if ($isUpdated) {
            return response()->json([
                'message' => 'Task is Done'
            ]);
        }

        return response()->json([
            'error' => 'Failed to update Task'
        ], 422);
    }

    public function deleteTask($taskID)
    {
        $isDeleted = $this->todoModel->deleteTask($taskID);

        if ($isDeleted) {
            return response()->json([
                'message' => 'Task is Deleted'
            ]);
        }

        return response()->json([
            'error' => 'Failed to delete Task'
        ], 422);
    }
}
