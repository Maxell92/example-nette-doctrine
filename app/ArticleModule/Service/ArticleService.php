<?php

namespace ArticleModule\Service;

use ArticleModule\Entity\Article;
use Kdyby\Doctrine\EntityManager;

class ArticleService
{

    /**
     * @var EntityManager
     */
    private $entityManager;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function createArticle()
    {
        $article = new Article;
        $article->setName('Name of article');
        $this->entityManager->persist($article);
        $this->entityManager->flush();
    }

}
