<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             616132a077250             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Panel\REST; use Exception; use Firebase\JWT\JWT; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\ManipulateSetting; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\REST\RESTController; use WP_Error; use WP_REST_Request; use WP_User; abstract class Common extends RESTController { protected bool $abstract = false; public function __construct() { goto omugkkesagcyagmk; omugkkesagcyagmk: parent::__construct(); goto ygcsmkuycoagwyou; kqksuugcgsyeoayy: $this->namespace .= "\57\x70\x61\156\145\x6c"; goto iggyqogweyosuikc; ygcsmkuycoagwyou: if ($this->eaiyocyuoiwqykkq()) { goto mosqsmqimqgqoase; } goto kqksuugcgsyeoayy; iggyqogweyosuikc: mosqsmqimqgqoase: goto qqewoyookaskiuek; qqewoyookaskiuek: } public function eaiyocyuoiwqykkq() : bool { return $this->abstract; } public function sygeeqgwywmygsyu($aqmwamyiwgeeymqa) { goto syiqkaasoueowwui; mwsmsguqqkcwiiuk: soaccwqimeksgwiw: goto eeauyscekuckoues; scisgsyemmsekgos: $mimkcuccekumiiqm = ManipulateServer::giiecckwoyiawoyy("\110\x54\124\120\137\x41\x55\x54\x48\117\122\x49\x5a\x41\124\111\117\116", false); goto cewmoqyysgsmuiya; kqgcyoscsusgoaqi: $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\101\x75\x74\150\x6f\162\x69\x7a\141\x74\x69\x6f\x6e\40\x68\x65\x61\144\x65\x72\40\x6e\x6f\164\40\x66\x6f\165\156\144", PR__PKG__PANEL), 401); goto ueigkucgaucgeimc; wakmayaoqoskekqy: if ($mgegoogckgsumooq) { goto soaccwqimeksgwiw; } goto qmuwoecuacmkwgem; egyyiccaeeiooaua: if ($mimkcuccekumiiqm) { goto eegqyykygiccaoeo; } goto scisgsyemmsekgos; owmuceyswmgueasi: goto wiysogeqqwgioyka; goto mwsmsguqqkcwiiuk; ooeausyowguqicuo: qkcyqocqqwmqgqww: goto egyyiccaeeiooaua; wkeuuycukmuqiaom: [$mgegoogckgsumooq] = sscanf($mimkcuccekumiiqm, "\102\145\141\x72\x65\x72\40\x25\x73"); goto wakmayaoqoskekqy; omqiayeucoioqoao: miyqyeiwquwsacsm: goto ugqaaewwmkocwwgy; msemumccgceyugmg: $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\112\127\124\x20\x69\163\x20\x6e\157\164\x20\x63\x6f\156\146\x69\x67\x75\x72\x65\x64\x20\160\x72\x6f\160\x65\x72\154\x79\x2e", PR__PKG__PANEL), 503); goto wagqgeqymeqoeuyi; asiqwuoswmigcaki: wiysogeqqwgioyka: goto ciykoyeioqgyaeqo; ugqaaewwmkocwwgy: eegqyykygiccaoeo: goto wgewmqieuamsoayy; iwsuawwqomaowuii: try { goto suswcqoyyqkkquuo; iekumemscwieugqw: soqqemyioggmoakg: goto hoeeyiowekaeemko; hoeeyiowekaeemko: if (isset($osyqkeauyomigiuu->data->user->id)) { goto ywqgcegomwaiuquc; } goto kymkucucyeoeikim; uguigkcmukuouway: $keccaugmemegoimu = [$mgegoogckgsumooq, $osyqkeauyomigiuu, $osyqkeauyomigiuu->data->user->id]; goto uqqaiagaeqgqgaiy; eeqesooyqagwawae: if ($osyqkeauyomigiuu->iss == get_bloginfo("\165\x72\x6c")) { goto soqqemyioggmoakg; } goto oqugqwcyomiaaoqu; suswcqoyyqkkquuo: $osyqkeauyomigiuu = JWT::decode($mgegoogckgsumooq, $emoqwwkmassqsoaw, ["\110\123\62\65\66"]); goto eeqesooyqagwawae; foeeqckqsyockkak: goto acaqummmoyiemqss; goto iekumemscwieugqw; qicwaskssogcokgm: ywqgcegomwaiuquc: goto uguigkcmukuouway; uqqaiagaeqgqgaiy: wmmggowmigekyoso: goto esuiysskoweawsue; kymkucucyeoeikim: $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\125\x73\x65\x72\x20\111\104\x20\156\157\164\40\146\157\x75\156\144\x20\151\156\40\x74\150\145\40\164\157\x6b\x65\x6e", PR__PKG__PANEL), 401); goto usquiuuyiyqaeyiu; usquiuuyiyqaeyiu: goto wmmggowmigekyoso; goto qicwaskssogcokgm; esuiysskoweawsue: acaqummmoyiemqss: goto gaomwagkcciesyqy; oqugqwcyomiaaoqu: $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x54\150\145\40\x69\163\x73\x20\x64\157\x20\156\157\164\40\155\x61\x74\143\x68\40\x77\151\x74\150\x20\164\x68\151\163\x20\163\x65\162\166\145\162", PR__PKG__PANEL), 401); goto foeeqckqsyockkak; gaomwagkcciesyqy: } catch (Exception $wgaoewqkwgomoaai) { $keccaugmemegoimu = $this->oemauiimmycumcsk($wgaoewqkwgomoaai->sagusgigmkeysock(), 500); } goto wcugqegqsuuuwqao; qmuwoecuacmkwgem: $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x41\x75\x74\150\157\162\151\172\141\x74\151\x6f\x6e\40\x68\x65\x61\x64\145\162\x20\155\141\154\x66\157\x72\155\x65\x64\56", PR__PKG__PANEL), 401); goto owmuceyswmgueasi; wagqgeqymeqoeuyi: goto suqkuqygkkgwyaie; goto qoqskyuuwueqkquk; wgewmqieuamsoayy: if ($mimkcuccekumiiqm) { goto skkamseieeusycye; } goto kqgcyoscsusgoaqi; cewmoqyysgsmuiya: if ($mimkcuccekumiiqm) { goto miyqyeiwquwsacsm; } goto igooksugieceoege; ueigkucgaucgeimc: goto cgiscsqwwgqqaeqi; goto sggawugoykqcmsug; cmegwsegsosyqcai: if ($mimkcuccekumiiqm) { goto ssoucoucsgccekwe; } goto wmywuusgukmmaams; syiqkaasoueowwui: $mimkcuccekumiiqm = null; goto giaacoqqqsekcayy; wcugqegqsuuuwqao: suqkuqygkkgwyaie: goto asiqwuoswmigcaki; sggawugoykqcmsug: skkamseieeusycye: goto wkeuuycukmuqiaom; eogwckcymuugikuy: if ($emoqwwkmassqsoaw) { goto aegysmeecgcgayyw; } goto msemumccgceyugmg; wmywuusgukmmaams: $mimkcuccekumiiqm = $aqmwamyiwgeeymqa->get_header("\122\105\104\111\x52\105\103\124\137\x48\x54\124\120\x5f\x41\125\x54\x48\x4f\122\x49\132\101\x54\x49\x4f\x4e"); goto gkyawqqcmigqgaiq; ewymsmkkiksgwysk: $mimkcuccekumiiqm = $aqmwamyiwgeeymqa->get_header("\110\124\x54\120\137\x41\x55\x54\x48\117\122\x49\132\x41\124\111\x4f\116"); goto cmegwsegsosyqcai; ciykoyeioqgyaeqo: cgiscsqwwgqqaeqi: goto mqicocmqegwukkwg; giaacoqqqsekcayy: if (!$aqmwamyiwgeeymqa instanceof WP_REST_Request) { goto qkcyqocqqwmqgqww; } goto ewymsmkkiksgwysk; qoqskyuuwueqkquk: aegysmeecgcgayyw: goto iwsuawwqomaowuii; mqicocmqegwukkwg: return $keccaugmemegoimu; goto qgeugwymkkiacwoc; eeauyscekuckoues: $emoqwwkmassqsoaw = $this->aumueocimuaiwyee(); goto eogwckcymuugikuy; gkyawqqcmigqgaiq: ssoucoucsgccekwe: goto ooeausyowguqicuo; igooksugieceoege: $mimkcuccekumiiqm = ManipulateServer::giiecckwoyiawoyy("\122\105\x44\111\122\x45\103\x54\x5f\x48\124\124\x50\137\101\125\x54\110\117\122\111\x5a\101\x54\111\117\116", false); goto omqiayeucoioqoao; qgeugwymkkiacwoc: } public function issssuygyewuaswa($aqmwamyiwgeeymqa) { goto mugqyyeayeyggqqk; kqqiegkuqagcqsya: return $mkucggyaiaukqoce; goto ousiuuwgwkiyikyq; oomguqikqokqwgku: $mkucggyaiaukqoce = ManipulateArray::get($mkucggyaiaukqoce, 2); goto samwkqgwouggsguc; guykyqecgswcsmws: $mkucggyaiaukqoce = $this->oemauiimmycumcsk(__("\x55\163\x65\162\40\x6e\x6f\x74\40\146\x6f\x75\x6e\x64", PR__PKG__PANEL), 401); goto kkumywowcoycymeo; acsqgiuageaasiyy: if (!($mkucggyaiaukqoce && !is_wp_error($mkucggyaiaukqoce))) { goto ouamogymawucwswu; } goto oomguqikqokqwgku; wyuemgggaqogsmsq: if ($mkucggyaiaukqoce) { goto emmsycooskoqmgeg; } goto guykyqecgswcsmws; samwkqgwouggsguc: $mkucggyaiaukqoce = ManipulateUser::get($mkucggyaiaukqoce); goto wyuemgggaqogsmsq; kkumywowcoycymeo: emmsycooskoqmgeg: goto miweggwqeiaeweia; miweggwqeiaeweia: ouamogymawucwswu: goto kqqiegkuqagcqsya; mugqyyeayeyggqqk: $mkucggyaiaukqoce = $this->sygeeqgwywmygsyu($aqmwamyiwgeeymqa); goto acsqgiuageaasiyy; ousiuuwgwkiyikyq: } public function aumueocimuaiwyee() : ?string { return (string) ManipulateSetting::cmaecekuqkwmemms("\x53\105\103\x55\122\x45\x5f\x41\x55\124\x48\137\113\105\x59", "\x61\x75\164\150\55\163\145\x63\x72\x65\x74\x2d\153\x65\x79"); } public function ksoemussqmaacucm($mkucggyaiaukqoce) : array { $mkucggyaiaukqoce = ManipulateUser::get($mkucggyaiaukqoce); return ["\141\143\x63\157\x75\156\164" => ["\x75\x73\145\x72\156\x61\155\145" => $mkucggyaiaukqoce->user_login, "\162\x65\x67\x69\163\164\145\x72\x65\x64" => $mkucggyaiaukqoce->user_registered], "\x70\x65\x72\x73\x6f\x6e\x61\x6c" => ["\165\163\145\x72\137\x75\x72\x6c" => $mkucggyaiaukqoce->user_url, "\x6e\151\x63\153\156\141\155\145" => $mkucggyaiaukqoce->nickname, "\154\x61\x73\164\137\x6e\141\x6d\x65" => $mkucggyaiaukqoce->last_name, "\x75\x73\x65\162\x5f\x65\x6d\x61\151\x6c" => $mkucggyaiaukqoce->user_email, "\146\x69\x72\163\164\x5f\156\141\x6d\145" => $mkucggyaiaukqoce->first_name, "\x75\x73\x65\x72\137\x61\166\x61\x74\x61\x72" => ManipulateUser::quasyaqmmikeyoag($mkucggyaiaukqoce)]]; } }
