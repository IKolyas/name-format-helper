<?php

declare(strict_types=1);

namespace IKolyas\PersonNameFormat;

final class PersonName
{
    public function __construct(
        public string $surname,
        public string $name,
        public ?string $patronymic = null
    ) {
    }

    final public function short(): string
    {
        $shortName = mb_strtoupper(mb_substr($this->name, 0, 1)) . '.';

        return join(' ', [$this->surname, $shortName]);
    }

    final public function fullShort(): string
    {
        $getSubstr = fn(?string $str) => $str ? mb_strtoupper(mb_substr($str, 0, 1)) . '.' : null;

        $nameList = [$this->surname, $getSubstr($this->name) . $getSubstr($this->patronymic)];

        return join(' ', array_filter($nameList));
    }

    final public function long(): string
    {
        return join(' ', [$this->surname, $this->name]);
    }

    final public function fullLong(): string
    {
        $nameList = [$this->surname, $this->name, $this->patronymic];

        return join(' ', array_filter($nameList));
    }
}
