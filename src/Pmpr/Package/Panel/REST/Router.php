<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6151a27f0e91a             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Panel\REST; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconBrandInterface; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Package\Panel\Data\Route; use Pmpr\Package\Panel\Setting as OptionsSetting; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Router extends Common { public function __construct() { $this->rest_base = "\162\x6f\165\164\145"; parent::__construct(); } public function register_routes() { $this->register("\57\154\x69\x73\x74", ["\141\x72\147\x73" => [], "\x6d\145\164\x68\x6f\144\x73" => self::READABLE, "\143\x61\x6c\154\142\141\x63\153" => [$this, "\x63\x69\165\147\167\157\x6f\x61\x73\x61\161\143\x79\x77\141\x73"]]); } public function ciugwooasaqcywas(WP_REST_Request $aqmwamyiwgeeymqa) { goto ciucewqgyoiouesq; ciucewqgyoiouesq: $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); goto cgmgqucewwssmicq; siecswkggyikqkga: return $this->ewmkmmsuiuwmmwoy(ManipulateArray::yaeiiwwyckwugsem($suuagcecoyuweoqk)); goto qkuiwoqksgayqqmg; goqmywuiicciasyk: syuaummumssgwwee: goto siecswkggyikqkga; sqmoqymckwsogsqg: sguskaeaaqcagqgc: goto uycesqqkoeamocgm; oyiuyywyeoskckuw: foreach ($ikamsuaiikaggcga as $cociqcumeacycoeq) { goto uoeasoimegouymka; egsycocugqyyswsi: $suuagcecoyuweoqk[$cociqcumeacycoeq->aakmagwggmkoiiyu()] = $cociqcumeacycoeq->sacmkccceuywoqsq(true, ["\162\x65\161\165\145\x73\164" => $aqmwamyiwgeeymqa, self::USER => $mkucggyaiaukqoce]); goto qiaimmucomukkeka; aoquoewagkseayug: oocuemosmeeekgas: goto osuscoaaomwcqkew; qiaimmucomukkeka: qkcsykuocwuyaice: goto aoquoewagkseayug; uoeasoimegouymka: if (!$cociqcumeacycoeq instanceof Route) { goto qkcsykuocwuyaice; } goto egsycocugqyyswsi; osuscoaaomwcqkew: } goto goqmywuiicciasyk; ceiwqkyquikcemmo: $woaeeewomgcuesaa = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\160\x61\x6e\x65\x6c\137\x72\145\x73\164\x5f\142\x61\163\145\x5f\162\157\165\x74\x65"), $woaeeewomgcuesaa, $this, $mkucggyaiaukqoce); goto ukomuiwukymcoaso; ukomuiwukymcoaso: $ikamsuaiikaggcga = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x70\x61\x6e\x65\154\x5f\162\x65\163\x74\137\162\x6f\x75\x74\x65\163"), [$woaeeewomgcuesaa], $this, $woaeeewomgcuesaa, $mkucggyaiaukqoce); goto wkgskiuiukiuyque; mkomygccqkmkumsi: if (is_wp_error($mkucggyaiaukqoce)) { goto agkmiayuawacakau; } goto ussceseaimqywuiy; gqmewagyagamokok: $woaeeewomgcuesaa->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\162\x65\144\x69\x72\145\x63\164\55\x61\x64\155\151\156")->qoowicksguscqyks(get_admin_url())->wiskakymeaywyeuw(true)->jyumyyugiwwiqomk(PHP_INT_MAX)->gswweykyogmsyawy(__("\x41\x64\x6d\x69\156\40\101\162\x65\141", PR__PKG__PANEL))->saemoowcasogykak(IconBrandInterface::ICON_WORDPRESS)); goto sqmoqymckwsogsqg; oyiuemaaykgkqqam: if (!($ssygqisoeqwgkquw && ManipulateUser::esmswawesuyogmik($ssygqisoeqwgkquw, $mkucggyaiaukqoce))) { goto sguskaeaaqcagqgc; } goto gqmewagyagamokok; wkgskiuiukiuyque: $suuagcecoyuweoqk = []; goto oyiuyywyeoskckuw; ussceseaimqywuiy: $ssygqisoeqwgkquw = OptionsSetting::eiwcuqigayigimak(OptionsSetting::ADD_ADMIN_TO, []); goto oyiuemaaykgkqqam; cgmgqucewwssmicq: $woaeeewomgcuesaa = $this->oeuiuocwuggewqmk("\154\141\171\157\165\164")->faioisokmmaeimoo()->qksaqgcokiqamueg("\x2f")->wiskakymeaywyeuw(false)->askmmuauqcuuqsea("\120\x61\156\x65\x6c\x4c\141\x79\157\x75\x74")->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\165\163\x65\162")->faioisokmmaeimoo()->askmmuauqcuuqsea("\120\141\156\145\154\x55\163\x65\162")->gswweykyogmsyawy(__("\125\163\x65\162", PR__PKG__PANEL))->saemoowcasogykak(IconFontawesomeInterface::ICON_USER)->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\x70\162\157\146\151\x6c\x65")->faioisokmmaeimoo()->askmmuauqcuuqsea("\x50\x61\156\x65\154\x50\162\x6f\x66\151\154\145")->gswweykyogmsyawy(__("\125\x73\x65\162\x20\x50\x72\x6f\146\151\154\x65", PR__PKG__PANEL))->saemoowcasogykak(IconFontawesomeInterface::ICON_USER_PEN)->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\x6f\166\x65\x72\x76\151\145\167")->wiskakymeaywyeuw(false)->askmmuauqcuuqsea("\120\141\156\x65\x6c\x50\x72\x6f\146\151\154\145\x4f\166\x65\x72\166\151\x65\167")->gswweykyogmsyawy(__("\x50\x72\x6f\x66\x69\x6c\145\40\117\x76\145\x72\x76\x69\145\x77", PR__PKG__PANEL))->saemoowcasogykak(IconFontawesomeInterface::ICON_LAYERS))->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\x70\145\x72\x73\x6f\156\141\154")->wiskakymeaywyeuw(false)->askmmuauqcuuqsea("\120\141\x6e\x65\154\120\162\x6f\146\x69\154\x65\120\x65\162\163\157\x6e\141\154")->saemoowcasogykak(IconFontawesomeInterface::ICON_USER)->gswweykyogmsyawy(__("\120\x65\x72\x73\x6f\156\141\154\x20\111\x6e\146\157\x72\x6d\141\x74\x69\x6f\x6e", PR__PKG__PANEL))->gucwmccyimoagwcm(__("\125\x70\144\x61\164\x65\x20\x79\x6f\x75\x72\40\160\145\x72\163\x6f\156\x61\x6c\40\x69\156\146\157\x72\155\141\164\151\x6f\156", PR__PKG__PANEL)))->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\141\143\143\157\165\x6e\164")->wiskakymeaywyeuw(false)->askmmuauqcuuqsea("\120\x61\x6e\145\154\x50\162\x6f\146\151\x6c\x65\x41\x63\x63\x6f\165\x6e\x74")->gswweykyogmsyawy(__("\101\143\x63\x6f\165\x6e\x74\x20\x49\x6e\x66\157\162\x6d\141\164\x69\x6f\156", PR__PKG__PANEL))->saemoowcasogykak(IconFontawesomeInterface::ICON_CIRCLE_USER)->gucwmccyimoagwcm(__("\123\145\x65\40\171\157\x75\162\40\141\x63\143\x6f\x75\156\164\x20\x69\x6e\x66\157\162\x6d\x61\164\151\x6f\x6e", PR__PKG__PANEL)))->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\160\141\x73\x73\x77\157\162\144")->wiskakymeaywyeuw(false)->askmmuauqcuuqsea("\x50\141\x6e\145\x6c\120\162\x6f\x66\x69\x6c\x65\120\x61\163\163\x77\x6f\x72\144")->gswweykyogmsyawy(__("\x43\x68\x61\156\x67\x65\x20\120\x61\x73\163\167\x6f\x72\x64", PR__PKG__PANEL))->saemoowcasogykak(IconFontawesomeInterface::ICON_UNLOCK_KEYHOLE)->gucwmccyimoagwcm(__("\103\x68\x61\x6e\x67\145\40\171\157\165\162\40\x61\143\x63\x6f\165\156\x74\x20\x70\x61\x73\x73\167\x6f\x72\x64", PR__PKG__PANEL)))))->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\155\x6f\x64\165\154\145")->faioisokmmaeimoo()->jyumyyugiwwiqomk(50)->askmmuauqcuuqsea("\120\141\x6e\145\x6c\115\157\144\165\x6c\x65")->gswweykyogmsyawy(__("\x4d\x6f\144\x75\154\x65\x73", PR__PKG__PANEL))->saemoowcasogykak(IconFontawesomeInterface::ICON_PLUG)); goto mkomygccqkmkumsi; uycesqqkoeamocgm: agkmiayuawacakau: goto ceiwqkyquikcemmo; qkuiwoqksgayqqmg: } public function oeuiuocwuggewqmk($uusmaiomayssaecw) : Route { return new Route($uusmaiomayssaecw); } }
