<?php

namespace Lucups\PhpSms\Interfaces;

interface TemplateSms
{
    /**
     * Template SMS send process.
     *
     * @param string|array $to
     * @param int|string $tempId
     * @param array $tempData
     */
    public function sendTemplateSms($to, $tempId, array $tempData);
}
