<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5ec2f1d944             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Panel\REST; use Exception; use Firebase\JWT\JWT; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\REST\RESTController; use Pmpr\Module\Panel\User; use WP_Error; use WP_REST_Request; use WP_User; abstract class Common extends RESTController { protected bool $abstract = false; public function __construct() { parent::__construct(); if ($this->eaiyocyuoiwqykkq()) { goto sukskmcwsoysiuqu; } $this->namespace .= "\x2f\x70\x61\156\145\154"; sukskmcwsoysiuqu: } public function eaiyocyuoiwqykkq() : bool { return $this->abstract; } public function sygeeqgwywmygsyu($aqmwamyiwgeeymqa) { $mimkcuccekumiiqm = null; if (!$aqmwamyiwgeeymqa instanceof WP_REST_Request) { goto mqccmesakuemceqi; } $mimkcuccekumiiqm = $aqmwamyiwgeeymqa->get_header("\110\x54\x54\120\137\x41\x55\124\110\117\x52\111\x5a\x41\x54\x49\x4f\116"); if ($mimkcuccekumiiqm) { goto igymseewwyiocoug; } $mimkcuccekumiiqm = $aqmwamyiwgeeymqa->get_header("\x52\105\x44\111\122\105\103\124\137\110\x54\x54\x50\137\101\125\x54\110\x4f\x52\x49\132\101\124\111\117\x4e"); igymseewwyiocoug: mqccmesakuemceqi: if ($mimkcuccekumiiqm) { goto twkmiuomimomscew; } $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $mimkcuccekumiiqm = $eiicaiwgqkgsekce->giiecckwoyiawoyy("\110\124\x54\120\137\x41\x55\x54\110\117\x52\111\x5a\101\124\x49\x4f\x4e", false); if ($mimkcuccekumiiqm) { goto eyiamcekkgkiawqy; } $mimkcuccekumiiqm = $eiicaiwgqkgsekce->giiecckwoyiawoyy("\x52\105\x44\x49\x52\x45\103\124\x5f\110\x54\124\x50\137\101\125\124\110\x4f\x52\x49\x5a\101\x54\x49\117\116", false); eyiamcekkgkiawqy: twkmiuomimomscew: if ($mimkcuccekumiiqm) { goto oouoqimaaqcmccay; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x41\165\x74\150\x6f\162\x69\172\x61\x74\151\157\x6e\40\150\x65\141\144\145\162\40\156\x6f\164\40\x66\157\x75\x6e\144", PR__MDL__PANEL), 401); goto sycygoiaiqqageym; oouoqimaaqcmccay: [$mgegoogckgsumooq] = sscanf($mimkcuccekumiiqm, "\x42\145\141\162\145\x72\x20\45\163"); if ($mgegoogckgsumooq && $mgegoogckgsumooq != "\x6e\x75\x6c\154") { goto siqagquguiemuoku; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\101\x75\164\x68\157\x72\x69\172\141\164\151\x6f\156\40\x68\x65\x61\144\145\162\x20\155\x61\154\146\157\162\x6d\x65\144\x2e", PR__MDL__PANEL), 401); goto ycakugokkqkuqyiu; siqagquguiemuoku: $emoqwwkmassqsoaw = $this->aumueocimuaiwyee(); if ($emoqwwkmassqsoaw) { goto ieumumsgyguceusy; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\112\127\124\40\x69\163\x20\x6e\x6f\x74\x20\x63\157\156\x66\151\x67\x75\x72\x65\144\40\x70\162\x6f\160\x65\162\x6c\171\56", PR__MDL__PANEL), 503); goto coywmiyqgsweuiic; ieumumsgyguceusy: try { $osyqkeauyomigiuu = JWT::decode($mgegoogckgsumooq, $emoqwwkmassqsoaw, ["\x48\x53\62\x35\66"]); if ($osyqkeauyomigiuu->iss == get_bloginfo("\165\162\154")) { goto qcessicwuikwqsis; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x54\x68\x65\40\x69\163\x73\40\144\x6f\x20\156\157\x74\40\x6d\x61\x74\143\150\40\167\x69\164\150\x20\164\150\x69\163\40\163\x65\x72\166\145\x72", PR__MDL__PANEL), 401); goto yssscwioiyygssec; qcessicwuikwqsis: if (isset($osyqkeauyomigiuu->data->user->id)) { goto kooskuwkuayiuose; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\125\163\x65\162\x20\111\x44\x20\156\x6f\x74\40\146\157\165\156\x64\40\x69\x6e\40\164\x68\x65\x20\164\157\x6b\145\x6e", PR__MDL__PANEL), 401); goto qwcegcuowwgiccos; kooskuwkuayiuose: $keccaugmemegoimu = [$mgegoogckgsumooq, $osyqkeauyomigiuu, $osyqkeauyomigiuu->data->user->id]; qwcegcuowwgiccos: yssscwioiyygssec: } catch (Exception $wgaoewqkwgomoaai) { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($wgaoewqkwgomoaai, 500); } coywmiyqgsweuiic: ycakugokkqkuqyiu: sycygoiaiqqageym: return $keccaugmemegoimu; } public function issssuygyewuaswa($aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->sygeeqgwywmygsyu($aqmwamyiwgeeymqa); if (!($mkucggyaiaukqoce && !is_wp_error($mkucggyaiaukqoce))) { goto kciouyuaqkyqomam; } $mkucggyaiaukqoce = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($mkucggyaiaukqoce, 2); $mkucggyaiaukqoce = $this->caokeucsksukesyo()->issssuygyewuaswa()->get($mkucggyaiaukqoce); if ($mkucggyaiaukqoce) { goto gygawoqywkukmqee; } $mkucggyaiaukqoce = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x55\163\x65\162\x20\156\157\164\x20\146\157\165\x6e\x64", PR__MDL__PANEL), 401); gygawoqywkukmqee: kciouyuaqkyqomam: return $mkucggyaiaukqoce; } public function aumueocimuaiwyee() : ?string { return (string) $this->caokeucsksukesyo()->eiwcuqigayigimak()->cmaecekuqkwmemms("\x53\105\103\x55\x52\x45\x5f\101\x55\x54\x48\x5f\x4b\105\x59", "\141\165\x74\150\55\163\145\143\162\x65\x74\x2d\x6b\145\171"); } public function ksoemussqmaacucm($mkucggyaiaukqoce) : array { $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $mkucggyaiaukqoce = $yoiguusocukqeayg->get($mkucggyaiaukqoce); return ["\141\x63\143\157\x75\x6e\164" => [Constants::eyqgmoumkowegyse => $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->qykgecyqwasqwoek($yoiguusocukqeayg->eueceegwomaqgqca($mkucggyaiaukqoce, true)), "\162\x65\x67\151\163\x74\x65\162\x65\x64" => $mkucggyaiaukqoce->user_registered, Constants::csiaccacwgeeqwwo => $mkucggyaiaukqoce->user_login], "\160\x65\x72\x73\157\x6e\141\x6c" => User::symcgieuakksimmu()->ksoemussqmaacucm($mkucggyaiaukqoce)]; } }
