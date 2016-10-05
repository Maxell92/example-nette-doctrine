<?php

namespace ArticleModule\Entity;

use Doctrine\ORM\Mapping as ORM;
use Kdyby\Doctrine\Entities\Attributes\Identifier;
use Knp\DoctrineBehaviors\Model\Translatable\Translatable;
use Zenify\DoctrineBehaviors\Entities\Attributes\Translatable as ZenifyTranslatable;

/**
 * @ORM\Entity
 * @ORM\Table(name="article")
 *
 * @method ArticleTranslation translate($lang='')
 */
class Article
{
    use Identifier;
    use Translatable;
    use ZenifyTranslatable;

    public function getArticleName()
    {
        return $this->translate()->getName();
    }
}

