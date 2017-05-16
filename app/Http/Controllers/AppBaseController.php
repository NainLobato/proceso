<?php

namespace App\Http\Controllers;

use InfyOm\Generator\Utils\ResponseUtil;
use Response;

/**
 * @SWG\Swagger(
 *   basePath="/api/v1",
 *   @SWG\Info(
 *     title="Laravel Generator APIs",
 *     version="1.0.0",
 *   )
 * )
 * This class should be parent class for other API controllers
 * Class AppBaseController
 */
class AppBaseController extends Controller
{
    public function sendResponse($result, $message)
    {
        return Response::json(ResponseUtil::makeResponse($message, $result));
    }

    public function sendError($error, $code = 404)
    {
        return Response::json(ResponseUtil::makeError($error), $code);
    }

         /**
     * @param $date
     * @return string
     */
    public function formatDate($date)
    {
        if (stripos($date, "/")) {
            $format = explode("/", $date);
            // Special format date because daterangepicker format is MM/DD/YYYY
            return $format[2] . '-' . $format[1] . '-' . $format[0];
        }
        return $date;
    }

    /**
     * @param $date
     * @return string
     */
    public function showDate($date)
    {
        if (stripos($date, "-")) {
            $format = explode("-", $date);
            // Special format date because daterangepicker format is MM/DD/YYYY
            return $format[2] . '/' . $format[1] . '/' . $format[0];
        }
        return $date;
    }
}
