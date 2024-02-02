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

#[Route(defaults: ['_routeScope' => ['api']])]
class IngoSDemoTogetherFaqController extends AbstractController
{
    /**
     * @var EntityRepository
     */
    private $languageRepository;

    /**
     * @var EntityRepository
     */
    private $faqRepository;

    public function __construct(EntityRepository $languageRepository, EntityRepository $faqRepository)
    {
        $this->languageRepository = $languageRepository;
        $this->faqRepository = $faqRepository;
    }

    #[Route(path: '/api/v{version}/_action/ingos-demo-together-theme-faq/generate', name: 'api.custom.ingos_demo_together_theme_faq.generate', methods: ['POST'])]
    /**
     * @return Response
     */
    public function generate(): Response
    {
        // TODO implement
    }

    /**
     * @param Context $context
     * @return LanguageEntity
     * @throws LocaleException
     * @throws InconsistentCriteriaIdsException
     */
    public function getActiveLanguage(Context $context): LanguageEntity
    {
        $criteria = new Criteria();
        $criteria->addFilter(new EqualsFilter('locale', 'en-GB'));
        $criteria->setLimit(1);

        $language = $this->languageRepository->search($criteria, $context)->getEntities()->first();
        if ($language === null){
            throw new LocaleException(404, 'SYSTEM__LOCALE_DOES_NOT_EXISTS');
        }

        return $language;
    }
}

#[Route(defaults: ['_routeScope' => ['storefront']])]
class IngoSDemoTogetherThemeController extends StorefrontController
{

    #[Route(path: '/simpleSeite', name: 'frontend.page.simpleSeite', methods: ['GET'])]
    public function simpleSeite(): Response
    {
        return $this->renderStorefront('@IngoSDemoTogetherTheme/storefront/page/simpleSeite.html.twig', [
            'example' => 'example parameter content defined in IngoSDemoTogetherThemeController.php'
        ]);
    }
    #[Route(path: '/faq', name: 'core.content.faq', methods: ['GET'])]
    public function showFaq(): Response
    {
        return $this->renderStorefront('@IngoSDemoTogetherTheme/storefront/page/faq/faq.html.twig', [
            'example' => 'example parameter content defined in IngoSDemoTogetherThemeController.php'
        ]);
    }
}
