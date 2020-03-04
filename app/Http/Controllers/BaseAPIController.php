<<<<<<< HEAD
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseAPIController extends Controller { 
    
    public function sendResponse ( $result, $message ) {

        $response = [
            'success' => true,
            'data' => $result,
            'message' => $message
        ];

        return response()->json( $response, 200 );

    }


    public function sendError($error , $errorMessages = [] , $code = 404){

        $response = [
            'success' => false ,
            'message' => $error
        ];
        if (!empty($errorMessages)) {
            $response['data'] = $errorMessages;
        }
        return response()->json($response , $code);

    }
}
=======
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseAPIController extends Controller { 
    
    public function sendResponse ( $result, $message ) {

        $response = [
            'success' => true,
            'data' => $result,
            'message' => $message
        ];

        return response()->json( $response, 200 );

    }


    public function sendError($error , $errorMessages = [] , $code = 404){

        $response = [
            'success' => false ,
            'message' => $error
        ];
        if (!empty($errorMessages)) {
            $response['data'] = $errorMessages;
        }
        return response()->json($response , $code);

    }
}
>>>>>>> 32a2d418a7784cdb7de25bd745cdd349b21309b6
