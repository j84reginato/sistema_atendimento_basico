<?php

/**
 * @package Sistema Atendimento Básico
 * @subpackage Atendimento
 * @category Entity
 * @version 1.0.0
 * @author Jonatan Noronha Reginato <noronha_reginato@hotmail.com>
 */
namespace Atendimento\Model\Entity;

use Myframework\Mvc\Model\Entity\AbstractEntity;

/**
 * MotivoChamadoEntity.
 */
class MotivoChamadoEntity extends AbstractEntity
{
    const DB_SCHEMA = 'atendimento';
    const TABLE_NAME = 'tb_motivos_chamado';
    const PRIMARY_KEY = 'pkMotivoChamado';
}