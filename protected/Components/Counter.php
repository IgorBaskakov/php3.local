<?php

namespace App\Components;


class Counter
{
    const DATA_DIR = __DIR__ . '/../Data';
    const FILE_NAME = 'counter.txt';

    public static function updateCounter()
    {
        Counter::checkFile();

        $dataFile = Counter::getCount();
        if ($dataFile === false) {
            return;
        }

        $dataFile++;
        file_put_contents(Counter::DATA_DIR . '/' . Counter::FILE_NAME, $dataFile);
    }

    public static function getCount()
    {
        return file_get_contents(Counter::DATA_DIR . '/' . Counter::FILE_NAME);
    }

    protected static function checkFile()
    {
        if (!is_dir(Counter::DATA_DIR)) {
            mkdir(Counter::DATA_DIR);
        }
        if (!is_file(Counter::DATA_DIR . '/' . Counter::FILE_NAME)) {
            file_put_contents(Counter::DATA_DIR . '/' . Counter::FILE_NAME, 0);
        }
    }


}