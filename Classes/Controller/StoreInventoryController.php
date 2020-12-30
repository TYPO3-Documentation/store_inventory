<?php

namespace T3docs\StoreInventory\Controller;

use T3docs\StoreInventory\Domain\Repository\ProductRepository;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use Psr\Http\Message\ResponseInterface;

/**
 * Class StoreInventoryController
 *
 * @package T3docs\StoreInventory\Controller
 */
class StoreInventoryController extends ActionController
{

    /**
     * @var ProductRepository
     */
    private $productRepository;

    /**
     * Inject the product repository
     *
     * @param \T3docs\StoreInventory\Domain\Repository\ProductRepository $productRepository
     */
    public function injectProductRepository(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    /**
     * List Action
     *
     * @return ResponseInterface
     */
    public function listAction(): ResponseInterface
    {
        $products = $this->productRepository->findAll();
        $this->view->assign('products', $products);
        return $this->htmlResponse();
    }
}
