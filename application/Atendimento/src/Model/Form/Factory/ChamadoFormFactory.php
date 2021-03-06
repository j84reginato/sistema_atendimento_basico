<?php

/**
 * @package Sistema Atendimento Básico
 * @subpackage Atendimento
 * @category Factory
 * @version 1.0.0
 * @author Jonatan Noronha Reginato <noronha_reginato@hotmail.com>
 */
namespace Atendimento\Model\Form\Factory;

use j84Reginato\MyFramework\Application\Application;
use Atendimento\Model\Form\ChamadoForm;

/**
 * ChamadoFormFactory.
 */
class ChamadoFormFactory
{
    /**
     * Método responsável por instanciar a classe solicitada.
     *
     * @param Application $oApp
     * @return ChamadoForm
     */
    public static function create(Application $oApp)
    {
        $oPost = $oApp->oRequest->getPost();
        $oChamadoForm = new ChamadoForm($oPost);

        return $oChamadoForm;
    }

}