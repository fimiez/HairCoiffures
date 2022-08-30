<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $user = new User;
        
        $user->setEmail("loicfimiez21@gmail.com");
        // addReference pour le champ JSON Roles qui sera USER_ADMIN        
        $this->addReference("ROLE_ADMIN", $user);
        $user->setPassword('$2y$13$ZdMtgHTdgBPv1yRnS3h.3uxs/bdM/n8F5v1VJlS6D7XLaOVv96qpG');

        $manager->persist($user);   
        $manager->flush();
    }
}