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

        $article->translate('cs')->setName('Název článku');
        $article->translate('en')->setName('Name of article');

        $article->mergeNewTranslations();

        $this->entityManager->persist($article);

        $this->entityManager->flush();
    }

}
