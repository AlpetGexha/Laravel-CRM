<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });

        $this->renderable(function (Throwable $e) {
            // if we get any http error we respond just with the code only on API route
            if (request()->is('api/*')) {
                if ($e instanceof HttpException) {
                    return response()->json([
                        'http' => $e->getStatusCode(),
                        'message' => $e->getMessage(),
                    ], $e->getStatusCode());
                }
            }
        });
    }
}
