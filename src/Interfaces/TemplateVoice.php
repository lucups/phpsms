<?php

namespace Lucups\PhpSms\Interfaces;

interface TemplateVoice
{
    /**
     * Template voice send process.
     *
     * @param string|array $to
     * @param int|string $tempId
     * @param array $tempData
     */
    public function sendTemplateVoice($to, $tempId, array $tempData);
}
