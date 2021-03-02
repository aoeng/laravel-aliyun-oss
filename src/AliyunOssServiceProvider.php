<?php


namespace Aoeng\Laravel\Aliyun\OSS;


use Aoeng\Laravel\Aliyun\OSS\plugins\PutFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\ServiceProvider;
use League\Flysystem\Filesystem;
use OSS\OssClient;

class AliyunOssServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->extendStorage();

    }

    protected function mergeConfig()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/filesystems.php', 'filesystems');
    }

    protected function extendStorage()
    {
        Storage::extend('oss', function ($app, $config) {

            $adapter = new AliyunOssAdapter($config);


            return new Filesystem($adapter);

//            $filesystem->addPlugin(new PutFile());
//            $filesystem->addPlugin(new PutRemoteFile());
            //$filesystem->addPlugin(new CallBack());
//            return $filesystem;
        });
    }

    public function register()
    {
        $this->mergeConfig();
    }

}
