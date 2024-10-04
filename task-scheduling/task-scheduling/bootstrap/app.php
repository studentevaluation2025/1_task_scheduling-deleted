<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();


    // ->withSchedule(function (Schedule $schedule) {
    //     $schedule->call(new DeleteRecentUsers)->daily();
    // });




    // function schedule(Schedule $schedule)
    // {
    //     $schedule->call(function () {
    //         $posts = Post::where('status', false)
    //                      ->where('publish_at', '<=', now())
    //                      ->get();
    
    //         foreach ($posts as $post) {
    //             $post->update(['status' => true]);
    //         }
    //     })->everyMinute();
    // }


//     use Illuminate\Foundation\Application;
// use Illuminate\Foundation\Console\Kernel;
// use App\Scheduler; // Replace `App\Scheduler` with your actual class name

// $app = new Application( $_ENV['APP_BASE_PATH'] ?? dirname(__DIR__) );

// $app->singleton(Kernel::class, function ($app) {
//     return new Kernel($app);
// });

// $schedule = $app->make(Schedule::class);

// // Add your scheduling tasks here
// $schedule->call(function () {
//     $posts = Post::where('status', false)
//                  ->where('publish_at', '<=', now())
//                  ->get();

//     foreach ($posts as $post) {
//         $post->update(['status' => true]);
//     }
// })->everyMinute(); // Adjust the frequency as needed