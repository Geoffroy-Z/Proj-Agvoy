<?php

namespace App\DataFixtures;

use App\Entity\Region;
use App\Entity\Room;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Owner;

class AppFixtures extends Fixture
{
    // définit un nom de référence pour une instance de Region
    public const IDF_REGION_REFERENCE = 'idf-region';
    
    public function load(ObjectManager $manager)
    {
        //...
        
        $owner = new Owner();
        $owner->setFamilyName("Zardi");
        $owner->setFirstname("Geoffroy");
        $owner->setCountry("France");
        $owner->setAddress("1 Rue du poulailler");
        
        //$manager->persist($owner);
        //$manager->flush();
        
        
        $region = new Region();
        $region->setCountry("FR");
        $region->setName("Ile de France");
        $region->setPresentation("La région française capitale");
        
        //$manager->flush();
        // Une fois l'instance de Region sauvée en base de données,
        // elle dispose d'un identifiant généré par Doctrine, et peut
        // donc être sauvegardée comme future référence.
        
        // ...
        
        $room = new Room();
        $room->setId(1);
        $room->setCapacity(2);
        $room->setSuperficy(15);
        $room->setPrice(150);
        $room->setSummary("Beau poulailler ancien à Évry");
        $room->setDescription("très joli espace sur paille");
        $room->setRegion($region);
        //$room->addRegion($region);
        // On peut plutôt faire une référence explicite à la référence
        // enregistrée précédemment, ce qui permet d'éviter de se
        // tromper d'instance de Region :
        //$room->addRegion($this->getReference(self::IDF_REGION_REFERENCE));
        $room->setOwner($owner);
        
        $owner->addRoom($room);
        
        
        $manager->persist($room);
        $manager->persist($owner);
        $manager->persist($region);
        
     
        $manager->flush();
                
        //...
    }
    
    //...
}