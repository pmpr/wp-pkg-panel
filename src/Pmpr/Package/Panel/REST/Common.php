<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61d48b50e72c2             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Panel\REST; use Exception; use Firebase\JWT\JWT; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\ManipulateSetting; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\REST\RESTController; use Pmpr\Package\Panel\User; use WP_Error; use WP_REST_Request; use WP_User; abstract class Common extends RESTController { protected bool $abstract = false; public function __construct() { parent::__construct(); if ($this->eaiyocyuoiwqykkq()) { goto cecuyayqoioasumi; } $this->namespace .= "\x2f\x70\141\156\x65\154"; cecuyayqoioasumi: } public function eaiyocyuoiwqykkq() : bool { return $this->abstract; } public function sygeeqgwywmygsyu($aqmwamyiwgeeymqa) { $mimkcuccekumiiqm = null; if (!$aqmwamyiwgeeymqa instanceof WP_REST_Request) { goto qogqewiwmwiwskgm; } $mimkcuccekumiiqm = $aqmwamyiwgeeymqa->get_header("\x48\124\124\120\137\x41\125\x54\110\117\122\111\132\x41\124\111\117\x4e"); if ($mimkcuccekumiiqm) { goto qiaqsassksqiuyae; } $mimkcuccekumiiqm = $aqmwamyiwgeeymqa->get_header("\122\x45\x44\111\122\x45\103\x54\x5f\x48\x54\x54\x50\137\x41\125\x54\x48\x4f\122\x49\132\101\124\x49\117\x4e"); qiaqsassksqiuyae: qogqewiwmwiwskgm: if ($mimkcuccekumiiqm) { goto qwigomakwmyiwkgo; } $mimkcuccekumiiqm = ManipulateServer::giiecckwoyiawoyy("\110\x54\124\120\137\101\x55\124\x48\117\x52\111\132\101\124\111\117\x4e", false); if ($mimkcuccekumiiqm) { goto qgoiooayqmqqsiok; } $mimkcuccekumiiqm = ManipulateServer::giiecckwoyiawoyy("\122\105\104\111\x52\105\x43\124\x5f\110\124\x54\x50\137\101\x55\124\x48\117\122\111\x5a\101\x54\x49\117\x4e", false); qgoiooayqmqqsiok: qwigomakwmyiwkgo: if ($mimkcuccekumiiqm) { goto kwagwqyusyiyoaqs; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\101\x75\x74\150\157\x72\151\172\x61\164\151\157\156\x20\150\145\141\144\145\x72\40\x6e\157\x74\40\146\x6f\x75\x6e\144", PR__PKG__PANEL), 401); goto yowsmsiyimmimemc; kwagwqyusyiyoaqs: [$mgegoogckgsumooq] = sscanf($mimkcuccekumiiqm, "\102\x65\x61\x72\145\x72\40\x25\x73"); if ($mgegoogckgsumooq && $mgegoogckgsumooq != "\x6e\165\x6c\154") { goto sciwggaeogcoesiu; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\101\x75\164\x68\157\162\151\172\x61\x74\151\157\x6e\x20\x68\x65\141\x64\x65\x72\40\155\x61\154\x66\157\162\x6d\x65\144\x2e", PR__PKG__PANEL), 401); goto eqkauqciwewmgeoi; sciwggaeogcoesiu: $emoqwwkmassqsoaw = $this->aumueocimuaiwyee(); if ($emoqwwkmassqsoaw) { goto kuicqywysciceggs; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\112\x57\x54\x20\151\x73\40\x6e\157\164\40\143\x6f\x6e\146\x69\x67\165\x72\x65\144\x20\x70\x72\157\160\145\162\154\171\56", PR__PKG__PANEL), 503); goto mkwskuycuyguqqok; kuicqywysciceggs: try { $osyqkeauyomigiuu = JWT::decode($mgegoogckgsumooq, $emoqwwkmassqsoaw, ["\110\x53\x32\65\66"]); if ($osyqkeauyomigiuu->iss == get_bloginfo("\165\x72\x6c")) { goto csscmcacoikwsecs; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x54\150\x65\40\x69\163\163\x20\x64\x6f\40\x6e\157\x74\40\155\141\x74\x63\150\x20\167\151\164\150\x20\164\x68\151\x73\40\x73\x65\162\166\x65\162", PR__PKG__PANEL), 401); goto cuykwgmswkskqkyi; csscmcacoikwsecs: if (isset($osyqkeauyomigiuu->data->user->id)) { goto myoicgcuugciueis; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x55\x73\145\162\40\111\104\x20\x6e\x6f\164\40\146\157\165\x6e\x64\40\151\x6e\x20\x74\x68\x65\40\164\x6f\x6b\145\x6e", PR__PKG__PANEL), 401); goto asmecuqiyyswueqe; myoicgcuugciueis: $keccaugmemegoimu = [$mgegoogckgsumooq, $osyqkeauyomigiuu, $osyqkeauyomigiuu->data->user->id]; asmecuqiyyswueqe: cuykwgmswkskqkyi: } catch (Exception $wgaoewqkwgomoaai) { $keccaugmemegoimu = $this->oemauiimmycumcsk($this->kyacickkomkioeyu($wgaoewqkwgomoaai), 500); } mkwskuycuyguqqok: eqkauqciwewmgeoi: yowsmsiyimmimemc: return $keccaugmemegoimu; } public function issssuygyewuaswa($aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->sygeeqgwywmygsyu($aqmwamyiwgeeymqa); if (!($mkucggyaiaukqoce && !is_wp_error($mkucggyaiaukqoce))) { goto iomcaiwewsawiamu; } $mkucggyaiaukqoce = ManipulateArray::get($mkucggyaiaukqoce, 2); $mkucggyaiaukqoce = ManipulateUser::get($mkucggyaiaukqoce); if ($mkucggyaiaukqoce) { goto kiqogmwcgcamwiig; } $mkucggyaiaukqoce = $this->oemauiimmycumcsk(__("\x55\x73\x65\x72\x20\156\157\164\x20\146\157\165\x6e\x64", PR__PKG__PANEL), 401); kiqogmwcgcamwiig: iomcaiwewsawiamu: return $mkucggyaiaukqoce; } public function aumueocimuaiwyee() : ?string { return (string) ManipulateSetting::cmaecekuqkwmemms("\123\x45\103\x55\x52\x45\x5f\101\125\x54\110\137\113\x45\x59", "\x61\x75\x74\150\55\x73\145\143\162\145\x74\55\153\145\171"); } public function ksoemussqmaacucm($mkucggyaiaukqoce) : array { $mkucggyaiaukqoce = ManipulateUser::get($mkucggyaiaukqoce); return ["\x61\x63\143\157\x75\156\x74" => ["\x75\163\145\162\156\x61\x6d\145" => $mkucggyaiaukqoce->user_login, "\x72\145\x67\x69\163\x74\x65\162\x65\x64" => $mkucggyaiaukqoce->user_registered], "\160\145\x72\x73\157\156\141\154" => User::symcgieuakksimmu()->ksoemussqmaacucm($mkucggyaiaukqoce)]; } }
