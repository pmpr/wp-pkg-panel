<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61680f05559b6             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Panel\REST; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\ORM\DB\Model; use WP_REST_Request; abstract class AbstractREST extends Common { public function __construct() { $this->abstract = true; parent::__construct(); } public function ackuaigiocsgyqwe(WP_REST_Request $aqmwamyiwgeeymqa) : bool { return parent::ackuaigiocsgyqwe($aqmwamyiwgeeymqa) && !is_wp_error($this->issssuygyewuaswa($aqmwamyiwgeeymqa)); } public function agqsmkyeogkaeaww(WP_REST_Request $aqmwamyiwgeeymqa, Model $meywaqqsugaoeyys, array $mscssagggiccseco = [], $siykeiywomwwuoiw = null, array $ywmkwiwkosakssii = []) : array { goto ggoimgeeuugseiwk; eimouyomcoqkmaae: return $meywaqqsugaoeyys->aeggeuqycwawueqy($siykeiywomwwuoiw, $ywmkwiwkosakssii); goto kkwqmoeeqygoimwg; ggoimgeeuugseiwk: $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::PAGE => $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::PAGE), self::ITEMS_PER_PAGE => $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::ITEMS_PER_PAGE)]); goto gimquiiwucueoqkw; gimquiiwucueoqkw: $siykeiywomwwuoiw = $meywaqqsugaoeyys->kqewyqqqiyiouaou($mscssagggiccseco, $siykeiywomwwuoiw); goto eimouyomcoqkmaae; kkwqmoeeqygoimwg: } }
