<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61680f05559b6             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Panel\REST; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconBrandInterface; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Package\Panel\Data\Route; use Pmpr\Package\Panel\Setting as OptionsSetting; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Router extends Common { public function __construct() { $this->rest_base = "\x72\x6f\x75\x74\x65"; parent::__construct(); } public function register_routes() { $this->register("\x2f\x6c\151\x73\x74", ["\141\x72\147\x73" => [], "\x6d\x65\x74\150\x6f\x64\x73" => self::READABLE, "\x63\x61\154\x6c\142\141\x63\x6b" => [$this, "\143\x69\165\147\x77\x6f\157\141\163\x61\x71\x63\x79\167\141\x73"]]); } public function ciugwooasaqcywas(WP_REST_Request $aqmwamyiwgeeymqa) { goto egkeqqgakieyimuq; ckwmkquuyyugigom: if (!($ssygqisoeqwgkquw && ManipulateUser::esmswawesuyogmik($ssygqisoeqwgkquw, $mkucggyaiaukqoce))) { goto casgoamcqkekgeeo; } goto cumeycwmuuqawwyu; gsqcoqqsioiyoykq: yseyyukqaowwouua: goto goaowamiyyamueiw; cuseccewekgcgkyg: return $this->ewmkmmsuiuwmmwoy(ManipulateArray::yaeiiwwyckwugsem($suuagcecoyuweoqk)); goto kgysyqkoqgwmoscq; goaowamiyyamueiw: $woaeeewomgcuesaa = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x70\x61\156\x65\x6c\137\162\145\x73\164\x5f\142\x61\x73\145\x5f\x72\x6f\165\x74\x65"), $woaeeewomgcuesaa, $this, $mkucggyaiaukqoce); goto iaomqomgiwiegoca; ookcgumoacskyymy: qcgyggiaowuqswuw: goto cuseccewekgcgkyg; cakuguiciaiaeukg: $woaeeewomgcuesaa = $this->oeuiuocwuggewqmk("\154\x61\171\157\165\x74")->faioisokmmaeimoo()->qksaqgcokiqamueg("\57")->wiskakymeaywyeuw(false)->askmmuauqcuuqsea("\120\141\156\x65\x6c\x4c\141\171\157\165\x74")->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\165\x73\145\x72")->faioisokmmaeimoo()->askmmuauqcuuqsea("\x50\x61\156\x65\154\125\x73\145\162")->gswweykyogmsyawy(__("\125\x73\145\162", PR__PKG__PANEL))->saemoowcasogykak(IconFontawesomeInterface::ICON_USER)->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\x70\162\x6f\146\151\154\145")->faioisokmmaeimoo()->askmmuauqcuuqsea("\120\x61\156\x65\x6c\x50\x72\x6f\x66\151\x6c\x65")->gswweykyogmsyawy(__("\x55\163\145\x72\x20\x50\x72\157\146\151\154\145", PR__PKG__PANEL))->saemoowcasogykak(IconFontawesomeInterface::ICON_USER_PEN)->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\160\145\162\163\157\x6e\141\154")->wiskakymeaywyeuw(false)->askmmuauqcuuqsea("\120\141\156\x65\x6c\120\x72\157\146\151\x6c\145\x50\x65\x72\x73\x6f\x6e\x61\154")->saemoowcasogykak(IconFontawesomeInterface::ICON_USER)->gswweykyogmsyawy(__("\x50\x65\x72\x73\x6f\x6e\141\x6c\x20\x49\156\146\x6f\162\x6d\x61\164\x69\x6f\x6e", PR__PKG__PANEL))->gucwmccyimoagwcm(__("\x55\160\144\x61\x74\145\x20\x79\157\165\x72\40\x70\x65\x72\x73\x6f\x6e\x61\x6c\40\x69\x6e\x66\x6f\x72\155\141\164\x69\x6f\156", PR__PKG__PANEL)))->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\x61\x63\143\x6f\165\156\164")->wiskakymeaywyeuw(false)->askmmuauqcuuqsea("\120\141\156\x65\x6c\120\162\157\146\x69\x6c\145\101\143\143\157\x75\156\164")->gswweykyogmsyawy(__("\x41\x63\143\x6f\x75\156\x74\x20\111\x6e\146\x6f\162\x6d\x61\164\151\157\156", PR__PKG__PANEL))->saemoowcasogykak(IconFontawesomeInterface::ICON_CIRCLE_USER)->gucwmccyimoagwcm(__("\x53\145\x65\x20\x79\157\x75\x72\40\x61\143\143\x6f\165\156\x74\x20\x69\156\x66\x6f\x72\155\x61\x74\151\x6f\x6e", PR__PKG__PANEL)))->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\x70\141\x73\x73\167\157\x72\144")->wiskakymeaywyeuw(false)->askmmuauqcuuqsea("\x50\x61\156\x65\154\x50\x72\157\x66\151\x6c\145\x50\x61\x73\x73\167\157\x72\144")->gswweykyogmsyawy(__("\103\150\141\x6e\x67\x65\x20\x50\x61\x73\163\x77\157\x72\144", PR__PKG__PANEL))->saemoowcasogykak(IconFontawesomeInterface::ICON_UNLOCK_KEYHOLE)->gucwmccyimoagwcm(__("\103\150\141\156\x67\145\40\171\x6f\x75\162\x20\141\x63\x63\x6f\165\156\164\40\160\141\163\x73\167\157\x72\x64", PR__PKG__PANEL))))); goto wswikooyuaaouqgk; egkeqqgakieyimuq: $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); goto cakuguiciaiaeukg; ysweqawmawicakeo: $suuagcecoyuweoqk = []; goto owisckseoogsugqq; uaicwcqwauosmsqm: casgoamcqkekgeeo: goto gsqcoqqsioiyoykq; wswikooyuaaouqgk: if (is_wp_error($mkucggyaiaukqoce)) { goto yseyyukqaowwouua; } goto awwaiioyywmokwsm; awwaiioyywmokwsm: $ssygqisoeqwgkquw = OptionsSetting::eiwcuqigayigimak(OptionsSetting::ADD_ADMIN_TO, []); goto ckwmkquuyyugigom; iaomqomgiwiegoca: $ikamsuaiikaggcga = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\160\141\156\x65\x6c\137\162\145\x73\x74\137\x72\x6f\165\x74\x65\163"), [$woaeeewomgcuesaa], $this, $woaeeewomgcuesaa, $mkucggyaiaukqoce); goto ysweqawmawicakeo; cumeycwmuuqawwyu: $woaeeewomgcuesaa->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\162\145\144\151\162\145\x63\x74\x2d\x61\x64\x6d\151\x6e")->qoowicksguscqyks(get_admin_url())->wiskakymeaywyeuw(true)->jyumyyugiwwiqomk(PHP_INT_MAX)->gswweykyogmsyawy(__("\101\144\x6d\x69\156\x20\x41\x72\145\141", PR__PKG__PANEL))->saemoowcasogykak(IconBrandInterface::ICON_WORDPRESS)); goto uaicwcqwauosmsqm; owisckseoogsugqq: foreach ($ikamsuaiikaggcga as $cociqcumeacycoeq) { goto kwsqgqmwyyeykgum; emauuoieewwoeyqq: $suuagcecoyuweoqk[$cociqcumeacycoeq->aakmagwggmkoiiyu()] = $cociqcumeacycoeq->sacmkccceuywoqsq(true, [self::REQUEST => $aqmwamyiwgeeymqa, self::USER => $mkucggyaiaukqoce]); goto koukiyqaccegmquc; ekakkiuuquqkccse: sooecucuakgkuyis: goto oqwwacmigasucsoc; koukiyqaccegmquc: ywqakqkmmcoceqka: goto ekakkiuuquqkccse; kwsqgqmwyyeykgum: if (!$cociqcumeacycoeq instanceof Route) { goto ywqakqkmmcoceqka; } goto emauuoieewwoeyqq; oqwwacmigasucsoc: } goto ookcgumoacskyymy; kgysyqkoqgwmoscq: } public function oeuiuocwuggewqmk($uusmaiomayssaecw) : Route { return new Route($uusmaiomayssaecw); } }
