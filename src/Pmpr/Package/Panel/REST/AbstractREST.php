<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c0323dbc649             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Panel\REST; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML; use Pmpr\Common\Foundation\ORM\DB\Model; use WP_REST_Request; abstract class AbstractREST extends Common { public function __construct() { $this->abstract = true; parent::__construct(); } public function ackuaigiocsgyqwe(WP_REST_Request $aqmwamyiwgeeymqa) : bool { return parent::ackuaigiocsgyqwe($aqmwamyiwgeeymqa) && !is_wp_error($this->issssuygyewuaswa($aqmwamyiwgeeymqa)); } public function agqsmkyeogkaeaww(WP_REST_Request $aqmwamyiwgeeymqa, Model $meywaqqsugaoeyys, array $uoomaookgsyciacm = [], $siykeiywomwwuoiw = null, array $ywmkwiwkosakssii = []) : array { $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, $this->ugyeicuiaamcceos($aqmwamyiwgeeymqa)); $siykeiywomwwuoiw = $meywaqqsugaoeyys->kqewyqqqiyiouaou($uoomaookgsyciacm, $siykeiywomwwuoiw); return $meywaqqsugaoeyys->aeggeuqycwawueqy($siykeiywomwwuoiw, $ywmkwiwkosakssii); } public function wigcmmuseymwogeg($mkomwsiykqigmqca, $meqocwsecsywiiqs = null) { $iwywmkygwewiamwm = ManipulateServer::oiucukewkckkwiqc($mkomwsiykqigmqca, "\x70\141\156\x65\154"); if (!$meqocwsecsywiiqs) { goto oqugqwcyomiaaoqu; } $iwywmkygwewiamwm = ManipulateHTML::uuccukgasskgimsq("\x61", ["\x68\x72\145\x66" => $iwywmkygwewiamwm], $meqocwsecsywiiqs); oqugqwcyomiaaoqu: return $iwywmkygwewiamwm; } }
