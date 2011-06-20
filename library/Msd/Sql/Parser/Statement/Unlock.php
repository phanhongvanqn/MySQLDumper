<?php
/**
 * This file is part of MySQLDumper released under the GNU/GPL 2 license
 * http://www.mysqldumper.net
 *
 * @package    MySQLDumper
 * @subpackage SQL-Parser
 * @version    SVN: $Rev$
 * @author     $Author$
 */

/**
 * Class to parse MySQL UNLOCK statements.
 * This enables you to analyze and modify MySQL queries, which the user has entered.
 *
 * @package         MySQLDumper
 * @subpackage      SQL-Parser
 */
class Msd_Sql_Parser_Statement_Unlock implements Msd_Sql_Parser_Interface
{
    /**
     * Parse the statement.
     *
     * @param Msd_Sql_Object $sql MySQL UNLOCK statement.
     *
     * @return string
     */
    public function parse(Msd_Sql_Object $sql)
    {
        $sql->setState('Unlock');
        $endOfStatement = $sql->getPosition(';');
        $statement = $sql->getData($endOfStatement);
        return $statement;
    }
}
