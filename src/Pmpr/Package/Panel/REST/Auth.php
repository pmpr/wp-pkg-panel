<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c066dfa419f             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Panel\REST; use Exception; use Firebase\JWT\JWT; use Pmpr\Common\Foundation\FormMaker\Front\Field\Field; use Pmpr\Common\Foundation\FormMaker\Front\Form; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Auth extends Common { const gagkiiqqiysqqgmc = "\162\145\x67\151\163\x74\x65\x72"; const RESET_PASSWORD = "\x72\x65\163\x65\x74\x5f\160\141\163\163\167\x6f\162\x64"; const FORGOT_PASSWORD = "\146\157\x72\147\157\x74\137\160\141\x73\x73\167\157\162\144"; const LAST_NAME = "\146\151\162\x73\x74\x5f\156\141\x6d\x65"; const FIRST_NAME = "\154\141\163\x74\x5f\156\x61\x6d\x65"; const USER_LOGIN = "\165\163\x65\x72\x5f\154\x6f\147\x69\x6e"; const USER_PASSWORD = "\x75\163\x65\x72\x5f\x70\141\163\163\x77\x6f\162\x64"; const REPEAT_PASSWORD = "\162\145\160\x65\x61\x74\137\x70\x61\x73\x73\167\x6f\x72\x64"; protected ?WP_Error $error = null; public function __construct() { $this->rest_base = "\141\165\x74\x68"; parent::__construct(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\167\x70\x5f\154\157\x67\x6f\165\164", [$this, "\157\171\x77\x77\x6d\x77\x77\167\161\x65\165\x69\x6f\x6d\x6b\x61"], 999); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\162\145\x73\x65\x74\137\x70\162\x65\x5f\x64\151\163\x70\141\164\143\150", [$this, "\x79\x77\163\x69\151\x69\153\x75\163\167\157\x79\x6f\167\x61\167"])->cecaguuoecmccuse("\x64\145\x74\145\x72\x6d\151\x6e\145\x5f\143\x75\x72\162\145\x6e\164\x5f\165\163\x65\162", [$this, "\x61\x65\151\x63\x65\x6b\x61\x73\147\157\x6b\165\165\x6f\161\155"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("\147\145\164\137\x6a\167\164\137\141\165\x74\x68\137\165\x73\145\162"), [$this, "\151\163\163\163\x73\165\171\x67\x79\x65\x77\165\x61\163\167\141"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x67\x65\164\x5f\x6a\167\x74\137\141\x75\164\150\137\x74\x6f\x6b\145\156"), [$this, "\x73\x79\147\145\x65\x71\x67\167\171\x77\155\x79\x67\163\x79\165"]); parent::kgquecmsgcouyaya(); } public function euekiyuksecoccus() : ?WP_Error { return $this->error; } public function yauwooaeicgosquo(?WP_Error $iswcokucwmiosiaq) : void { $this->error = $iswcokucwmiosiaq; } public function aeicekasgokuuoqm($mkucggyaiaukqoce) { $qoockacwwamsuscm = rest_get_url_prefix(); $wigqmiauciuswcom = ManipulateServer::ekcymmyqoceukosc(); if (!(strpos($wigqmiauciuswcom, $qoockacwwamsuscm) && strpos($wigqmiauciuswcom, "\x2f\160\x61\156\145\154\57\141\x75\x74\x68\57\166\x65\162\x69\146\x79"))) { goto uukumskkeggaowck; } $keccaugmemegoimu = $this->sygeeqgwywmygsyu(false); if (is_wp_error($keccaugmemegoimu) && $keccaugmemegoimu->get_error_code() != "\x6e\157\x5f\x61\165\x74\x68\137\x68\x65\x61\144\145\x72") { goto sqiciiuwmykocycc; } [$mgegoogckgsumooq, $smecmmgoykqcaieu] = $keccaugmemegoimu; $mkucggyaiaukqoce = $smecmmgoykqcaieu->data->user->id; goto eequksumcoogyoem; sqiciiuwmykocycc: $this->yauwooaeicgosquo($keccaugmemegoimu); eequksumcoogyoem: uukumskkeggaowck: return $mkucggyaiaukqoce; } public function register_routes() { $this->register("\57\x67\x65\164\x2d\x66\151\x65\x6c\144\163", ["\141\x72\x67\x73" => [], "\155\145\164\150\x6f\x64\x73" => self::uigoseacoukemwqc, "\143\x61\154\154\x62\141\143\153" => [$this, "\165\147\x6d\143\x65\143\x63\147\x77\141\141\x61\x69\147\x69\171"]]); $this->register("\57\x6d\145", ["\x61\x72\x67\163" => [], "\x6d\145\x74\150\x6f\144\163" => self::uigoseacoukemwqc, "\x63\x61\154\x6c\x62\x61\x63\x6b" => [$this, "\x61\165\157\x73\x79\151\x73\x75\x61\x6b\x67\x75\171\x69\x6d\x77"]]); $this->register("\57\x6c\157\x67\x69\x6e", ["\141\162\147\163" => [], "\155\145\164\150\157\x64\163" => self::qucyckeykeuuaquw, "\143\141\154\x6c\142\141\143\x6b" => [$this, "\x6b\153\155\153\143\x79\163\x79\143\x65\171\x69\x77\163\153\x71"]]); $this->register("\57\x72\x65\x67\x69\163\164\145\162", ["\x61\162\x67\163" => [], "\155\x65\164\150\157\144\163" => self::qucyckeykeuuaquw, "\143\x61\x6c\x6c\x62\x61\x63\x6b" => [$this, "\155\x65\157\x77\143\x75\x6d\165\145\x69\145\x65\x63\x65\x65\141"]]); $this->register("\57\154\157\147\x6f\165\164", ["\141\x72\147\x73" => [], "\155\x65\x74\150\157\144\x73" => self::qucyckeykeuuaquw, "\x63\141\154\x6c\142\x61\143\153" => [$this, "\x61\151\141\x6d\x67\x6b\151\x65\167\167\141\153\157\x65\x67\x79"]]); $this->register("\57\166\145\x72\x69\x66\171", ["\x61\x72\147\x73" => [], "\x6d\145\164\x68\157\x64\x73" => self::uigoseacoukemwqc, "\x63\141\154\154\x62\141\143\153" => [$this, "\165\x73\163\x6f\167\153\151\x67\x75\x6d\157\141\157\x6f\167\x6f"]]); $this->register("\57\x63\x68\141\156\x67\x65\55\160\141\163\x73\x77\x6f\162\144", ["\141\162\x67\163" => [], "\x6d\145\x74\x68\x6f\x64\x73" => self::ouuaeeeqeqkagcgi, "\x63\x61\x6c\154\x62\x61\143\153" => [$this, "\141\x67\x63\171\167\153\x77\x61\x6f\x71\x6b\153\143\x63\x67\x6b"]]); $this->register("\57\162\145\163\145\x74\55\160\141\163\x73\x77\x6f\x72\x64", ["\141\162\147\163" => [], "\x6d\145\164\x68\x6f\144\x73" => self::qucyckeykeuuaquw, "\x63\x61\x6c\x6c\142\x61\x63\153" => [$this, "\x73\x71\x61\x6f\161\161\x6f\x6f\x71\x6f\x77\165\x67\x6d\x63\x77"]]); $this->woekqgykywwycyci(); } public function oywwmwwwqeuiomka($mkucggyaiaukqoce) { } public function ugmceccgwaaaigiy(WP_REST_Request $aqmwamyiwgeeymqa) { $ikgwqyuyckaewsow = $this->cqsmgqiwwuasmkiq(); if ($ikgwqyuyckaewsow) { goto usqgaogkqgemuima; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x63\x61\156\x20\156\157\x74\40\x66\157\165\156\x64\40\162\145\x71\165\145\163\164\145\144\x20\146\x69\145\x6c\x64\x73\56", PR__PKG__PANEL), 404); goto mswsoaimesegiiic; usqgaogkqgemuima: foreach ($ikgwqyuyckaewsow as $ymqmyyeuycgmigyo => $ccamueccusigaaio) { foreach ($ccamueccusigaaio as $momcykaoccoymeig => $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto wcesymwqykqoyuqk; } $aiowsaccomcoikus->uuagoowwgcuosuuu()->eumecwmqmukqgyea()->qigsyyqgewgskemg("\x66\157\x72\155\55\x63\157\156\164\162\x6f\154\55\163\x6f\154\151\x64\x20\x66\x6f\x6e\164\x2d\163\151\172\x65\55\x68\64\40\x68\55\141\165\164\157\x20\x70\x2d\65")->gkkgsyeumismsyse("\146\157\x6e\x74\55\x73\x69\172\x65\x2d\150\x36\x20\x66\x6f\x6e\164\x2d\167\145\x69\147\x68\x74\x2d\142\x6f\x6c\144\145\162\40\164\145\170\164\55\x64\x61\162\153"); $ikgwqyuyckaewsow[$ymqmyyeuycgmigyo][$momcykaoccoymeig] = $aiowsaccomcoikus; if (!($ccamueccusigaaio == self::gagkiiqqiysqqgmc)) { goto meawswgwagoqgkye; } $aiowsaccomcoikus->smcqugueqiumkygs(); meawswgwagoqgkye: wcesymwqykqoyuqk: goacqqsgaaigyuaw: } yiwiqaqmwiogawym: $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x70\141\x6e\x65\154\137\x61\x75\x74\x68\137{$ymqmyyeuycgmigyo}\x5f\x66\x69\x65\154\144\x73"), $ccamueccusigaaio); $ikgwqyuyckaewsow[$ymqmyyeuycgmigyo] = $this->ayssaocauwgssywa($ccamueccusigaaio); ocokwuuquaokmasc: } cggowoquuiwqkyew: $keccaugmemegoimu = $ikgwqyuyckaewsow; mswsoaimesegiiic: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function mmusmqyoussiyygq(WP_REST_Request $aqmwamyiwgeeymqa, string $ccamueccusigaaio) { $icwicymcioeyeyek = []; $ikgwqyuyckaewsow = $this->cqsmgqiwwuasmkiq($ccamueccusigaaio); if (!$ikgwqyuyckaewsow) { goto goeoymmqqqeeoime; } foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto qmiwsequckckoaei; } $eqgoocgaqwqcimie = $this->swmwoeaaeqiouswg($aqmwamyiwgeeymqa, $aiowsaccomcoikus->mwikyscisascoeea(), $aiowsaccomcoikus->oiswysuiioecsaae()); if (!($aiowsaccomcoikus->msmiagueogcsucgc() && !$eqgoocgaqwqcimie)) { goto qgegkeomwscwwiuw; } $icwicymcioeyeyek = false; goto egasokooagakisiy; qgegkeomwscwwiuw: $icwicymcioeyeyek[$aiowsaccomcoikus->mwikyscisascoeea()] = $eqgoocgaqwqcimie; qmiwsequckckoaei: kecwuwwcwokuksyq: } egasokooagakisiy: goeoymmqqqeeoime: return $icwicymcioeyeyek; } private function cqsmgqiwwuasmkiq(string $ccamueccusigaaio = self::ALL) : array { $owaiikyuwwwmswgc = Form::ymuegqgyuagyucws(self::muqaqimusmckkieq, __("\x45\155\141\x69\x6c", PR__PKG__PANEL))->kyiucygqsgequoys("\145\x6d\x61\151\x6c\x40\141\x64\x64\162\x65\x73\163\x2e\x63\157\155")->mkiaygiogeeyogqm(false); $ikgwqyuyckaewsow = [self::yuguikokwoymmqem => [Form::ymuegqgyuagyucws(self::USER_LOGIN, __("\x45\x6d\x61\151\x6c\40\x6f\x72\40\125\x73\x65\162\x6e\141\x6d\x65", PR__PKG__PANEL))->kyiucygqsgequoys("\x65\x6d\141\151\154\x40\141\x64\144\x72\145\x73\163\x2e\x63\157\155")->sqcsseccsaqsoyqy(), Form::ymuegqgyuagyucws(self::USER_PASSWORD, __("\120\x61\x73\x73\167\157\162\144", PR__PKG__PANEL))->sqsumkuougquscyg()], self::gagkiiqqiysqqgmc => [Form::ymuegqgyuagyucws(self::FIRST_NAME, __("\106\x69\x72\163\x74\x6e\x61\155\145", PR__PKG__PANEL)), Form::ymuegqgyuagyucws(self::LAST_NAME, __("\114\x61\x73\164\156\141\155\145", PR__PKG__PANEL)), Form::ymuegqgyuagyucws(self::csiaccacwgeeqwwo, __("\125\x73\x65\x72\156\141\x6d\x65", PR__PKG__PANEL))->sqcsseccsaqsoyqy(), $owaiikyuwwwmswgc, Form::ymuegqgyuagyucws(self::akywgoyaseymiyka, __("\x50\x61\x73\163\167\157\162\144", PR__PKG__PANEL))->sqsumkuougquscyg(), Form::ymuegqgyuagyucws(self::REPEAT_PASSWORD, __("\122\x65\160\x65\x61\164\40\120\x61\x73\x73\167\157\162\144", PR__PKG__PANEL))->sqsumkuougquscyg()], self::RESET_PASSWORD => [], self::FORGOT_PASSWORD => [$owaiikyuwwwmswgc]]; $ikgwqyuyckaewsow = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\160\141\156\145\154\137\141\165\164\x68\x5f\146\x69\145\x6c\144\163"), $ikgwqyuyckaewsow); return ManipulateArray::get($ikgwqyuyckaewsow, $ccamueccusigaaio, $ikgwqyuyckaewsow); } public function sqaoqqooqowugmcw(WP_REST_Request $aqmwamyiwgeeymqa) { $owaiikyuwwwmswgc = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::muqaqimusmckkieq); $keccaugmemegoimu = []; if (is_email($owaiikyuwwwmswgc)) { goto qmeoaqmsuseueqiy; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\124\x68\145\40\105\155\141\x69\154\x20\171\157\165\x20\145\x6e\164\145\162\145\144\40\x69\x73\x20\x6e\x6f\164\40\x76\x61\x6c\151\x64\56", PR__PKG__PANEL), 400); goto ygkcacsyyckescqs; qmeoaqmsuseueqiy: if (email_exists($owaiikyuwwwmswgc)) { goto eiawsoasmscmqswa; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\116\157\x20\165\x73\x65\x72\40\x66\157\165\x6e\x64\40\x77\151\x74\x68\40\x74\150\x69\x73\x20\145\155\141\151\154\40\x61\144\x64\162\145\163\163\x2e", PR__PKG__PANEL), 404); goto ickcmqoiosquugwe; eiawsoasmscmqswa: try { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); } catch (Exception $iewosgggaueeyymg) { return $this->oemauiimmycumcsk($this->kyacickkomkioeyu($iewosgggaueeyymg), 500); } ickcmqoiosquugwe: ygkcacsyyckescqs: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function agcywkwaoqkkccgk(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (!is_wp_error($mkucggyaiaukqoce)) { goto kooskuwkuayiuose; } $keccaugmemegoimu = $mkucggyaiaukqoce; goto qwcegcuowwgiccos; kooskuwkuayiuose: $yeacayasgueouoqc = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\143\x75\x72\x72\x65\x6e\x74"); $qqwegysogaocgeww = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::akywgoyaseymiyka); if ($qqwegysogaocgeww && $yeacayasgueouoqc) { goto eyiamcekkgkiawqy; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x4d\x69\163\163\x69\156\147\40\x70\x61\x72\x61\x6d\145\164\145\x72\x2e", PR__PKG__PANEL), 400); goto twkmiuomimomscew; eyiamcekkgkiawqy: if ($yeacayasgueouoqc === $qqwegysogaocgeww) { goto igymseewwyiocoug; } if (wp_check_password($yeacayasgueouoqc, $mkucggyaiaukqoce->user_pass, $mkucggyaiaukqoce->ID)) { goto cgewcsueoyaeikgm; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x45\x6e\164\x65\162\145\144\40\143\165\x72\162\145\x6e\x74\40\160\x61\x73\163\x77\157\x72\144\x20\151\x73\x20\x6e\157\x74\x20\x63\x6f\x72\x72\x65\143\x74\x2e", PR__PKG__PANEL), 400); goto sukskmcwsoysiuqu; cgewcsueoyaeikgm: $keccaugmemegoimu = new WP_Error(); $this->cqscqicucmeamkyq("\166\141\154\x69\144\x61\x74\x65\x5f\160\x61\x73\x73\167\157\162\144\x5f\162\145\163\145\x74", $keccaugmemegoimu, $mkucggyaiaukqoce); if ($keccaugmemegoimu->has_errors()) { goto cuoqqgaygogsmmic; } reset_password($mkucggyaiaukqoce, $qqwegysogaocgeww); $keccaugmemegoimu = ["\x6d\145\x73\x73\x61\147\x65" => __("\x50\141\163\x73\x77\x6f\x72\144\x20\x63\150\x61\156\x67\145\x64\x20\x73\165\143\143\145\163\163\x66\165\154\154\171", PR__PKG__PANEL), "\163\164\141\164\x75\x73" => 200]; cuoqqgaygogsmmic: sukskmcwsoysiuqu: goto mqccmesakuemceqi; igymseewwyiocoug: $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x45\x6e\x74\145\162\145\144\x20\x63\165\162\x72\x65\x6e\164\x20\x70\x61\163\163\x77\157\x72\144\40\141\156\144\40\156\145\x77\40\x70\x61\163\163\x77\157\x72\144\x20\x69\163\40\163\141\x6d\145\x2e", PR__PKG__PANEL), 400); mqccmesakuemceqi: twkmiuomimomscew: qwcegcuowwgiccos: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function woekqgykywwycyci() { $uykgysuswksgmwqy = "\101\143\143\x65\x73\163\55\x43\157\x6e\164\162\157\154\x2d\101\154\x6c\x6f\167\55\110\x65\141\144\145\162\x73\54\40\x43\x6f\x6e\164\x65\x6e\164\x2d\x54\x79\160\145\x2c\x20\x41\x75\164\150\x6f\162\x69\172\x61\164\151\x6f\156"; header(sprintf("\x41\143\143\145\163\x73\x2d\x43\x6f\x6e\x74\x72\157\x6c\55\x41\154\154\x6f\x77\x2d\110\145\x61\x64\x65\x72\163\x3a\x20\x25\x73", $uykgysuswksgmwqy)); } public function ywsiiikuswoyowaw(WP_REST_Request $aqmwamyiwgeeymqa) { $iswcokucwmiosiaq = $this->euekiyuksecoccus(); if (!is_wp_error($iswcokucwmiosiaq)) { goto qcessicwuikwqsis; } $aqmwamyiwgeeymqa = $iswcokucwmiosiaq; qcessicwuikwqsis: return $aqmwamyiwgeeymqa; } public function meowcumueieeceea(WP_REST_Request $aqmwamyiwgeeymqa) { $icwicymcioeyeyek = $this->mmusmqyoussiyygq($aqmwamyiwgeeymqa, self::gagkiiqqiysqqgmc); if ($icwicymcioeyeyek) { goto qsygcycwieukkgwc; } $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\x45\x6e\x74\145\x72\x65\144\x20\x76\x61\x6c\x75\x65\x73\x20\x69\x73\40\156\157\164\x20\x76\141\154\151\144\56", PR__PKG__PANEL), 400); goto kiwqkcaekqqyuegq; qsygcycwieukkgwc: $owaiikyuwwwmswgc = ManipulateArray::unset($icwicymcioeyeyek, self::muqaqimusmckkieq); $qqwegysogaocgeww = ManipulateArray::unset($icwicymcioeyeyek, self::akywgoyaseymiyka); $yewiaiaauukwsgku = ManipulateArray::unset($icwicymcioeyeyek, self::csiaccacwgeeqwwo); if (email_exists($owaiikyuwwwmswgc)) { goto wwkgkaecgiwggcck; } if (username_exists($yewiaiaauukwsgku)) { goto gygawoqywkukmqee; } $assuqkuiuewumqyu = ManipulateArray::unset($icwicymcioeyeyek, self::REPEAT_PASSWORD); if ($assuqkuiuewumqyu !== $qqwegysogaocgeww) { goto oouoqimaaqcmccay; } $oeucsuyqysaciasy = ManipulateWoocommerce::ayseokmqycoqaigc() ? "\x63\165\163\164\x6f\x6d\x65\162" : "\163\165\x62\163\143\x72\x69\x62\145\x72"; $sogksuscggsicmac = wp_create_user($yewiaiaauukwsgku, $qqwegysogaocgeww, $owaiikyuwwwmswgc); if (is_wp_error($sogksuscggsicmac)) { goto ycakugokkqkuqyiu; } $mkucggyaiaukqoce = ManipulateUser::get($sogksuscggsicmac); if ($mkucggyaiaukqoce) { goto coywmiyqgsweuiic; } $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\x55\163\x65\162\x20\156\157\x74\40\146\x6f\165\x6e\144", PR__PKG__PANEL)); goto siqagquguiemuoku; coywmiyqgsweuiic: $mkucggyaiaukqoce->set_role($oeucsuyqysaciasy); foreach ($icwicymcioeyeyek as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $mkucggyaiaukqoce->{$uusmaiomayssaecw} = $eqgoocgaqwqcimie; ieumumsgyguceusy: } yssscwioiyygssec: ManipulateUser::ksmqawcowkmegigw($mkucggyaiaukqoce); $sogksuscggsicmac = $this->qasywwyamoesisyi(__("\131\x6f\165\x72\40\x61\143\143\x6f\165\156\x74\x20\x63\162\145\x61\x74\145\144\40\x73\165\143\143\x65\163\163\x66\165\x6c\154\x79", PR__PKG__PANEL), $mkucggyaiaukqoce); siqagquguiemuoku: ycakugokkqkuqyiu: goto sycygoiaiqqageym; oouoqimaaqcmccay: $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\120\141\x73\163\167\x6f\162\x64\163\40\141\x72\145\40\156\157\x74\40\163\x61\x6d\x65", PR__PKG__PANEL), 400); sycygoiaiqqageym: goto kciouyuaqkyqomam; gygawoqywkukmqee: $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\x55\x73\x65\162\x6e\141\155\x65\x20\141\154\x72\x65\141\x64\171\x20\145\170\x69\163\164\x73\x2c\40\x70\154\x65\141\x73\x65\40\x65\x6e\164\145\162\40\141\x6e\x6f\164\150\x65\x72\x20\165\x73\145\x72\156\141\155\145", PR__PKG__PANEL), 400); kciouyuaqkyqomam: goto umgaesggesswoaqe; wwkgkaecgiwggcck: $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\105\x6d\141\151\x6c\x20\141\x6c\x72\x65\x61\144\x79\x20\x65\x78\151\163\164\x73\x2c\x20\160\x6c\145\x61\163\145\x20\x74\162\171\x20\106\x6f\x72\x67\145\164\40\x50\x61\x73\x73\x77\157\162\144", PR__PKG__PANEL), 400); umgaesggesswoaqe: kiwqkcaekqqyuegq: return $sogksuscggsicmac; } public function aiamgkiewwakoegy(WP_REST_Request $aqmwamyiwgeeymqa) { wp_logout(); return $this->ewmkmmsuiuwmmwoy($this->qasywwyamoesisyi(__("\x4c\157\147\147\145\x64\40\x6f\165\164", PR__PKG__PANEL))); } public function kkmkcysyceyiwskq(WP_REST_Request $aqmwamyiwgeeymqa) { $emoqwwkmassqsoaw = $this->aumueocimuaiwyee(); if ($emoqwwkmassqsoaw) { goto yqykqysmiquwoasu; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\112\x57\x54\x20\x69\163\x20\x6e\x6f\164\40\x63\157\156\x66\x69\x67\165\162\x65\144\x20\160\162\x6f\x70\x65\162\154\x79\x2e", PR__PKG__PANEL), 500); goto ayyweymyuuiauamo; yqykqysmiquwoasu: $icwicymcioeyeyek = $this->mmusmqyoussiyygq($aqmwamyiwgeeymqa, self::yuguikokwoymmqem); if ($icwicymcioeyeyek) { goto gimmuoqwckiseaik; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\105\156\x74\x65\x72\145\144\40\166\x61\154\x75\x65\x73\40\151\x73\x20\156\157\x74\40\166\141\154\x69\x64\x2e", PR__PKG__PANEL), 400); goto cmqucgoewuyieoyk; gimmuoqwckiseaik: try { wp_logout(); $mkucggyaiaukqoce = wp_signon($icwicymcioeyeyek); if (is_wp_error($mkucggyaiaukqoce)) { goto quwcqmyokicssyew; } $ycoeoaakqyskgykq = ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce); $ggmuwmqmcisegoea = time(); $wekousyuiguacggm = $ggmuwmqmcisegoea + (int) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x70\141\156\145\x6c\x5f\141\x75\164\150\137\143\157\x6f\x6b\151\x65\x5f\x65\170\x70\151\x72\141\x74\151\157\156"), DAY_IN_SECONDS * 180, $ycoeoaakqyskgykq); $mgegoogckgsumooq = ["\x69\x73\x73" => get_bloginfo("\165\162\154"), "\x69\x61\164" => $ggmuwmqmcisegoea, "\156\x62\146" => $ggmuwmqmcisegoea, "\x65\170\x70" => $wekousyuiguacggm, "\144\141\164\141" => ["\165\163\x65\x72" => ["\151\x64" => $ycoeoaakqyskgykq]]]; $mgegoogckgsumooq = JWT::encode($mgegoogckgsumooq, $emoqwwkmassqsoaw); $keccaugmemegoimu = ["\x75\x73\x65\162" => $this->ksoemussqmaacucm($ycoeoaakqyskgykq), "\x74\157\x6b\x65\x6e" => $mgegoogckgsumooq, "\x65\170\160\x69\162\145" => $wekousyuiguacggm]; wp_set_current_user($ycoeoaakqyskgykq, $mkucggyaiaukqoce->user_login); wp_set_auth_cookie($ycoeoaakqyskgykq); $this->cqscqicucmeamkyq("\167\160\137\x6c\x6f\147\x69\x6e", $mkucggyaiaukqoce->user_login, $mkucggyaiaukqoce); goto iqcogmsguwoikame; quwcqmyokicssyew: $keccaugmemegoimu = $this->oemauiimmycumcsk($mkucggyaiaukqoce->get_error_message(), 401); iqcogmsguwoikame: } catch (Exception $wgaoewqkwgomoaai) { $keccaugmemegoimu = $this->oemauiimmycumcsk($this->kyacickkomkioeyu($wgaoewqkwgomoaai), 500); } cmqucgoewuyieoyk: ayyweymyuuiauamo: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ussowkigumoaoowo($aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->sygeeqgwywmygsyu($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto mosqsmqimqgqoase; } [$mgegoogckgsumooq, $smecmmgoykqcaieu] = $keccaugmemegoimu; $keccaugmemegoimu = ["\165\x73\x65\x72" => $this->ksoemussqmaacucm($smecmmgoykqcaieu->data->user->id), "\x74\x6f\153\145\x6e" => $mgegoogckgsumooq]; mosqsmqimqgqoase: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function auosyisuakguyimw(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->sygeeqgwywmygsyu($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto omugkkesagcyagmk; } [$mgegoogckgsumooq, $smecmmgoykqcaieu] = $keccaugmemegoimu; $keccaugmemegoimu = ["\x75\x73\145\x72" => $this->ksoemussqmaacucm($smecmmgoykqcaieu->data->user->id), "\x64\141\x74\141" => ["\163\164\x61\x74\165\x73" => 200], "\143\157\144\x65" => "\141\165\164\x68\137\147\145\x74\x5f\155\145", "\141\143\143\x6f\x75\156\164" => []]; omugkkesagcyagmk: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } }
