<?php

/**
 * @file
 * Contains \Drupal\migrate_drupal\Tests\Table\d7\FieldRevisionFieldFloat.
 *
 * THIS IS A GENERATED FILE. DO NOT EDIT.
 *
 * @see core/scripts/migrate-db.sh
 * @see https://www.drupal.org/sandbox/benjy/2405029
 */

namespace Drupal\migrate_drupal\Tests\Table\d7;

use Drupal\migrate_drupal\Tests\Dump\DrupalDumpBase;

/**
 * Generated file to represent the field_revision_field_float table.
 */
class FieldRevisionFieldFloat extends DrupalDumpBase {

  public function load() {
    $this->createTable("field_revision_field_float", array(
      'primary key' => array(
        'entity_type',
        'deleted',
        'entity_id',
        'revision_id',
        'language',
        'delta',
      ),
      'fields' => array(
        'entity_type' => array(
          'type' => 'varchar',
          'not null' => TRUE,
          'length' => '128',
          'default' => '',
        ),
        'bundle' => array(
          'type' => 'varchar',
          'not null' => TRUE,
          'length' => '128',
          'default' => '',
        ),
        'deleted' => array(
          'type' => 'int',
          'not null' => TRUE,
          'length' => '11',
          'default' => '0',
        ),
        'entity_id' => array(
          'type' => 'int',
          'not null' => TRUE,
          'length' => '10',
          'unsigned' => TRUE,
        ),
        'revision_id' => array(
          'type' => 'int',
          'not null' => TRUE,
          'length' => '10',
          'unsigned' => TRUE,
        ),
        'language' => array(
          'type' => 'varchar',
          'not null' => TRUE,
          'length' => '32',
          'default' => '',
        ),
        'delta' => array(
          'type' => 'int',
          'not null' => TRUE,
          'length' => '10',
          'unsigned' => TRUE,
        ),
        'field_float_value' => array(
          'type' => 'numeric',
          'not null' => FALSE,
          'precision' => '10',
          'scale' => '0',
        ),
      ),
      'mysql_character_set' => 'utf8',
    ));
    $this->database->insert("field_revision_field_float")->fields(array(
      'entity_type',
      'bundle',
      'deleted',
      'entity_id',
      'revision_id',
      'language',
      'delta',
      'field_float_value',
    ))
    ->values(array(
      'entity_type' => 'node',
      'bundle' => 'test_content_type',
      'deleted' => '0',
      'entity_id' => '1',
      'revision_id' => '1',
      'language' => 'und',
      'delta' => '0',
      'field_float_value' => '1',
    ))->execute();
  }

}
#02ee7dce1bc725eb9596a78a0d123f00
