<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67abce9ac56a7             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Panel\REST; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Panel\User; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Profile extends Common { public function __construct() { $this->rest_base = "\x70\x72\157\146\151\154\x65"; parent::__construct(); } public function gomiusgyskywsqai() : ?User { return User::symcgieuakksimmu(); } public function register_routes() { $this->register("\57\165\x70\144\141\164\145", [Constants::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, Constants::wwgusigoaksqmwsm => [$this, "\x75\x70\144\141\164\145"]]); $this->register("\x2f\147\145\x74\55\x66\151\145\154\x64\x73", [Constants::wwgusigoaksqmwsm => [$this, "\x75\x67\155\x63\145\x63\143\147\167\x61\x61\141\151\147\x69\171"]]); $this->register("\x2f\160\x72\x65\x76\151\x65\x77\163", [Constants::wwgusigoaksqmwsm => [$this, "\x75\155\x67\x67\167\141\167\145\143\x73\141\x69\x63\x65\161\143"]]); } public function umggwawecsaiceqc(WP_REST_Request $aqmwamyiwgeeymqa) { $mcgmicqwgaaqqqcw = $this->gomiusgyskywsqai()->aqqaucmcssiayceu(); return $this->ewmkmmsuiuwmmwoy($mcgmicqwgaaqqqcw); } public function ugmceccgwaaaigiy(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (!is_wp_error($keccaugmemegoimu)) { $wsqkgswwooewwekw = $this->gsesiocqciggmauo(null, $keccaugmemegoimu); $keccaugmemegoimu = []; if (is_array($wsqkgswwooewwekw)) { foreach ($wsqkgswwooewwekw as $oceoauekaygmuoko => $ikgwqyuyckaewsow) { $keccaugmemegoimu[$oceoauekaygmuoko] = $this->ayssaocauwgssywa($ikgwqyuyckaewsow); } } } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function update(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (!is_wp_error($mkucggyaiaukqoce)) { $oceoauekaygmuoko = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::mgsccwumkcawaqcy); $ikgwqyuyckaewsow = $this->gsesiocqciggmauo($oceoauekaygmuoko, $mkucggyaiaukqoce); if ($oceoauekaygmuoko && $ikgwqyuyckaewsow) { $keccaugmemegoimu = $this->gomiusgyskywsqai()->uwucmiyokwcakwga($mkucggyaiaukqoce, $aqmwamyiwgeeymqa->get_params(), $ikgwqyuyckaewsow); if (!is_wp_error($keccaugmemegoimu)) { $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\x50\x72\157\146\x69\x6c\x65\x20\165\160\144\141\164\145\40\163\x75\143\x63\145\163\163\x66\x75\154\154\x79\56", PR__MDL__PANEL)); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\123\145\147\155\145\x6e\x74\x20\x66\151\x65\154\x64\40\x69\x73\x20\x69\163\x20\155\x69\x73\163\x69\x6e\147", PR__MDL__PANEL), 400); } } else { $keccaugmemegoimu = $mkucggyaiaukqoce; } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function gsesiocqciggmauo($oceoauekaygmuoko = null, $mkucggyaiaukqoce = null) { $gusoaiguqeaommcc = $this->caokeucsksukesyo()->kugiyqykwaskawsc(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $wsqkgswwooewwekw = ["\141\x63\143\x6f\165\x6e\x74" => [$gusoaiguqeaommcc->ymuegqgyuagyucws(Constants::csiaccacwgeeqwwo)->gswweykyogmsyawy(__("\125\x73\145\x72\156\141\155\x65", PR__MDL__PANEL))->oykaosmaegqwmoga(true, true)->kqqqugemmqagucuq()->iygyugseyaqwywyg($gkyciwoiiisgywcs->get($mkucggyaiaukqoce, Constants::miqkwqsewyogmsak)), $gusoaiguqeaommcc->ymuegqgyuagyucws("\x72\145\147\151\163\x74\x65\162\145\x64")->gswweykyogmsyawy(__("\x43\162\145\x61\164\145\40\101\143\x63\157\165\x6e\164\40\x44\141\x74\145", PR__MDL__PANEL))->oykaosmaegqwmoga(true, true)->iygyugseyaqwywyg($this->caokeucsksukesyo()->gagsyqagguwwauac()->ekasyoagocygouom(strtotime($gkyciwoiiisgywcs->get($mkucggyaiaukqoce, "\165\x73\x65\x72\x5f\x72\x65\147\x69\x73\164\145\162\x65\144")), $this->caokeucsksukesyo()->eiwcuqigayigimak()->uyomwmskouyyqyyq()))], "\x70\141\163\163\x77\157\x72\144" => [$gusoaiguqeaommcc->ymuegqgyuagyucws("\x63\165\x72\162\x65\156\x74\137\x70\141\x73\x73\x77\157\162\144")->gswweykyogmsyawy(__("\x43\x75\x72\x72\145\x6e\164\40\x50\x61\x73\163\x77\x6f\162\x64", PR__MDL__PANEL))->eumecwmqmukqgyea()->sqsumkuougquscyg(), $gusoaiguqeaommcc->ymuegqgyuagyucws("\x6e\145\167\137\x70\x61\163\x73\167\157\x72\144")->gswweykyogmsyawy(__("\116\x65\x77\40\120\141\163\163\x77\157\x72\x64", PR__MDL__PANEL))->eumecwmqmukqgyea()->sqsumkuougquscyg(), $gusoaiguqeaommcc->ymuegqgyuagyucws("\x76\145\162\x69\146\x79\137\x70\x61\163\163\x77\157\162\144")->gswweykyogmsyawy(__("\126\145\x72\151\x66\171\40\x50\141\163\x73\167\x6f\162\144", PR__MDL__PANEL))->eumecwmqmukqgyea()->sqsumkuougquscyg()], "\160\145\162\x73\157\x6e\141\x6c" => $this->gomiusgyskywsqai()->ugmceccgwaaaigiy([], [Constants::meksegaoamowuwoq => $mkucggyaiaukqoce])]; $wsqkgswwooewwekw = $this->ocksiywmkyaqseou("\160\x61\156\145\x6c\x5f\160\162\157\146\151\154\x65\137\x73\x65\x67\155\145\x6e\164\x73\x5f\146\x69\x65\x6c\x64\x73", $wsqkgswwooewwekw); return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($wsqkgswwooewwekw, $oceoauekaygmuoko, $wsqkgswwooewwekw); } }
