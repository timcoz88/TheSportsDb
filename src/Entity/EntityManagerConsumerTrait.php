<?php
/**
 * @file
 * Contains TheSportsDb\Entity\EntityManagerConsumerTrait.
 */
namespace TheSportsDb\Entity;

use TheSportsDb\Entity\EntityManagerInterface;

/**
 * A trait to use by entity manager consumers.
 *
 * @author Jelle Sebreghts
 */
trait EntityManagerConsumerTrait {

  /**
   * The entity manager.
   *
   * @var \TheSportsDb\Entity\EntityManagerInterface
   */
  protected $entityManager;

  /**
   * setEntityManager
   * Insert description here
   *
   * @param EntityManagerInterface
   * @param $entityManager
   *
   * @return
   *
   * @access
   * @static
   * @see
   * @since
   */
  public function setEntityManager(EntityManagerInterface $entityManager) {
    if ($this->entityManager instanceof EntityManagerInterface) {
      throw new \Exception('Entity manager already set.');
    }
    $this->entityManager = $entityManager;
  }
}
