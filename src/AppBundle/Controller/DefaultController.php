<?php

namespace AppBundle\Controller;

use Application\StartGameCommand;
use Ramsey\Uuid\Uuid;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{


    /**
     * @Route("/start", name="start_game")
     * @Method("POST")
     */
    public function startAction(Request $request)
    {
        $command = new StartGameCommand();
        $command->gameId = Uuid::uuid4();
        $command->playerName = $request->request->get('playerName');

        $startGameHandler = $this->get('app.start_game_handler');
        $entityManager = $this->get('doctrine.orm.default_entity_manager');

        $startGameHandler->handle($command);
        $entityManager->flush();

        return $this->redirect($this->generateUrl('play_game', ['gameId' => $command->gameId->toString()]));
    }

    /**
     * @Route("/play/{gameId}", name="play_game")
     * @Method("GET")
     */
    public function playGame($gameId)
    {

    }
}
