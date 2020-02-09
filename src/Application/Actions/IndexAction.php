<?php

namespace App\Application\Actions;

use Psr\Http\Message\ResponseInterface as Response;

class IndexAction extends BaseAction
{

    /**
     * {@inheritdoc}
     */
    protected function action(): Response
    {
        $this->flash->addMessage('message', 'This is a flash message, it is usually used to send notification to users. ');
        $this->flash->addMessage('error', 'This is an error message. ');
        return $this->renderer->render($this->response, 'index.php', ['date' => date('jS F Y')]);
    }
}
