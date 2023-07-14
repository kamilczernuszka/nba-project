<?php

/**
 * Functions that will perform to update the current database.
 */
/**
 * This function will update the current database schema.
 *
 * @return void
 */
function lsfs_update_140()
{
    $installer = new LSFS_Installer();
    $installer->create_db();
}

/**
 * This will update the DB with new column.
 *
 * @return void
 */
function lsfs_update_170()
{
    global  $wpdb ;
    $installer = new LSFS_Installer();
    $installer->create_db();
}
