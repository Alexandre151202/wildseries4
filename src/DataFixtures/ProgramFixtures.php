<?php

namespace App\DataFixtures;

use App\Entity\Program;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class ProgramFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $program = new Program();
        $program->setTitle('Walking dead');
        $program->setSynopsys('Des zombies envahissent la terre');
        $program->setCategory($this->getReference('category_Action'));
        $manager->persist($program);
        $manager->flush();

        $program = new Program();
        $program->setTitle('The Dark Knight Rises');
        $program->setSynopsys("Il y a huit ans, Batman a disparu dans la nuit : lui qui était un héros est alors devenu un fugitif. L'arrivée d'une féline et fourbe cambrioleuse au mystérieux dessein chamboule l'ordre établi. Bien plus dangereuse encore est l'apparition de Bane, terroriste masqué dont l'impitoyable projet pour Gotham pousse Bruce à sortir de l'exil qu'il s'est imposé. Mais bien qu'il reprenne cape et masque, Batman pourrait ne pas être un adversaire à la taille de Bane...");
        $program->setCategory($this->getReference('category_Action'));
        $manager->persist($program);
        $manager->flush();

        $program = new Program();
        $program->setTitle('Interstellar');
        $program->setSynopsys("Dans un proche futur, la Terre est devenue hostile pour l'homme. Les tempêtes de sable sont fréquentes et il n'y a plus que le maïs qui peut être cultivé, en raison d'un sol trop aride. Cooper est un pilote, recyclé en agriculteur, qui vit avec son fils et sa fille dans la ferme familiale. Lorsqu'une force qu'il ne peut expliquer lui indique les coordonnées d'une division secrète de la NASA, il est alors embarqué dans une expédition pour sauver l'humanité.");
        $program->setCategory($this->getReference('category_Fiction'));
        $manager->persist($program);
        $manager->flush();

        $program = new Program();
        $program->setTitle('Fight Club');
        $program->setSynopsys("Pourvu d'une situation des plus enviable, un jeune homme à bout de nerfs retrouve un équilibre relatif en compagnie de Marla, rencontrée dans un groupe d'entraide. Il fait également la connaissance de Tyler Durden, personnage enthousiaste et charismatique. Ensemble, ils fondent le Fight Club, où ils organisent des combats clandestins et violents, destinés à évacuer l'énergie négative de chacun.");
        $program->setCategory($this->getReference('category_Action'));
        $manager->persist($program);
        $manager->flush();

        $program = new Program();
        $program->setTitle('Scarface');
        $program->setSynopsys("En mai 1980, Fidel Castro autorise les opposants qui le souhaitent à quitter Cuba. Il en profite pour envoyer vers les États-Unis les malfrats devenus indésirables dans l'île. C'est ainsi que Tony Montana, un tueur mégalomane, se met à vivre son rêve américain. En deux temps, trois mouvements, il devient le bras droit de Frank Lopez, un magnat de la drogue, qu'il ne tarde pas à éliminer. Ainsi propulsé patron, il épouse au passage la veuve de sa victime.");
        $program->setCategory($this->getReference('category_Action'));
        $manager->persist($program);
        $manager->flush();
    }

    public function getDependencies()
    {
        // Tu retournes ici toutes les classes de fixtures dont ProgramFixtures dépend
        return [
            CategoryFixtures::class,
        ];
    }
}
