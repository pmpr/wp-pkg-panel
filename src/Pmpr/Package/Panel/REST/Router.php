<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c0323dbc649             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Panel\REST; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconBrandInterface; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Package\Panel\Data\Route; use Pmpr\Package\Panel\Setting as OptionsSetting; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Router extends Common { public function __construct() { $this->rest_base = "\162\x6f\x75\x74\145"; parent::__construct(); } public function register_routes() { $this->register("\57\x6c\x69\x73\x74", ["\141\x72\147\x73" => [], "\155\145\164\x68\157\x64\163" => self::uigoseacoukemwqc, "\143\141\154\x6c\x62\x61\143\x6b" => [$this, "\x63\x69\165\147\167\157\157\x61\163\141\x71\143\171\x77\x61\163"]]); } public function ciugwooasaqcywas(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); $ikamsuaiikaggcga = []; $woaeeewomgcuesaa = $this->oeuiuocwuggewqmk("\160\141\x6e\x65\x6c")->qksaqgcokiqamueg("\x2f")->faioisokmmaeimoo()->wiskakymeaywyeuw(false)->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\165\x73\145\162")->faioisokmmaeimoo()->gswweykyogmsyawy(__("\x55\x73\x65\162", PR__PKG__PANEL))->saemoowcasogykak(IconFontawesomeInterface::ICON_USER)->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\x70\x72\x6f\x66\x69\154\x65")->faioisokmmaeimoo()->gswweykyogmsyawy(__("\x55\x73\x65\162\x20\120\162\x6f\146\x69\x6c\x65", PR__PKG__PANEL))->saemoowcasogykak(IconFontawesomeInterface::ICON_USER_PEN)->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\x70\145\x72\163\x6f\x6e\x61\154")->wiskakymeaywyeuw(false)->saemoowcasogykak(IconFontawesomeInterface::ICON_USER)->gswweykyogmsyawy(__("\120\x65\x72\163\x6f\156\x61\x6c\x20\x49\x6e\x66\x6f\162\x6d\x61\x74\x69\x6f\x6e", PR__PKG__PANEL))->gucwmccyimoagwcm(__("\x55\x70\x64\141\164\x65\x20\171\x6f\165\162\x20\160\x65\x72\163\x6f\156\x61\154\40\151\156\146\157\162\x6d\x61\164\151\x6f\156", PR__PKG__PANEL)))->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\x61\143\143\157\x75\156\x74")->wiskakymeaywyeuw(false)->gswweykyogmsyawy(__("\125\163\x65\162\40\101\x63\x63\x6f\165\x6e\164", PR__PKG__PANEL))->saemoowcasogykak(IconFontawesomeInterface::ICON_CIRCLE_USER)->gucwmccyimoagwcm(__("\x53\145\145\40\x79\x6f\x75\x72\40\x61\x63\143\157\165\156\x74\x20\x69\156\146\157\x72\155\x61\164\151\x6f\x6e", PR__PKG__PANEL)))->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\x70\141\x73\163\167\157\x72\144")->wiskakymeaywyeuw(false)->gswweykyogmsyawy(__("\103\150\x61\156\x67\145\x20\x50\141\163\x73\167\x6f\162\x64", PR__PKG__PANEL))->saemoowcasogykak(IconFontawesomeInterface::ICON_UNLOCK_KEYHOLE)->gucwmccyimoagwcm(__("\103\150\141\x6e\x67\x65\40\x79\157\165\162\x20\141\143\143\157\165\x6e\x74\40\160\141\x73\x73\167\x6f\162\x64", PR__PKG__PANEL))))); $ikamsuaiikaggcga[] = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x70\x61\x6e\145\154\x5f\162\x65\163\x74\x5f\x62\x61\x73\145\137\162\x6f\165\164\x65"), $woaeeewomgcuesaa, $this, $mkucggyaiaukqoce); $ikamsuaiikaggcga[] = $this->oeuiuocwuggewqmk("\x70\x61\x6e\x65\x6c\x5f\141\x75\x74\x68")->qksaqgcokiqamueg("\57")->faioisokmmaeimoo()->wiskakymeaywyeuw(false)->gswweykyogmsyawy(__("\x41\x75\164\150\145\x6e\164\151\143\141\164\151\157\x6e", PR__PKG__PANEL))->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\x6c\157\x67\x69\156")->giwmekimakcaawsq("\x61\165\x74\150", true)->wiskakymeaywyeuw(false)->gswweykyogmsyawy(__("\x4c\x6f\x67\151\x6e\x20\x74\157\x20\101\x63\x63\157\165\x6e\x74", PR__PKG__PANEL)))->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\x72\x65\x67\x69\163\164\145\x72")->giwmekimakcaawsq("\141\x75\x74\x68", true)->wiskakymeaywyeuw(false)->gswweykyogmsyawy(__("\x52\x65\x67\x69\163\x74\x65\162\40\101\x6e\40\x41\143\x63\157\x75\156\164", PR__PKG__PANEL)))->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\146\157\x72\x67\x6f\164")->giwmekimakcaawsq("\141\x75\164\150", true)->wiskakymeaywyeuw(false)->gswweykyogmsyawy(__("\106\x6f\x72\x67\x6f\x74\x20\115\x79\40\x50\x61\163\x73\167\157\162\144", PR__PKG__PANEL))); $ikamsuaiikaggcga = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x70\x61\x6e\145\154\x5f\162\145\x73\164\137\x72\x6f\165\164\145\163"), $ikamsuaiikaggcga, $this, $mkucggyaiaukqoce); $suuagcecoyuweoqk = []; foreach ($ikamsuaiikaggcga as $cociqcumeacycoeq) { if (!$cociqcumeacycoeq instanceof Route) { goto acaqummmoyiemqss; } $uomewyckeuqoqocu = $cociqcumeacycoeq->sacmkccceuywoqsq(true, [self::qgeesceacsmeqacu => $aqmwamyiwgeeymqa, self::meksegaoamowuwoq => $mkucggyaiaukqoce]); $suuagcecoyuweoqk[$cociqcumeacycoeq->cisyiemkeykgkomc()] = $uomewyckeuqoqocu; acaqummmoyiemqss: soqqemyioggmoakg: } wmmggowmigekyoso: return $this->ewmkmmsuiuwmmwoy(ManipulateArray::yaeiiwwyckwugsem($suuagcecoyuweoqk)); } public function oeuiuocwuggewqmk($uusmaiomayssaecw) : Route { return new Route($uusmaiomayssaecw); } }
