<?php

namespace Um2\BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Um2\BlogBundle\Entity\User;

class LoadUserData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
      // Create a new user entity
      $user = new User();
      $user->setUsername("admin");
      $user->setPlainPassword('admin');
      $user->setEmail('admin@example.com');
      $user->setEnabled(true);

      // Persist the fixture user entity
      $manager->persist($user);

      // Save all the fixtures
      $manager->flush();
    }
}
