<?php declare(strict_types=1);

namespace IngoSDemoTogetherTheme\Storefront\Controller;

use Shopware\Core\Framework\Context;
use Shopware\Core\Framework\DataAbstractionLayer\EntityRepository;
use Shopware\Core\Framework\DataAbstractionLayer\Exception\InconsistentCriteriaIdsException;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Criteria;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Filter\EqualsFilter;
use Shopware\Core\System\Country\CountryEntity;
use Shopware\Core\System\Language\LanguageEntity;
use Shopware\Core\System\Locale\LocaleException;
use Shopware\Core\System\SalesChannel\SalesChannelContext;
use Shopware\Storefront\Controller\StorefrontController;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route(defaults: ['_routeScope' => ['storefront']])]
class IngoSDemoTogetherFaqFrontendController extends StorefrontController
{
    #[Route(path: '/faq', name: 'core.content.faq', methods: ['GET'])]
    public function showFaq(): Response
    {
        return $this->renderStorefront('@IngoSDemoTogetherTheme/storefront/page/faq/faq.html.twig', [
            'example' => 'example parameter content defined in IngoSDemoTogetherThemeController.php'
        ]);
    }
}
