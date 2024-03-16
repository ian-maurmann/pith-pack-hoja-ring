<?php

/**
 * Hoja Ring Resource Route
 * ------------------------
 *
 * @noinspection PhpPropertyNamingConventionInspection - Property names with underscores are ok.
 * @noinspection PhpClassNamingConventionInspection    - Long class names are ok.
 * @noinspection PhpUnused                             - Ignore that the class is unused.
 */


declare(strict_types=1);

namespace PithFront\PithPackHojaRing;

use Pith\Workflow\PithRoute;

/**
 * Class HojaRingResourceRoute
 */
class HojaRingResourceRoute extends PithRoute
{
    public string $pack            = 'PithFront\\PithPackHojaRing\\HojaRingResourcePack';
    public string $route_type      = 'resource-folder';
    public string $access_level    = 'world';
    public string $resource_folder = '[^route_folder]/resource/';
    public string $cache_level     = 'Cache-Control: public, max-age=31536000, immutable, stale-while-revalidate=604800, stale-if-error=1209600';
}
