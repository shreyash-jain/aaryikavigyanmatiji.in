<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Interfaces\UserInterface;
use App\Repositories\UserRepository;
use App\Interfaces\SiteInterface;
use App\Repositories\SiteRepository;
use App\Interfaces\SuvicharImageInterface;
use App\Repositories\SuvicharImageRepository;
use App\Interfaces\GalleryInterface;
use App\Repositories\GalleryRepository;
use App\Interfaces\HomePageInterface;
use App\Repositories\HomePageRepository;
use App\Interfaces\SanghastAaryikaInterface;
use App\Repositories\SanghastAaryikaRepository;
use App\Interfaces\SanghasthBrahmacharyBahaneInterface;
use App\Repositories\SanghasthBrahmacharyBahaneRepository;
use App\Interfaces\PravachanVideoInterface;
use App\Repositories\PravachanVideoRepository;
use App\Interfaces\PravachanAudioInterface;
use App\Repositories\PravachanAudioRepository;
use App\Interfaces\ViharInfoInterface;
use App\Repositories\ViharInfoRepository;
use App\Interfaces\SahityaInterface;
use App\Repositories\SahityaRepository;
use App\Interfaces\CategoryInterface;
use App\Repositories\CategoryRepository;
use App\Interfaces\ChaturmasJanakareeInterface;
use App\Repositories\ChaturmasJanakareeRepository;
use App\Interfaces\VigyanMatiMatajiInterface;
use App\Repositories\VigyanMatiMatajiRepository;
use App\Interfaces\OshadhiManjooshaInterface;
use App\Repositories\OshadhiManjooshaRepository;
use App\Interfaces\MetaDataInterface;
use App\Repositories\MetaDataRepository;   
use App\Interfaces\EventInterface;
use App\Repositories\EventRepository;
use App\Interfaces\ClassesInterface;
use App\Repositories\ClassesRepository;
use App\Interfaces\RanoliRatnakarInterface;
use App\Repositories\RanoliRatnakarRepository;
  
class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
		$this->app->bind(UserInterface::class, UserRepository::class);
		$this->app->bind(SiteInterface::class, SiteRepository::class);
		$this->app->bind(SuvicharImageInterface::class, SuvicharImageRepository::class);
		$this->app->bind(GalleryInterface::class, GalleryRepository::class);
		$this->app->bind(HomePageInterface::class, HomePageRepository::class);
		$this->app->bind(SanghastAaryikaInterface::class, SanghastAaryikaRepository::class);
		$this->app->bind(VigyanMatiMatajiInterface::class, VigyanMatiMatajiRepository::class);
		$this->app->bind(SanghasthBrahmacharyBahaneInterface::class, SanghasthBrahmacharyBahaneRepository::class);
		$this->app->bind(PravachanVideoInterface::class, PravachanVideoRepository::class);
		$this->app->bind(PravachanAudioInterface::class, PravachanAudioRepository::class);
		$this->app->bind(ViharInfoInterface::class, ViharInfoRepository::class);
		$this->app->bind(SahityaInterface::class, SahityaRepository::class);
		$this->app->bind(ChaturmasJanakareeInterface::class, ChaturmasJanakareeRepository::class);
		$this->app->bind(MetaDataInterface::class, MetaDataRepository::class);
		$this->app->bind(EventInterface::class, EventRepository::class);
		$this->app->bind("App\Interfaces\CategoryInterface", "App\Repositories\CategoryRepository");
		$this->app->bind(ClassesInterface::class, ClassesRepository::class);
        $this->app->bind(OshadhiManjooshaInterface::class, OshadhiManjooshaRepository::class);
        $this->app->bind(RanoliRatnakarInterface::class, RanoliRatnakarRepository::class);

    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
