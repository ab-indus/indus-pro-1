<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PolicyNew;

class AgentNewController extends Controller
{
    public function getPolicy($id)
    {
        try {
            // Find the policy by ID
            $policy2 = PolicyNew::find($id);
    
            // If the policy exists, return it as JSON
            if ($policy2) {
                return response()->json([
                    'status' => 'success',
                    'policy2' => $policy2
                ]);
            } else {
                Log::error('Policy not found for ID: ' . $id);  // Log if policy not found
                return response()->json([
                    'status' => 'error',
                    'message' => 'Policy not found.'
                ], 404);
            }
        } catch (\Exception $e) {
            Log::error('Error fetching policy: ' . $e->getMessage());  // Log error details
            return response()->json([
                'status' => 'error',
                'message' => 'An error occurred while fetching the policy data.'
            ], 500);  // Return 500 Internal Server Error
        }
    }

    
    public function test()
    {
        return response()->json([
            'name' => 'Abigail',
            'state' => 'CA',
        ]);
    }
}
