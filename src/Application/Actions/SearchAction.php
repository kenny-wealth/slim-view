<?php

namespace App\Application\Actions;

use App\Application\Models\Product;
use Psr\Http\Message\ResponseInterface as Response;

class SearchAction extends BaseAction
{

    /**
     * {@inheritdoc}
     */
    protected function action(): Response
    {
        $keyword = $this->request->getQueryParams()['keyword'];
        $productsModel = new Product($this->dbHandler);
        $products = $productsModel->find($keyword);

        return $this->renderer->render(
            $this->response,
            'search.php',
            ['keyword' => $keyword, 'products' => $products]
        );
    }
}
