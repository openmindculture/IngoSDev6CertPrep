<?php declare(strict_types=1);

namespace IngoS\Dev6CertPrep\Storefront\Controller;

use Shopware\Core\System\SalesChannel\SalesChannelContext;
use Shopware\Storefront\Controller\StorefrontController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route(defaults: ['_routeScope' => ['storefront']])]
class ExampleController extends StorefrontController
{
    #[Route(
        path: '/example',
        name: 'frontend.example.example',
        methods: ['GET']
    )]
    public function showExample(Request $request, SalesChannelContext $context): Response
    {
        return $this->renderStorefront('@IngoSDev6CertPrep/storefront/page/example.html.twig', [
            'example' => 'Hello world'
        ]);
    }
}
