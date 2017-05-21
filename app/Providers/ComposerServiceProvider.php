namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{

    public function boot()
    {

        // Using Closure based composers
        view()->composer('includes.header', function ($view) {
            $headerData = \DB::table('business')->where('id', '=', 1)->get();
            $view->headerData = $headerData;
        });
    }

    public function register()
    {
        //
    }
}
