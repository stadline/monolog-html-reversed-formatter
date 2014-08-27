<?php

namespace Monolog\Formatter;

/**
 * This formatter displays the logs in reverse chronological order
 * 
 * @author Stadline <contact@stadline.com>
 */
class HtmlReverseFormatter extends HtmlFormatter
{

    /**
     * {@inheritDoc}
     */
    public function formatBatch(array $records)
    {
        return parent::formatBatch(array_reverse($records));
    }

}
