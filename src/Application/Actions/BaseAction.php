<?php
declare(strict_types=1);

namespace App\Application\Actions;

use App\Application\Handlers\DbHandlerInterface;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Log\LoggerInterface;
use Slim\Flash\Messages;
use Slim\Views\PhpRenderer;

class BaseAction extends Action
{
    /** @var PhpRenderer */
    protected $renderer;

    /** @var Messages */
    protected $flash;

    /** @var DbHandlerInterface */
    protected $dbHandler;

    public function __construct(LoggerInterface $logger, PhpRenderer $renderer, Messages $flashMessage, DbHandlerInterface $dbHandler)
    {
        parent::__construct($logger);
        $this->logger = $logger;
        $this->renderer = $renderer;
        $this->flash = $flashMessage;
        $this->dbHandler = $dbHandler;
    }

    /**
     * {@inheritdoc}
     */
    protected function action(): Response
    {
        return $this->renderer->render($this->response, 'index.php', ['time' => date('y-m-d')]);
    }
}
