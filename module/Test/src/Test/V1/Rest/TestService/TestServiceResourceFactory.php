<?php
namespace Test\V1\Rest\TestService;

class TestServiceResourceFactory
{
    public function __invoke($services)
    {
        return new TestServiceResource();
    }
}
