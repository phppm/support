<?php

namespace Zan\Framework\Utilities\Types;


class Dir
{
    const SCAN_CURRENT_DIR  = 'current';
    const SCAN_BFS = 'bfs';
    const SCAN_DFS = 'dfs';

    public static function glob($path, $pattern=null, $strategy=self::SCAN_DFS)
    {

    }

    public static function scan($path, $strategy=self::SCAN_CURRENT_DIR, $excludeDir=true)
    {

    }

    public static function formatPath($path)
    {

    }

    public static function matchPattern($pattern, $file)
    {

    }

    public static function basename($pathes, $suffix='')
    {

    }
}