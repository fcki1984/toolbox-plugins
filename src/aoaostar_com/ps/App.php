<?php

namespace plugin\aoaostar_com\ps;

use plugin\Drive;

class App implements Drive
{

    public function Index()
    {
        return success();
    }
}