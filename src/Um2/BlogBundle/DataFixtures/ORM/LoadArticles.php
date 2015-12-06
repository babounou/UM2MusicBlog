<?php

namespace Um2\BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Um2\BlogBundle\Entity\Article;

class LoadArticles implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
      // Create a new article entity
      $article = new Article();
      $article->setDate(new \Datetime());
      $article->setTitre("Article 1");
      $article->setAuteur("Auteur 1");
      $article->setContenu('<iframe width="560" height="315" src="https://www.youtube.com/embed/-VpMdmbs11g?list=PLK0tN43y3-MZ7iW9RQnIjZeT29hhzxq4h" frameborder="0" allowfullscreen></iframe>');

      // Persist the fixture article entity
      $manager->persist($article);

      // Create a new article entity
      $article = new Article();
      $article->setDate(new \Datetime());
      $article->setTitre("Article 2");
      $article->setAuteur("Auteur 2");
      $article->setContenu('<iframe width="560" height="315" src="https://www.youtube.com/embed/t-cDYrhWcgI?list=PLK0tN43y3-MZ7iW9RQnIjZeT29hhzxq4h" frameborder="0" allowfullscreen></iframe>');

      // Persist the fixture article entity
      $manager->persist($article);

      // Create a new article entity
      $article = new Article();
      $article->setDate(new \Datetime());
      $article->setTitre("Article 3");
      $article->setAuteur("Auteur 3");
      $article->setContenu('<iframe width="560" height="315" src="https://www.youtube.com/embed/l9aE3_UAlx0?list=PLK0tN43y3-MZ7iW9RQnIjZeT29hhzxq4h" frameborder="0" allowfullscreen></iframe>');

      // Persist the fixture article entity
      $manager->persist($article);

      // Create a new article entity
      $article = new Article();
      $article->setDate(new \Datetime());
      $article->setTitre("Article 4");
      $article->setAuteur("Auteur 4");
      $article->setContenu('<iframe width="560" height="315" src="https://www.youtube.com/embed/yyLxnaKSWrM?list=PLK0tN43y3-MZ7iW9RQnIjZeT29hhzxq4h" frameborder="0" allowfullscreen></iframe>');

      // Persist the fixture article entity
      $manager->persist($article);

      // Create a new article entity
      $article = new Article();
      $article->setDate(new \Datetime());
      $article->setTitre("Article 5");
      $article->setAuteur("Auteur 5");
      $article->setContenu('<iframe width="560" height="315" src="https://www.youtube.com/embed/h9-Po4BKWoQ?list=PLK0tN43y3-MZ7iW9RQnIjZeT29hhzxq4h" frameborder="0" allowfullscreen></iframe>');

      // Persist the fixture article entity
      $manager->persist($article);

      // Create a new article entity
      $article = new Article();
      $article->setDate(new \Datetime());
      $article->setTitre("Article 6");
      $article->setAuteur("Auteur 6");
      $article->setContenu('<iframe width="560" height="315" src="https://www.youtube.com/embed/t2guWmi9hN0?list=PLK0tN43y3-MZ7iW9RQnIjZeT29hhzxq4h" frameborder="0" allowfullscreen></iframe>');

      // Persist the fixture article entity
      $manager->persist($article);

      // Create a new article entity
      $article = new Article();
      $article->setDate(new \Datetime());
      $article->setTitre("Article 7");
      $article->setAuteur("Auteur 7");
      $article->setContenu('<iframe width="560" height="315" src="https://www.youtube.com/embed/19ivAAVKMA0?list=PLK0tN43y3-MZ7iW9RQnIjZeT29hhzxq4h" frameborder="0" allowfullscreen></iframe>');

      // Persist the fixture article entity
      $manager->persist($article);

      // Create a new article entity
      $article = new Article();
      $article->setDate(new \Datetime());
      $article->setTitre("Article 8");
      $article->setAuteur("Auteur 8");
      $article->setContenu('<iframe width="560" height="315" src="https://www.youtube.com/embed/vgak4QZulnI?list=PLK0tN43y3-MZ7iW9RQnIjZeT29hhzxq4h" frameborder="0" allowfullscreen></iframe>');

      // Persist the fixture article entity
      $manager->persist($article);

      // Create a new article entity
      $article = new Article();
      $article->setDate(new \Datetime());
      $article->setTitre("Article 9");
      $article->setAuteur("Auteur 9");
      $article->setContenu('<iframe width="560" height="315" src="https://www.youtube.com/embed/xlX65-a4K0U?list=PLK0tN43y3-MZ7iW9RQnIjZeT29hhzxq4h" frameborder="0" allowfullscreen></iframe>');

      // Persist the fixture article entity
      $manager->persist($article);

      // Create a new article entity
      $article = new Article();
      $article->setDate(new \Datetime());
      $article->setTitre("Article 10");
      $article->setAuteur("Auteur 10");
      $article->setContenu('<iframe width="560" height="315" src="https://www.youtube.com/embed/MTaZn2idS_I?list=PLK0tN43y3-MZ7iW9RQnIjZeT29hhzxq4h" frameborder="0" allowfullscreen></iframe>');

      // Persist the fixture article entity
      $manager->persist($article);

      // Save all the fixtures
      $manager->flush();
    }
}
