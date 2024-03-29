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
class IngoSDemoTogetherFaqApiController extends AbstractController
{

    // This class has to contain a method getDecorated and a method load with a Criteria
    // and SalesChannelContext as parameter.
    // The load method has to return an instance of ExampleRouteResponse, which we will create later on.
    // All fields that should be available through the API require the flag ApiAware in the definition.
    // https://developer.shopware.com/docs/guides/plugins/plugins/framework/store-api/add-store-api-route.html

    // Class "IngoSDemoTogetherTheme\Storefront\Controller\IngoSDemoTogetherFaqController" does not exist
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
    public function generate(Context $context): Response
    {
        // We could use a fakerFactory to generate demo data here.
        // TODO implement
        // How to return a backend page?
        // How to handle permissions?
        // return $this->renderStorefront('@SwagBasicExample/storefront/page/example.html.twig', [ 'example' => 'Hello world' ]);

        // Why would they return an _empty_ response in the tutorial?
        // They will inject something into the $context, okay and
        // "this feels a little wird at first"
        // TODO create repository
        // verify: will everything run without an error at least now?
        // No, it won't !!!
        return new Response('', Response::HTTP_NO_CONTENT);
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
