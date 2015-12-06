<?php
namespace Um2\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class Um2UserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
