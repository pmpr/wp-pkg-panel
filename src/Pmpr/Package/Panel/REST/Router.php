<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             614c49a77706a             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Panel\REST; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconBrandInterface; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Package\Panel\Data\Route; use Pmpr\Package\Panel\Setting as OptionsSetting; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Router extends Common { public function __construct() { $this->rest_base = "\162\157\165\x74\x65"; parent::__construct(); } public function register_routes() { $this->register("\x2f\154\x69\x73\164", ["\141\162\x67\x73" => [], "\x6d\x65\x74\x68\157\x64\163" => self::READABLE, "\143\x61\154\154\142\x61\x63\x6b" => [$this, "\143\151\165\x67\167\x6f\x6f\141\163\x61\x71\x63\171\167\x61\x73"]]); } public function ciugwooasaqcywas(WP_REST_Request $aqmwamyiwgeeymqa) { goto ciucewqgyoiouesq; mkomygccqkmkumsi: if (is_wp_error($mkucggyaiaukqoce)) { goto agkmiayuawacakau; } goto ussceseaimqywuiy; ussceseaimqywuiy: $ssygqisoeqwgkquw = OptionsSetting::eiwcuqigayigimak(OptionsSetting::ADD_ADMIN_TO, []); goto oyiuemaaykgkqqam; oyiuyywyeoskckuw: foreach ($ikamsuaiikaggcga as $cociqcumeacycoeq) { goto uoeasoimegouymka; aoquoewagkseayug: oocuemosmeeekgas: goto osuscoaaomwcqkew; qiaimmucomukkeka: qkcsykuocwuyaice: goto aoquoewagkseayug; uoeasoimegouymka: if (!$cociqcumeacycoeq instanceof Route) { goto qkcsykuocwuyaice; } goto egsycocugqyyswsi; egsycocugqyyswsi: $suuagcecoyuweoqk[$cociqcumeacycoeq->aakmagwggmkoiiyu()] = $cociqcumeacycoeq->sacmkccceuywoqsq(true, ["\162\145\161\x75\145\163\164" => $aqmwamyiwgeeymqa, self::USER => $mkucggyaiaukqoce]); goto qiaimmucomukkeka; osuscoaaomwcqkew: } goto goqmywuiicciasyk; oyiuemaaykgkqqam: if (!($ssygqisoeqwgkquw && ManipulateUser::esmswawesuyogmik($ssygqisoeqwgkquw, $mkucggyaiaukqoce))) { goto sguskaeaaqcagqgc; } goto gqmewagyagamokok; uycesqqkoeamocgm: agkmiayuawacakau: goto ceiwqkyquikcemmo; ciucewqgyoiouesq: $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); goto cgmgqucewwssmicq; wkgskiuiukiuyque: $suuagcecoyuweoqk = []; goto oyiuyywyeoskckuw; goqmywuiicciasyk: syuaummumssgwwee: goto siecswkggyikqkga; ukomuiwukymcoaso: $ikamsuaiikaggcga = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\160\141\156\x65\154\137\x72\x65\x73\x74\137\162\x6f\165\x74\145\x73"), [$woaeeewomgcuesaa], $this, $woaeeewomgcuesaa, $mkucggyaiaukqoce); goto wkgskiuiukiuyque; sqmoqymckwsogsqg: sguskaeaaqcagqgc: goto uycesqqkoeamocgm; gqmewagyagamokok: $woaeeewomgcuesaa->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\162\x65\x64\151\x72\x65\143\x74\55\141\144\x6d\151\x6e")->qoowicksguscqyks(get_admin_url())->wiskakymeaywyeuw(true)->jyumyyugiwwiqomk(PHP_INT_MAX)->gswweykyogmsyawy(__("\101\144\155\151\156\40\101\162\145\x61", PR__PKG__PANEL))->saemoowcasogykak(IconBrandInterface::ICON_WORDPRESS)); goto sqmoqymckwsogsqg; siecswkggyikqkga: return $this->ewmkmmsuiuwmmwoy(ManipulateArray::yaeiiwwyckwugsem($suuagcecoyuweoqk)); goto qkuiwoqksgayqqmg; cgmgqucewwssmicq: $woaeeewomgcuesaa = $this->oeuiuocwuggewqmk("\x6c\141\x79\x6f\x75\164")->faioisokmmaeimoo()->qksaqgcokiqamueg("\57")->wiskakymeaywyeuw(false)->askmmuauqcuuqsea("\120\x61\x6e\145\x6c\x4c\x61\171\x6f\165\164")->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\x75\163\145\162")->faioisokmmaeimoo()->askmmuauqcuuqsea("\x50\141\x6e\145\x6c\x55\163\x65\x72")->gswweykyogmsyawy(__("\125\163\145\162", PR__PKG__PANEL))->saemoowcasogykak(IconFontawesomeInterface::ICON_USER)->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\x70\x72\x6f\146\x69\154\145")->faioisokmmaeimoo()->askmmuauqcuuqsea("\120\141\156\x65\x6c\x50\162\157\146\x69\x6c\145")->gswweykyogmsyawy(__("\125\163\x65\162\40\120\x72\x6f\x66\x69\154\x65", PR__PKG__PANEL))->saemoowcasogykak(IconFontawesomeInterface::ICON_USER_PEN)->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\x6f\x76\x65\162\x76\151\145\x77")->wiskakymeaywyeuw(false)->askmmuauqcuuqsea("\x50\141\156\x65\x6c\x50\162\157\146\151\154\145\x4f\166\x65\x72\166\x69\145\x77")->gswweykyogmsyawy(__("\120\162\157\x66\x69\154\x65\40\117\x76\x65\162\166\x69\145\x77", PR__PKG__PANEL))->saemoowcasogykak(IconFontawesomeInterface::ICON_LAYERS))->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\x70\x65\162\x73\x6f\156\x61\154")->wiskakymeaywyeuw(false)->askmmuauqcuuqsea("\x50\x61\x6e\145\x6c\120\x72\157\146\151\x6c\145\120\145\x72\x73\157\x6e\x61\154")->saemoowcasogykak(IconFontawesomeInterface::ICON_USER)->gswweykyogmsyawy(__("\120\x65\162\163\x6f\156\141\x6c\40\x49\x6e\146\157\162\x6d\141\164\x69\x6f\x6e", PR__PKG__PANEL))->gucwmccyimoagwcm(__("\125\160\x64\x61\x74\x65\x20\x79\x6f\165\162\40\x70\145\162\163\157\x6e\x61\154\40\151\x6e\146\x6f\x72\x6d\x61\x74\x69\x6f\156", PR__PKG__PANEL)))->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\141\x63\143\157\x75\x6e\164")->wiskakymeaywyeuw(false)->askmmuauqcuuqsea("\120\x61\x6e\145\x6c\x50\x72\157\146\x69\154\145\101\x63\143\157\x75\x6e\x74")->gswweykyogmsyawy(__("\x41\143\x63\157\165\x6e\164\40\111\x6e\146\157\x72\155\x61\x74\x69\157\x6e", PR__PKG__PANEL))->saemoowcasogykak(IconFontawesomeInterface::ICON_CIRCLE_USER)->gucwmccyimoagwcm(__("\123\145\x65\40\x79\157\165\162\x20\x61\143\143\x6f\165\x6e\x74\x20\151\156\146\157\x72\155\141\x74\x69\157\x6e", PR__PKG__PANEL)))->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\x70\x61\163\163\x77\x6f\162\x64")->wiskakymeaywyeuw(false)->askmmuauqcuuqsea("\120\141\x6e\145\154\x50\162\x6f\x66\151\154\145\120\x61\x73\163\x77\157\x72\x64")->gswweykyogmsyawy(__("\103\x68\x61\x6e\147\145\x20\x50\141\x73\x73\x77\157\x72\144", PR__PKG__PANEL))->saemoowcasogykak(IconFontawesomeInterface::ICON_UNLOCK_KEYHOLE)->gucwmccyimoagwcm(__("\103\150\141\156\x67\145\40\x79\x6f\x75\162\x20\141\x63\x63\x6f\165\156\164\40\160\x61\163\163\167\x6f\162\144", PR__PKG__PANEL)))))->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\x6d\157\144\x75\154\x65")->faioisokmmaeimoo()->jyumyyugiwwiqomk(50)->askmmuauqcuuqsea("\120\141\x6e\x65\154\115\x6f\x64\165\x6c\x65")->gswweykyogmsyawy(__("\x4d\x6f\x64\165\154\x65\x73", PR__PKG__PANEL))->saemoowcasogykak(IconFontawesomeInterface::ICON_PLUG)); goto mkomygccqkmkumsi; ceiwqkyquikcemmo: $woaeeewomgcuesaa = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x70\141\x6e\x65\x6c\x5f\162\145\x73\164\137\142\x61\x73\145\137\x72\157\x75\x74\x65"), $woaeeewomgcuesaa, $this, $mkucggyaiaukqoce); goto ukomuiwukymcoaso; qkuiwoqksgayqqmg: } public function oeuiuocwuggewqmk($uusmaiomayssaecw) : Route { return new Route($uusmaiomayssaecw); } }
