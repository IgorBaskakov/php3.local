<?php

namespace App\Components;


class Counter
{
    const DATA_DIR = __DIR__ . '/../Data';
    const FILE_NAME = 'counter.txt';

    public static function updateCounter(): void
    {
        static::checkFile();

        $dataFile = static::getCount();
        if (false === $dataFile) {
            return;
        }

        $dataFile++;
        file_put_contents(static::DATA_DIR . '/' . static::FILE_NAME, $dataFile);
    }

    public static function getCount(): string
    {
        return file_get_contents(static::DATA_DIR . '/' . static::FILE_NAME);
    }

    protected static function checkFile(): void
    {
        if (!is_dir(static::DATA_DIR)) {
            mkdir(static::DATA_DIR);
        }
        if (!is_file(static::DATA_DIR . '/' . static::FILE_NAME)) {
            file_put_contents(static::DATA_DIR . '/' . static::FILE_NAME, 0);
        }
    }


}