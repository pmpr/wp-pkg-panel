<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c066dfa419f             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Panel\REST; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconBrandInterface; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Package\Panel\Data\Route; use Pmpr\Package\Panel\Setting as OptionsSetting; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Router extends Common { public function __construct() { $this->rest_base = "\162\157\165\x74\145"; parent::__construct(); } public function register_routes() { $this->register("\57\154\151\x73\164", ["\x61\x72\x67\x73" => [], "\x6d\145\x74\x68\x6f\x64\163" => self::uigoseacoukemwqc, "\143\141\x6c\x6c\142\x61\x63\x6b" => [$this, "\x63\x69\x75\x67\167\x6f\x6f\x61\x73\x61\161\x63\x79\167\x61\x73"]]); } public function ciugwooasaqcywas(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); $ikamsuaiikaggcga = []; $woaeeewomgcuesaa = $this->oeuiuocwuggewqmk("\x70\x61\156\x65\154")->qksaqgcokiqamueg("\57")->faioisokmmaeimoo()->wiskakymeaywyeuw(false)->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\x75\163\x65\x72")->faioisokmmaeimoo()->gswweykyogmsyawy(__("\125\163\x65\162", PR__PKG__PANEL))->saemoowcasogykak(IconFontawesomeInterface::ICON_USER)->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\160\x72\x6f\x66\151\x6c\145")->faioisokmmaeimoo()->gswweykyogmsyawy(__("\125\163\145\x72\x20\x50\x72\x6f\x66\151\154\145", PR__PKG__PANEL))->saemoowcasogykak(IconFontawesomeInterface::ICON_USER_PEN)->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\160\145\162\x73\x6f\x6e\x61\x6c")->wiskakymeaywyeuw(false)->saemoowcasogykak(IconFontawesomeInterface::ICON_USER)->gswweykyogmsyawy(__("\x50\145\x72\163\x6f\x6e\x61\x6c\x20\x49\x6e\x66\157\x72\x6d\141\164\151\157\156", PR__PKG__PANEL))->gucwmccyimoagwcm(__("\x55\160\x64\141\164\x65\x20\x79\x6f\165\x72\x20\160\x65\162\163\x6f\x6e\x61\x6c\x20\x69\x6e\x66\157\x72\155\141\x74\x69\x6f\x6e", PR__PKG__PANEL)))->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\141\x63\x63\x6f\x75\156\x74")->wiskakymeaywyeuw(false)->gswweykyogmsyawy(__("\125\163\145\162\x20\x41\x63\x63\157\x75\x6e\x74", PR__PKG__PANEL))->saemoowcasogykak(IconFontawesomeInterface::ICON_CIRCLE_USER)->gucwmccyimoagwcm(__("\123\145\x65\x20\x79\x6f\165\162\40\141\143\143\157\x75\156\164\40\151\156\x66\x6f\x72\x6d\x61\164\x69\x6f\156", PR__PKG__PANEL)))->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\160\x61\163\163\167\157\x72\144")->wiskakymeaywyeuw(false)->gswweykyogmsyawy(__("\x43\150\x61\156\147\x65\x20\120\x61\163\163\167\157\x72\144", PR__PKG__PANEL))->saemoowcasogykak(IconFontawesomeInterface::ICON_UNLOCK_KEYHOLE)->gucwmccyimoagwcm(__("\103\150\141\156\147\145\x20\171\157\x75\162\x20\x61\x63\143\x6f\x75\156\164\x20\x70\x61\163\163\167\157\x72\144", PR__PKG__PANEL))))); $ikamsuaiikaggcga[] = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x70\141\156\145\154\x5f\162\x65\163\x74\x5f\142\x61\163\x65\x5f\x72\x6f\165\x74\145"), $woaeeewomgcuesaa, $this, $mkucggyaiaukqoce); $ikamsuaiikaggcga[] = $this->oeuiuocwuggewqmk("\x70\x61\x6e\145\x6c\x5f\141\x75\164\150")->qksaqgcokiqamueg("\x2f")->faioisokmmaeimoo()->wiskakymeaywyeuw(false)->gswweykyogmsyawy(__("\x41\165\164\150\145\x6e\164\151\x63\x61\x74\x69\157\156", PR__PKG__PANEL))->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\x6c\x6f\147\x69\156")->giwmekimakcaawsq("\x61\x75\164\x68", true)->wiskakymeaywyeuw(false)->gswweykyogmsyawy(__("\x4c\157\x67\x69\x6e\x20\x74\x6f\40\101\143\143\157\x75\x6e\x74", PR__PKG__PANEL)))->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\x72\x65\x67\x69\x73\164\x65\162")->giwmekimakcaawsq("\x61\x75\164\150", true)->wiskakymeaywyeuw(false)->gswweykyogmsyawy(__("\x52\145\147\151\x73\x74\x65\162\40\x41\x6e\40\x41\143\143\157\x75\x6e\164", PR__PKG__PANEL)))->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\x66\157\162\x67\157\164")->giwmekimakcaawsq("\x61\165\x74\x68", true)->wiskakymeaywyeuw(false)->gswweykyogmsyawy(__("\106\157\162\x67\x6f\x74\x20\x4d\171\x20\x50\141\x73\x73\167\157\162\x64", PR__PKG__PANEL))); $ikamsuaiikaggcga = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\160\141\156\145\154\x5f\162\145\163\x74\x5f\x72\157\165\164\145\x73"), $ikamsuaiikaggcga, $this, $mkucggyaiaukqoce); $suuagcecoyuweoqk = []; foreach ($ikamsuaiikaggcga as $cociqcumeacycoeq) { if (!$cociqcumeacycoeq instanceof Route) { goto acaqummmoyiemqss; } $uomewyckeuqoqocu = $cociqcumeacycoeq->sacmkccceuywoqsq(true, [self::qgeesceacsmeqacu => $aqmwamyiwgeeymqa, self::meksegaoamowuwoq => $mkucggyaiaukqoce]); $suuagcecoyuweoqk[$cociqcumeacycoeq->cisyiemkeykgkomc()] = $uomewyckeuqoqocu; acaqummmoyiemqss: soqqemyioggmoakg: } wmmggowmigekyoso: return $this->ewmkmmsuiuwmmwoy(ManipulateArray::yaeiiwwyckwugsem($suuagcecoyuweoqk)); } public function oeuiuocwuggewqmk($uusmaiomayssaecw) : Route { return new Route($uusmaiomayssaecw); } }
