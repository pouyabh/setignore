<?php

namespace pouyabh\setignore;

class setignore
{
    public static function SetIgnore()
    {
        $data = file_get_contents(base_path() . '/packages/pouyabh/setignore/ignores.txt');
        $data = file_put_contents(base_path() . '/.gitignore', $data);
    }
}

