<?php

namespace Aoeng\Laravel\Aliyun\OSS\Test;

use Aoeng\Laravel\Aliyun\OSS\AliyunOssAdapter;
use Illuminate\Support\Facades\Storage;
use PHPUnit\Framework\TestCase;
use Prophecy\Argument;

class AliyunOssAdapterTest extends TestCase
{

    protected $client;

    protected $aliyunOssAdapter;

    /**
     * @before
     */
    protected function setUp(): void
    {

       // $this->aliyunOssAdapter=new AliyunOssAdapter();
    }

    /**
     * @test
     */
    public function it_can_write()
    {



    }

}
