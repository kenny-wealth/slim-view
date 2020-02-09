<?php
declare(strict_types=1);

namespace App\Application\Actions;

use Psr\Http\Message\ResponseInterface as Response;

class ContactAction extends BaseAction
{

    /**
     * {@inheritdoc}
     */
    protected function action(): Response
    {
        return $this->renderer->render($this->response, 'contact.php');
    }
}
