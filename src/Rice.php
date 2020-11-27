<?php

namespace RiceProvider;


use RiceProvider\Providers\AbstractProvider;

trait Rice
{
    /**
     * @var \ReflectionClass|null
     */
    protected $ref;

    /**
     * @return AbstractProvider[]
     * @throws \ReflectionException
     * @author ycz
     * @date 2020/11/27
     */
    public function getProviders()
    {
        $attributes = $this->getRef()->getAttributes();

        $providers = [];
        foreach ($attributes as $attribute) {
            $class =  $attribute->getName();

            $provider = new $class(...$attribute->getArguments());
            // can't use
            // $provider = $attribute->newInstance();

            if ($provider instanceof AbstractProvider) {
                $providers[] = $provider;
            }
        }

        return $providers;
    }

    /**
     * @return \ReflectionClass|null
     * @throws \ReflectionException
     * @author ycz
     * @date 2020/11/27
     */
    private function getRef()
    {
        if (is_null($this->ref)) {
            $this->ref = new \ReflectionClass($this);
        }

        return $this->ref;
    }
}