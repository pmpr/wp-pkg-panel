<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62400f4cadc4e             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Panel\REST; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Module\Panel\Data\Route; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Router extends Common { public function __construct() { $this->rest_base = "\x72\157\165\164\145"; parent::__construct(); } public function register_routes() { $this->register("\57\154\151\163\164", ["\x61\162\x67\x73" => [], "\x6d\x65\x74\150\x6f\144\163" => self::uigoseacoukemwqc, "\x63\x61\x6c\x6c\142\141\143\x6b" => [$this, "\143\x69\x75\x67\x77\157\x6f\141\163\141\161\x63\171\167\x61\163"]]); } public function ciugwooasaqcywas(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); $ikamsuaiikaggcga = []; $woaeeewomgcuesaa = $this->oeuiuocwuggewqmk("\x70\141\156\x65\x6c")->qksaqgcokiqamueg("\57")->faioisokmmaeimoo()->wiskakymeaywyeuw(false)->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\x75\163\x65\162")->faioisokmmaeimoo()->gswweykyogmsyawy(__("\125\163\145\162", PR__MOD__PANEL))->saemoowcasogykak(IconFontawesomeInterface::aqykgqywgikckyee)->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\160\x72\x6f\x66\x69\154\145")->faioisokmmaeimoo()->gswweykyogmsyawy(__("\x55\x73\x65\162\40\120\x72\x6f\x66\151\154\x65", PR__MOD__PANEL))->saemoowcasogykak(IconFontawesomeInterface::cecmwyoccokoqwum)->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\x70\145\162\163\x6f\156\x61\154")->wiskakymeaywyeuw(false)->saemoowcasogykak(IconFontawesomeInterface::aqykgqywgikckyee)->gswweykyogmsyawy(__("\x50\145\162\163\x6f\x6e\x61\x6c\40\x49\x6e\x66\157\x72\155\141\x74\151\157\x6e", PR__MOD__PANEL))->gucwmccyimoagwcm(__("\x55\160\144\x61\164\145\x20\x79\x6f\165\162\x20\160\145\x72\163\157\x6e\x61\x6c\x20\x69\156\x66\x6f\162\155\x61\164\x69\x6f\x6e", PR__MOD__PANEL)))->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\141\x63\143\157\165\x6e\x74")->wiskakymeaywyeuw(false)->gswweykyogmsyawy(__("\x55\x73\145\x72\x20\x41\x63\x63\x6f\165\156\164", PR__MOD__PANEL))->saemoowcasogykak(IconFontawesomeInterface::kcoakwwwiwekcami)->gucwmccyimoagwcm(__("\x53\145\x65\40\x79\157\165\162\40\x61\143\x63\x6f\165\x6e\164\40\x69\x6e\146\157\x72\x6d\x61\x74\151\157\156", PR__MOD__PANEL)))->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\160\x61\163\163\x77\157\162\144")->wiskakymeaywyeuw(false)->gswweykyogmsyawy(__("\x43\x68\141\x6e\147\145\x20\x50\x61\x73\x73\x77\x6f\162\144", PR__MOD__PANEL))->saemoowcasogykak(IconFontawesomeInterface::gioykuwgksiseqwg)->gucwmccyimoagwcm(__("\103\150\x61\156\147\145\40\x79\157\x75\162\40\141\143\143\x6f\165\156\164\40\160\141\x73\x73\x77\157\x72\144", PR__MOD__PANEL))))); $ikamsuaiikaggcga[] = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\160\x61\156\x65\154\137\x72\145\163\x74\137\142\141\163\x65\137\x72\x6f\165\164\145"), $woaeeewomgcuesaa, $this, $mkucggyaiaukqoce); $ikamsuaiikaggcga[] = $this->oeuiuocwuggewqmk("\x70\x61\156\145\154\137\141\165\x74\150")->qksaqgcokiqamueg("\57")->faioisokmmaeimoo()->wiskakymeaywyeuw(false)->gswweykyogmsyawy(__("\101\165\x74\150\x65\x6e\x74\151\143\x61\x74\x69\157\156", PR__MOD__PANEL))->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\154\157\x67\x69\156")->giwmekimakcaawsq("\x61\x75\x74\x68", true)->wiskakymeaywyeuw(false)->gswweykyogmsyawy(__("\114\x6f\x67\151\x6e\x20\x74\x6f\x20\x41\x63\143\157\165\156\x74", PR__MOD__PANEL)))->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\162\x65\x67\x69\163\x74\x65\x72")->giwmekimakcaawsq("\x61\x75\164\x68", true)->wiskakymeaywyeuw(false)->gswweykyogmsyawy(__("\x52\145\147\x69\x73\164\145\162\40\x41\x6e\40\101\143\143\157\x75\x6e\164", PR__MOD__PANEL)))->pmouaioykaoceyag($this->oeuiuocwuggewqmk("\x66\157\162\147\157\164")->giwmekimakcaawsq("\x61\x75\164\150", true)->wiskakymeaywyeuw(false)->gswweykyogmsyawy(__("\106\x6f\x72\x67\x6f\x74\40\x4d\171\x20\120\141\x73\x73\x77\x6f\162\144", PR__MOD__PANEL))); $ikamsuaiikaggcga = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x70\x61\156\145\154\137\x72\145\x73\164\x5f\x72\157\x75\164\x65\163"), $ikamsuaiikaggcga, $this, $mkucggyaiaukqoce); $suuagcecoyuweoqk = []; foreach ($ikamsuaiikaggcga as $cociqcumeacycoeq) { if (!$cociqcumeacycoeq instanceof Route) { goto iggyqogweyosuikc; } $uomewyckeuqoqocu = $cociqcumeacycoeq->sacmkccceuywoqsq(true, [self::qgeesceacsmeqacu => $aqmwamyiwgeeymqa, self::meksegaoamowuwoq => $mkucggyaiaukqoce]); $suuagcecoyuweoqk[$cociqcumeacycoeq->cisyiemkeykgkomc()] = $uomewyckeuqoqocu; iggyqogweyosuikc: kqksuugcgsyeoayy: } ygcsmkuycoagwyou: return $this->ewmkmmsuiuwmmwoy(ManipulateArray::yaeiiwwyckwugsem($suuagcecoyuweoqk)); } public function oeuiuocwuggewqmk($uusmaiomayssaecw) : Route { return new Route($uusmaiomayssaecw); } }
