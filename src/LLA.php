<?php


namespace RiceProvider;

#[Providers\EzrealProvider('Q','W','E','R')]
#[Providers\LuxProvider('Q','W','E','R')]
class LLA
{
    use Rice;


    /**
     * @throws \ReflectionException
     * @author ycz
     * @date 2020/11/27
     */
    public function run()
    {
        $this->beforeRun();

        echo "That's gooooood!\n";
    }

    /**
     * @throws \ReflectionException
     * @author ycz
     * @date 2020/11/27
     */
    private function beforeRun()
    {
        $providers = $this->getProviders();

        foreach ($providers as $provider) {
            $provider->cook();
        }
    }
}