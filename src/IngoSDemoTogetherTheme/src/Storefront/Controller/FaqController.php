<?php declare(strict_types=1);

namespace IngoS\DemoTogetherTheme\Storefront\Controller;

use Shopware\Core\System\SalesChannel\SalesChannelContext;
use Shopware\Storefront\Controller\StorefrontController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route(defaults: ['_routeScope' => ['storefront']])]
class FaqController extends StorefrontController
{
    #[Route(path: '/faq', name: 'core.content.faq', methods: ['GET'])]
    public function showFaq(): Response
    {
        return $this->renderStorefront('@IngoSDemoTogetherTheme/storefront/page/faq/faq.html.twig', [
            'example' => 'Hello world'
        ]);
    }
}
