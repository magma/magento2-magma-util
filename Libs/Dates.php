<?php
namespace Magma\Util\Libs;

class Dates
{
    protected function getDatetimeNow()
    {
        $data = new \DateTime('now', new \DateTimeZone("Europe/Rome"));
        return $data;
    }

    public function getDateTimeNowStandard()
    {
        $data = $this->getDatetimeNow();
        return $data->format('Y-m-d H:i:s');
    }

    public function getDateTimeNowItalian()
    {
        $data = $this->getDatetimeNow();
        return $data->format('d/m/Y H:i:s');
    }
}